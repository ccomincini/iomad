<?php
// This file is part of the IOMAD Certificate module for Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'mod_iomadcertificate', language 'it'
 *
 * @package   mod_iomadcertificate
 * @copyright 2021 Derick Turner
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addlinklabel'] = 'Aggiungi un\'altra opzione di attività collegata';
$string['addlinktitle'] = 'Clicca per aggiungere un\'altra opzione di attività collegata';
$string['areaintro'] = 'Introduzione certificato';
$string['awarded'] = 'Rilasciato';
$string['awardedto'] = 'Rilasciato a';
$string['back'] = 'Indietro';
$string['border'] = 'Bordo';
$string['borderblack'] = 'Nero';
$string['borderblue'] = 'Blu';
$string['borderbrown'] = 'Marrone';
$string['bordercolor'] = 'Linee del bordo';
$string['bordercolor_help'] = 'Poiché le immagini possono aumentare considerevolmente la dimensione del file PDF, puoi scegliere di stampare un bordo di linee invece di usare un\'immagine di bordo (assicurati che l\'opzione \'Immagine bordo\' sia impostata su No). L\'opzione \'Linee del bordo\' stamperà un bordo di tre linee di spessori variabili nel colore scelto.';
$string['bordergreen'] = 'Verde';
$string['borderlines'] = 'Linee';
$string['borderstyle'] = 'Immagine bordo';
$string['borderstyle_help'] = 'L\'opzione \'Immagine bordo\' ti permette di scegliere un\'immagine di bordo dalla cartella certificate/pix/borders. Seleziona l\'immagine del bordo che desideri attorno ai bordi del certificato oppure seleziona \'nessun bordo\'.';
$string['iomadcertificate'] = 'Verifica per codice certificato:';
$string['iomadcertificate:addinstance'] = 'Aggiungi un\'istanza certificato';
$string['iomadcertificate:manage'] = 'Gestisci un\'istanza certificato';
$string['iomadcertificate:printteacher'] = 'Essere elencato come docente sul certificato se l\'impostazione stampa docente è attiva';
$string['iomadcertificate:student'] = 'Ottieni un certificato';
$string['iomadcertificate:view'] = 'Visualizza un certificato';
$string['iomadcertificate:viewother'] = 'Visualizza il certificato di un altro utente';
$string['iomadcertificatename'] = 'Nome certificato';
$string['iomadcertificatereport'] = 'Report certificati';
$string['iomadcertificatesfor'] = 'Certificati per';
$string['iomadcertificatetype'] = 'Tipo di certificato';
$string['iomadcertificatetype_help'] = 'Qui determini il layout del certificato. La cartella del tipo di certificato include quattro certificati predefiniti:
A4 Incorporato stampa su carta formato A4 con font incorporato.
A4 Non incorporato stampa su carta formato A4 senza font incorporati.
Letter Incorporato stampa su carta formato Letter con font incorporato.
Letter Non incorporato stampa su carta formato Letter senza font incorporati.

I tipi non incorporati utilizzano i font Helvetica e Times. Se ritieni che i tuoi utenti non abbiano questi font sul loro computer, o se la tua lingua utilizza caratteri o simboli non supportati dai font Helvetica e Times, allora scegli un tipo incorporato. I tipi incorporati utilizzano i font Dejavusans e Dejavuserif. Questo renderà i file PDF piuttosto grandi; non è consigliato utilizzare un tipo incorporato a meno che non sia l\'unica opzione.

Nuove cartelle di tipo possono essere aggiunte alla cartella certificate/type. Il nome della cartella e qualsiasi nuova stringa di lingua per il nuovo tipo devono essere aggiunti al file di lingua del certificato.';
$string['certify'] = 'Si certifica che';
$string['code'] = 'Codice';
$string['completiondate'] = 'Completamento corso';
$string['course'] = 'Per';
$string['coursegrade'] = 'Valutazione corso';
$string['coursename'] = 'Corso';
$string['coursetimereq'] = 'Minuti richiesti nel corso';
$string['coursetimereq_help'] = 'Inserisci qui il tempo minimo, in minuti, che uno studente deve essere connesso al corso prima di poter ottenere il certificato.';
$string['credithours'] = 'Crediti formativi';
$string['customtext'] = 'Testo personalizzato';
$string['customtext_help'] = 'Se vuoi che il certificato stampi nomi diversi per il docente rispetto a quelli assegnati con il ruolo di docente, non selezionare Stampa docente o qualsiasi immagine di firma tranne l\'immagine della linea. Inserisci i nomi dei docenti in questa casella di testo come desideri che appaiano. Per impostazione predefinita, questo testo è posizionato in basso a sinistra del certificato. Sono disponibili i seguenti tag HTML: &lt;br&gt;, &lt;p&gt;, &lt;b&gt;, &lt;i&gt;, &lt;u&gt;, &lt;img&gt; (src e width (o height) sono obbligatori), &lt;a&gt; (href è obbligatorio), &lt;font&gt; (gli attributi possibili sono: colour (codice colore esadecimale), face (arial, times, courier, helvetica, symbol)).';
$string['datefmt'] = 'Formato data';
$string['datefmt_help'] = 'Scegli un formato data da stampare sul certificato. Oppure scegli l\'ultima opzione per stampare la data nel formato della lingua scelta dall\'utente.';
$string['datehelp'] = 'Data';
$string['deletissuediomadcertificates'] = 'Elimina certificati rilasciati';
$string['delivery'] = 'Consegna';
$string['delivery_help'] = 'Scegli qui come vuoi che i tuoi studenti ricevano il certificato.
Apri nel browser: Apre il certificato in una nuova finestra del browser.
Forza download: Apre la finestra di download file del browser.
Email certificato: Scegliendo questa opzione il certificato viene inviato allo studente come allegato email.
Dopo che un utente riceve il certificato, se clicca sul link del certificato dalla homepage del corso, vedrà la data in cui ha ricevuto il certificato e potrà rivedere il certificato ricevuto.';
$string['designoptions'] = 'Opzioni di design';
$string['download'] = 'Forza download';
$string['emailiomadcertificate'] = 'Email';
$string['emailothers'] = 'Invia email ad altri';
$string['emailothers_help'] = 'Inserisci qui gli indirizzi email, separati da virgola, di coloro che devono essere avvisati con un\'email quando gli studenti ricevono un certificato.';
$string['emailstudenttext'] = 'In allegato il tuo certificato per {$a->course}.';
$string['emailteachers'] = 'Invia email ai docenti';
$string['emailteachers_help'] = 'Se abilitato, i docenti vengono avvisati con un\'email quando gli studenti ricevono un certificato.';
$string['emailteachermail'] = '
{$a->student} ha ricevuto il suo certificato: \'{$a->certificate}\'
per {$a->course}.

Puoi rivedere il certificato qui:

    {$a->url}';
$string['emailteachermailhtml'] = '
{$a->student} ha ricevuto il suo certificato: \'<i>{$a->certificate}</i>\'
per {$a->course}.

Puoi rivedere il certificato qui:

    <a href="{$a->url}">Report certificati</a>';
$string['entercode'] = 'Inserisci il codice del certificato per verificare:';
$string['fontsans'] = 'Famiglia font sans-serif';
$string['fontsans_desc'] = 'Famiglia font sans-serif per certificati con font incorporati';
$string['fontserif'] = 'Famiglia font serif';
$string['fontserif_desc'] = 'Famiglia font serif per certificati con font incorporati';
$string['getiomadcertificate'] = 'Ottieni il tuo certificato';
$string['grade'] = 'Valutazione';
$string['gradedate'] = 'Data valutazione';
$string['gradefmt'] = 'Formato valutazione';
$string['gradefmt_help'] = 'Ci sono tre formati disponibili se scegli di stampare una valutazione sul certificato:

Valutazione percentuale: Stampa la valutazione come percentuale.
Valutazione punti: Stampa il valore in punti della valutazione.
Valutazione letterale: Stampa la valutazione percentuale come lettera.';
$string['gradeletter'] = 'Valutazione letterale';
$string['gradepercent'] = 'Valutazione percentuale';
$string['gradepoints'] = 'Valutazione punti';
$string['imagetype'] = 'Tipo di immagine';
$string['incompletemessage'] = 'Per scaricare il tuo certificato, devi prima completare tutte le attività richieste. Torna al corso per completare il tuo lavoro.';
$string['intro'] = 'Introduzione';
$string['issueoptions'] = 'Opzioni di rilascio';
$string['issued'] = 'Rilasciato';
$string['issueddate'] = 'Data di rilascio';
$string['landscape'] = 'Orizzontale';
$string['lastviewed'] = 'Hai ricevuto questo certificato l\'ultima volta il:';
$string['letter'] = 'Letter';
$string['lockingoptions'] = 'Opzioni di blocco';
$string['modulename'] = 'Certificato IOMAD';
$string['modulename_help'] = 'Questo modulo permette la generazione dinamica di certificati basati su condizioni predefinite impostate dal docente.';
$string['modulename_link'] = 'Certificate_module';
$string['modulenameplural'] = 'Certificati IOMAD';
$string['myiomadcertificates'] = 'I miei certificati';
$string['noiomadcertificates'] = 'Non ci sono certificati';
$string['noiomadcertificatesissued'] = 'Non ci sono certificati rilasciati';
$string['noiomadcertificatesreceived'] = 'non ha ricevuto alcun certificato del corso.';
$string['nofileselected'] = 'Devi scegliere un file da caricare!';
$string['nogrades'] = 'Nessuna valutazione disponibile';
$string['notapplicable'] = 'N/D';
$string['notfound'] = 'Il numero del certificato non può essere verificato.';
$string['notissued'] = 'Non rilasciato';
$string['notissuedyet'] = 'Non ancora rilasciato';
$string['notreceived'] = 'Non hai ricevuto questo certificato';
$string['openbrowser'] = 'Apri in nuova finestra';
$string['opendownload'] = 'Clicca il pulsante sotto per salvare il tuo certificato sul computer.';
$string['openemail'] = 'Clicca il pulsante sotto, e il tuo certificato ti verrà inviato come allegato email.';
$string['openwindow'] = 'Clicca il pulsante sotto per aprire il tuo certificato in una nuova finestra del browser.';
$string['or'] = 'O';
$string['orientation'] = 'Orientamento';
$string['orientation_help'] = 'Scegli se vuoi che il tuo certificato sia orientato in verticale o orizzontale.';
$string['pluginadministration'] = 'Amministrazione certificato IOMAD';
$string['pluginname'] = 'Certificato IOMAD';
$string['portrait'] = 'Verticale';
$string['printdate'] = 'Stampa data';
$string['printdate_help'] = 'Questa è la data che verrà stampata sul certificato se viene selezionata una data di stampa. Se viene selezionata la data di completamento del corso ma lo studente non ha completato il corso, verrà stampata la data in cui il certificato è stato ricevuto. Puoi anche scegliere di stampare la data in base a quando un\'attività è stata valutata. Se un certificato viene rilasciato prima che quell\'attività sia valutata, verrà stampata la data di ricezione.';
$string['printerfriendly'] = 'Pagina stampabile';
$string['printhours'] = 'Stampa crediti formativi';
$string['printhours_help'] = 'Inserisci qui il numero di crediti formativi da stampare sul certificato.';
$string['printgrade'] = 'Stampa valutazione';
$string['printgrade_help'] = 'Puoi scegliere qualsiasi elemento di valutazione disponibile dal registro valutazioni per stampare la valutazione ricevuta dall\'utente per quell\'elemento sul certificato. Gli elementi di valutazione sono elencati nell\'ordine in cui appaiono nel registro valutazioni. Scegli il formato della valutazione sotto.';
$string['printnumber'] = 'Stampa codice';
$string['printnumber_help'] = 'Un codice univoco di 10 cifre composto da lettere e numeri casuali può essere stampato sul certificato. Questo numero può quindi essere verificato confrontandolo con il numero di codice visualizzato nel report dei certificati.';
$string['printoutcome'] = 'Stampa obiettivo';
$string['printoutcome_help'] = 'Puoi scegliere qualsiasi obiettivo del corso per stampare il nome dell\'obiettivo e l\'obiettivo raggiunto dall\'utente sul certificato. Un esempio potrebbe essere \'Obiettivo compito: Competente\'.';
$string['printseal'] = 'Immagine sigillo o logo';
$string['printseal_help'] = 'Questa opzione ti permette di selezionare un sigillo o logo da stampare sul certificato dalla cartella certificate/pix/seals. Per impostazione predefinita, questa immagine è posizionata nell\'angolo in basso a destra del certificato.';
$string['printsignature'] = 'Immagine firma';
$string['printsignature_help'] = 'Questa opzione ti permette di stampare un\'immagine di firma dalla cartella certificate/pix/signatures. Puoi stampare una rappresentazione grafica di una firma o stampare una linea per una firma manoscritta. Per impostazione predefinita, questa immagine è posizionata in basso a sinistra del certificato.';
$string['printteacher'] = 'Stampa nome/i docente/i';
$string['printteacher_help'] = 'Per stampare il nome del docente sul certificato, imposta il ruolo di docente a livello di modulo. Fai questo se, ad esempio, hai più di un docente per il corso o più di un certificato nel corso e vuoi stampare nomi di docenti diversi su ogni certificato. Clicca per modificare il certificato, poi clicca sulla scheda \'Ruoli assegnati localmente\'. Quindi assegna il ruolo di docente (docente con permessi di modifica) al certificato (non devono ESSERE un docente nel corso - puoi assegnare quel ruolo a chiunque). Quei nomi verranno stampati sul certificato per il docente.';
$string['printwmark'] = 'Immagine filigrana';
$string['printwmark_help'] = 'Un\'immagine filigrana può essere posizionata sullo sfondo del certificato. Potrebbe essere un logo, un sigillo, uno stemma, una scritta, o qualsiasi cosa tu voglia usare come sfondo grafico.';
$string['receivedcerts'] = 'Certificati ricevuti';
$string['receiveddate'] = 'Data di ricezione';
$string['removecert'] = 'Certificati rilasciati rimossi';
$string['report'] = 'Report';
$string['reportcert'] = 'Report certificati';
$string['reportcert_help'] = 'Se scegli sì qui, la data di ricezione di questo certificato, il numero di codice e il nome del corso verranno mostrati nei report dei certificati utente. Se scegli di stampare una valutazione su questo certificato, anche quella valutazione verrà mostrata nel report del certificato.';
$string['requiredtimenotmet'] = 'Devi trascorrere almeno {$a->requiredtime} minuti nel corso prima di poter accedere a questo certificato';
$string['requiredtimenotvalid'] = 'Il tempo richiesto deve essere un numero valido maggiore di 0';
$string['reviewiomadcertificate'] = 'Rivedi il tuo certificato';
$string['savecert'] = 'Salva certificati';
$string['savecert_help'] = 'Se scegli questa opzione, una copia del file PDF del certificato di ogni utente verrà salvata nella directory moodledata. Un link al certificato salvato di ogni utente verrà visualizzato nel report del certificato.';
$string['seal'] = 'Sigillo';
$string['sigline'] = 'linea';
$string['signature'] = 'Firma';
$string['statement'] = 'ha completato il corso';
$string['summaryofattempts'] = 'Riepilogo dei certificati ricevuti in precedenza';
$string['textoptions'] = 'Opzioni testo';
$string['title'] = 'CERTIFICATO DI COMPLETAMENTO';
$string['to'] = 'Rilasciato a';
$string['typeA4_embedded'] = 'A4 Incorporato';
$string['typeA4_non_embedded'] = 'A4 Non incorporato';
$string['typeletter_embedded'] = 'Letter Incorporato';
$string['typeletter_non_embedded'] = 'Letter Non incorporato';
$string['unsupportedfiletype'] = 'Il file deve essere jpeg o png';
$string['uploadimage'] = 'Carica immagine';
$string['uploadimagedesc'] = 'Questo pulsante ti porterà a una nuova schermata dove potrai caricare le immagini';
$string['userdateformat'] = 'Formato data della lingua dell\'utente';
$string['validate'] = 'Verifica';
$string['verifyiomadcertificate'] = 'Verifica certificato';
$string['viewiomadcertificateviews'] = 'Visualizza {$a} certificati rilasciati';
$string['viewed'] = 'Hai ricevuto questo certificato il:';
$string['viewtranscript'] = 'Visualizza certificati';
$string['watermark'] = 'Filigrana';
$string['companycertify'] = 'Questo certificato di completamento attesta che';
$string['companydetails'] = 'ha completato con successo il programma di formazione online intitolato';
$string['companyscore'] = 'con un punteggio complessivo di {$a}';
$string['companydate'] = 'il {$a}';
$string['companydatecap'] = 'Il {$a}';
