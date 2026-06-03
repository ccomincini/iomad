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
 * Strings for component 'local_iomad_signup', language 'it'
 *
 * @package   local_iomad_signup
 * @copyright 2021 Derick Turner
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Registrazione IOMAD';
$string['iomad_signup:manage'] = 'Gestisci registrazione IOMAD';

// Registration settings
$string['signupsettings'] = 'Impostazioni registrazione';
$string['signupenabled'] = 'Registrazione abilitata';
$string['signupenabled_help'] = 'Abilita o disabilita la registrazione autonoma per le organizzazioni.';
$string['signupdisabled'] = 'Registrazione disabilitata';
$string['allowselfregistration'] = 'Consenti auto-registrazione';
$string['allowselfregistration_help'] = 'Se abilitato, gli utenti possono registrarsi autonomamente senza l\'approvazione di un amministratore.';
$string['requireapproval'] = 'Richiedi approvazione';
$string['requireapproval_help'] = 'Se abilitato, le registrazioni devono essere approvate da un responsabile prima che l\'account venga attivato.';

// Company selection
$string['selectcompany'] = 'Seleziona organizzazione';
$string['selectacompany'] = 'Seleziona un\'organizzazione';
$string['companyselection'] = 'Selezione organizzazione';
$string['companyselection_help'] = 'Seleziona l\'organizzazione a cui vuoi registrarti.';
$string['nocompanyselected'] = 'Nessuna organizzazione selezionata';
$string['invalidcompany'] = 'Organizzazione non valida';
$string['companynotfound'] = 'Organizzazione non trovata';
$string['companyrequired'] = 'È necessario selezionare un\'organizzazione';
$string['availablecompanies'] = 'Organizzazioni disponibili';
$string['noavailablecompanies'] = 'Nessuna organizzazione disponibile per la registrazione';

// Email domain validation
$string['emaildomainvalidation'] = 'Validazione dominio email';
$string['emaildomainvalidation_help'] = 'Se abilitato, l\'email dell\'utente deve corrispondere a uno dei domini configurati per l\'organizzazione.';
$string['emaildomainmismatch'] = 'Il tuo indirizzo email non corrisponde ai domini autorizzati per questa organizzazione';
$string['emaildomaininvalid'] = 'Dominio email non valido';
$string['emaildomainrequired'] = 'È richiesto un indirizzo email con un dominio autorizzato';
$string['alloweddomains'] = 'Domini consentiti';
$string['alloweddomains_help'] = 'Elenco dei domini email consentiti per la registrazione a questa organizzazione.';

// Registration form
$string['registrationform'] = 'Modulo di registrazione';
$string['personalinfo'] = 'Informazioni personali';
$string['accountinfo'] = 'Informazioni account';
$string['firstname'] = 'Nome';
$string['lastname'] = 'Cognome';
$string['email'] = 'Email';
$string['username'] = 'Nome utente';
$string['password'] = 'Password';
$string['confirmpassword'] = 'Conferma password';
$string['city'] = 'Città';
$string['country'] = 'Paese';
$string['phone1'] = 'Telefono';
$string['phone2'] = 'Cellulare';
$string['institution'] = 'Istituzione';
$string['department'] = 'Dipartimento';
$string['address'] = 'Indirizzo';
$string['profilefields'] = 'Campi profilo';
$string['requiredfields'] = 'Campi obbligatori';
$string['optionalfields'] = 'Campi opzionali';

// Custom profile fields
$string['customprofilefields'] = 'Campi profilo personalizzati';
$string['showprofilefield'] = 'Mostra campo profilo';
$string['requireprofilefield'] = 'Richiedi campo profilo';
$string['profilefieldconfig'] = 'Configurazione campi profilo';
$string['profilefieldconfig_help'] = 'Configura quali campi profilo mostrare e quali rendere obbligatori nel modulo di registrazione.';

// Registration process
$string['register'] = 'Registrati';
$string['registration'] = 'Registrazione';
$string['createaccount'] = 'Crea account';
$string['registernewaccount'] = 'Registra nuovo account';
$string['registrationsuccessful'] = 'Registrazione completata con successo';
$string['registrationpending'] = 'Registrazione in attesa di approvazione';
$string['registrationfailed'] = 'Registrazione fallita';
$string['registrationerror'] = 'Errore durante la registrazione';
$string['registrationcomplete'] = 'Registrazione completata';
$string['registrationconfirmation'] = 'Conferma registrazione';
$string['thankyouforregistering'] = 'Grazie per esserti registrato';
$string['checkemailforconfirmation'] = 'Controlla la tua email per le istruzioni di conferma';
$string['accountcreated'] = 'Il tuo account è stato creato';
$string['accountpendingapproval'] = 'Il tuo account è in attesa di approvazione';
$string['accountapproved'] = 'Il tuo account è stato approvato';
$string['accountrejected'] = 'La tua richiesta di registrazione è stata rifiutata';

// Approval workflow
$string['approvalrequired'] = 'Approvazione richiesta';
$string['pendingapprovals'] = 'Approvazioni in attesa';
$string['approveregistration'] = 'Approva registrazione';
$string['rejectregistration'] = 'Rifiuta registrazione';
$string['registrationapproved'] = 'Registrazione approvata';
$string['registrationrejected'] = 'Registrazione rifiutata';
$string['approveselected'] = 'Approva selezionati';
$string['rejectselected'] = 'Rifiuta selezionati';
$string['confirmapprove'] = 'Sei sicuro di voler approvare questa registrazione?';
$string['confirmreject'] = 'Sei sicuro di voler rifiutare questa registrazione?';
$string['nopendingapprovals'] = 'Nessuna approvazione in attesa';
$string['approvaldate'] = 'Data approvazione';
$string['rejectiondate'] = 'Data rifiuto';
$string['approvedby'] = 'Approvato da';
$string['rejectedby'] = 'Rifiutato da';
$string['rejectionreason'] = 'Motivo del rifiuto';
$string['rejectionreason_help'] = 'Inserisci un motivo per il rifiuto della registrazione. Questo verrà inviato all\'utente.';

// Email notifications
$string['signupnotification'] = 'Notifica registrazione';
$string['signupnotificationsubject'] = 'Nuova richiesta di registrazione';
$string['signupnotificationbody'] = 'Una nuova richiesta di registrazione è stata ricevuta per l\'organizzazione {$a->company}. Utente: {$a->username} ({$a->email})';
$string['approvalnotification'] = 'Notifica approvazione';
$string['approvalnotificationsubject'] = 'Registrazione approvata';
$string['approvalnotificationbody'] = 'La tua registrazione a {$a->company} è stata approvata. Ora puoi accedere al sito.';
$string['rejectionnotification'] = 'Notifica rifiuto';
$string['rejectionnotificationsubject'] = 'Registrazione rifiutata';
$string['rejectionnotificationbody'] = 'La tua registrazione a {$a->company} è stata rifiutata.';
$string['confirmationnotification'] = 'Notifica conferma';
$string['confirmationnotificationsubject'] = 'Conferma la tua registrazione';
$string['confirmationnotificationbody'] = 'Grazie per la registrazione. Clicca sul link seguente per confermare il tuo indirizzo email.';

// Signup page customization
$string['signuppageheader'] = 'Intestazione pagina registrazione';
$string['signuppagefooter'] = 'Piè di pagina registrazione';
$string['signuppageintro'] = 'Introduzione pagina registrazione';
$string['signuppageintro_help'] = 'Testo introduttivo da visualizzare nella pagina di registrazione.';
$string['termsandconditions'] = 'Termini e condizioni';
$string['termsandconditions_help'] = 'Testo dei termini e condizioni che l\'utente deve accettare per registrarsi.';
$string['acceptterms'] = 'Accetto i termini e le condizioni';
$string['mustacceptterms'] = 'Devi accettare i termini e le condizioni per registrarti';
$string['privacypolicy'] = 'Informativa sulla privacy';
$string['acceptprivacy'] = 'Ho letto e accetto l\'informativa sulla privacy';
$string['mustacceptprivacy'] = 'Devi accettare l\'informativa sulla privacy per registrarti';

// Company-specific signup
$string['companysignup'] = 'Registrazione organizzazione';
$string['companysignupurl'] = 'URL registrazione organizzazione';
$string['companysignupurl_help'] = 'URL personalizzato per la pagina di registrazione dell\'organizzazione.';
$string['companysignupenabled'] = 'Registrazione organizzazione abilitata';
$string['companysignupdisabled'] = 'Registrazione organizzazione disabilitata';
$string['companywelcomemessage'] = 'Messaggio di benvenuto';
$string['companywelcomemessage_help'] = 'Messaggio di benvenuto personalizzato da visualizzare dopo la registrazione.';

// Department selection
$string['selectdepartment'] = 'Seleziona dipartimento';
$string['departmentselection'] = 'Selezione dipartimento';
$string['departmentselection_help'] = 'Seleziona il dipartimento a cui vuoi registrarti.';
$string['departmentrequired'] = 'È necessario selezionare un dipartimento';
$string['nodepartmentselected'] = 'Nessun dipartimento selezionato';
$string['availabledepartments'] = 'Dipartimenti disponibili';

// Validation
$string['emailalreadyregistered'] = 'Questo indirizzo email è già registrato';
$string['usernamealreadyexists'] = 'Questo nome utente esiste già';
$string['passwordtooweak'] = 'La password è troppo debole';
$string['passwordmismatch'] = 'Le password non corrispondono';
$string['invalidemailformat'] = 'Formato email non valido';
$string['invalidusernameformat'] = 'Formato nome utente non valido';
$string['firstnamerequired'] = 'Il nome è obbligatorio';
$string['lastnamerequired'] = 'Il cognome è obbligatorio';
$string['emailrequired'] = 'L\'email è obbligatoria';
$string['usernamerequired'] = 'Il nome utente è obbligatorio';
$string['passwordrequired'] = 'La password è obbligatoria';

// CAPTCHA
$string['usecaptcha'] = 'Usa CAPTCHA';
$string['usecaptcha_help'] = 'Se abilitato, viene visualizzato un CAPTCHA nel modulo di registrazione per prevenire registrazioni automatiche.';
$string['captchaerror'] = 'CAPTCHA non valido. Riprova.';

// Privacy
$string['privacy:metadata'] = 'Il plugin registrazione IOMAD memorizza informazioni sulle richieste di registrazione in attesa.';
$string['privacy:metadata:local_iomad_signup'] = 'Informazioni sulle richieste di registrazione';
$string['privacy:metadata:local_iomad_signup:email'] = 'L\'email dell\'utente che richiede la registrazione';
$string['privacy:metadata:local_iomad_signup:firstname'] = 'Il nome dell\'utente';
$string['privacy:metadata:local_iomad_signup:lastname'] = 'Il cognome dell\'utente';
$string['privacy:metadata:local_iomad_signup:companyid'] = 'L\'ID dell\'organizzazione richiesta';
$string['privacy:metadata:local_iomad_signup:timecreated'] = 'La data della richiesta';
$string['privacy:metadata:local_iomad_signup:status'] = 'Lo stato della richiesta';
