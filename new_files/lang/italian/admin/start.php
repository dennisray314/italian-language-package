<?php
define('ATTENTION_TITLE','! ATTENZIONE !');
// text for Warnings:
if (!defined('APS_INSTALL')) { //DokuMan - use alternative text for TEXT_FILE_WARNING when using APS package installation
  define('TEXT_FILE_WARNING_WRITABLE','<b>AVVISO:</b><br />I file seguenti sono scrivibili. Si prega di modificare i permessi di questi file per motivi di sicurezza. <b>(444)</b> in unix, <b>(solo lettura)</b> in Win32.');
} else {
  define('TEXT_FILE_WARNING_WRITABLE','<b>AVVISO:</b><br />I file seguenti sono scrivibili. Si prega di modificare i permessi di questi file per motivi di sicurezza. <b>(444)</b> in unix, <b>(solo lettura)</b> in Win32.<br />Nel caso in cui questo software sia stato installato da un pacchetto software del vostro webhoster, i permessi dei file potrebbero dover essere impostati in modo diverso (HostEurope: <b>CHMOD 400</b> o <b>CHMOD 440</b>)');
}
define('TEXT_FILE_WARNING','<b>AVVISO:</b><br />I seguenti files sono scrivibili dal Serever. Per motivi di sicurezza modifichi i diritti di accesso(Permissions) di questo file. <b>(444)</b> in unix, <b>(read-only)</b> in Win32.');
 define('TEXT_FOLDER_WARNING','<b>AVVISO:</b><br />Il seguente registro deve essere scrivibile dal Server. Per motivi di sicurezza modifichi i diritti di accesso(Permissions) di questo registro. <b>(777)</b> in unix, <b>(read-write)</b> in Win32.');
define('REPORT_GENERATED_FOR','Report per:');
define('REPORT_GENERATED_ON','Creato il:');
define('FIRST_VISIT_ON','Prima visita:');
define('HEADING_QUICK_STATS','Riassunto');
define('VISITS_TODAY','Visite oggi:');
define('UNIQUE_TODAY','Singole visite:');
define('DAILY_AVERAGE','Media giornaliera:');
define('TOTAL_VISITS','Totale visite:');
define('TOTAL_UNIQUE','Totale singole visite:');
define('TOP_REFFERER','Top Refferer:');
define('TOP_ENGINE','Top motore di ricerca:');
define('DAY_SUMMARY','visibile per 30 giorni:');
define('VERY_LAST_VISITORS','Ultime 10 visite:');
define('TODAY_VISITORS','Visite di oggi:');
define('LAST_VISITORS','Ultime 100 visite:');
define('ALL_LAST_VISITORS','Tutte le visite:');
define('DATE_TIME','Data / Ora:');
define('IP_ADRESS','Indirizzo IP:');
define('OPERATING_SYSTEM','sistema operativo:');
define('REFFERING_HOST','Referring Host:');
define('ENTRY_PAGE','Pagina di entrata:');
define('HOURLY_TRAFFIC_SUMMARY','somma traffico orario');
define('WEB_BROWSER_SUMMARY','sommario Web Browser');
define('OPERATING_SYSTEM_SUMMARY','Sommario sistema operativo');
define('TOP_REFERRERS','Top 10 Referrer');
define('TOP_HOSTS','Top Ten Hosts');
define('LIST_ALL','Mostra tutti');    
define('SEARCH_ENGINE_SUMMARY','Sommario motore di ricerca');
define('SEARCH_ENGINE_SUMMARY_TEXT',' (Dati in percentuale basati sul totale delle visite attraverso il motore di ricerca. )');
define('SEARCH_QUERY_SUMMARY','Sommario domanda di ricerca');
define('SEARCH_QUERY_SUMMARY_TEXT',' ) ( Dati in percentuale basati sul totale delle domande di ricerca che sono state riportate qua. )');
define('REFERRING_URL','Refferrer Url');
define('HITS','Hits');
define('PERCENTAGE','Percentuale');
define('HOST','Host');
// NEU HINZUGEFUEGT 04.12.2008 - Neue Startseite im Admin BOF
// BOF - vr 2010-04-01 -  Added missing definitions, see below
// define('HEADING_TITLE', 'Ordini');
// EOF - vr 2010-04-01 -  Added missing definitions
define('HEADING_TITLE_SEARCH', 'Ordine-Nr.:');
define('HEADING_TITLE_STATUS', 'Stato:');
define('TABLE_HEADING_AFTERBUY', 'Dopo l\'acquisto'); //Dokuman - 2009-05-27 - added missing definition
define('TABLE_HEADING_CUSTOMERS', 'Clienti');
define('TABLE_HEADING_ORDER_TOTAL', 'Valore totale');
define('TABLE_HEADING_DATE_PURCHASED', 'Data dell\'ordine');
define('TABLE_HEADING_STATUS', 'Stato');
//define('TABLE_HEADING_ACTION', 'Azione');
define('TABLE_HEADING_QUANTITY', 'Quantit&agrave;');
define('TABLE_HEADING_PRODUCTS_MODEL', 'Prodotto-Nr.');
define('TABLE_HEADING_PRODUCTS', 'Prodotto');
define('TABLE_HEADING_TAX', 'IVA');
define('TABLE_HEADING_TOTAL', 'Somma totale');
define('TABLE_HEADING_DATE_ADDED', 'aggiunto:');
define('ENTRY_CUSTOMER', 'Cliente:');
define('TEXT_DATE_ORDER_CREATED', 'Data dell\'ordine:');
define('TEXT_INFO_PAYMENT_METHOD', 'Metodo di pagamento:');
define('TEXT_VALIDATING','Non convalidato');
define('TEXT_ALL_ORDERS', 'Tutti gli ordini');
define('TEXT_NO_ORDER_HISTORY', 'Non &egrave; disponibile lo storico degli ordini');
define('TEXT_DATE_ORDER_LAST_MODIFIED','Ultimo cambiamento');
// BOF - Tomcraft - 2009-11-25 - Added missing definitions for /admin/start.php/
define('TOTAL_CUSTOMERS','Totale clienti');
define('TOTAL_SUBSCRIBERS','Iscrizioni alla newsletter');
define('TOTAL_PRODUCTS_ACTIVE','Prodotti attivi');
define('TOTAL_PRODUCTS_INACTIVE','Prodotti inattivi');
define('TOTAL_PRODUCTS','Totale prodotti');
define('TOTAL_SPECIALS','Offerte speciali');
// EOF - Tomcraft - 2009-11-25 - Added missing definitions for /admin/start.php/
// BOF - Tomcraft - 2009-11-30 - Added missing definitions for /admin/start.php/
define('UNASSIGNED', 'Non assegnato');
define('TURNOVER_TODAY', 'Fatturato oggi');
define('TURNOVER_YESTERDAY', 'Fatturato ieri');
define('TURNOVER_THIS_MONTH', 'questo mese');
define('TURNOVER_LAST_MONTH', 'il mese scorso (tutti)');
define('TURNOVER_LAST_MONTH_PAID', 'il mese scorso (a pagamento)');
define('TOTAL_TURNOVER', 'Fatturato totale');
// EOF - Tomcraft - 2009-11-30 - Added missing definitions for /admin/start.php/
// BOF - vr 2010-04-01 -  Added missing definitions
// main heading
define('HEADING_TITLE', 'Benvenuti nell\'Area Amministrativa');
// users online
define('TABLE_CAPTION_USERS_ONLINE', 'Utente online');
define('TABLE_CAPTION_USERS_ONLINE_HINT', '***Clicca il nome utente per i dettagli***');
define('TABLE_HEADING_USERS_ONLINE_SINCE', 'Online dal');
define('TABLE_HEADING_USERS_ONLINE_NAME', 'Nome');
define('TABLE_HEADING_USERS_ONLINE_LAST_CLICK', 'Ultimo clic');
define('TABLE_HEADING_USERS_ONLINE_INFO', 'Info');
define('TABLE_CELL_USERS_ONLINE_INFO', 'Di pi&ugrave;...');
// new customers
define('TABLE_CAPTION_NEW_CUSTOMERS', 'Nuovi clienti');
define('TABLE_CAPTION_NEW_CUSTOMERS_COMMENT', '(Ultimi 15)');
define('TABLE_HEADING_NEW_CUSTOMERS_LASTNAME', 'Cognome');
define('TABLE_HEADING_NEW_CUSTOMERS_FIRSTNAME', 'Nome');
define('TABLE_HEADING_NEW_CUSTOMERS_REGISTERED', 'Registrato a');
define('TABLE_HEADING_NEW_CUSTOMERS_EDIT', 'Modifica');
define('TABLE_HEADING_NEW_CUSTOMERS_ORDERS', 'Ordini');
define('TABLE_CELL_NEW_CUSTOMERS_EDIT', 'Modifica...');
define('TABLE_CELL_NEW_CUSTOMERS_DELETE', 'Eliminare...');
define('TABLE_CELL_NEW_CUSTOMERS_ORDERS', 'Mostra...');
// new orders
define('TABLE_CAPTION_NEW_ORDERS', 'Nuovi ordini');
define('TABLE_CAPTION_NEW_ORDERS_COMMENT', '(Ultimi 20)');
define('TABLE_HEADING_NEW_ORDERS_ORDER_NUMBER', 'Numero d\'ordine');
define('TABLE_HEADING_NEW_ORDERS_ORDER_DATE', 'Data dell\'ordine');
define('TABLE_HEADING_NEW_ORDERS_CUSTOMERS_NAME', 'Nome del cliente');
define('TABLE_HEADING_NEW_ORDERS_EDIT', 'Modifica');
define('TABLE_HEADING_NEW_ORDERS_DELETE', 'Eliminare');
// newsfeed
define('TABLE_CAPTION_NEWSFEED', 'Visita il');
// birthdays
define('TABLE_CAPTION_BIRTHDAYS', 'Compleanni');
define('TABLE_CELL_BIRTHDAYS_TODAY', 'Clienti il cui compleanno &egrave; oggi');
define('TABLE_CELL_BIRTHDAYS_THIS_MONTH', 'Prossimi compleanni dei clienti questo mese');
// EOF - vr 2010-04-01 -  Added missing definitions
define('HEADING_CAPTION_STATISTIC', 'Statistiche');
// security check
// DB version check
define('ERROR_DB_VERSION_UPDATE', 'ATTENZIONE: Il vostro DB deve essere aggiornato, avviare il <a href="'.DIR_WS_CATALOG.'_installer/">installer</a>:');
define('ERROR_DB_VERSION_UPDATE_INFO', 'DB mu&szlig; von Release %s auf %s aktualisiert werden.');
// EMail check
define('ERROR_EMAIL_CHECK', '<strong>Attenzione:</strong> Il seguente indirizzo e-mail non sembra corretto:');
define('ERROR_EMAIL_CHECK_INFO', '%s: &lt;%s&gt;');
// security check DB FILE permission
define('WARNING_DB_FILE_PRIVILEGES', '<strong>Attenzione:</strong> I privilegi di file sono abilitati nel database &rsquo;'.DB_DATABASE.'&lsquo; per l\'utente &rsquo;'.DB_SERVER_USERNAME.'&lsquo;!');
// register_globals check
define('WARNING_REGISTER_GLOBALS', '<strong>Attenzione:</strong> Questa caratteristica &egrave; stata <strong>DEPRECATA</strong> a partire da PHP 5.3.0 e <strong>RIMUOVATA</strong> a partire da PHP 5.4.0. Si prega di contattare il vostro hoster per disattivare &quot;register_globals&quot;.');

// domain check
define('WARNING_DOMAIN_INVALID', '<strong>ATTENZIONE:</strong> Il tuo dominio del negozio non ha potuto essere convalidato (Possibili motivi: Formato non valido o nome di dominio internazionalizzato (IDN))');
?>