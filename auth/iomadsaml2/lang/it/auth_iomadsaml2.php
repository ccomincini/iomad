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
 * Traduzione italiana per auth_iomadsaml2
 *
 * @package   auth_iomadsaml2
 * @copyright Brendan Heywood <brendan@catalyst-au.net>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['alterlogout'] = 'URL di logout alternativo';
$string['alterlogout_help'] = 'L\'URL verso cui reindirizzare un utente dopo che tutti i meccanismi di logout interni sono stati eseguiti';
$string['anyauth'] = 'Consenti qualsiasi tipo di autenticazione';
$string['anyauth_help'] = 'Sì: Consentire il login SAML per tutti gli utenti? No: Solo gli utenti che hanno iomadsaml2 come tipo di autenticazione.';
$string['anyauthotherdisabled'] = 'Hai effettuato l\'accesso correttamente come \'{$a->username}\' ma il tuo tipo di autenticazione \'{$a->auth}\' è disabilitato.';
$string['attemptsignout'] = 'Tenta disconnessione IdP';
$string['attemptsignout_help'] = 'Questo tenterà di comunicare con l\'IdP per inviare una richiesta di disconnessione';
$string['auth_iomadsaml2description'] = 'Autenticazione con un Identity Provider SAML2 (IdP)';
$string['auth_iomadsaml2blockredirectdescription'] = 'Reindirizza o visualizza un messaggio per i login SAML2 in base alle restrizioni di gruppo configurate';
$string['autocreate'] = 'Creazione automatica utenti';
$string['autocreate_help'] = 'Consenti la creazione di utenti Moodle su richiesta';
$string['autologin'] = 'Auto-login';
$string['autologin_help'] = 'Nelle pagine che consentono l\'accesso ospite senza login, accedi automaticamente gli utenti a Moodle con un account utente reale se sono già autenticati sull\'IdP (usando l\'autenticazione passiva).';
$string['autologinbysession'] = 'Verifica una volta per sessione';
$string['autologinbycookie'] = 'Verifica quando il cookie specificato esiste o cambia';
$string['autologincookie'] = 'Cookie per auto-login';
$string['autologincookie_help'] = 'Nome del cookie usato per decidere quando tentare l\'auto-login (rilevante solo se è selezionata l\'opzione cookie sopra).';
$string['availableidps'] = 'Seleziona gli IdP disponibili';
$string['availableidps_help'] = 'Se un XML di metadati IdP contiene più entità IdP, dovrai selezionare quali entità sono disponibili per il login degli utenti.';
$string['blockredirectheading'] = 'Azioni di blocco account';
$string['attrsimple'] = 'Semplifica attributi';
$string['attrsimple_help'] = 'Vari IdP come ADFS usano chiavi di attributi lunghe come URN o nomi di schema XML con namespace. Se impostato su Sì, questo le semplificherà, ad es. mapperà http://schemas.xmlsoap.org/ws/2005/05/identity/claims/givenname a \'givenname\'.';
$string['certificatedetails'] = 'Dettagli certificato';
$string['certificatedetailshelp'] = '<h1>Contenuto del certificato pubblico SAML2 generato automaticamente</h1><p>Il percorso del certificato è qui:</p>';
$string['checkcertificateexpiry'] = 'Scadenza certificato SAML';
$string['checkcertificateexpired'] = 'Il certificato SAML è scaduto {$a} fa';
$string['checkcertificatewarn'] = 'Il certificato SAML scadrà tra {$a}';
$string['checkcertificateok'] = 'Il certificato SAML scadrà tra {$a}';
$string['certificate_help'] = 'Rigenera la chiave privata e il certificato usati da questo SP. | <a href=\'{$a}\'>Visualizza certificato SP</a>';
$string['certificatelock_help'] = 'Il blocco dei certificati impedirà che vengano sovrascritti una volta generati.';
$string['certificatelock'] = 'Blocca certificato';
$string['certificatelock_locked'] = 'Il certificato è bloccato';
$string['certificatelock_lockedmessage'] = 'I certificati sono attualmente bloccati.';
$string['certificatelock_unlock'] = 'Sblocca certificati';
$string['certificatelock_regenerate'] = 'Certificati non rigenerati perché sono stati bloccati!';
$string['certificatelock_warning'] = 'Attenzione. Stai per bloccare i certificati, sei sicuro di volerlo fare? <br> I certificati non sono attualmente bloccati';
$string['certificate'] = 'Rigenera certificato';
$string['commonname'] = 'Nome comune';
$string['countryname'] = 'Paese';
$string['debug'] = 'Debug';
$string['debug_help'] = '<p>Questo aggiunge debug extra al normale log di Moodle | <a href=\'{$a}\'>Visualizza configurazione SSP</a></p>';
$string['duallogin'] = 'Doppio login';
$string['duallogin_help'] = '
<p>Se attivo, gli utenti vedranno sia il login manuale che un pulsante di login SAML. Se disattivo, saranno sempre portati direttamente alla pagina di login dell\'IdP.</p>
<p>Se passivo, gli utenti già autenticati sull\'IDP saranno automaticamente loggati, altrimenti saranno inviati alla pagina di login di Moodle.</p>
<p>Se disattivo, gli amministratori possono comunque vedere la pagina di login manuale tramite /login/index.php?saml=off</p>
<p>Se attivo, le pagine esterne possono collegare direttamente a Moodle usando SAML, es. /course/view.php?id=45&saml=on</p>
<p>Se impostato su test connessione IdP, la rete sarà verificata per la connettività e, se funzionante, il login SAML sarà avviato.</p>';
$string['emailtaken'] = 'Impossibile creare un nuovo account perché l\'indirizzo email {$a} è già registrato';
$string['emailtakenupdate'] = 'La tua email non è stata aggiornata perché l\'indirizzo email {$a} è già registrato';
$string['errorinvalidautologin'] = 'Richiesta di autologin non valida';
$string['errorparsingxml'] = 'Errore nell\'analisi XML: {$a}';
$string['exception'] = 'Eccezione SAML2: {$a}';
$string['expirydays'] = 'Scadenza in giorni';
$string['error'] = 'Errore di login';
$string['fielddelimiter'] = 'Delimitatore di campo';
$string['fielddelimiter_help'] = 'Il delimitatore da usare quando un campo riceve un array di valori dall\'IdP.';
$string['flaggedresponsetypemessage'] = 'Visualizza messaggio personalizzato';
$string['flaggedresponsetyperedirect'] = 'Reindirizza a URL esterno';
$string['flagredirecturl'] = 'URL di reindirizzamento';
$string['flagredirecturl_help'] = '
<p>L\'URL verso cui reindirizzare un utente a cui non è consentito accedere a Moodle in base alle restrizioni di gruppo configurate.</p>
<p>(Utilizzato solo quando il \'Tipo di risposta\' è \'Reindirizza a URL esterno\'.)</p>';
$string['flagmessage'] = 'Messaggio di risposta';
$string['flagmessage_help'] = '
<p>Il messaggio da visualizzare quando a un utente non è consentito accedere a Moodle in base alle restrizioni di gruppo configurate.</p>
<p>(Visualizzato solo quando il \'Tipo di risposta\' è \'Visualizza messaggio personalizzato\'.)</p>';
$string['flagmessage_default'] = 'Hai effettuato l\'accesso al tuo identity provider, tuttavia questo account ha accesso limitato a Moodle. Contatta il tuo amministratore per maggiori dettagli.';
$string['flagresponsetype'] = 'Tipo di risposta per blocco account';
$string['flagresponsetype_help'] = 'Se l\'accesso è bloccato in base alle restrizioni di gruppo configurate, come deve rispondere Moodle?';
$string['idpattr_help'] = 'Quale attributo IdP deve essere abbinato a un campo utente Moodle?';
$string['idpattr'] = 'Mappatura IdP';
$string['idpmetadata_badurl'] = 'Metadati non validi a {$a}';
$string['idpmetadata_help'] = 'Per usare più IdP inserisci ogni URL di metadati pubblici su una nuova riga.<br/>Per sovrascrivere un nome, inserisci il testo prima dell\'http. Es. "Nome IdP Forzato http://ssp.local/simplesaml/saml2/idp/metadata.php"';
$string['idpmetadata'] = 'XML metadati IdP O URL XML pubblico';
$string['idpmetadata_invalid'] = 'L\'XML dell\'IdP non è valido';
$string['idpmetadata_noentityid'] = 'L\'XML dell\'IdP non ha entityID';
$string['idpmetadatarefresh_help'] = 'Esegui un\'attività pianificata per aggiornare i metadati IdP dall\'URL dei metadati IdP';
$string['idpmetadatarefresh'] = 'Aggiornamento metadati IdP';
$string['idpnamedefault'] = 'Accedi tramite SAML2';
$string['idpnamedefault_varaible'] = 'Accedi tramite SAML2 ({$a})';
$string['idpname_help'] = 'es. myUNI - questo viene rilevato dai metadati e verrà mostrato nella pagina di doppio login (se abilitata)';
$string['idpname'] = 'Override etichetta IdP';
$string['localityname'] = 'Località';
$string['logdirdefault'] = '/tmp/';
$string['logdir_help'] = 'La directory di log in cui SSPHP scriverà, il file sarà chiamato simplesamlphp.log';
$string['logdir'] = 'Directory log';
$string['logtofile'] = 'Abilita log su file';
$string['logtofile_help'] = 'Attivando questa opzione l\'output del log SSPHP sarà reindirizzato a un file nella directory di log';
$string['manageidpsheading'] = 'Gestisci Identity Provider (IdP) disponibili';
$string['mdlattr_help'] = 'Quale campo utente Moodle deve essere abbinato all\'attributo IdP?';
$string['wantassertionssigned'] = 'Richiedi asserzioni firmate';
$string['wantassertionssigned_help'] = 'Se le asserzioni ricevute da questo SP devono essere firmate';
$string['assertionsconsumerservices'] = 'Servizi consumer asserzioni';
$string['assertionsconsumerservices_help'] = 'Elenco dei binding che l\'SP deve supportare';
$string['spentityid'] = 'Entity ID';
$string['spentityid_help'] = 'Sovrascrive l\'Entity Id del Service Provider. Nella maggior parte dei casi lasciare vuoto e verrà usato un buon valore predefinito.';
$string['allowcreate'] = 'Consenti creazione';
$string['allowcreate_help'] = 'Consenti la creazione di utenti IdP su richiesta';
$string['authncontext'] = 'AuthnContext';
$string['authncontext_help'] = 'Consente l\'aumento delle asserzioni. Lasciare vuoto se non richiesto';
$string['metadatafetchfailedunknown'] = 'Recupero metadati fallito: Errore cURL sconosciuto';
$string['multiidp:label:displayname'] = 'Nome visualizzato';
$string['multiidp:label:alias'] = 'Alias';
$string['multiidp:label:active'] = 'Attivo';
$string['multiidp:label:defaultidp'] = 'IdP predefinito';
$string['multiidp:label:admin'] = 'Solo per utenti admin';
$string['multiidp:label:admin_help'] = 'Qualsiasi utente che effettua il login usando questo IdP diventerà automaticamente un amministratore del sito';
$string['multiidp:label:whitelist'] = 'Indirizzi IP reindirizzati';
$string['multiidp:label:whitelist_help'] = 'Se impostato, forzerà i client a questo IdP. Formato: xxx.xxx.xxx.xxx/bitmask. Separa le sottoreti multiple su una nuova riga.';
$string['mdlattr'] = 'Mappatura Moodle';
$string['multiidpinfo'] = 'Descrizioni metadati Multi IdP';
<p>Se il campo sopra ha più IdP, è possibile mostrare una descrizione di ciascuno. Con metadati inseriti sopra come:</p>
<pre>
    Primo IdP https://first.example.com/metadata.xml
    Secondo IdP https://second.example.com/metadata.xml
    https://third.example.com/metadata.xml
</pre>
<p>Questo campo può contenere:</p>
<pre>
    Primo IdP||Una descrizione per il primo IdP.
    Secondo IdP||Una descrizione per il secondo IdP.
</pre>
<p>Se il metadato non ha un alias al suo fianco, non è possibile dargli una descrizione.</p>';
$string['metadatafetchfailed'] = 'Recupero metadati fallito: {$a}';
$string['metadatafetchfailedstatus'] = 'Recupero metadati fallito: Codice di stato {$a}';
<ul>
<li>È possibile inserire più metadati separandoli con una nuova riga</li>
<li>È possibile assegnare un alias a ciascun IdP anteponendo del testo all\'http. Es. "Alias IdP http://idpmetadata.url/"</li>
<li>Un IdP può ricevere un alias, andando a /login/index.php?idpalias={alias} l\'alias può essere passato per usare direttamente quell\'IdP</li>
</ul>';
$string['multiidpbuttons'] = 'Pulsanti con icone';
$string['multiidpdisplay'] = 'Tipo di visualizzazione Multi IdP';
$string['multiidpdisplay_help'] = 'Se un XML di metadati IdP contiene più entità IdP, come verrà visualizzato ciascun IdP disponibile?';
$string['multiidpdropdown'] = 'Elenco a discesa';
$string['nameidasattrib'] = 'Esponi NameID come attributo';
$string['nameidasattrib_help'] = 'Il claim NameID sarà esposto a SSPHP come attributo chiamato nameid';
$string['noattribute'] = 'Hai effettuato l\'accesso correttamente ma non è stato possibile trovare il tuo attributo \'{$a}\' per associarti a un account in Moodle.';
$string['noidpfound'] = 'L\'IdP \'{$a}\' non è stato trovato come IdP configurato.';
$string['noredirectips'] = 'Limita noredirect per IP';
$string['noredirectips_help'] = 'Quando il doppio login è disattivato e sono impostati degli IP, questo limiterà l\'uso di ?saml=off e ?noredirect=1 durante il login SAML agli utenti con sottoreti IP corrispondenti.';
$string['nouser'] = 'Hai effettuato l\'accesso correttamente come \'{$a}\' ma non hai un account in Moodle.';
$string['nullprivatecert'] = 'Creazione del certificato privato fallita.';
$string['nullpubliccert'] = 'Creazione del certificato pubblico fallita.';
$string['organizationalunitname'] = 'Unità organizzativa';
$string['organizationname'] = 'Organizzazione';
$string['passivemode'] = 'Modalità passiva';
$string['plugindisabled'] = 'Il plugin di autenticazione SAML2 è disabilitato';
$string['pluginname'] = 'SAML2';
$string['privatekeypass'] = 'Password chiave certificato privato';
$string['privatekeypass_help'] = 'Questa è usata per firmare il certificato locale di Moodle, cambiarla invaliderà il certificato corrente.';
$string['regenerateheading'] = 'Rigenera chiave privata e certificato';
$string['regenerate_submit'] = 'Rigenera';
$string['requestedattributes'] = 'Attributi richiesti';
$string['requestedattributes_help'] = 'Alcuni IdP necessitano che l\'SP dichiari quali attributi saranno richiesti o sono obbligatori. Aggiungi ogni attributo su una nuova riga e questi saranno presenti nei metadati SP sotto il tag <code>AttributeConsumingService</code>. Se vuoi che un campo sia obbligatorio, metti uno spazio e poi * dopo quella riga. {$a->example}';
$string['rememberidp'] = 'Ricorda servizio di login';
$string['required'] = 'Questo campo è obbligatorio';
$string['requireint'] = 'Questo campo è obbligatorio e deve essere un numero intero positivo';
$string['showidplink'] = 'Visualizza link IdP';
$string['showidplink_help'] = 'Questo visualizzerà il link IdP quando il sito è configurato.';
$string['source'] = 'Fonte: {$a}';
$string['spmetadata_help'] = '<a href=\'{$a}\'>Visualizza metadati Service Provider</a> | <a href=\'{$a}?download=1\'>Scarica metadati SP</a>
<p>Potrebbe essere necessario fornire questi all\'amministratore IdP per l\'inserimento nella whitelist.</p>';
$string['spmetadatasign_help'] = 'Firma i metadati SP.';
$string['spmetadatasign'] = 'Firma metadati SP';
$string['spmetadata'] = 'Metadati SP';
$string['tempdirdefault'] = '/tmp/simplesaml';
$string['tempdir_help'] = 'Una directory dove SimpleSAMLphp può salvare file temporanei';
$string['tempdir'] = 'Directory temporanea SimpleSAMLphp';
$string['sspversion'] = 'Versione SimpleSAMLphp';
$string['stateorprovincename'] = 'Stato o provincia';
$string['status'] = 'Stato';
$string['suspendeduser'] = 'Hai effettuato l\'accesso correttamente come \'{$a}\' ma il tuo account è stato sospeso in Moodle.';
$string['taskmetadatarefresh'] = 'Attività di aggiornamento metadati';
$string['test_auth_button_login'] = 'Login IdP';
$string['test_auth_button_logout'] = 'Logout IdP';
$string['test_auth_str'] = 'Test isAuthenticated e login';
$string['test_endpoint'] = 'URL di test connessione';
$string['test_endpoint_desc'] = 'Inserisci un URL per testare la connessione per il reindirizzamento IdP dal browser client. Alcuni utenti o reti potrebbero non avere connettività all\'IdP in base a permessi di account o rete.';
$string['test_idp_conn'] = 'Test connessione IdP';
$string['test_noticetestrequirements'] = 'Per usare questo test, il plugin deve essere configurato, abilitato e la modalità debug deve essere attiva nelle impostazioni del plugin.';
$string['test_passive_str'] = 'Test usando isPassive';
$string['testdebuggingdisabled'] = 'Per usare questa pagina di test il debug SAML deve essere attivo';
$string['tolower'] = 'Corrispondenza maiuscole/minuscole';
$string['tolower:exact'] = 'Esatta';
$string['tolower:lowercase'] = 'Minuscolo';
$string['tolower:caseandaccentinsensitive'] = 'Insensibile a maiuscole/minuscole e accenti';
$string['tolower:caseinsensitive'] = 'Insensibile a maiuscole/minuscole';
$string['tolower_help'] = '
<p>Esatta: la corrispondenza è sensibile alle maiuscole/minuscole (predefinito).</p>
<p>Minuscolo: applica il minuscolo all\'attributo IdP prima della corrispondenza.</p>
<p>Insensibile a maiuscole/minuscole: ignora le maiuscole/minuscole nella corrispondenza.</p>';
$string['wrongauth'] = 'Hai effettuato l\'accesso correttamente come \'{$a}\' ma non sei autorizzato ad accedere a Moodle.';
$string['auth_data_mapping'] = 'Mappatura dati';
$string['auth_fieldlockfield'] = 'Blocca valore ({$a})';
$string['auth_fieldmapping'] = 'Mappatura dati ({$a})';
$string['auth_fieldlock_expl'] = '<p><b>Blocca valore:</b> Se abilitato, impedirà agli utenti e agli amministratori Moodle di modificare direttamente il campo. Usa questa opzione se gestisci questi dati nel sistema di autenticazione esterno. </p>';
$string['auth_fieldlocks'] = 'Blocca campi utente';
$string['auth_updatelocalfield'] = 'Aggiorna locale ({$a})';
$string['auth_updateremotefield'] = 'Aggiorna esterno ({$a})';
$string['cannotmapfield'] = 'Rilevata collisione di mappatura - due campi mappano allo stesso elemento di valutazione {$a}';
$string['locked'] = 'Bloccato';
$string['unlocked'] = 'Sbloccato';
$string['unlockedifempty'] = 'Sbloccato se vuoto';
$string['update_never'] = 'Mai';
$string['update_oncreate'] = 'Alla creazione';
$string['update_onlogin'] = 'Ad ogni login';
$string['update_onupdate'] = 'All\'aggiornamento';
$string['phone1'] = 'Telefono';
$string['phone2'] = 'Cellulare';
$string['nameidpolicy'] = 'Policy NameID';
$string['nameidpolicy_help'] = '';
$string['grouprules'] = 'Regole gruppo';
$string['grouprules_help'] = '<p>Un elenco di regole per controllare l\'accesso in base al valore dell\'attributo gruppo.</p>
<p>Ogni riga deve avere una regola nel formato: {allow o deny} {attributo gruppi}={valore}.</p>
<p>Le regole più in alto nella lista saranno applicate per prime.</p>
Esempio: <br/>
allow admins=yes<br>
deny admins=no<br>
allow examrole=proctor<br>
deny library=overdue<br>';
/*
 * Privacy provider (GDPR)
 */
$string["privacy:no_data_reason"] = "Il plugin di autenticazione Saml2 non memorizza alcun dato personale.";

/*
 * Signing Algorithm
 */
$string['sha1'] = 'SHA1 legacy (Pericoloso)';
$string['sha256'] = 'SHA256';
$string['sha384'] = 'SHA384';
$string['sha512'] = 'SHA512';
$string['signaturealgorithm'] = 'Algoritmo di firma';
$string['signaturealgorithm_help'] = 'Questo è l\'algoritmo che sarà usato per firmare le richieste SAML. Attenzione: l\'algoritmo SHA1 è fornito solo per retrocompatibilità. A meno che non sia assolutamente necessario usarlo, si raccomanda di evitarlo e usare almeno SHA256.';
$string['selectloginservice'] = 'Seleziona un servizio di login';
$string['regenerateheader'] = 'Rigenera chiave privata e certificato';
$string['regeneratewarning'] = 'Attenzione! La generazione di un nuovo certificato sovrascriverà quello corrente e potrebbe essere necessario aggiornare il tuo IDP';
$string['regeneratepath'] = 'Percorso certificato: {$a}';
$string['regeneratesuccess'] = 'Chiave privata e certificato rigenerati con successo';
