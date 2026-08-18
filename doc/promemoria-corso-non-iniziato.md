# Promemoria "corso non iniziato" (UPIA) — 2026-08-18

Autore: Carlo Comincini — Copyright Invisiblefarm s.r.l.

## Obiettivo
Chi ha accesso a un corso e non lo ha ancora aperto riceve un'email di sollecito dopo N giorni,
ripetuta ogni settimana finché non accede. Nell'email: nome utente, indicazioni sulla password
e link per reimpostarla. Vale per tutte le aziende e tutti i corsi (richiesta Carlo, 18/08/2026,
nata dal sollecito Cyber Security per Fondazione Colturi).

## Meccanismo nativo usato
- Task schedulato `\local_email_reports\task\course_not_started_task` (ogni notte alle 00:00).
- Si attiva **per corso**: IOMAD → "Gestisci impostazioni corso IOMAD" → "Giorni per email se non iniziato"
  (`mdl_iomad_courses.warnnotstarted`).
- Email: template `course_not_started_warning`; ripetizione impostata **per azienda** nel template
  (`mdl_email_template.repeatperiod`: 0 = una sola volta, 1 = giornaliera, 2 = settimanale, 3 = quindicinale, 4 = mensile;
  `repeatvalue` = numero massimo invii, 0 = illimitato). Il testo, se non personalizzato per azienda,
  è la stringa di lingua `course_not_started_warning_subject/_body` di `local_email` (IT nel repo).
- Il task manda anche una copia al supervisore dell'utente, se impostato nel profilo.

## Modifiche al fork (commit `1c76056`, ramo `allineamento-500-20260529`, dopo merge upstream 5.0.9)
1. `local/email_reports/classes/task/course_not_started_task.php`
   - `||` → `OR` nella SQL (su PostgreSQL `boolean || boolean` è un errore: il task falliva).
   - `$compuser` (mai definita) → `$notstarteduser` nei controlli di ripetizione.
   - Riferimento temporale per la ripetizione = `timeenrolled` se presente, altrimenti `licenseallocated`
     (prima era `timeenrolled` anche quando NULL → nessun throttling per gli utenti solo allocati).
   - **Definizione di "non iniziato" estesa**: nessuna riga in `user_lastaccess` per (utente, corso) E il corso è
     ancora raggiungibile (iscrizione attiva e già iniziata, oppure allocazione licenza non usata e non scaduta).
     Copre le **licenze istantanee**, per le quali il tracciamento IOMAD valorizza `timestarted` all'assegnazione
     (esempio: cyber BS Solidale, 216 assegnati, 84 accessi reali, 0 "non iniziati" per il task originale).
     Esclude righe `coursecleared=1`, completate, iscrizioni future/scadute, licenze scadute.
   Segnalazione upstream: https://github.com/iomad/iomad/issues/2786 (bug `||` e `$compuser`; l'estensione è una scelta del fork).
2. `local/email/lib/vars.php`: nuova variabile `{PasswordResetURL}` = `wwwroot/login/forgot_password.php`.
   Non si usa `{SiteURL}` perché gli hostname aziendali (formazione.fondazione-colturi.it ecc.) reindirizzano
   ogni percorso alla pagina di login (303) e il link di reset non arriverebbe a destinazione.
3. `local/email/lang/it/local_email.php` (+ copia in `iomad_it_translations/`): nuovo oggetto/corpo del promemoria
   con `{User_Username}`, indicazioni password e `{PasswordResetURL}`. La stringa EN upstream non è stata toccata
   (tutti gli utenti UPIA sono `lang=it`).

## Configurazione in produzione (dopo il deploy)
- Copie di sicurezza: `CREATE TABLE mdl_iomad_courses_20260818 AS SELECT * FROM mdl_iomad_courses;`
  e `CREATE TABLE mdl_email_template_20260818 AS SELECT * FROM mdl_email_template;`
- `UPDATE mdl_iomad_courses SET warnnotstarted = 7;` (tutti i corsi; N = 7 giorni)
- `UPDATE mdl_email_template SET repeatperiod = 2, repeatvalue = 0 WHERE name = 'course_not_started_warning';`
  (settimanale, illimitato, tutte le aziende; le aziende create in futuro nascono con repeatperiod=0 = invio singolo:
  da impostare a mano nel template dell'azienda).
- Prima esecuzione stimata (18/08/2026, soglia 7 gg): ~489 email a ~350 persone
  (BS Solidale 290/163, FR 66/63, Casa Industria 59/59, Colturi 53/48 di cui 44 cyber, altre 21).
- Per fermare tutto: rimettere `warnnotstarted = 0` sui corsi, oppure disabilitare il template per l'azienda.

## Collaudo locale (Docker, 5.0.9)
Corso 5, 5 utenti: 2 iscritti "istantanei" senza accesso + 3 solo allocati → 5 email accodate con testo IT corretto;
seconda esecuzione 0 duplicati; ripetizione settimanale: reinvio dopo 8 giorni sì, dopo 2 giorni no;
utente che accede al corso → escluso dal giro successivo.
