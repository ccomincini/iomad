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
 * Strings for component 'local_iomad_settings', language 'it'
 *
 * @package   local_iomad_settings
 * @copyright 2021 Derick Turner
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Impostazioni IOMAD';
$string['iomad_settings:manage'] = 'Gestisci impostazioni IOMAD';

// General settings
$string['generalsettings'] = 'Impostazioni generali';
$string['iomadsettings'] = 'Impostazioni IOMAD';
$string['configuresettings'] = 'Configura impostazioni';
$string['settingssaved'] = 'Impostazioni salvate';
$string['settingserror'] = 'Errore durante il salvataggio delle impostazioni';

// Company settings
$string['companysettings'] = 'Impostazioni organizzazione';
$string['defaultcompany'] = 'Organizzazione predefinita';
$string['defaultcompany_help'] = 'L\'organizzazione predefinita per i nuovi utenti che non sono assegnati a un\'organizzazione specifica.';
$string['allowmultiplecompanies'] = 'Consenti organizzazioni multiple';
$string['allowmultiplecompanies_help'] = 'Se abilitato, gli utenti possono essere membri di più organizzazioni contemporaneamente.';
$string['companysharing'] = 'Condivisione organizzazione';
$string['companysharing_help'] = 'Consenti la condivisione di risorse tra organizzazioni.';
$string['autocreatecategory'] = 'Crea categoria automaticamente';
$string['autocreatecategory_help'] = 'Crea automaticamente una categoria di corsi per ogni nuova organizzazione.';

// User settings
$string['usersettings'] = 'Impostazioni utente';
$string['defaultuserrole'] = 'Ruolo utente predefinito';
$string['defaultuserrole_help'] = 'Il ruolo predefinito assegnato ai nuovi utenti.';
$string['autouserassign'] = 'Assegnazione automatica utenti';
$string['autouserassign_help'] = 'Assegna automaticamente gli utenti all\'organizzazione in base al dominio email.';
$string['emaildomainmatching'] = 'Corrispondenza dominio email';
$string['emaildomainmatching_help'] = 'Abbina automaticamente gli utenti alle organizzazioni in base al dominio email.';
$string['userprofilefields'] = 'Campi profilo utente';
$string['requiredfieldsmissing'] = 'Campi obbligatori mancanti';

// Course settings
$string['coursesettings'] = 'Impostazioni corso';
$string['defaultcoursevisibility'] = 'Visibilità corso predefinita';
$string['defaultcoursevisibility_help'] = 'La visibilità predefinita per i nuovi corsi dell\'organizzazione.';
$string['coursesharing'] = 'Condivisione corsi';
$string['coursesharing_help'] = 'Consenti la condivisione di corsi tra organizzazioni.';
$string['autocourseassign'] = 'Assegnazione automatica corsi';
$string['autocourseassign_help'] = 'Assegna automaticamente i corsi alla categoria dell\'organizzazione.';
$string['coursedefaults'] = 'Valori predefiniti corso';
$string['courseenrolmentdefaults'] = 'Valori predefiniti iscrizione corso';

// License settings
$string['licensesettings'] = 'Impostazioni licenza';
$string['defaultlicensetype'] = 'Tipo licenza predefinito';
$string['defaultlicensetype_help'] = 'Il tipo di licenza predefinito per le nuove licenze.';
$string['licenseexpirywarning'] = 'Avviso scadenza licenza';
$string['licenseexpirywarning_help'] = 'Il numero di giorni prima della scadenza per inviare un avviso.';
$string['licenseautorenewal'] = 'Rinnovo automatico licenza';
$string['licenseautorenewal_help'] = 'Abilita il rinnovo automatico delle licenze.';
$string['licensecleanup'] = 'Pulizia licenze';
$string['licensecleanup_help'] = 'Rimuovi automaticamente le licenze scadute dopo un certo periodo.';

// Department settings
$string['departmentsettings'] = 'Impostazioni dipartimento';
$string['defaultdepartment'] = 'Dipartimento predefinito';
$string['defaultdepartment_help'] = 'Il dipartimento predefinito per i nuovi utenti.';
$string['departmenthierarchy'] = 'Gerarchia dipartimenti';
$string['departmenthierarchy_help'] = 'Abilita la struttura gerarchica per i dipartimenti.';
$string['maxdepartmentlevels'] = 'Livelli massimi dipartimento';
$string['maxdepartmentlevels_help'] = 'Il numero massimo di livelli nella gerarchia dei dipartimenti.';

// Report settings
$string['reportsettings'] = 'Impostazioni report';
$string['reportcaching'] = 'Cache report';
$string['reportcaching_help'] = 'Abilita la cache per i report per migliorare le prestazioni.';
$string['reportcachetime'] = 'Durata cache report';
$string['reportcachetime_help'] = 'La durata in minuti per cui i report rimangono in cache.';
$string['defaultreportformat'] = 'Formato report predefinito';
$string['defaultreportformat_help'] = 'Il formato di esportazione predefinito per i report.';
$string['reportcharts'] = 'Grafici nei report';
$string['reportcharts_help'] = 'Mostra grafici nei report.';

// Email settings
$string['emailsettings'] = 'Impostazioni email';
$string['emailfrom'] = 'Indirizzo mittente email';
$string['emailfrom_help'] = 'L\'indirizzo email utilizzato come mittente per le email IOMAD.';
$string['emailreplyto'] = 'Indirizzo di risposta';
$string['emailreplyto_help'] = 'L\'indirizzo email per le risposte alle email IOMAD.';
$string['emailtemplateset'] = 'Set modelli email';
$string['emailtemplateset_help'] = 'Il set di modelli email da utilizzare per le comunicazioni IOMAD.';
$string['emailqueue'] = 'Coda email';
$string['emailqueue_help'] = 'Metti le email in coda per l\'invio asincrono.';
$string['emaildelay'] = 'Ritardo email';
$string['emaildelay_help'] = 'Il ritardo in minuti prima dell\'invio delle email in coda.';

// Security settings
$string['securitysettings'] = 'Impostazioni sicurezza';
$string['passwordpolicy'] = 'Politica password';
$string['passwordpolicy_help'] = 'Configurazione della politica password per gli utenti IOMAD.';
$string['sessiontimeout'] = 'Timeout sessione';
$string['sessiontimeout_help'] = 'Il tempo di inattività dopo il quale la sessione scade.';
$string['loginattempts'] = 'Tentativi di accesso';
$string['loginattempts_help'] = 'Il numero massimo di tentativi di accesso falliti prima del blocco.';
$string['lockoutduration'] = 'Durata blocco';
$string['lockoutduration_help'] = 'La durata del blocco account dopo troppi tentativi falliti.';

// Integration settings
$string['integrationsettings'] = 'Impostazioni integrazione';
$string['apikey'] = 'Chiave API';
$string['apikey_help'] = 'La chiave API per l\'accesso ai servizi web IOMAD.';
$string['webhooks'] = 'Webhook';
$string['webhooks_help'] = 'Configura i webhook per le integrazioni esterne.';
$string['externalservices'] = 'Servizi esterni';
$string['externalservices_help'] = 'Configura i servizi esterni per l\'integrazione con IOMAD.';

// Display settings
$string['displaysettings'] = 'Impostazioni visualizzazione';
$string['itemsperpage'] = 'Elementi per pagina';
$string['itemsperpage_help'] = 'Il numero di elementi da visualizzare per pagina negli elenchi.';
$string['datetimeformat'] = 'Formato data/ora';
$string['datetimeformat_help'] = 'Il formato per la visualizzazione di date e orari.';
$string['currencysymbol'] = 'Simbolo valuta';
$string['currencysymbol_help'] = 'Il simbolo di valuta da utilizzare nelle visualizzazioni.';
$string['decimalplaces'] = 'Cifre decimali';
$string['decimalplaces_help'] = 'Il numero di cifre decimali per i valori numerici.';

// Maintenance settings
$string['maintenancesettings'] = 'Impostazioni manutenzione';
$string['cleanupondelete'] = 'Pulizia alla cancellazione';
$string['cleanupondelete_help'] = 'Esegui automaticamente la pulizia dei dati quando un\'organizzazione viene eliminata.';
$string['archivedata'] = 'Archivia dati';
$string['archivedata_help'] = 'Archivia i dati storici invece di eliminarli.';
$string['archiveperiod'] = 'Periodo di archiviazione';
$string['archiveperiod_help'] = 'Il periodo dopo il quale i dati vengono archiviati.';
$string['logretention'] = 'Conservazione log';
$string['logretention_help'] = 'Il periodo per cui conservare i log di sistema.';

// Debug settings
$string['debugsettings'] = 'Impostazioni debug';
$string['debugmode'] = 'Modalità debug';
$string['debugmode_help'] = 'Abilita la modalità debug per la risoluzione dei problemi.';
$string['verboselogging'] = 'Log dettagliato';
$string['verboselogging_help'] = 'Registra informazioni dettagliate per il debug.';

// Privacy
$string['privacy:metadata'] = 'Il plugin impostazioni IOMAD non memorizza dati personali.';
