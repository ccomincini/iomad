<?php
// This file is part of Moodle - http://moodle.org/
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
 * @package   block_iomad_microlearning
 * @copyright 2021 Derick Turner
 * @author    Derick Turner
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['actions'] = 'Azioni';
$string['active'] = 'Attivo';
$string['active_help'] = 'Se il thread non è attivo, non verranno inviati messaggi agli utenti e non sarà visibile nella loro dashboard';
$string['blocktitle'] = 'Thread microlearning';
$string['bulkassigngroups'] = 'Assegna gruppi thread tramite CSV';
$string['clonethread'] = 'Clona thread';
$string['clonethreadcheckfull'] = 'Sei sicuro di voler clonare il thread {$a} e tutti i nugget associati in un nuovo thread? Questo non copia gli utenti attualmente assegnati.';
$string['copy'] = ' (copia)';
$string['cmid'] = 'ID modulo corso';
$string['cmid_help'] = 'ID del modulo corso in questo campo per la sezione corso univoca. Devi definire questo o il valore ID sezione.';
$string['cmidalreadyinuse'] = 'ID modulo corso già in uso';
$string['company_threads_for'] = 'Thread microlearning per l\'azienda {$a}';
$string['company_users_for'] = 'Utenti per il thread microlearning {$a}';
$string['creategroup'] = 'Crea nuovo gruppo';
$string['crontask'] = 'Cron microlearning IOMAD';
$string['defaultdue'] = 'Scadenza dopo';
$string['defaultdue_help'] = 'Questo è il tempo dopo il quale il nugget programmato diventa scaduto. Può essere sovrascritto modificando la programmazione del thread.';
$string['deletegroup'] = 'Elimina gruppo {$a}';
$string['deletegroupcheckfull'] = 'Vuoi eliminare il gruppo {$a}? Questo rimuoverà anche gli utenti associati a questo gruppo.';
$string['deletenugget'] = 'Elimina nugget';
$string['deletenuggetcheckfull'] = 'Sei sicuro di voler eliminare il nugget {$a}';
$string['deletethread'] = 'Elimina thread';
$string['deletethreadcheckfull'] = 'Sei sicuro di voler eliminare completamente il thread {$a} e tutti i nugget e utenti associati';
$string['duedate'] = 'Data scadenza';
$string['duedatebeforescheduledate'] = 'La data di scadenza è prima della data programmata';
$string['editgroup'] = 'Modifica gruppo';
$string['editnugget'] = 'Modifica nugget';
$string['editthread'] = 'Modifica thread';
$string['erroredgroups'] = 'Assegnazioni gruppo con errori';
$string['group'] = 'Gruppo thread';
$string['group_help'] = 'Questo è il gruppo all\'interno del thread microlearning a cui l\'utente sarà assegnato';
$string['groupcreatedok'] = 'Gruppo creato con successo';
$string['groupdeletedok'] = 'Gruppo eliminato con successo';
$string['groupupdatedok'] = 'Gruppo aggiornato con successo';
$string['halt_until_fulfilled'] = 'Blocca messaggi fino al completamento';
$string['halt_until_fulfilled_help'] = 'Imposta su vero se desideri bloccare l\'invio di messaggi fino al completamento del nugget precedente.';
$string['importgroupsfromfile'] = 'Importa assegnazioni gruppi utenti thread';
$string['importthread'] = 'Importa thread';
$string['importthreadcheckfull'] = 'Sei sicuro di voler importare il thread {$a} e tutti i nugget associati in un nuovo thread in questa azienda? Questo non copia gli utenti attualmente assegnati.';
$string['importusergroups'] = 'Importa gruppi utenti thread';
$string['incorrecturl'] = 'L\'URL specificato non è all\'interno di questo sito';
$string['interval'] = 'Intervallo di rilascio';
$string['interval_help'] = 'Questo è l\'intervallo predefinito tra le date programmate per ogni nugget';
$string['ibnalidthreadid'] = 'Il thread che stai cercando non esiste.';
$string['iomad_microlearning:addinstance'] = 'Aggiungi un blocco microlearning';
$string['iomad_microlearning:assign_threads'] = 'Assegna un utente a un thread microlearning';
$string['iomad_microlearning:importgroupfromcsv'] = 'Assegna gruppi thread agli utenti tramite CSV';
$string['iomad_microlearning:manage_groups'] = 'Gestisci gruppi thread';
$string['iomad_microlearning:edit_nuggets'] = 'Modifica nugget microlearning';
$string['iomad_microlearning:edit_threads'] = 'Modifica thread microlearning';
$string['iomad_microlearning:import_threads'] = 'Importa thread microlearning';
$string['iomad_microlearning:myaddinstance'] = 'Aggiungi un blocco microlearning alla mia dashboard';
$string['iomad_microlearning:thread_clone'] = 'Clona un thread microlearning';
$string['iomad_microlearning:thread_delete'] = 'Elimina un thread microlearning';
$string['iomad_microlearning:thread_view'] = 'Visualizza thread microlearning';
$string['iomad_microlearning:view'] = 'Visualizza microlearning IOMAD';
$string['learninggroups'] = 'Gestisci gruppi thread';
$string['learningnuggets'] = 'Gestisci nugget';
$string['learningschedules'] = 'Gestisci programmazioni';
$string['learningusers'] = 'Gestisci utenti thread';
$string['message_preset'] = 'Invia messaggio dopo';
$string['message_preset_help'] = 'Inserisci un ritardo temporale usando le unità fornite dopo cui inviare il messaggio.';
$string['message_time'] = 'Orario invio messaggio';
$string['message_time_help'] = 'Inserisci un orario programmato in cui il messaggio sarà inviato.';
$string['microlearning'] = 'Microlearning';
$string['microlearninglinkexpires'] = 'Numero di giorni dopo cui scade il link email';
$string['microlearninglinkexpires_help'] = 'Questo è il numero di giorni dopo il quale il link microlearning inviato via email all\'utente scadrà e l\'utente dovrà accedere usando il processo normale';
$string['missingname'] = 'Nome nugget mancante';
$string['missingsectionorcmid'] = 'Inserisci una sezione corso o un ID modulo corso';
$string['namehelp'] = 'nome gruppo';
$string['namehelp_help'] = 'Questo è il nome del gruppo usato all\'interno del thread microlearning. I nomi sono univoci all\'interno dei thread ma possono essere riutilizzati in thread diversi';
$string['nameinuse'] = 'Nome già in uso';
$string['nolearningthreads'] = 'Non ci sono thread microlearning';
$string['nonuggets'] = 'Non ci sono nugget creati per questo thread';
$string['nugget'] = 'Nugget microlearning';
$string['nuggetcreated'] = 'Nugget microlearning creato';
$string['nuggetcreatedok'] = 'Nugget creato OK';
$string['nuggetcupdatedok'] = 'Nugget aggiornato OK';
$string['nuggetdeleted'] = 'Nugget microlearning eliminato';
$string['nuggetmoved'] = 'Ordine nugget microlearning modificato';
$string['nuggetname'] = 'Nome nugget';
$string['nuggetname_help'] = 'Scegli un nome univoco per il nugget di apprendimento';
$string['nuggetorder'] = 'Ordine';
$string['nuggets'] = 'Nugget microlearning';
$string['nuggetupdated'] = 'Nugget microlearning aggiornato';
$string['pluginname'] = 'Thread microlearning IOMAD';
$string['privacy:metadata'] = 'Il blocco Microlearning IOMAD mostra solo dati memorizzati in altre posizioni.';
$string['privacy:metadata:microlearning_thread_user'] = 'Informazioni dati utente thread microlearning. Nessun dato personale viene conservato.';
$string['privacy:metadata:microlearning_thread_user:id'] = 'ID record thread microlearning';
$string['privacy:metadata:microlearning_thread_user:userid'] = 'ID utente thread microlearning';
$string['privacy:metadata:microlearning_thread_user:threadid'] = 'ID thread microlearning';
$string['privacy:metadata:microlearning_thread_user:nuggetid'] = 'ID nugget thread microlearning';
$string['privacy:metadata:microlearning_thread_user:groupid'] = 'ID gruppo thread microlearning';
$string['privacy:metadata:microlearning_thread_user:schedule_date'] = 'Data programmata thread microlearning';
$string['privacy:metadata:microlearning_thread_user:due_date'] = 'Data scadenza thread microlearning';
$string['privacy:metadata:microlearning_thread_user:reminder1_date'] = 'Data primo promemoria thread microlearning';
$string['privacy:metadata:microlearning_thread_user:reminder2_date'] = 'Data secondo promemoria thread microlearning';
$string['privacy:metadata:microlearning_thread_user:messagetime'] = 'Orario invio messaggi thread microlearning';
$string['privacy:metadata:microlearning_thread_user:message_delivered'] = 'Indicatore messaggio consegnato thread microlearning';
$string['privacy:metadata:microlearning_thread_user:reminder1_delivered'] = 'Indicatore primo promemoria consegnato thread microlearning';
$string['privacy:metadata:microlearning_thread_user:reminder2_delivered'] = 'Indicatore secondo promemoria consegnato thread microlearning';
$string['privacy:metadata:microlearning_thread_user:timecompleted'] = 'Ora completamento nugget thread microlearning';
$string['privacy:metadata:microlearning_thread_user:accesskey'] = 'Chiave accesso email thread microlearning';
$string['privacy:metadata:microlearning_thread_user:timecreated'] = 'Ora creazione thread microlearning';
$string['reminder1'] = 'Primo promemoria';
$string['reminder1_help'] = 'Tempo dopo il quale verrà inviato il primo promemoria se il nugget non è contrassegnato come completato.';
$string['reminder2'] = 'Secondo promemoria';
$string['reminder2_help'] = 'Tempo dopo il quale verrà inviato il secondo promemoria se il nugget non è contrassegnato come completato.';
$string['reminderdatebeforescheduledate'] = 'La data del promemoria è prima della data programmata';
$string['reminderdatesoutoforder'] = 'Le date dei promemoria non sono in ordine';
$string['resetschedule'] = 'Reimposta programmazione';
$string['resetschedulecheckfull'] = 'Vuoi reimpostare completamente la programmazione per {$a}?';
$string['scheduledate'] = 'Data programmata';
$string['scheduleoutoforder'] = 'Le date della programmazione non sono in ordine';
$string['scheduletype'] = 'Tipo programmazione';
$string['scheduletype_help'] = 'Questo controlla quale data di inizio riceverà l\'utente assegnato. Standard significa che vengono aggiunti secondo la programmazione definita. Inizia oggi significa che saranno programmati per iniziare il thread oggi. Inizia al prossimo programmato inizierà l\'utente alla prossima data programmata definita dal thread corrente.';
$string['sectionid'] = 'ID sezione corso';
$string['sectionid_help'] = 'Inserisci l\'ID della sezione corso in questo campo per la sezione corso univoca. Devi definire questo o il valore CMID.';
$string['sectionidalreadyinuse'] = 'ID sezione già in uso';
$string['selectthread'] = 'Seleziona thread microlearning';
$string['send_message'] = 'Invia messaggio';
$string['send_message_help'] = 'Imposta su vero se vuoi che vengano inviate email agli utenti per i nugget programmati o i promemoria di completamento.';
$string['send_reminder'] = 'Invia promemoria';
$string['send_reminder_help'] = 'Imposta su vero se desideri inviare email di promemoria agli utenti assegnati.';
$string['standard'] = 'Standard';
$string['startdate'] = 'Data inizio';
$string['startdate_help'] = 'La data da cui sarà programmato il thread microlearning';
$string['startnextscheduled'] = 'Inizia il prossimo giorno programmato';
$string['starttoday'] = 'Inizia oggi';
$string['threadcreated'] = 'Thread microlearning creato';
$string['threadcreatedok'] = 'Thread creato OK';
$string['threaddeleted'] = 'Thread microlearning eliminato';
$string['threadname'] = 'Nome thread';
$string['threadname_help'] = 'Il nome del thread microlearning';
$string['threads'] = 'Thread microlearning';
$string['threadschedule'] = 'Programmazione thread';
$string['threadscheduleresetok'] = 'Programmazione thread reimpostata OK';
$string['threadscheduleupdatedok'] = 'Programmazione thread aggiornata OK';
$string['threadscheduleupdated'] = 'Programmazione thread microlearning aggiornata';
$string['threadupdated'] = 'Thread microlearning aggiornato';
$string['threadupdatedok'] = 'Thread aggiornato OK';
$string['timecreated'] = 'Data creazione';
$string['updown'] = 'Su/Giù';
$string['uploadgroupresult'] = 'Risultato caricamento gruppi';
$string['userassigned'] = 'Utente assegnato';
$string['userunassigned'] = 'Utente rimosso';
$string['url'] = 'URL';
$string['url_help'] = 'Specifica invece un URL del sito';
$string['microllinkexpires'] = 'Scadenza link email microlearning';
$string['microllinkexpires_help'] = 'Questo è il periodo di tempo dopo il quale il link inviato via email non farà più accedere automaticamente l\'utente.';
