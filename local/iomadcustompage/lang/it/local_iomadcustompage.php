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
 * Strings for component 'local_iomadcustompage', language 'it'
 *
 * @package   local_iomadcustompage
 * @copyright 2021 Derick Turner
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Pagine personalizzate IOMAD';
$string['iomadcustompage:manage'] = 'Gestisci pagine personalizzate IOMAD';
$string['iomadcustompage:view'] = 'Visualizza pagine personalizzate IOMAD';

// Page management
$string['custompage'] = 'Pagina personalizzata';
$string['custompages'] = 'Pagine personalizzate';
$string['pagename'] = 'Nome pagina';
$string['pagetitle'] = 'Titolo pagina';
$string['pageurl'] = 'URL pagina';
$string['pagecontent'] = 'Contenuto pagina';
$string['pagedescription'] = 'Descrizione pagina';
$string['createpage'] = 'Crea pagina';
$string['editpage'] = 'Modifica pagina';
$string['deletepage'] = 'Elimina pagina';
$string['duplicatepage'] = 'Duplica pagina';
$string['pagecreated'] = 'Pagina creata';
$string['pageupdated'] = 'Pagina aggiornata';
$string['pagedeleted'] = 'Pagina eliminata';
$string['pageduplicated'] = 'Pagina duplicata';
$string['pagedeleteconfirm'] = 'Sei sicuro di voler eliminare la pagina \'{$a}\'?';
$string['pageslist'] = 'Elenco pagine';
$string['nopages'] = 'Nessuna pagina personalizzata';
$string['selectpage'] = 'Seleziona pagina';
$string['managepages'] = 'Gestisci pagine';
$string['viewpage'] = 'Visualizza pagina';
$string['pagenotfound'] = 'Pagina non trovata';

// Page settings
$string['pageactive'] = 'Pagina attiva';
$string['pageinactive'] = 'Pagina inattiva';
$string['enablepage'] = 'Abilita pagina';
$string['disablepage'] = 'Disabilita pagina';
$string['pageweight'] = 'Peso pagina';
$string['pageweight_help'] = 'Il peso determina l\'ordine di visualizzazione della pagina. Valori più bassi vengono visualizzati prima.';
$string['pageorder'] = 'Ordine pagina';
$string['movepageup'] = 'Sposta pagina su';
$string['movepagedown'] = 'Sposta pagina giù';

// Audience configuration
$string['audience'] = 'Pubblico';
$string['audienceconfig'] = 'Configurazione pubblico';
$string['audienceconfig_help'] = 'Seleziona chi può visualizzare questa pagina.';
$string['audienceall'] = 'Tutti';
$string['audienceauthenticated'] = 'Utenti autenticati';
$string['audienceguest'] = 'Ospiti';
$string['audiencesiteadmin'] = 'Amministratori del sito';
$string['audiencecategoryrole'] = 'Ruoli di categoria';
$string['audiencecompany'] = 'Organizzazione specifica';
$string['selectaudience'] = 'Seleziona pubblico';
$string['restricttoroles'] = 'Limita ai ruoli';
$string['restricttocompanies'] = 'Limita alle organizzazioni';

// Navigation
$string['navigation'] = 'Navigazione';
$string['navigationconfig'] = 'Configurazione navigazione';
$string['addtoprimarynavigation'] = 'Aggiungi alla navigazione principale';
$string['addtoprimarynavigation_help'] = 'Se abilitato, la pagina apparirà nella navigazione principale del sito.';
$string['navigationposition'] = 'Posizione nella navigazione';
$string['navigationposition_help'] = 'La posizione della pagina nel menu di navigazione principale.';
$string['unlistedpage'] = 'Pagina non elencata';
$string['unlistedpage_help'] = 'Se abilitato, la pagina non apparirà nella navigazione ma sarà accessibile tramite URL diretto.';
$string['navlabel'] = 'Etichetta navigazione';
$string['navlabel_help'] = 'Il testo da visualizzare nel menu di navigazione.';

// Block regions
$string['blockregion'] = 'Area blocchi';
$string['blockregions'] = 'Aree blocchi';
$string['sidebarblocks'] = 'Blocchi barra laterale';
$string['contentblocks'] = 'Blocchi contenuto';
$string['mainregion'] = 'Area principale';
$string['sideregion'] = 'Barra laterale';
$string['topregion'] = 'Area superiore';
$string['bottomregion'] = 'Area inferiore';
$string['addblock'] = 'Aggiungi blocco';
$string['removeblock'] = 'Rimuovi blocco';
$string['configureblocks'] = 'Configura blocchi';
$string['editblocks'] = 'Modifica blocchi';
$string['blocksettings'] = 'Impostazioni blocchi';

// Content editing
$string['editcontent'] = 'Modifica contenuto';
$string['contenteditor'] = 'Editor contenuto';
$string['htmleditor'] = 'Editor HTML';
$string['previewpage'] = 'Anteprima pagina';
$string['saveanddisplay'] = 'Salva e visualizza';
$string['saveandreturn'] = 'Salva e torna';
$string['discardchanges'] = 'Annulla modifiche';
$string['unsavedchanges'] = 'Hai modifiche non salvate';
$string['confirmdiscard'] = 'Sei sicuro di voler annullare le modifiche?';

// Templates
$string['pagetemplate'] = 'Modello pagina';
$string['selecttemplate'] = 'Seleziona modello';
$string['blanktemplate'] = 'Modello vuoto';
$string['onecolumntemplate'] = 'Una colonna';
$string['twocolumntemplate'] = 'Due colonne';
$string['threecolumntemplate'] = 'Tre colonne';
$string['sidebartemplate'] = 'Con barra laterale';
$string['fullwidthtemplate'] = 'Larghezza completa';
$string['saveAstemplate'] = 'Salva come modello';
$string['templatename'] = 'Nome modello';

// CSS classes
$string['cssclasses'] = 'Classi CSS';
$string['cssclasses_help'] = 'Classi CSS aggiuntive da applicare al contenitore della pagina.';
$string['customcss'] = 'CSS personalizzato';
$string['customcss_help'] = 'CSS personalizzato da applicare a questa pagina.';
$string['customjs'] = 'JavaScript personalizzato';
$string['customjs_help'] = 'JavaScript personalizzato da eseguire su questa pagina.';

// Permissions
$string['permissions'] = 'Permessi';
$string['viewpermission'] = 'Permesso di visualizzazione';
$string['editpermission'] = 'Permesso di modifica';
$string['managepermission'] = 'Permesso di gestione';

// Privacy
$string['privacy:metadata'] = 'Il plugin pagine personalizzate IOMAD non memorizza dati personali.';
