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
 * @package   local_course_selector
 * @based on  standard Moodle course_selector
 * @copyright 2021 Derick Turner
 * @author    Derick Turner
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['courseselectortoomany'] = 'Il selettore corsi ha ricevuto più di un corso selezionato, anche se la selezione multipla è disabilitata';
$string['cannotcallusgetselectedcourse'] = 'Non è possibile chiamare course_selector::get_selected_course se la selezione multipla è abilitata';
$string['clear'] = 'Cancella';
$string['searchoptions'] = 'Opzioni di ricerca';
$string['courseselectorpreserveselected'] = 'Mantieni i corsi selezionati, anche se non corrispondono più alla ricerca';
$string['courseselectorautoselectunique'] = 'Se solo un corso corrisponde alla ricerca, selezionalo automaticamente';
$string['courseselectorsearchanywhere'] = 'Cerca il testo ovunque nel nome del corso';
$string['toomanycoursesmatchsearch'] = 'Troppi corsi ({$a->count}) corrispondono a \'{$a->search}\'';
$string['pleasesearchmore'] = 'Affina la ricerca';
$string['toomanycoursestoshow'] = 'Troppi corsi ({$a}) da visualizzare';
$string['pleaseusesearch'] = 'Utilizza la funzione di ricerca';
$string['nomatchingcourses'] = 'Nessun corso corrisponde a \'{$a}\'';
$string['none'] = 'Nessuno';
$string['pluginname'] = 'Selettori corsi';
$string['previouslyselectedcourses'] = 'Corsi precedentemente selezionati che non corrispondono a \'{$a}\'';
$string['privacy:metadata'] = 'Il plugin IOMAD selettore corsi locale mostra solo dati memorizzati in altre posizioni.';
$string['search'] = 'Cerca';
