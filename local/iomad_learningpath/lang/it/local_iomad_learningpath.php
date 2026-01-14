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
 * Strings for component 'local_iomad_learningpath', language 'it'
 *
 * @package   local_iomad_learningpath
 * @copyright 2021 Derick Turner
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Percorsi formativi IOMAD';
$string['iomad_learningpath:manage'] = 'Gestisci percorsi formativi IOMAD';
$string['iomad_learningpath:view'] = 'Visualizza percorsi formativi IOMAD';
$string['iomad_learningpath:assign'] = 'Assegna percorsi formativi';

// Learning path management
$string['learningpath'] = 'Percorso formativo';
$string['learningpaths'] = 'Percorsi formativi';
$string['learningpathname'] = 'Nome percorso formativo';
$string['learningpathdescription'] = 'Descrizione percorso formativo';
$string['learningpathimage'] = 'Immagine percorso formativo';
$string['createlearningpath'] = 'Crea percorso formativo';
$string['editlearningpath'] = 'Modifica percorso formativo';
$string['deletelearningpath'] = 'Elimina percorso formativo';
$string['duplicatelearningpath'] = 'Duplica percorso formativo';
$string['learningpathcreated'] = 'Percorso formativo creato';
$string['learningpathupdated'] = 'Percorso formativo aggiornato';
$string['learningpathdeleted'] = 'Percorso formativo eliminato';
$string['learningpathduplicated'] = 'Percorso formativo duplicato';
$string['learningpathdeleteconfirm'] = 'Sei sicuro di voler eliminare il percorso formativo \'{$a}\'?';
$string['learningpathslist'] = 'Elenco percorsi formativi';
$string['nolearningpaths'] = 'Nessun percorso formativo';
$string['selectlearningpath'] = 'Seleziona percorso formativo';
$string['selectalearningpath'] = 'Seleziona un percorso formativo';
$string['managelearningpaths'] = 'Gestisci percorsi formativi';
$string['viewlearningpath'] = 'Visualizza percorso formativo';
$string['learningpathdetails'] = 'Dettagli percorso formativo';

// Learning path settings
$string['learningpathsettings'] = 'Impostazioni percorso formativo';
$string['learningpathactive'] = 'Percorso attivo';
$string['learningpathinactive'] = 'Percorso inattivo';
$string['enablelearningpath'] = 'Abilita percorso';
$string['disablelearningpath'] = 'Disabilita percorso';
$string['learningpathorder'] = 'Ordine percorso';
$string['learningpathvisibility'] = 'Visibilità percorso';
$string['learningpathvisible'] = 'Percorso visibile';
$string['learningpathhidden'] = 'Percorso nascosto';
$string['sequentialcompletion'] = 'Completamento sequenziale';
$string['sequentialcompletion_help'] = 'Se abilitato, i corsi devono essere completati nell\'ordine specificato.';
$string['parallelcompletion'] = 'Completamento parallelo';
$string['parallelcompletion_help'] = 'Se abilitato, i corsi possono essere completati in qualsiasi ordine.';
$string['mandatorycourses'] = 'Corsi obbligatori';
$string['mandatorycourses_help'] = 'Tutti i corsi obbligatori devono essere completati per completare il percorso.';
$string['optionalcourses'] = 'Corsi opzionali';
$string['optionalcourses_help'] = 'I corsi opzionali non sono richiesti per il completamento del percorso.';
$string['minimumcourses'] = 'Corsi minimi richiesti';
$string['minimumcourses_help'] = 'Il numero minimo di corsi da completare per completare il percorso.';

// Course management within paths
$string['pathcourses'] = 'Corsi del percorso';
$string['addcoursetopath'] = 'Aggiungi corso al percorso';
$string['removecoursefrompath'] = 'Rimuovi corso dal percorso';
$string['courseaddedtopath'] = 'Corso aggiunto al percorso';
$string['courseremovedfrompath'] = 'Corso rimosso dal percorso';
$string['nocoursesinpath'] = 'Nessun corso in questo percorso';
$string['availablecoursesforpath'] = 'Corsi disponibili per il percorso';
$string['courseorder'] = 'Ordine corso';
$string['movecourseup'] = 'Sposta corso su';
$string['movecoursedown'] = 'Sposta corso giù';
$string['courseposition'] = 'Posizione corso';
$string['courseinpath'] = 'Corso nel percorso';
$string['coursenotinpath'] = 'Corso non nel percorso';
$string['courseismandatory'] = 'Corso obbligatorio';
$string['courseisoptional'] = 'Corso opzionale';
$string['setmandatory'] = 'Imposta come obbligatorio';
$string['setoptional'] = 'Imposta come opzionale';

// Groups within paths
$string['pathgroups'] = 'Gruppi nel percorso';
$string['coursegroup'] = 'Gruppo corsi';
$string['coursegroups'] = 'Gruppi corsi';
$string['createcoursegroup'] = 'Crea gruppo corsi';
$string['editcoursegroup'] = 'Modifica gruppo corsi';
$string['deletecoursegroup'] = 'Elimina gruppo corsi';
$string['groupname'] = 'Nome gruppo';
$string['groupdescription'] = 'Descrizione gruppo';
$string['groupcreated'] = 'Gruppo creato';
$string['groupupdated'] = 'Gruppo aggiornato';
$string['groupdeleted'] = 'Gruppo eliminato';
$string['groupdeleteconfirm'] = 'Sei sicuro di voler eliminare il gruppo \'{$a}\'?';
$string['addcoursetogroup'] = 'Aggiungi corso al gruppo';
$string['removecoursefromgroup'] = 'Rimuovi corso dal gruppo';
$string['nogroups'] = 'Nessun gruppo';
$string['selectgroup'] = 'Seleziona gruppo';
$string['groupsequence'] = 'Sequenza gruppi';
$string['groupsequence_help'] = 'L\'ordine in cui i gruppi devono essere completati.';
$string['groupcompletion'] = 'Completamento gruppo';
$string['groupcompletion_help'] = 'Requisiti per completare questo gruppo.';
$string['allcoursesingroup'] = 'Tutti i corsi nel gruppo';
$string['minimumcoursesingroup'] = 'Numero minimo di corsi nel gruppo';

// User assignment
$string['assignuserstopath'] = 'Assegna utenti al percorso';
$string['unassignusersfrompath'] = 'Rimuovi utenti dal percorso';
$string['userassignedtopath'] = 'Utente assegnato al percorso';
$string['userunassignedfrompath'] = 'Utente rimosso dal percorso';
$string['assigneddusers'] = 'Utenti assegnati';
$string['availableusers'] = 'Utenti disponibili';
$string['bulkassign'] = 'Assegnazione massiva';
$string['bulkunassign'] = 'Rimozione massiva';
$string['assignbydepartment'] = 'Assegna per dipartimento';
$string['assignbyrole'] = 'Assegna per ruolo';
$string['assignbygroup'] = 'Assegna per gruppo';
$string['assignmanually'] = 'Assegnazione manuale';
$string['autoassign'] = 'Assegnazione automatica';
$string['autoassign_help'] = 'Assegna automaticamente il percorso ai nuovi utenti che soddisfano i criteri.';

// Progress tracking
$string['pathprogress'] = 'Progressi percorso';
$string['userpathprogress'] = 'Progressi utente nel percorso';
$string['overallprogress'] = 'Progressi complessivi';
$string['courseprogress'] = 'Progressi corso';
$string['completedcourses'] = 'Corsi completati';
$string['remainingcourses'] = 'Corsi rimanenti';
$string['pathcompleted'] = 'Percorso completato';
$string['pathinprogress'] = 'Percorso in corso';
$string['pathnotstarted'] = 'Percorso non iniziato';
$string['completionpercent'] = 'Percentuale completamento';
$string['percentcomplete'] = '{$a}% completato';
$string['coursecompletiondate'] = 'Data completamento corso';
$string['pathcompletiondate'] = 'Data completamento percorso';
$string['expectedcompletiondate'] = 'Data prevista completamento';
$string['duedate'] = 'Data scadenza';
$string['duedate_help'] = 'La data entro cui il percorso deve essere completato.';
$string['overdue'] = 'In ritardo';
$string['ontrack'] = 'In tempo';

// Certificates
$string['pathcertificate'] = 'Certificato percorso';
$string['issuecertificate'] = 'Rilascia certificato';
$string['certificateissued'] = 'Certificato rilasciato';
$string['certificateoncompletion'] = 'Certificato al completamento';
$string['certificateoncompletion_help'] = 'Rilascia automaticamente un certificato quando il percorso viene completato.';
$string['certificatetemplate'] = 'Modello certificato';
$string['selectcertificatetemplate'] = 'Seleziona modello certificato';
$string['nocertificatetemplate'] = 'Nessun modello certificato selezionato';

// Reports
$string['learningpathreport'] = 'Report percorso formativo';
$string['userprogressreport'] = 'Report progressi utenti';
$string['completionreport'] = 'Report completamenti';
$string['pathstatistics'] = 'Statistiche percorso';
$string['totalassigned'] = 'Totale assegnati';
$string['totalcompleted'] = 'Totale completati';
$string['totalinprogress'] = 'Totale in corso';
$string['totalnotstarted'] = 'Totale non iniziati';
$string['averagecompletion'] = 'Media completamento';
$string['averagetime'] = 'Tempo medio';
$string['fastestcompletion'] = 'Completamento più veloce';
$string['slowestcompletion'] = 'Completamento più lento';
$string['exportreport'] = 'Esporta report';

// Notifications
$string['pathassignednotification'] = 'Notifica assegnazione percorso';
$string['pathassignedsubject'] = 'Percorso formativo assegnato';
$string['pathassignedbody'] = 'Ti è stato assegnato il percorso formativo: {$a->pathname}';
$string['pathcompletednotification'] = 'Notifica completamento percorso';
$string['pathcompletedsubject'] = 'Percorso formativo completato';
$string['pathcompletedbody'] = 'Congratulazioni! Hai completato il percorso formativo: {$a->pathname}';
$string['pathremindernotification'] = 'Promemoria percorso';
$string['pathremindersubject'] = 'Promemoria: percorso formativo in scadenza';
$string['pathreminderbody'] = 'Il percorso formativo {$a->pathname} scade il {$a->duedate}. Progressi attuali: {$a->progress}%';
$string['pathduedatenotification'] = 'Notifica scadenza percorso';
$string['pathduedatesubject'] = 'Percorso formativo in scadenza';
$string['pathduedatebody'] = 'Il percorso formativo {$a->pathname} scade oggi.';

// Company settings
$string['companypaths'] = 'Percorsi dell\'organizzazione';
$string['pathforcompany'] = 'Percorso per l\'organizzazione';
$string['companyspecificpath'] = 'Percorso specifico per organizzazione';
$string['sharedpath'] = 'Percorso condiviso';
$string['sharedpath_help'] = 'Rendi questo percorso disponibile per altre organizzazioni.';

// Template
$string['pathtemplate'] = 'Modello percorso';
$string['pathtemplates'] = 'Modelli percorso';
$string['createtemplate'] = 'Crea modello';
$string['saveastemplate'] = 'Salva come modello';
$string['usepathtemplate'] = 'Usa modello percorso';
$string['templatecreated'] = 'Modello creato';
$string['templatename'] = 'Nome modello';
$string['templatedescription'] = 'Descrizione modello';
$string['notemplates'] = 'Nessun modello disponibile';

// Tasks
$string['task_processcompletions'] = 'Elabora completamenti percorsi';
$string['task_sendnotifications'] = 'Invia notifiche percorsi';
$string['task_checkduedates'] = 'Verifica scadenze percorsi';
$string['task_issuecertificates'] = 'Rilascia certificati percorsi';

// Privacy
$string['privacy:metadata'] = 'Il plugin percorsi formativi IOMAD memorizza informazioni sulle assegnazioni e sui progressi degli utenti.';
$string['privacy:metadata:local_iomad_learningpath_users'] = 'Informazioni sull\'assegnazione degli utenti ai percorsi';
$string['privacy:metadata:local_iomad_learningpath_users:userid'] = 'L\'ID dell\'utente assegnato';
$string['privacy:metadata:local_iomad_learningpath_users:pathid'] = 'L\'ID del percorso';
$string['privacy:metadata:local_iomad_learningpath_users:assigneddate'] = 'La data di assegnazione';
$string['privacy:metadata:local_iomad_learningpath_users:completeddate'] = 'La data di completamento';
$string['privacy:metadata:local_iomad_learningpath_progress'] = 'Informazioni sui progressi degli utenti nei percorsi';
$string['privacy:metadata:local_iomad_learningpath_progress:userid'] = 'L\'ID dell\'utente';
$string['privacy:metadata:local_iomad_learningpath_progress:pathid'] = 'L\'ID del percorso';
$string['privacy:metadata:local_iomad_learningpath_progress:courseid'] = 'L\'ID del corso';
$string['privacy:metadata:local_iomad_learningpath_progress:progress'] = 'La percentuale di completamento';
