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
 * Strings for component 'local_iomad', language 'it'
 *
 * @package   local_iomad
 * @copyright 2021 Derick Turner
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'IOMAD';
$string['iomad'] = 'IOMAD';

// General strings
$string['iomadname'] = 'IOMAD';
$string['iomaddescription'] = 'Sistema di gestione multi-organizzazione per Moodle';
$string['iomadadmin'] = 'Amministrazione IOMAD';
$string['iomadhome'] = 'Home IOMAD';
$string['iomadinformation'] = 'Informazioni IOMAD';

// Caching
$string['cachedef_companies'] = 'Elenco delle organizzazioni';
$string['cachedef_companydata'] = 'Dati dell\'organizzazione';
$string['cachedef_usercompany'] = 'Organizzazioni dell\'utente';
$string['cachedef_companyusers'] = 'Utenti dell\'organizzazione';
$string['cachedef_usercompanyinfo'] = 'Informazioni sull\'organizzazione dell\'utente';
$string['cachedef_companycourse'] = 'Corsi dell\'organizzazione';
$string['cachedef_companycourseselector'] = 'Selettore corsi dell\'organizzazione';
$string['cachedef_frameworkselector'] = 'Selettore framework';
$string['cachedef_templateselector'] = 'Selettore modelli';
$string['invalidatecaches'] = 'Invalida cache';
$string['cachesinvalidated'] = 'Cache invalidate con successo';

// Search fields
$string['searchfields'] = 'Campi di ricerca';
$string['searchfirstname'] = 'Nome';
$string['searchlastname'] = 'Cognome';
$string['searchemail'] = 'Email';
$string['searchusername'] = 'Nome utente';
$string['searchcompany'] = 'Organizzazione';
$string['searchdepartment'] = 'Dipartimento';
$string['searchcourse'] = 'Corso';
$string['searchall'] = 'Cerca in tutti i campi';
$string['advancedsearch'] = 'Ricerca avanzata';
$string['simplesearch'] = 'Ricerca semplice';
$string['searchresults'] = 'Risultati della ricerca';
$string['nosearchresults'] = 'Nessun risultato trovato';

// Privacy metadata
$string['privacy:metadata'] = 'Il plugin locale IOMAD non memorizza direttamente dati personali.';
$string['privacy:metadata:local_iomad'] = 'Informazioni sulle associazioni utente-organizzazione gestite da IOMAD';
$string['privacy:metadata:local_iomad:userid'] = 'L\'ID dell\'utente';
$string['privacy:metadata:local_iomad:companyid'] = 'L\'ID dell\'organizzazione associata all\'utente';
$string['privacy:metadata:local_iomad:departmentid'] = 'L\'ID del dipartimento associato all\'utente';

// Ad-hoc tasks
$string['task_companyexpiry'] = 'Verifica scadenza organizzazioni';
$string['task_licenseexpiry'] = 'Verifica scadenza licenze';
$string['task_usercleanup'] = 'Pulizia utenti IOMAD';
$string['task_synclicenses'] = 'Sincronizza licenze';
$string['task_companydomains'] = 'Elabora domini organizzazione';
$string['task_completiondata'] = 'Elabora dati di completamento';
$string['task_fixcompletions'] = 'Correggi dati di completamento';
$string['task_fixlicenses'] = 'Correggi dati licenze';
$string['task_fixenrolments'] = 'Correggi dati iscrizioni';
$string['task_processemails'] = 'Elabora email in coda';
$string['task_companyreports'] = 'Genera report organizzazione';

// Settings
$string['generalsettings'] = 'Impostazioni generali IOMAD';
$string['companysettings'] = 'Impostazioni organizzazione';
$string['usersettings'] = 'Impostazioni utente';
$string['coursesettings'] = 'Impostazioni corso';
$string['licensesettings'] = 'Impostazioni licenza';
$string['reportsettings'] = 'Impostazioni report';
$string['emailsettings'] = 'Impostazioni email';
$string['advancedsettings'] = 'Impostazioni avanzate';

// Navigation
$string['companyselect'] = 'Seleziona organizzazione';
$string['departmentselect'] = 'Seleziona dipartimento';
$string['userselect'] = 'Seleziona utente';
$string['courseselect'] = 'Seleziona corso';
$string['licenseselect'] = 'Seleziona licenza';

// Errors
$string['errorcompanynotfound'] = 'Organizzazione non trovata';
$string['errordepartmentnotfound'] = 'Dipartimento non trovato';
$string['errorusernotfound'] = 'Utente non trovato';
$string['errorcoursenotfound'] = 'Corso non trovato';
$string['errorlicensenotfound'] = 'Licenza non trovata';
$string['errorpermissiondenied'] = 'Permesso negato';
$string['errorinvalidrequest'] = 'Richiesta non valida';
$string['errorinvalidparameter'] = 'Parametro non valido';

// Capabilities
$string['iomad:viewowncompany'] = 'Visualizza la propria organizzazione';
$string['iomad:viewallcompanies'] = 'Visualizza tutte le organizzazioni';
$string['iomad:managecompanies'] = 'Gestisci organizzazioni';
$string['iomad:manageusers'] = 'Gestisci utenti';
$string['iomad:managecourses'] = 'Gestisci corsi';
$string['iomad:managelicenses'] = 'Gestisci licenze';
$string['iomad:viewreports'] = 'Visualizza report';
$string['iomad:managesettings'] = 'Gestisci impostazioni IOMAD';
$string['coursesearchfields'] = 'Ricerca corso';
$string['datesearchfields'] = 'Ricerca per data';
