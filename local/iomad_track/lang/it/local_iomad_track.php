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
 * Italian language strings for local_iomad_track
 *
 * @package   local_iomad_track
 * @copyright 2021 Derick Turner
 * @author    Derick Turner
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Tracciamento completamenti IOMAD';
$string['privacy:metadata'] = 'Il plugin \'Tracciamento completamenti IOMAD locale\' mostra solo dati memorizzati in altre posizioni.';
$string['privacy:metadata:local_iomad_track:id'] = 'ID tracciamento IOMAD locale';
$string['privacy:metadata:local_iomad_track:courseid'] = 'ID corso';
$string['privacy:metadata:local_iomad_track:coursename'] = 'Nome corso.';
$string['privacy:metadata:local_iomad_track:userid'] = 'ID utente';
$string['privacy:metadata:local_iomad_track:companyid'] = 'ID organizzazione utente';
$string['privacy:metadata:local_iomad_track:timecompleted'] = 'Data/ora completamento corso';
$string['privacy:metadata:local_iomad_track:timeenrolled'] = 'Data/ora iscrizione corso';
$string['privacy:metadata:local_iomad_track:timestarted'] = 'Data/ora inizio corso';
$string['privacy:metadata:local_iomad_track:finalscore'] = 'Voto finale corso';
$string['privacy:metadata:local_iomad_track:licenseid'] = 'ID licenza';
$string['privacy:metadata:local_iomad_track:licensename'] = 'Nome licenza';
$string['privacy:metadata:local_iomad_track:licenseallocated'] = 'Timestamp Unix del momento in cui la licenza è stata assegnata';
$string['privacy:metadata:local_iomad_track:modifiedtime'] = 'Data/ora modifica record';
$string['privacy:metadata:local_iomad_track'] = 'Informazioni utente tracciamento IOMAD locale';
$string['privacy:metadata:local_iomad_track_certs:id'] = 'ID record certificato tracciamento IOMAD locale';
$string['privacy:metadata:local_iomad_track_certs:trackid'] = 'ID tracciamento certificato';
$string['privacy:metadata:local_iomad_track_certs:filename'] = 'Nome file certificato';
$string['privacy:metadata:local_iomad_track_certs'] = 'Info certificato tracciamento IOMAD locale';
$string['fixtracklicensetask'] = 'Task ad-hoc per correggere i dettagli tracciamento licenze IOMAD';
$string['iomad_track:importfrommoodle'] = 'Importa informazioni completamento dalle tabelle Moodle';
$string['importcompletionsfrommoodle'] = 'Importa informazioni completamento memorizzate dalle tabelle Moodle';
$string['importcompletionsfrommoodlefull'] = 'Questo eseguirà un task ad-hoc per importare tutte le informazioni di completamento da Moodle alle tabelle di reportistica IOMAD.';
$string['importcompletionsfrommoodlefullwitherrors'] = 'Questo eseguirà un task ad-hoc per importare ALCUNE delle informazioni di completamento da Moodle alle tabelle di reportistica IOMAD. Non tutti i corsi hanno il completamento abilitato o i criteri configurati e le loro informazioni verranno omesse. Se vuoi sapere quali corsi sono interessati, usa il link di verifica nella pagina precedente.';
$string['importmoodlecompletioninformation'] = 'Task ad-hoc per importare informazioni completamento dalle tabelle Moodle';
$string['fixcertificatetask'] = 'Cambia contesto certificato al contesto utente';
$string['fixenrolleddatetask'] = 'Task ad-hoc per aggiornare le informazioni di completamento memorizzate usando il timestamp \'timecreated\' dell\'iscrizione dove non è già impostato.';
$string['fixcourseclearedtask'] = 'Task ad-hoc per aggiornare il campo \'coursecleared\' nei record di completamento memorizzati';
$string['savecertificatetask'] = 'Task ad-hoc per memorizzare un certificato per un utente al completamento del corso';
$string['importcompletionrecords'] = 'Importa record di completamento';
$string['uploadcompletionresult'] = 'Risultato caricamento file completamenti';
$string['completionimportfromfile'] = 'Importazione completamenti da file';
$string['importcompletionsfromfile'] = 'Importa informazioni completamento da file';
$string['courseswithoutcompletionenabledcouunt'] = 'Numero di corsi che non hanno il completamento abilitato = {$a}';
$string['courseswithoutcompletioncriteriacouunt'] = 'Numero di corsi che non hanno criteri di completamento = {$a}';
$string['checkcoursestatusmoodle'] = 'Verifica impostazioni corso per importazione';
