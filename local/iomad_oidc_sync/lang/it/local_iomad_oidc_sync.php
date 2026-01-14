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
 * Strings for component 'local_iomad_oidc_sync', language 'it'
 *
 * @package   local_iomad_oidc_sync
 * @copyright 2021 Derick Turner
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Sincronizzazione OIDC IOMAD';
$string['iomad_oidc_sync:manage'] = 'Gestisci sincronizzazione OIDC IOMAD';

// Sync settings
$string['syncsettings'] = 'Impostazioni sincronizzazione';
$string['enablesync'] = 'Abilita sincronizzazione';
$string['enablesync_help'] = 'Abilita la sincronizzazione automatica con il provider OIDC.';
$string['syncenabled'] = 'Sincronizzazione abilitata';
$string['syncdisabled'] = 'Sincronizzazione disabilitata';
$string['syncfrequency'] = 'Frequenza sincronizzazione';
$string['syncfrequency_help'] = 'Con quale frequenza eseguire la sincronizzazione.';
$string['syncnow'] = 'Sincronizza ora';
$string['lastsync'] = 'Ultima sincronizzazione';
$string['nextsync'] = 'Prossima sincronizzazione';
$string['syncstatus'] = 'Stato sincronizzazione';
$string['syncrunning'] = 'Sincronizzazione in corso';
$string['synccomplete'] = 'Sincronizzazione completata';
$string['syncfailed'] = 'Sincronizzazione fallita';
$string['syncpending'] = 'Sincronizzazione in attesa';

// Sync types
$string['syncusers'] = 'Sincronizza utenti';
$string['syncusers_help'] = 'Sincronizza gli utenti dal provider OIDC.';
$string['syncgroups'] = 'Sincronizza gruppi';
$string['syncgroups_help'] = 'Sincronizza i gruppi (dipartimenti/organizzazioni) dal provider OIDC.';
$string['synccompanies'] = 'Sincronizza organizzazioni';
$string['synccompanies_help'] = 'Mappa i gruppi OIDC alle organizzazioni IOMAD.';
$string['syncdepartments'] = 'Sincronizza dipartimenti';
$string['syncdepartments_help'] = 'Mappa i gruppi OIDC ai dipartimenti IOMAD.';
$string['synclicenses'] = 'Sincronizza licenze';
$string['synclicenses_help'] = 'Assegna automaticamente le licenze agli utenti sincronizzati.';

// User sync
$string['usersyncsettings'] = 'Impostazioni sincronizzazione utenti';
$string['syncuserfields'] = 'Campi utente da sincronizzare';
$string['syncuserfields_help'] = 'Seleziona quali campi utente sincronizzare dal provider OIDC.';
$string['syncfirstname'] = 'Nome';
$string['synclastname'] = 'Cognome';
$string['syncemail'] = 'Email';
$string['syncdepartment'] = 'Dipartimento';
$string['synccity'] = 'Città';
$string['synccountry'] = 'Paese';
$string['syncphone'] = 'Telefono';
$string['syncjobtitle'] = 'Titolo lavorativo';
$string['syncmanager'] = 'Responsabile';
$string['syncprofilefields'] = 'Campi profilo personalizzati';
$string['createusers'] = 'Crea nuovi utenti';
$string['createusers_help'] = 'Crea automaticamente nuovi utenti dal provider OIDC.';
$string['updateusers'] = 'Aggiorna utenti esistenti';
$string['updateusers_help'] = 'Aggiorna i dati degli utenti esistenti dal provider OIDC.';
$string['suspendusers'] = 'Sospendi utenti rimossi';
$string['suspendusers_help'] = 'Sospendi automaticamente gli utenti che non sono più presenti nel provider OIDC.';
$string['deleteusers'] = 'Elimina utenti rimossi';
$string['deleteusers_help'] = 'Elimina gli utenti che non sono più presenti nel provider OIDC.';

// Group/Company mapping
$string['groupmapping'] = 'Mappatura gruppi';
$string['groupmappingsettings'] = 'Impostazioni mappatura gruppi';
$string['mapgroupstocompanies'] = 'Mappa gruppi a organizzazioni';
$string['mapgroupstodepartments'] = 'Mappa gruppi a dipartimenti';
$string['groupattribute'] = 'Attributo gruppo OIDC';
$string['groupattribute_help'] = 'L\'attributo OIDC che contiene l\'appartenenza ai gruppi.';
$string['groupmappingtable'] = 'Tabella mappatura gruppi';
$string['oidcgroup'] = 'Gruppo OIDC';
$string['iomadcompany'] = 'Organizzazione IOMAD';
$string['iomaddepartment'] = 'Dipartimento IOMAD';
$string['addmapping'] = 'Aggiungi mappatura';
$string['editmapping'] = 'Modifica mappatura';
$string['deletemapping'] = 'Elimina mappatura';
$string['mappingcreated'] = 'Mappatura creata';
$string['mappingupdated'] = 'Mappatura aggiornata';
$string['mappingdeleted'] = 'Mappatura eliminata';
$string['nomappings'] = 'Nessuna mappatura configurata';
$string['defaultcompany'] = 'Organizzazione predefinita';
$string['defaultcompany_help'] = 'L\'organizzazione predefinita per gli utenti senza mappatura gruppo.';
$string['defaultdepartment'] = 'Dipartimento predefinito';
$string['defaultdepartment_help'] = 'Il dipartimento predefinito per gli utenti senza mappatura gruppo.';

// License assignment
$string['licenseassignment'] = 'Assegnazione licenze';
$string['licenseassignmentsettings'] = 'Impostazioni assegnazione licenze';
$string['autolicenseassign'] = 'Assegnazione automatica licenze';
$string['autolicenseassign_help'] = 'Assegna automaticamente le licenze agli utenti sincronizzati.';
$string['licensemappingtable'] = 'Tabella mappatura licenze';
$string['oidcgroupforlicense'] = 'Gruppo OIDC per licenza';
$string['licensetoassign'] = 'Licenza da assegnare';
$string['courselicense'] = 'Licenza corso';
$string['addlicensemapping'] = 'Aggiungi mappatura licenza';
$string['editlicensemapping'] = 'Modifica mappatura licenza';
$string['deletelicensemapping'] = 'Elimina mappatura licenza';
$string['nolicensemappings'] = 'Nessuna mappatura licenza configurata';

// Sync log
$string['synclog'] = 'Log sincronizzazione';
$string['viewsynclog'] = 'Visualizza log sincronizzazione';
$string['synclogentry'] = 'Voce log sincronizzazione';
$string['synctime'] = 'Ora sincronizzazione';
$string['synctype'] = 'Tipo sincronizzazione';
$string['syncresult'] = 'Risultato sincronizzazione';
$string['syncsuccess'] = 'Successo';
$string['syncerror'] = 'Errore';
$string['syncwarning'] = 'Avviso';
$string['syncmessage'] = 'Messaggio';
$string['syncdetails'] = 'Dettagli';
$string['userscreated'] = 'Utenti creati';
$string['usersupdated'] = 'Utenti aggiornati';
$string['userssuspended'] = 'Utenti sospesi';
$string['usersdeleted'] = 'Utenti eliminati';
$string['usersskipped'] = 'Utenti saltati';
$string['errors'] = 'Errori';
$string['warnings'] = 'Avvisi';
$string['clearsynclog'] = 'Cancella log sincronizzazione';
$string['confirmclearlog'] = 'Sei sicuro di voler cancellare il log di sincronizzazione?';
$string['logcleared'] = 'Log cancellato';

// Azure/Microsoft settings
$string['azuresettings'] = 'Impostazioni Microsoft Azure';
$string['tenantid'] = 'ID tenant';
$string['tenantid_help'] = 'L\'ID del tenant Azure AD.';
$string['clientid'] = 'ID client';
$string['clientid_help'] = 'L\'ID client dell\'applicazione Azure AD.';
$string['clientsecret'] = 'Segreto client';
$string['clientsecret_help'] = 'Il segreto client dell\'applicazione Azure AD.';
$string['graphendpoint'] = 'Endpoint Microsoft Graph';
$string['graphendpoint_help'] = 'L\'endpoint dell\'API Microsoft Graph.';
$string['usegraphapi'] = 'Usa Microsoft Graph API';
$string['usegraphapi_help'] = 'Usa Microsoft Graph API per la sincronizzazione.';
$string['graphpermissions'] = 'Autorizzazioni Graph';
$string['graphpermissions_help'] = 'Le autorizzazioni Microsoft Graph richieste per la sincronizzazione.';

// Error messages
$string['errorconnection'] = 'Errore di connessione al provider OIDC';
$string['errorauthentication'] = 'Errore di autenticazione con il provider OIDC';
$string['errorusernotfound'] = 'Utente non trovato nel provider OIDC';
$string['errorgroupnotfound'] = 'Gruppo non trovato nel provider OIDC';
$string['errormappingnotfound'] = 'Mappatura non trovata';
$string['errorinvalidconfig'] = 'Configurazione non valida';
$string['errorsyncfailed'] = 'Sincronizzazione fallita';
$string['errorpermissiondenied'] = 'Permesso negato dal provider OIDC';
$string['errorratelimit'] = 'Limite di frequenza raggiunto sul provider OIDC';
$string['errorquota'] = 'Quota superata sul provider OIDC';

// Tasks
$string['task_syncusers'] = 'Sincronizza utenti da OIDC';
$string['task_syncgroups'] = 'Sincronizza gruppi da OIDC';
$string['task_processsyncqueue'] = 'Elabora coda di sincronizzazione';
$string['task_cleanuplog'] = 'Pulizia log sincronizzazione';

// Privacy
$string['privacy:metadata'] = 'Il plugin sincronizzazione OIDC IOMAD memorizza mappature tra gli identificatori OIDC e gli account IOMAD.';
$string['privacy:metadata:local_iomad_oidc_sync'] = 'Informazioni sulla mappatura OIDC';
$string['privacy:metadata:local_iomad_oidc_sync:userid'] = 'L\'ID dell\'utente Moodle';
$string['privacy:metadata:local_iomad_oidc_sync:oidcid'] = 'L\'ID utente OIDC';
$string['privacy:metadata:local_iomad_oidc_sync:oidcgroups'] = 'I gruppi OIDC dell\'utente';
$string['privacy:metadata:local_iomad_oidc_sync:lastsync'] = 'La data dell\'ultima sincronizzazione';
