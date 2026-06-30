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
 * @package   local_report_license_usage
 * @copyright 2021 Derick Turner
 * @author    Derick Turner
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['pluginname'] = 'Report panoramica completamento';
$string['privacy:metadata:local_report_user_lic_allocs:id'] = 'ID record assegnazione licenza utente del report locale';
$string['privacy:metadata:local_report_user_lic_allocs:courseid'] = 'ID corso';
$string['privacy:metadata:local_report_user_lic_allocs:action'] = 'Azione di assegnazione';
$string['privacy:metadata:local_report_user_lic_allocs:userid'] = 'ID utente';
$string['privacy:metadata:local_report_user_lic_allocs:licenseid'] = 'ID licenza';
$string['privacy:metadata:local_report_user_lic_allocs:issuedate'] = 'Timestamp Unix emissione licenza';
$string['privacy:metadata:local_report_user_lic_allocs'] = 'Informazioni utente assegnazione licenza del report locale';
$string['hideenrolledonly'] = 'Evidenzia disponibili';
$string['hideexpiry'] = 'Evidenzia in scadenza';
$string['report_completion_overview:view'] = 'Visualizzare il report panoramica completamento corso';
$string['showenrolled'] = 'Evidenzia solo con iscrizioni';
$string['showenrolledonly'] = 'Evidenzia corsi con iscrizioni registrate';
$string['showenrolledonly_help'] = 'Se questa opzione è selezionata, verranno mostrati solo i corsi che hanno o hanno avuto iscrizioni registrate.';
$string['showexpiry'] = 'Evidenzia tutti';
$string['showexpiryonly'] = 'Evidenzia solo corsi con durata valida';
$string['showexpiryonly_help'] = 'Se questa opzione è selezionata, i corsi che non hanno una durata valida non verranno visualizzati a colori nella panoramica grafica per impostazione predefinita.';
$string['showfulldetail'] = 'Mostra dettaglio completamento completo';
$string['showfulldetail_help'] = 'Se questa opzione è selezionata, verranno visualizzate tutte le informazioni sul completamento, altrimenti solo le date di completamento e scadenza.';
$string['warningduration'] = 'Limite avviso scaduto';
$string['warningdurationcompany'] = 'Limite avviso scaduto specifico per organizzazione';
$string['warningduration_help'] = 'Questo è il valore di tempo prima della scadenza di un corso in cui il report mostrerà i colori di avviso scadenza invece dei colori OK.';
$string['coursesummary'] = 'Iscritto: {$a->enrolled}
Iniziato: {$a->timestarted}
Completato: {$a->timecompleted}
Scade: {$a->timeexpires}
Completamento: {$a->completion}%';
$string['coursesummary_extra_indate'] = 'Iscritto: {$a->enrolled}
Iniziato: {$a->timestarted}
Completato: {$a->timecompleted}
Scade: {$a->timeexpires}
Completamento: {$a->completion}%
Ultimo completamento: {$a->lastcompleted}
Scade: {$a->timeexpired}';
$string['coursesummary_extra_outdate'] = 'Iscritto: {$a->enrolled}
Iniziato: {$a->timestarted}
Completato: {$a->timecompleted}
Scade: {$a->timeexpires}
Completamento: {$a->completion}%
Ultimo completamento: {$a->lastcompleted}
Scaduto: {$a->timeexpired}';
$string['coursesummary_expired'] = 'Iscritto: {$a->enrolled}
Iniziato: {$a->timestarted}
Scaduto: {$a->timeexpires}
Completamento: {$a->completion}%';
$string['coursesummary_noexpire'] = 'Iscritto: {$a->enrolled}
Iniziato: {$a->timestarted}
Completato: {$a->timecompleted}
Completamento: {$a->completion}%
Ultimo completamento: {$a->lastcompleted}';
$string['coursesummary_noexpiry'] = 'Iscritto: {$a->enrolled}
Iniziato: {$a->timestarted}
Completato: {$a->timecompleted}
Completamento: {$a->completion}%';
$string['coursesummary_nograde'] = 'Iscritto: {$a->enrolled}
Iniziato: {$a->timestarted}
Completato: {$a->timecompleted}
Scade: {$a->timeexpires}
Risultato: Superato';
$string['coursesummary_nograde_noexpiry'] = 'Iscritto: {$a->enrolled}
Iniziato: {$a->timestarted}
Completato: {$a->timecompleted}
Risultato: Superato';
$string['coursesummary_partial'] = 'Completato: {$a->timecompleted}
Scade: {$a->timeexpires}';
$string['coursesummary_partial_extra_indate'] = 'Completato: {$a->timecompleted}
Scade: {$a->timeexpires}
Ultimo completamento: {$a->lastcompleted}
Scade: {$a->timeexpired}';
$string['coursesummary_partial_extra_outdate'] = 'Completato: {$a->timecompleted}
Scade: {$a->timeexpires}
Ultimo completamento: {$a->lastcompleted}
Scaduto: {$a->timeexpired}';
$string['coursesummary_partial_noexpire'] = 'Completato: {$a->timecompleted}
Ultimo completamento: {$a->lastcompleted}';
$string['report_completion_overview_title'] = 'Report panoramica completamento';
$string['reportbytext'] = 'Mostra il report come testo';
$string['notcompleted'] = 'In corso';
$string['notcompleted-expiring'] = 'In corso (In scadenza)';
$string['notcompleted-indate'] = 'In corso (OK)';
$string['notcompleted-outdate'] = 'In corso (Scaduto)';
$string['notenrolled']  = 'Non iscritto';
$string['notenrolled-expiring']  = 'Non iscritto (In scadenza)';
$string['notenrolled-indate']  = 'Non iscritto (OK)';
$string['notenrolled-outdate']  = 'Non iscritto (Scaduto)';
$string['indate'] = 'OK';
$string['expiring'] = 'In scadenza';
$string['expired'] = 'Scaduto';
$string['coursestatus'] = 'Stato {$a}';
$string['coursecompletion'] = 'Completamento {$a}';
$string['courseexpiry'] = 'Scadenza {$a}';
$string['bycourses'] = 'Visualizza per corso';
$string['byusers'] = 'Visualizza per utente';
