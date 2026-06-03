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
 * Strings for component 'auth_iomadoidc', language 'it'
 *
 * @package   auth_iomadoidc
 * @copyright 2024 Derick Turner
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'IOMAD OpenID Connect';
$string['auth_iomadoidcdescription'] = 'Il plugin IOMAD OpenID Connect fornisce funzionalità Single Sign-On utilizzando Identity Provider configurabili.';

// Impostazioni generali
$string['cfg_authendpoint_key'] = 'Endpoint di autorizzazione';
$string['cfg_authendpoint_desc'] = 'L\'URI dell\'endpoint di autorizzazione dal tuo Identity Provider.';
$string['cfg_autoappend_key'] = 'Aggiunta automatica';
$string['cfg_autoappend_desc'] = 'Aggiungi automaticamente questa stringa durante l\'autenticazione utenti con il flusso Resource Owner Password Credentials.';
$string['cfg_clientid_key'] = 'ID Client';
$string['cfg_clientid_desc'] = 'L\'ID client registrato con l\'Identity Provider.';
$string['cfg_clientsecret_key'] = 'Segreto Client';
$string['cfg_clientsecret_desc'] = 'Il segreto client registrato con l\'Identity Provider.';
$string['cfg_domainhint_key'] = 'Suggerimento dominio';
$string['cfg_domainhint_desc'] = 'Quando si utilizza il flusso "Authorization Code", passa questo valore come parametro "domain_hint" nella richiesta di login.';
$string['cfg_err_invalidauthendpoint'] = 'Endpoint di autorizzazione non valido';
$string['cfg_err_invalidtokenendpoint'] = 'Endpoint token non valido';
$string['cfg_err_invalidclientid'] = 'ID client non valido';
$string['cfg_err_invalidclientsecret'] = 'Segreto client non valido';
$string['cfg_forceredirect_key'] = 'Forza reindirizzamento';
$string['cfg_forceredirect_desc'] = 'Se abilitato, salta la pagina di indice di login e reindirizza automaticamente alla pagina OpenID Connect. Può essere bypassato con il parametro ?noredirect=1';
$string['cfg_icon_key'] = 'Icona';
$string['cfg_icon_desc'] = 'Un\'icona da visualizzare accanto al nome del provider nella pagina di login.';
$string['cfg_iconalt_o365'] = 'Icona Microsoft 365';
$string['cfg_iconalt_locked'] = 'Icona bloccata';
$string['cfg_iconalt_lock'] = 'Icona lucchetto';
$string['cfg_iconalt_go'] = 'Cerchio verde';
$string['cfg_iconalt_stop'] = 'Cerchio rosso';
$string['cfg_iconalt_user'] = 'Icona utente';
$string['cfg_iconalt_user2'] = 'Icona utente alternativa';
$string['cfg_iconalt_key'] = 'Icona chiave';
$string['cfg_iconalt_group'] = 'Icona gruppo';
$string['cfg_iconalt_group2'] = 'Icona gruppo alternativa';
$string['cfg_iconalt_mnet'] = 'Icona MNET';
$string['cfg_iconalt_userlock'] = 'Utente con lucchetto';
$string['cfg_iconalt_plus'] = 'Icona più';
$string['cfg_iconalt_check'] = 'Icona spunta';
$string['cfg_iconalt_rightarrow'] = 'Icona freccia destra';
$string['cfg_customicon_key'] = 'Icona personalizzata';
$string['cfg_customicon_desc'] = 'Se desideri utilizzare un\'icona personalizzata, caricala qui. Questo sovrascrive qualsiasi icona selezionata sopra.';
$string['cfg_debugmode_key'] = 'Registra messaggi di debug';
$string['cfg_debugmode_desc'] = 'Se abilitato, le informazioni verranno registrate nel log di Moodle per aiutare a identificare i problemi.';
$string['cfg_loginflow_key'] = 'Flusso di autenticazione';
$string['cfg_loginflow_desc'] = 'Seleziona il flusso di autenticazione da utilizzare.';
$string['cfg_loginflow_authcode'] = 'Richiesta di autorizzazione';
$string['cfg_loginflow_authcode_desc'] = 'Utilizzando questo flusso, l\'utente clicca sul nome dell\'Identity Provider nella pagina di login di Moodle e viene reindirizzato al provider per effettuare il login. Una volta effettuato il login con successo, l\'utente viene reindirizzato a Moodle dove avviene il login trasparente.';
$string['cfg_loginflow_rocreds'] = 'Autenticazione nome utente/password Resource Owner';
$string['cfg_loginflow_rocreds_desc'] = 'Utilizzando questo flusso, l\'utente inserisce il proprio nome utente e password nel modulo di login di Moodle come farebbe con un login manuale. Questo autenticherà l\'utente con l\'Identity Provider, ma non creerà una sessione sul sito dell\'Identity Provider.';
$string['cfg_iomadoidcresource_key'] = 'Risorsa';
$string['cfg_iomadoidcresource_desc'] = 'La risorsa OpenID Connect per la quale inviare la richiesta.';
$string['cfg_iomadoidcscope_key'] = 'Scope';
$string['cfg_iomadoidcscope_desc'] = 'Lo scope OIDC da utilizzare.';
$string['cfg_opname_key'] = 'Nome provider';
$string['cfg_opname_desc'] = 'Questa è un\'etichetta rivolta all\'utente finale che identifica il tipo di credenziali che l\'utente deve utilizzare per effettuare il login.';
$string['cfg_redirecturi_key'] = 'URI di reindirizzamento';
$string['cfg_redirecturi_desc'] = 'Questo è l\'URI da registrare come "URI di reindirizzamento". Il tuo Identity Provider OpenID Connect dovrebbe richiederlo quando registri Moodle come client.';
$string['cfg_silentloginmode_key'] = 'Modalità login silenzioso';
$string['cfg_silentloginmode_desc'] = 'Se abilitato, il plugin tenterà di autenticare silenziosamente l\'utente senza richiedere l\'interazione dell\'utente.';
$string['cfg_tokenendpoint_key'] = 'Endpoint token';
$string['cfg_tokenendpoint_desc'] = 'L\'URI dell\'endpoint token dal tuo Identity Provider.';
$string['cfg_logoutendpoint_key'] = 'Endpoint logout';
$string['cfg_logoutendpoint_desc'] = 'L\'URI dell\'endpoint logout dal tuo Identity Provider.';
$string['cfg_tools_key'] = 'Strumenti';
$string['cfg_tools_desc'] = 'Strumenti aggiuntivi per la gestione dell\'autenticazione OpenID Connect.';

// Tipi IdP
$string['cfg_idptype_key'] = 'Tipo Identity Provider';
$string['cfg_idptype_desc'] = 'Seleziona il tipo di Identity Provider con cui ti stai connettendo.';
$string['idp_type_microsoft'] = 'Microsoft Entra ID (v1.0)';
$string['idp_type_microsoft_v2'] = 'Microsoft identity platform (v2.0)';
$string['idp_type_other'] = 'Altro';

// Metodi di autenticazione client
$string['cfg_clientauthmethod_key'] = 'Metodo di autenticazione client';
$string['cfg_clientauthmethod_desc'] = 'Il metodo utilizzato per autenticare il client con l\'Identity Provider.';
$string['clientauthmethod_secret'] = 'Segreto';
$string['clientauthmethod_certificate'] = 'Certificato';
$string['cfg_clientcert_key'] = 'Certificato client';
$string['cfg_clientcert_desc'] = 'Il certificato pubblico del client in formato PEM.';
$string['cfg_clientprivatekey_key'] = 'Chiave privata client';
$string['cfg_clientprivatekey_desc'] = 'La chiave privata del client in formato PEM.';
$string['cfg_clientcertfile_key'] = 'File certificato client';
$string['cfg_clientcertfile_desc'] = 'Percorso al file del certificato pubblico del client sul server.';
$string['cfg_clientprivatekeyfile_key'] = 'File chiave privata client';
$string['cfg_clientprivatekeyfile_desc'] = 'Percorso al file della chiave privata del client sul server.';
$string['cfg_clientcertpassphrase_key'] = 'Passphrase certificato';
$string['cfg_clientcertpassphrase_desc'] = 'La passphrase per la chiave privata del certificato client, se presente.';

// Mappatura campi
$string['cfg_field_mapping_desc'] = 'I dati utente possono essere mappati dall\'Identity Provider al profilo utente di Moodle.';
$string['cfg_fieldmap_key'] = 'Mappatura campi';
$string['update_oncreate_and_onlogin'] = 'Alla creazione e ad ogni login';
$string['update_oncreate_and_onlogin_and_usersync'] = 'Alla creazione, ad ogni login e ad ogni sincronizzazione utenti';
$string['update_onlogin_and_usersync'] = 'Ad ogni login e ad ogni sincronizzazione utenti';

// Campi remoti
$string['settings_fieldmap_feild_not_mapped'] = '(non mappato)';
$string['settings_fieldmap_field_city'] = 'Città';
$string['settings_fieldmap_field_companyName'] = 'Nome organizzazione';
$string['settings_fieldmap_field_objectId'] = 'ID Oggetto';
$string['settings_fieldmap_field_country'] = 'Paese';
$string['settings_fieldmap_field_department'] = 'Reparto';
$string['settings_fieldmap_field_displayName'] = 'Nome visualizzato';
$string['settings_fieldmap_field_surname'] = 'Cognome';
$string['settings_fieldmap_field_faxNumber'] = 'Numero fax';
$string['settings_fieldmap_field_telephoneNumber'] = 'Numero di telefono';
$string['settings_fieldmap_field_givenName'] = 'Nome';
$string['settings_fieldmap_field_jobTitle'] = 'Qualifica professionale';
$string['settings_fieldmap_field_mail'] = 'Email';
$string['settings_fieldmap_field_mobile'] = 'Cellulare';
$string['settings_fieldmap_field_postalCode'] = 'CAP';
$string['settings_fieldmap_field_preferredLanguage'] = 'Lingua';
$string['settings_fieldmap_field_state'] = 'Provincia/Regione';
$string['settings_fieldmap_field_streetAddress'] = 'Indirizzo';
$string['settings_fieldmap_field_userPrincipalName'] = 'Nome utente (UPN)';
$string['settings_fieldmap_field_employeeId'] = 'ID Dipendente';
$string['settings_fieldmap_field_businessPhones'] = 'Telefono ufficio';
$string['settings_fieldmap_field_mobilePhone'] = 'Telefono cellulare';
$string['settings_fieldmap_field_officeLocation'] = 'Ufficio';
$string['settings_fieldmap_field_preferredName'] = 'Nome preferito';
$string['settings_fieldmap_field_manager'] = 'Nome responsabile';
$string['settings_fieldmap_field_manager_email'] = 'Email responsabile';
$string['settings_fieldmap_field_teams'] = 'Team';
$string['settings_fieldmap_field_groups'] = 'Gruppi';
$string['settings_fieldmap_field_roles'] = 'Ruoli';
$string['settings_fieldmap_field_onPremisesSamAccountName'] = 'Nome account SAM locale';
$string['settings_fieldmap_field_extensionattribute'] = 'Attributo estensione {$a}';
$string['settings_fieldmap_field_sds_school_id'] = 'ID scuola SDS ({$a})';
$string['settings_fieldmap_field_sds_school_name'] = 'Nome scuola SDS ({$a})';
$string['settings_fieldmap_field_sds_school_role'] = 'Ruolo scuola SDS ("Studente" o "Insegnante")';
$string['settings_fieldmap_field_sds_student_externalId'] = 'ID esterno studente SDS';
$string['settings_fieldmap_field_sds_student_birthDate'] = 'Data di nascita studente SDS';
$string['settings_fieldmap_field_sds_student_grade'] = 'Classe studente SDS';
$string['settings_fieldmap_field_sds_student_graduationYear'] = 'Anno diploma studente SDS';
$string['settings_fieldmap_field_sds_student_studentNumber'] = 'Numero studente SDS';
$string['settings_fieldmap_field_sds_teacher_externalId'] = 'ID esterno docente SDS';
$string['settings_fieldmap_field_sds_teacher_teacherNumber'] = 'Numero docente SDS';

// Messaggi di errore
$string['erroriomadoidccall'] = 'Errore in OpenID Connect. Controlla i log per maggiori informazioni.';
$string['erroriomadoidccall_message'] = 'Errore in OpenID Connect: {$a}';
$string['errorinvalidredirect_message'] = 'L\'URL a cui stai cercando di accedere non esiste.';
$string['errorinvalidcertificatesource'] = 'Origine certificato non valida';
$string['error_empty_tenantnameorguid'] = 'Il nome o GUID del tenant non può essere vuoto quando si utilizza Microsoft Entra ID (v1.0) o Microsoft identity platform (v2.0).';
$string['error_invalid_client_authentication_method'] = 'Metodo di autenticazione client non valido';
$string['error_empty_client_secret'] = 'Il segreto client non può essere vuoto quando si utilizza il metodo di autenticazione "segreto"';
$string['error_empty_client_private_key'] = 'La chiave privata del certificato client non può essere vuota quando si utilizza il metodo di autenticazione "certificato"';
$string['error_empty_client_cert'] = 'La chiave pubblica del certificato client non può essere vuota quando si utilizza il metodo di autenticazione "certificato"';
$string['error_empty_client_private_key_file'] = 'Il file della chiave privata del certificato client non può essere vuoto quando si utilizza il metodo di autenticazione "certificato"';
$string['error_empty_client_cert_file'] = 'Il file della chiave pubblica del certificato client non può essere vuoto quando si utilizza il metodo di autenticazione "certificato"';
$string['error_empty_tenantname_or_guid'] = 'Il nome o GUID del tenant non può essere vuoto quando si utilizza il metodo di autenticazione "certificato"';
$string['error_endpoint_mismatch_auth_endpoint'] = 'L\'endpoint di autorizzazione configurato non corrisponde al tipo di IdP configurato.<br/>
<ul>
<li>Quando si utilizza il tipo di IdP "Microsoft Entra ID (v1.0)", utilizzare l\'endpoint v1.0, es. https://login.microsoftonline.com/common/oauth2/authorize</li>
<li>Quando si utilizza il tipo di IdP "Microsoft identity platform (v2.0)", utilizzare l\'endpoint v2.0, es. https://login.microsoftonline.com/common/oauth2/v2.0/authorize</li>
</ul>';
$string['error_endpoint_mismatch_token_endpoint'] = 'L\'endpoint token configurato non corrisponde al tipo di IdP configurato.<br/>
<ul>
<li>Quando si utilizza il tipo di IdP "Microsoft Entra ID (v1.0)", utilizzare l\'endpoint v1.0, es. https://login.microsoftonline.com/common/oauth2/token</li>
<li>Quando si utilizza il tipo di IdP "Microsoft identity platform (v2.0)", utilizzare l\'endpoint v2.0, es. https://login.microsoftonline.com/common/oauth2/v2.0/token</li>
</ul>';
$string['error_tenant_specific_endpoint_required'] = 'Quando si utilizza il tipo di IdP "Microsoft identity platform (v2.0)" con il metodo di autenticazione "Certificato", è richiesto un endpoint specifico del tenant (cioè non common/organizations/consumers).';
$string['error_empty_iomadoidcresource'] = 'La risorsa non può essere vuota quando si utilizza Microsoft Entra ID (v1.0) o altri tipi di IdP.';
$string['erroruserwithusernamealreadyexists'] = 'Si è verificato un errore durante il tentativo di rinominare il tuo account Moodle. Un utente Moodle con il nuovo nome utente esiste già. Chiedi all\'amministratore del sito di risolvere prima questo problema.';
$string['error_no_response_available'] = 'Nessuna risposta disponibile.';

// Eventi
$string['eventuserauthed'] = 'Utente autorizzato con OpenID Connect';
$string['eventusercreated'] = 'Utente creato con OpenID Connect';
$string['eventuserconnected'] = 'Utente connesso a OpenID Connect';
$string['eventuserloggedin'] = 'Utente autenticato con OpenID Connect';
$string['eventuserdisconnected'] = 'Utente disconnesso da OpenID Connect';
$string['eventuserrenameattempt'] = 'Il plugin auth_iomadoidc ha tentato di rinominare un utente';

// Capabilities
$string['iomadoidc:manageconnection'] = 'Consenti connessione e disconnessione OpenID';
$string['iomadoidc:manageconnectionconnect'] = 'Consenti connessione OpenID';
$string['iomadoidc:manageconnectiondisconnect'] = 'Consenti disconnessione OpenID';

// Privacy
$string['privacy:metadata:auth_iomadoidc'] = 'Autenticazione OpenID Connect';
$string['privacy:metadata:auth_iomadoidc_prevlogin'] = 'Metodi di login precedenti per annullare le connessioni Microsoft 365';
$string['privacy:metadata:auth_iomadoidc_prevlogin:userid'] = 'L\'ID dell\'utente Moodle';
$string['privacy:metadata:auth_iomadoidc_prevlogin:method'] = 'Il metodo di login precedente';
$string['privacy:metadata:auth_iomadoidc_prevlogin:password'] = 'Il campo password utente precedente (crittografato).';
$string['privacy:metadata:auth_iomadoidc_token'] = 'Token OpenID Connect';
$string['privacy:metadata:auth_iomadoidc_token:iomadoidcuniqid'] = 'L\'identificativo univoco utente OIDC.';
$string['privacy:metadata:auth_iomadoidc_token:username'] = 'Il nome utente dell\'utente Moodle';
$string['privacy:metadata:auth_iomadoidc_token:userid'] = 'L\'ID utente dell\'utente Moodle';
$string['privacy:metadata:auth_iomadoidc_token:iomadoidcusername'] = 'Il nome utente dell\'utente OIDC';
$string['privacy:metadata:auth_iomadoidc_token:scope'] = 'Lo scope del token';
$string['privacy:metadata:auth_iomadoidc_token:tokenresource'] = 'La risorsa del token';
$string['privacy:metadata:auth_iomadoidc_token:authcode'] = 'Il codice di autorizzazione per il token';
$string['privacy:metadata:auth_iomadoidc_token:token'] = 'Il token';
$string['privacy:metadata:auth_iomadoidc_token:expiry'] = 'La scadenza del token';
$string['privacy:metadata:auth_iomadoidc_token:refreshtoken'] = 'Il refresh token';
$string['privacy:metadata:auth_iomadoidc_token:idtoken'] = 'L\'ID token';

// Pannello controllo utente
$string['ucp_general_intro'] = 'Qui puoi gestire la tua connessione a {$a}. Se abilitato, potrai utilizzare il tuo account {$a} per accedere a Moodle invece di un nome utente e password separati. Una volta connesso, non dovrai più ricordare un nome utente e una password per Moodle, tutti gli accessi saranno gestiti da {$a}.';
$string['ucp_login_start'] = 'Inizia a usare {$a} per accedere a Moodle';
$string['ucp_login_start_desc'] = 'Questo cambierà il tuo account per utilizzare {$a} per accedere a Moodle. Una volta abilitato, effettuerai l\'accesso utilizzando le tue credenziali {$a} - il tuo attuale nome utente e password Moodle non funzioneranno. Puoi disconnettere il tuo account in qualsiasi momento e tornare ad accedere normalmente.';
$string['ucp_login_stop'] = 'Smetti di usare {$a} per accedere a Moodle';
$string['ucp_login_stop_desc'] = 'Attualmente stai utilizzando {$a} per accedere a Moodle. Cliccando "Smetti di usare il login {$a}" disconnetterai il tuo account Moodle da {$a}. Non sarai più in grado di accedere a Moodle con il tuo account {$a}. Ti verrà chiesto di creare un nome utente e una password, e da quel momento potrai accedere a Moodle direttamente.';
$string['ucp_login_status'] = 'Il login {$a} è:';
$string['ucp_status_enabled'] = 'Abilitato';
$string['ucp_status_disabled'] = 'Disabilitato';
$string['ucp_disconnect_title'] = 'Disconnessione {$a}';
$string['ucp_disconnect_details'] = 'Questo disconnetterà il tuo account Moodle da {$a}. Dovrai creare un nome utente e una password per accedere a Moodle.';
$string['ucp_title'] = 'Gestione {$a}';
$string['ucp_o365accountconnected'] = 'Questo account Microsoft 365 è già connesso con un altro account Moodle.';

// Pulizia token OIDC
$string['cleanup_iomadoidc_tokens'] = 'Pulizia token OpenID Connect';
$string['unmatched'] = 'Non corrispondente';
$string['delete_token'] = 'Elimina token';
$string['mismatched'] = 'Non corrispondente';
$string['na'] = 'n/d';
$string['mismatched_details'] = 'Il record token contiene il nome utente "{$a->tokenusername}"; l\'utente Moodle corrispondente ha il nome utente "{$a->moodleusername}".';
$string['delete_token_and_reference'] = 'Elimina token e riferimento';
$string['table_token_id'] = 'ID record token';
$string['table_iomadoidc_username'] = 'Nome utente OIDC';
$string['table_token_unique_id'] = 'ID univoco OIDC';
$string['table_matching_status'] = 'Stato corrispondenza';
$string['table_matching_details'] = 'Dettagli';
$string['table_action'] = 'Azione';
$string['token_deleted'] = 'Token eliminato con successo';
$string['no_token_to_cleanup'] = 'Non ci sono token OIDC da pulire.';

$string['errorusermatched'] = 'L\'account Microsoft 365 "{$a->entraidupn}" è già associato all\'utente Moodle "{$a->username}". Per completare la connessione, accedi prima come quell\'utente Moodle e segui le istruzioni nel blocco Microsoft.';
$string['cfg_cleanupiomadoidctokens_key'] = 'Pulisci token OpenID Connect';
$string['cfg_cleanupiomadoidctokens_desc'] = 'Se i tuoi utenti riscontrano problemi ad accedere con il loro account Microsoft 365, prova a pulire i token OpenID Connect. Questo rimuove token incompleti e orfani che possono causare errori. ATTENZIONE: Questo potrebbe interrompere i login in corso, quindi è meglio farlo durante i periodi di inattività.';
$string['settings_section_basic'] = 'Impostazioni di base';
$string['settings_section_authentication'] = 'Autenticazione';
$string['settings_section_endpoints'] = 'Endpoint';
$string['settings_section_other_params'] = 'Altri parametri';
$string['settings_section_secret_expiry_notification'] = 'Notifica scadenza segreto';
$string['authentication_and_endpoints_saved'] = 'Impostazioni autenticazione e endpoint aggiornate.';
$string['application_updated'] = 'Le impostazioni dell\'applicazione OpenID Connect sono state aggiornate.';
$string['application_updated_microsoft'] = 'Le impostazioni dell\'applicazione OpenID Connect sono state aggiornate.<br/>
<span class="warning" style="color: red;">L\'amministratore Azure dovrà <b>Fornire il consenso admin</b> e <b>Verificare la configurazione</b> nuovamente nella <a href="{$a}" target="_blank">pagina di configurazione integrazione Microsoft 365</a> se le impostazioni "Tipo Identity Provider (IdP)" o "Metodo di autenticazione client" sono state aggiornate.</span>';
$string['application_not_changed'] = 'Le impostazioni dell\'applicazione OpenID Connect non sono state modificate.';

$string['event_debug'] = 'Messaggio di debug';

$string['task_cleanup_iomadoidc_state_and_token'] = 'Pulisci stato OIDC e token non validi';

$string['errorauthdisconnectemptypassword'] = 'La password non può essere vuota';
$string['errorauthdisconnectemptyusername'] = 'Il nome utente non può essere vuoto';
$string['errorauthdisconnectusernameexists'] = 'Quel nome utente è già in uso. Scegli un nome diverso.';
$string['errorauthdisconnectnewmethod'] = 'Usa metodo di login';
$string['errorauthdisconnectinvalidmethod'] = 'Metodo di login ricevuto non valido.';
$string['errorauthdisconnectifmanual'] = 'Se usi il metodo di login manuale, inserisci le credenziali sotto.';
$string['errorauthgeneral'] = 'Si è verificato un problema durante il login. Contatta il tuo amministratore per assistenza.';
$string['errorauthinvalididtoken'] = 'id_token ricevuto non valido.';
$string['errorauthloginfailednouser'] = 'Login non valido: Utente non trovato in Moodle. Se questo sito ha l\'impostazione "authpreventaccountcreation" abilitata, questo potrebbe significare che hai bisogno che un amministratore crei prima un account per te.';
$string['errorauthloginfaileddupemail'] = 'Login non valido: Un account esistente su questo Moodle ha lo stesso indirizzo email dell\'account che stai cercando di creare, e l\'impostazione "Consenti account con stessa email" (allowaccountssameemail) è disabilitata.';
$string['errorauthnoauthcode'] = 'Nessun codice di autorizzazione ricevuto dal server di identità. I log degli errori potrebbero contenere più informazioni.';
$string['errorauthnocredsandendpoints'] = 'Configura le credenziali client e gli endpoint OpenID Connect.';
$string['errorauthnohttpclient'] = 'Imposta un client HTTP.';
$string['errorauthnoidtoken'] = 'id_token OpenID Connect non ricevuto.';
$string['errorauthnoaccesstoken'] = 'Token di accesso non ricevuto.';
$string['errorauthunknownstate'] = 'Stato sconosciuto.';
$string['errorauthuseralreadyconnected'] = 'Sei già connesso a un utente OpenID Connect diverso.';
$string['errorauthuserconnectedtodifferent'] = 'L\'utente OpenID Connect che si è autenticato è già connesso a un utente Moodle.';
$string['errorbadloginflow'] = 'Tipo di autenticazione specificato non valido. Nota: Se ricevi questo errore dopo un\'installazione o aggiornamento recente, svuota la cache di Moodle.';
$string['errorjwtbadpayload'] = 'Impossibile leggere il payload JWT.';
$string['errorjwtcouldnotreadheader'] = 'Impossibile leggere l\'header JWT';
$string['errorjwtempty'] = 'JWT vuoto o non stringa ricevuto.';
$string['errorjwtinvalidheader'] = 'Header JWT non valido';
$string['errorjwtmalformed'] = 'JWT malformato ricevuto.';
$string['errorjwtunsupportedalg'] = 'JWS Alg o JWE non supportato';
$string['errorlogintoconnectedaccount'] = 'Questo utente Microsoft 365 è connesso a un account Moodle, ma il login OpenID Connect non è abilitato per questo account Moodle. Effettua il login all\'account Moodle usando il metodo di autenticazione definito per l\'account per utilizzare le funzionalità Microsoft 365';
$string['erroriomadoidcnotenabled'] = 'Il plugin di autenticazione OpenID Connect non è abilitato.';
$string['errornodisconnectionauthmethod'] = 'Impossibile disconnettere perché non c\'è un plugin di autenticazione abilitato su cui ripiegare. (il metodo di login precedente dell\'utente o il metodo di login manuale).';
$string['erroriomadoidcclientinvalidendpoint'] = 'URI endpoint ricevuto non valido.';
$string['erroriomadoidcclientnocreds'] = 'Imposta le credenziali client con setcreds';
$string['erroriomadoidcclientnoauthendpoint'] = 'Nessun endpoint di autorizzazione impostato. Imposta con $this->setendpoints';
$string['erroriomadoidcclientnotokenendpoint'] = 'Nessun endpoint token impostato. Imposta con $this->setendpoints';
$string['erroriomadoidcclientinsecuretokenendpoint'] = 'L\'endpoint token deve utilizzare SSL/TLS per questo.';
$string['errorrestricted'] = 'Questo sito ha restrizioni sugli utenti che possono effettuare il login con OpenID Connect. Queste restrizioni attualmente impediscono di completare questo tentativo di login.';
$string['errorucpinvalidaction'] = 'Azione ricevuta non valida.';
$string['erroriomadoidccall'] = 'Errore in OpenID Connect. Controlla i log per maggiori informazioni.';
$string['erroriomadoidccall_message'] = 'Errore in OpenID Connect: {$a}';
$string['errorinvalidredirect_message'] = 'L\'URL a cui stai cercando di reindirizzare non esiste.';
$string['errorinvalidcertificatesource'] = 'Sorgente certificato non valida';
$string['error_empty_tenantnameorguid'] = 'Il nome o GUID del tenant non può essere vuoto quando si utilizzano gli IdP Microsoft Entra ID (v1.0) o Microsoft identity platform (v2.0).';
$string['error_invalid_client_authentication_method'] = "Metodo di autenticazione client non valido";
$string['error_empty_client_secret'] = 'Il segreto client non può essere vuoto quando si utilizza il metodo di autenticazione "segreto"';
$string['error_empty_client_private_key'] = 'La chiave privata del certificato client non può essere vuota quando si utilizza il metodo di autenticazione "certificato"';
$string['error_empty_client_cert'] = 'La chiave pubblica del certificato client non può essere vuota quando si utilizza il metodo di autenticazione "certificato"';
$string['error_empty_client_private_key_file'] = 'Il file della chiave privata del certificato client non può essere vuoto quando si utilizza il metodo di autenticazione "certificato"';
$string['error_empty_client_cert_file'] = 'Il file della chiave pubblica del certificato client non può essere vuoto quando si utilizza il metodo di autenticazione "certificato"';
$string['error_empty_tenantname_or_guid'] = 'Il nome o GUID del tenant non può essere vuoto quando si utilizza il metodo di autenticazione "certificato"';
$string['error_endpoint_mismatch_auth_endpoint'] = 'L\'endpoint di autorizzazione configurato non corrisponde al tipo di IdP configurato.<br/>
<ul>
<li>Quando si utilizza il tipo di IdP "Microsoft Entra ID (v1.0)", usa l\'endpoint v1.0, es. https://login.microsoftonline.com/common/oauth2/authorize</li>
<li>Quando si utilizza il tipo di IdP "Microsoft identity platform (v2.0)", usa l\'endpoint v2.0, es. https://login.microsoftonline.com/common/oauth2/v2.0/authorize</li>
</ul>';
$string['error_endpoint_mismatch_token_endpoint'] = 'L\'endpoint token configurato non corrisponde al tipo di IdP configurato.<br/>
<ul>
<li>Quando si utilizza il tipo di IdP "Microsoft Entra ID (v1.0)", usa l\'endpoint v1.0, es. https://login.microsoftonline.com/common/oauth2/token</li>
<li>Quando si utilizza il tipo di IdP "Microsoft identity platform (v2.0)", usa l\'endpoint v2.0, es. https://login.microsoftonline.com/common/oauth2/v2.0/authorize</li>
</ul>';
$string['error_tenant_specific_endpoint_required'] = 'Quando si utilizza il tipo di IdP "Microsoft identity platform (v2.0)" e il metodo di autenticazione "Certificato", è richiesto un endpoint specifico del tenant (cioè non common/organizations/consumers).';
$string['error_empty_iomadoidcresource'] = 'La risorsa non può essere vuota quando si utilizza Microsoft Entra ID (v1.0) o altri tipi di IdP.';
$string['erroruserwithusernamealreadyexists'] = 'Si è verificato un errore durante il tentativo di rinominare il tuo account Moodle. Un utente Moodle con il nuovo nome utente esiste già. Chiedi all\'amministratore del sito di risolvere prima questo problema.';
$string['error_no_response_available'] = 'Nessuna risposta disponibile.';

$string['eventuserauthed'] = 'Utente autorizzato con OpenID Connect';
$string['eventusercreated'] = 'Utente creato con OpenID Connect';
$string['eventuserconnected'] = 'Utente connesso a OpenID Connect';
$string['eventuserloggedin'] = 'Utente loggato con OpenID Connect';
$string['eventuserdisconnected'] = 'Utente disconnesso da OpenID Connect';
$string['eventuserrenameattempt'] = 'Il plugin auth_iomadoidc ha tentato di rinominare un utente';

$string['iomadoidc:manageconnection'] = 'Consenti connessione e disconnessione OpenID';
$string['iomadoidc:manageconnectionconnect'] = 'Consenti connessione OpenID';
$string['iomadoidc:manageconnectiondisconnect'] = 'Consenti disconnessione OpenID';

$string['privacy:metadata:auth_iomadoidc'] = 'Autenticazione OpenID Connect';
$string['privacy:metadata:auth_iomadoidc_prevlogin'] = 'Metodi di login precedenti per annullare le connessioni Microsoft 365';
$string['privacy:metadata:auth_iomadoidc_prevlogin:userid'] = 'L\'ID dell\'utente Moodle';
$string['privacy:metadata:auth_iomadoidc_prevlogin:method'] = 'Il metodo di login precedente';
$string['privacy:metadata:auth_iomadoidc_prevlogin:password'] = 'Il campo password utente precedente (crittografato).';
$string['privacy:metadata:auth_iomadoidc_token'] = 'Token OpenID Connect';
$string['privacy:metadata:auth_iomadoidc_token:iomadoidcuniqid'] = 'L\'identificatore univoco utente OIDC.';
$string['privacy:metadata:auth_iomadoidc_token:username'] = 'Il nome utente dell\'utente Moodle';
$string['privacy:metadata:auth_iomadoidc_token:userid'] = 'L\'ID utente dell\'utente Moodle';
$string['privacy:metadata:auth_iomadoidc_token:iomadoidcusername'] = 'Il nome utente dell\'utente OIDC';
$string['privacy:metadata:auth_iomadoidc_token:scope'] = 'Lo scope del token';
$string['privacy:metadata:auth_iomadoidc_token:tokenresource'] = 'La risorsa del token';
$string['privacy:metadata:auth_iomadoidc_token:authcode'] = 'Il codice di autorizzazione per il token';
$string['privacy:metadata:auth_iomadoidc_token:token'] = 'Il token';
$string['privacy:metadata:auth_iomadoidc_token:expiry'] = 'La scadenza del token';
$string['privacy:metadata:auth_iomadoidc_token:refreshtoken'] = 'Il token di refresh';
$string['privacy:metadata:auth_iomadoidc_token:idtoken'] = 'L\'ID token';

// In the following strings, $a refers to a customizable name for the identity manager. For example, this could be
// "Microsoft 365", "OpenID Connect", etc.
$string['ucp_general_intro'] = 'Qui puoi gestire la tua connessione a {$a}. Se abilitato, potrai utilizzare il tuo account {$a} per accedere a Moodle invece di un nome utente e password separati. Una volta connesso, non dovrai più ricordare un nome utente e password per Moodle, tutti i login saranno gestiti da {$a}.';
$string['ucp_login_start'] = 'Inizia a usare {$a} per accedere a Moodle';
$string['ucp_login_start_desc'] = 'Questo cambierà il tuo account per utilizzare {$a} per accedere a Moodle. Una volta abilitato, effettuerai il login usando le tue credenziali {$a} - il tuo nome utente e password Moodle attuali non funzioneranno. Puoi disconnettere il tuo account in qualsiasi momento e tornare al login normale.';
$string['ucp_login_stop'] = 'Smetti di usare {$a} per accedere a Moodle';
$string['ucp_login_stop_desc'] = 'Attualmente stai usando {$a} per accedere a Moodle. Cliccando "Smetti di usare il login {$a}" disconnetterai il tuo account Moodle da {$a}. Non potrai più accedere a Moodle con il tuo account {$a}. Ti verrà chiesto di creare un nome utente e password, e da quel momento potrai accedere a Moodle direttamente.';
$string['ucp_login_status'] = 'Il login {$a} è:';
$string['ucp_status_enabled'] = 'Abilitato';
$string['ucp_status_disabled'] = 'Disabilitato';
$string['ucp_disconnect_title'] = 'Disconnessione {$a}';
$string['ucp_disconnect_details'] = 'Questo disconnetterà il tuo account Moodle da {$a}. Dovrai creare un nome utente e password per accedere a Moodle.';
$string['ucp_title'] = 'Gestione {$a}';
$string['ucp_o365accountconnected'] = 'Questo account Microsoft 365 è già connesso a un altro account Moodle.';

// Clean up OIDC tokens.
$string['cleanup_iomadoidc_tokens'] = 'Pulizia token OpenID Connect';
$string['unmatched'] = 'Non corrispondente';
$string['delete_token'] = 'Elimina token';
$string['mismatched'] = 'Non corrispondente';
$string['na'] = 'n/d';
$string['mismatched_details'] = 'Il record del token contiene il nome utente "{$a->tokenusername}"; l\'utente Moodle corrispondente ha nome utente "{$a->moodleusername}".';
$string['delete_token_and_reference'] = 'Elimina token e riferimento';
$string['table_token_id'] = 'ID record token';
$string['table_iomadoidc_username'] = 'Nome utente OIDC';
$string['table_token_unique_id'] = 'ID univoco OIDC';
$string['table_matching_status'] = 'Stato corrispondenza';
$string['table_matching_details'] = 'Dettagli';
$string['table_action'] = 'Azione';
$string['token_deleted'] = 'Token eliminato con successo';
$string['no_token_to_cleanup'] = 'Non ci sono token OIDC da pulire.';

$string['errorusermatched'] = 'L\'account Microsoft 365 "{$a->entraidupn}" è già abbinato all\'utente Moodle "{$a->username}". Per completare la connessione, effettua prima il login come quell\'utente Moodle e segui le istruzioni nel blocco Microsoft.';

// User mapping options.
$string['update_oncreate_and_onlogin'] = 'Alla creazione e ad ogni login';
$string['update_oncreate_and_onlogin_and_usersync'] = 'Alla creazione, ad ogni login e ad ogni esecuzione dell\'attività di sincronizzazione utenti';
$string['update_onlogin_and_usersync'] = 'Ad ogni login e ad ogni esecuzione dell\'attività di sincronizzazione utenti';

// Remote fields.
$string['settings_fieldmap_feild_not_mapped'] = '(non mappato)';
$string['settings_fieldmap_field_city'] = 'Città';
$string['settings_fieldmap_field_companyName'] = 'Nome azienda';
$string['settings_fieldmap_field_objectId'] = 'ID oggetto';
$string['settings_fieldmap_field_country'] = 'Paese';
$string['settings_fieldmap_field_department'] = 'Dipartimento';
$string['settings_fieldmap_field_displayName'] = 'Nome visualizzato';
$string['settings_fieldmap_field_surname'] = 'Cognome';
$string['settings_fieldmap_field_faxNumber'] = 'Numero fax';
$string['settings_fieldmap_field_telephoneNumber'] = 'Numero telefono';
$string['settings_fieldmap_field_givenName'] = 'Nome';
$string['settings_fieldmap_field_jobTitle'] = 'Qualifica';
$string['settings_fieldmap_field_mail'] = 'Email';
$string['settings_fieldmap_field_mobile'] = 'Cellulare';
$string['settings_fieldmap_field_postalCode'] = 'CAP';
$string['settings_fieldmap_field_preferredLanguage'] = 'Lingua';
$string['settings_fieldmap_field_state'] = 'Stato/Provincia';
$string['settings_fieldmap_field_streetAddress'] = 'Indirizzo';
$string['settings_fieldmap_field_userPrincipalName'] = 'Nome utente (UPN)';
$string['settings_fieldmap_field_employeeId'] = 'ID dipendente';
$string['settings_fieldmap_field_businessPhones'] = 'Telefono ufficio';
$string['settings_fieldmap_field_mobilePhone'] = 'Telefono cellulare';
$string['settings_fieldmap_field_officeLocation'] = 'Ufficio';
$string['settings_fieldmap_field_preferredName'] = 'Nome preferito';
$string['settings_fieldmap_field_manager'] = 'Nome responsabile';
$string['settings_fieldmap_field_manager_email'] = 'Email responsabile';
$string['settings_fieldmap_field_teams'] = 'Team';
$string['settings_fieldmap_field_groups'] = 'Gruppi';
$string['settings_fieldmap_field_roles'] = 'Ruoli';
$string['settings_fieldmap_field_onPremisesSamAccountName'] = 'Nome account SAM on-premises';
$string['settings_fieldmap_field_extensionattribute'] = 'Attributo estensione {$a}';
$string['settings_fieldmap_field_sds_school_id'] = 'ID scuola SDS ({$a})';
$string['settings_fieldmap_field_sds_school_name'] = 'Nome scuola SDS ({$a})';
$string['settings_fieldmap_field_sds_school_role'] = 'Ruolo scuola SDS ("Studente" o "Docente")';
$string['settings_fieldmap_field_sds_student_externalId'] = 'ID esterno studente SDS';
$string['settings_fieldmap_field_sds_student_birthDate'] = 'Data di nascita studente SDS';
$string['settings_fieldmap_field_sds_student_grade'] = 'Classe studente SDS';
$string['settings_fieldmap_field_sds_student_graduationYear'] = 'Anno di diploma studente SDS';
$string['settings_fieldmap_field_sds_student_studentNumber'] = 'Numero studente SDS';
$string['settings_fieldmap_field_sds_teacher_externalId'] = 'ID esterno docente SDS';
$string['settings_fieldmap_field_sds_teacher_teacherNumber'] = 'Numero docente SDS';
