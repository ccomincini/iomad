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
 * License enrolment language strings - Italian
 *
 * @package   enrol_license
 * @copyright 2021 Derick Turner
 * @author    Derick Turner
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['canntenrol'] = 'L\'iscrizione è disabilitata o non attiva';
$string['customwelcomemessage'] = 'Messaggio di benvenuto personalizzato';
$string['defaultrole'] = 'Ruolo assegnato per impostazione predefinita';
$string['defaultrole_desc'] = 'Seleziona il ruolo da assegnare agli utenti durante l\'iscrizione tramite licenza';
$string['enrolenddate'] = 'Data di fine';
$string['enrolenddaterror'] = 'La data di fine iscrizione non può essere precedente alla data di inizio';
$string['enrolme'] = 'Clicca qui per iniziare il corso';
$string['enrolperiod'] = 'Durata dell\'iscrizione';
$string['enrolperiod_desc'] = 'Durata predefinita del periodo di iscrizione (in secondi).';
$string['enrolstartdate'] = 'Data di inizio';
$string['groupkey'] = 'Usa chiavi di iscrizione del gruppo';
$string['groupkey_desc'] = 'Usa per impostazione predefinita le chiavi di iscrizione del gruppo.';
$string['groupkey_help'] = 'Oltre a limitare l\'accesso al corso ai soli utenti che conoscono la chiave, l\'uso di una chiave di iscrizione del gruppo fa sì che gli utenti vengano aggiunti automaticamente al gruppo al momento dell\'iscrizione al corso.

Per usare una chiave di iscrizione del gruppo occorre specificare una chiave di iscrizione nelle impostazioni del corso, oltre alla chiave di iscrizione del gruppo nelle impostazioni del gruppo.';
$string['license:config'] = 'Configurare le istanze di iscrizione tramite licenza';
$string['license:manage'] = 'Gestire gli utenti iscritti';
$string['license:unenrol'] = 'Annullare l\'iscrizione degli utenti dal corso';
$string['license:unenrollicense'] = 'Rimuovere la licenza dal corso';
$string['license:unenrolself'] = 'L\'utente può annullare la propria iscrizione';
$string['licensecrontask'] = 'Attività pianificata di iscrizione tramite licenza';
$string['licensenolongervalid'] = 'La tua licenza per questo corso non è più valida';
$string['licensenotyetvalid'] = 'Il tuo accesso a questo corso sarà disponibile dal {$a}';
$string['longtimenosee'] = 'Annulla iscrizione inattivi dopo';
$string['longtimenosee_help'] = 'Se gli utenti non accedono a un corso per un lungo periodo, vengono automaticamente disiscritti. Questo parametro specifica tale limite di tempo. È indipendente dalla durata dell\'iscrizione impostata dalla licenza stessa.';
$string['maxenrolled'] = 'Numero massimo di utenti iscritti';
$string['maxenrolled_help'] = 'Specifica il numero massimo di utenti che possono iscriversi tramite licenza. 0 significa nessun limite.';
$string['maxenrolledreached'] = 'È già stato raggiunto il numero massimo di utenti che possono iscriversi tramite licenza.';
$string['nolicenseinformationfound'] = 'Il tuo account non dispone di una licenza valida per accedere a questo corso. Se ti serve l\'accesso, contatta il responsabile della tua azienda per ottenere una licenza.';
$string['password'] = 'Chiave di iscrizione';
$string['password_help'] = 'Una chiave di iscrizione consente di limitare l\'accesso al corso ai soli utenti che la conoscono.

Se il campo viene lasciato vuoto, qualsiasi utente può iscriversi al corso.

Se viene specificata una chiave di iscrizione, a ogni utente che tenta di iscriversi al corso verrà richiesto di inserirla. Nota che l\'utente deve inserire la chiave di iscrizione SOLO UNA VOLTA, al momento dell\'iscrizione al corso.';
$string['passwordinvalid'] = 'Chiave di iscrizione errata, riprova';
$string['passwordinvalidhint'] = 'La chiave di iscrizione era errata, riprova<br />
(Un suggerimento: inizia con \'{$a}\')';
$string['pluginname'] = 'Iscrizione tramite licenza';
$string['pluginname_desc'] = 'Il plugin di iscrizione tramite licenza consente agli utenti di accedere ai corsi dopo che è stata loro assegnata una licenza. Internamente l\'iscrizione avviene tramite il plugin di iscrizione manuale, che deve essere abilitato nello stesso corso.';
$string['privacy:metadata'] = 'Il plugin di iscrizione tramite licenza mostra solo dati memorizzati in altre posizioni.';
$string['requirepassword'] = 'Richiedi chiave di iscrizione';
$string['requirepassword_desc'] = 'Richiedi la chiave di iscrizione nei nuovi corsi e impedisci la rimozione della chiave di iscrizione dai corsi esistenti.';
$string['role'] = 'Assegna ruolo';
$string['sendcoursewelcomemessage'] = 'Invia messaggio di benvenuto al corso';
$string['sendcoursewelcomemessage_help'] = 'Se abilitato, gli utenti ricevono un messaggio di benvenuto via email quando si iscrivono a un corso tramite licenza.';
$string['showhint'] = 'Mostra suggerimento';
$string['showhint_desc'] = 'Mostra la prima lettera della chiave di accesso ospite.';
$string['status'] = 'Consenti iscrizioni tramite licenza';
$string['status_desc'] = 'Consenti agli utenti di iscriversi ai corsi tramite licenza per impostazione predefinita.';
$string['status_help'] = 'Questa impostazione determina se un utente può iscriversi da solo (e anche annullare la propria iscrizione, se dispone dei permessi adeguati) al corso.';
$string['unenrollicenseconfirm'] = 'Vuoi davvero annullare la tua iscrizione dal corso "{$a}"?';
$string['usepasswordpolicy'] = 'Usa criteri per le password';
$string['usepasswordpolicy_desc'] = 'Usa i criteri standard per le password per le chiavi di iscrizione.';
$string['welcometocourse'] = 'Benvenuto in {$a}';
$string['welcometocoursetext'] = 'Benvenuto in {$a->coursename}!

Se non l\'hai ancora fatto, modifica la tua pagina del profilo così potremo conoscerti meglio:

  {$a->profileurl}';
