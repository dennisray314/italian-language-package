<?php

@setlocale(LC_TIME, 'it_IT.ISO8859-1', 'it_IT', 'it-IT', 'it');
define('DATE_FORMAT_SHORT', '%d.%m.%Y');  // this is used for strftime()
define('DATE_FORMAT_LONG', '%A, %d. %B %Y'); // this is used for strftime()
define('DATE_FORMAT', 'd.m.Y');  // this is used for strftime()
define('PHP_DATE_TIME_FORMAT', 'd.m.Y H:i:s'); // this is used for date()
define('DATE_TIME_FORMAT', DATE_FORMAT_SHORT . ' %H:%M:%S');

function xtc_date_raw($date, $reverse = false) {
  if ($reverse) {
    return substr($date, 0, 2) . substr($date, 3, 2) . substr($date, 6, 4);
  } else {
    return substr($date, 6, 4) . substr($date, 3, 2) . substr($date, 0, 2);
  }
}
require_once(DIR_FS_INC.'auto_include.inc.php');
foreach(auto_include(DIR_FS_LANGUAGES.'italian/extra/admin/','php') as $file) require ($file);
// Global entries for the <html> tag
define('HTML_PARAMS','dir="ltr" lang="it"');
// page title
define('TITLE', defined('PROJECT_VERSION') ? PROJECT_VERSION : 'undefined');
// header text in includes/header.php
define('HEADER_TITLE_TOP', 'Administration');
define('HEADER_TITLE_SUPPORT_SITE', 'pagina di supporto');
define('HEADER_TITLE_ONLINE_CATALOG', 'Catalogo Online');
define('HEADER_TITLE_ADMINISTRATION', 'Administration');
// text for gender
define('MALE', 'Signore');
define('FEMALE', 'Signora');
// text for date of birth example
define('DOB_FORMAT_STRING', 'gg.mm.aaaa');
// configuration box text in includes/boxes/configuration.php
define('BOX_HEADING_CONFIGURATION','Configurazione');
define('BOX_HEADING_MODULES','Modulo');
define('BOX_HEADING_PARTNER_MODULES','Moduli per i partner');
define('BOX_HEADING_ZONE','Paese / Imposta');
define('BOX_HEADING_CUSTOMERS','Clienti');
define('BOX_HEADING_PRODUCTS','Catalogo articoli');
define('BOX_HEADING_STATISTICS','Statistiche');
define('BOX_HEADING_TOOLS','Programma di aiuto');
define('BOX_HEADING_LOCALIZATION', 'Lingue/valute');
define('BOX_HEADING_TEMPLATES','Modelli');
define('BOX_HEADING_LOCATION_AND_TAXES', 'Posizionamento/Tax');
define('BOX_HEADING_CATALOG', 'Catalogo');
define('BOX_CONTENT','Responsabile dei contenuti');
define('TEXT_ALLOWED', 'Autorizzazione');
define('TEXT_ACCESS', 'campo autorizzazione');
define('BOX_CONFIGURATION', 'registrazione argomento');
define('BOX_CONFIGURATION_1', 'Il mio Shop');
define('BOX_CONFIGURATION_2', 'Valore minimo');
define('BOX_CONFIGURATION_3', 'Valore massimo');
define('BOX_CONFIGURATION_4', 'Opzioni immagine');
define('BOX_CONFIGURATION_5', 'Dettagli clienti');
define('BOX_CONFIGURATION_6', 'Opzioni modulo');
define('BOX_CONFIGURATION_7', 'Opzioni spedizioni');
define('BOX_CONFIGURATION_8', 'Opzioni lista articoli');
define('BOX_CONFIGURATION_9', 'Opzioni magazzino');
define('BOX_CONFIGURATION_10', 'Opzione login');
define('BOX_CONFIGURATION_11', 'opzioni cache');
define('BOX_CONFIGURATION_12', 'Opzioni eMail');
define('BOX_CONFIGURATION_13', 'Opzioni Download');
define('BOX_CONFIGURATION_14', 'Compressione Gzip');
define('BOX_CONFIGURATION_15', 'Sessioni');
define('BOX_CONFIGURATION_16', 'Meta-Tags/Motore di ricerca');
define('BOX_CONFIGURATION_17', 'Modulo aggiuntivo');
define('BOX_CONFIGURATION_18', 'Partita IVA');
define('BOX_CONFIGURATION_19', 'Partner');
define('BOX_CONFIGURATION_22', 'Opzioni ricerca');
define('BOX_CONFIGURATION_24', 'Google, Matomo &amp; Facebook');
define('BOX_CONFIGURATION_25', 'Captcha');
define('BOX_CONFIGURATION_31', 'Skrill');
define('BOX_CONFIGURATION_40', 'Popup Window Options');
define('BOX_CONFIGURATION_1000', 'My Admin');
define('BOX_MODULES', 'Modulo pagamento-/spedizione-/conto');
define('BOX_PAYMENT', 'Opzioni pagamento');
define('BOX_SHIPPING', 'Tipo spedizione');
define('BOX_ORDER_TOTAL', 'Totale');
define('BOX_CATEGORIES', 'Categorie / Articoli');
define('BOX_PRODUCTS_ATTRIBUTES', 'Caratteristica articolo');
define('BOX_MANUFACTURERS', 'Produttore');
define('BOX_REVIEWS', 'Valutazione articolo');
define('BOX_CAMPAIGNS', 'Campagne');
define('BOX_XSELL_PRODUCTS', 'Cross Marketing');
define('BOX_SPECIALS', 'Offerte speciali');
define('BOX_PRODUCTS_EXPECTED', 'Articoli attesi');
define('BOX_CUSTOMERS', 'Clienti');
define('BOX_ACCOUNTING', 'amministratore');
define('BOX_CUSTOMERS_STATUS','Gruppi clienti');
define('BOX_ORDERS', 'Ordini');
define('BOX_COUNTRIES', 'Paese');
define('BOX_ZONES', 'Regioni');
define('BOX_GEO_ZONES', 'zone imposta');
define('BOX_TAX_CLASSES', 'Fascia fiscale');
define('BOX_TAX_RATES', 'Aliquota imposta');
define('BOX_HEADING_REPORTS', 'Rapporto');
define('BOX_PRODUCTS_VIEWED', 'Articoli visitati');
define('BOX_STOCK_WARNING','Campo rapporto');
define('BOX_PRODUCTS_PURCHASED', 'Articoli venduti');
define('BOX_STATS_CUSTOMERS', 'Clienti-<br />&nbsp;Statistica ordini');
define('BOX_BACKUP', 'Manager banca dati');
define('BOX_BANNER_MANAGER', 'Banner Manager');
define('BOX_CACHE', 'Imposta Cache');
define('BOX_DEFINE_LANGUAGE', 'Definire lingue');
define('BOX_FILE_MANAGER', 'File-Manager');
define('BOX_MAIL', 'inviare eMail');
define('BOX_NEWSLETTERS', 'Circolare Manager');
define('BOX_SERVER_INFO', 'Informazioni sul server');
define('BOX_WHOS_ONLINE', 'Chi c\'&egrave; online');
define('BOX_TPL_BOXES','ordinamento Box');
define('BOX_CURRENCIES', 'Valute');
define('BOX_LANGUAGES', 'Lingue');
define('BOX_ORDERS_STATUS', 'Stato ordine');
define('BOX_ATTRIBUTES_MANAGER','Amministrazione attributi');
define('BOX_PRODUCTS_ATTRIBUTES','Gruppi opzioni');
define('BOX_ORDERS_STATUS','Stato ordine');
define('BOX_SHIPPING_STATUS','Stato spedizione');
define('BOX_SALES_REPORT','statistica vendite');
define('BOX_MODULE_EXPORT','Modulo XT');
define('BOX_MODULE_SYSTEM','Moduli di sistema');
define('BOX_HEADING_GV_ADMIN', 'Buono/Coupon');
define('BOX_GV_ADMIN_QUEUE', 'Buono Queue');
define('BOX_GV_ADMIN_MAIL', 'eMail buono');
define('BOX_GV_ADMIN_SENT', 'buono inviato');
define('BOX_HEADING_COUPON_ADMIN','Coupon sconto');
define('BOX_COUPON_ADMIN','amministrazione coupon');
define('BOX_TOOLS_BLACKLIST','-CC-Blacklist');
define('BOX_IMPORT','Importazione/esportazione');
define('BOX_PRODUCTS_VPE','Totalit&agrave; imballaggio');
define('BOX_CAMPAIGNS_REPORT','Report campagne');
define('BOX_ORDERS_XSELL_GROUP','Gruppi Cross-Marketing');
define('BOX_REMOVEOLDPICS','Rimuovere le vecchie immagini'); // Remove old pictures - franky_n - 20110105
define('BOX_JANOLAW','janolaw AGB Hosting'); // Tomcraft - 2011-06-17 - Added janolaw AGB hosting service
define('BOX_HAENDLERBUND','Associazione commercianti AGB Service'); // Tomcraft - 2012-12-08 - Added haendlerbund AGB interface
define('BOX_SHOP','Negozio');
define('BOX_LOGOUT','Logout');
define('BOX_CREDITS','Crediti');
define('BOX_UPDATE','Controlla la versione');
define('BOX_GV_CUSTOMERS','Credito ai clienti');
define('BOX_IT_RECHT_KANZLEI', 'IT Recht Kanzlei');
define('BOX_PROTECTEDSHOPS', 'Negozi protetti - Servizio AGB');
define('BOX_CLEVERREACH', 'CleverReach');
define('BOX_SUPERMAILER', 'SuperMailer');
define('BOX_OFFLINE', 'Negozio offline');
define('BOX_LOGS', 'Logfiles');
define('BOX_SHIPCLOUD', 'shipcloud');
define('BOX_SHIPCLOUD_PICKUP', 'shipcloud - ritiro');
define('BOX_PRODUCTS_TAGS', 'Caratteristiche del prodotto');
define('BOX_TRUSTEDSHOPS', 'Trusted Shops');
define('BOX_NEWSLETTER_RECIPIENTS', 'Destinatari della newsletter');
define('BOX_DSGVO_EXPORT', 'RGPD Esportazione');
define('BOX_SUPPORT', 'Supporto');
define('BOX_CACHING', 'Caching');
define('TXT_GROUPS','<b>Gruppi</b>:');
define('TXT_SYSTEM','Sistema');
define('TXT_CUSTOMERS','Clienti/ordini');
define('TXT_PRODUCTS','Prodotti/Categorie');
define('TXT_STATISTICS','Statistiche');
define('TXT_TOOLS','Strumenti');
define('TEXT_ACCOUNTING','Accesso amministratore per:');
/******* SHOPGATE **********/
if (is_file(DIR_FS_CATALOG.'includes/external/shopgate/base/lang/italian/admin/italian.php')) {
  include_once (DIR_FS_CATALOG.'includes/external/shopgate/base/lang/italian/admin/italian.php');
}
/******* SHOPGATE **********/
define('TXT_GROUPS','<b>Gruppi</b>:');
define('TXT_SYSTEM','Sistema');
define('TXT_CUSTOMERS','Clienti/Ordini');
define('TXT_PRODUCTS','Articolo/Categorie');
define('TXT_STATISTICS','tools statistica');
define('TXT_TOOLS','Appendice programmi');
define('TEXT_ACCOUNTING','Registrazione accesso per:');
//Dividers text for menu
define('BOX_HEADING_MODULES', 'Moduli');
define('BOX_HEADING_LOCALIZATION', 'Lingue/Valute');
define('BOX_HEADING_TEMPLATES','Templates');
define('BOX_HEADING_TOOLS', 'Programma di aiuto');
define('BOX_HEADING_LOCATION_AND_TAXES', 'Paese / Imposta');
define('BOX_HEADING_CUSTOMERS', 'Clienti');
define('BOX_HEADING_CATALOG', 'Catalogo');
define('BOX_MODULE_NEWSLETTER','Newsletter');
// javascript messages
define('JS_ERROR', 'Durante la richiesta si &egrave; verificato un errore!\n Corregga il seguente:\n\n');
define('JS_OPTIONS_VALUE_PRICE', '* Assegnare un prezzo a questa merce\n');
define('JS_OPTIONS_VALUE_PRICE_PREFIX', '* Deve inserire un segno per il prezzo(+/-)\n');
define('JS_PRODUCTS_NAME', '* La nuova merce deve avere un prezzo\n');
define('JS_PRODUCTS_DESCRIPTION', '* Il nuovo articolo deve avere una descrizione\n');
define('JS_PRODUCTS_PRICE', '* Il nuovo articolo deve avere un prezzo\n');
define('JS_PRODUCTS_WEIGHT', '* deve essere indicato il peso per il nuovo articolo\n');
define('JS_PRODUCTS_QUANTITY', '* Deve assegnare al nuovo articolo una quantit&agrave; che sia disponibile\n');
define('JS_PRODUCTS_MODEL', '* Deve assegnare al nuovo articolo un articolo n°\n');
define('JS_PRODUCTS_IMAGE', '* Deve assegnare al nuovo articolo un\'immagine\n');
define('JS_SPECIALS_PRODUCTS_PRICE', '* Per questo articolo deve essere stabilito un nuovo prezzo\n');
define('JS_GENDER', '* Il \'Titolo\' deve essere scelto.\n');
define('JS_FIRST_NAME', '* Il \'Nome\' deve essere composto da minimo' . ENTRY_FIRST_NAME_MIN_LENGTH . ' caratteri.\n');
define('JS_LAST_NAME', '* Il \'Cognome\' deve essere composto da minimo ' . ENTRY_LAST_NAME_MIN_LENGTH . ' caratteri.\n');
define('JS_DOB', '* la \'data di nascita\' deve avere il seguente formato: xx.xx.xxxx (GG/AA/MM).\n');
define('JS_EMAIL_ADDRESS', '* l\' \'indirizzo e-maill\' deve essere composto da minimo ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' caratteri.\n');
define('JS_ADDRESS', '* La \'Via\' deve essere composta da minimo ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' caratteri.\n');
define('JS_POST_CODE', '* Il \'CAP\' deve essere composto da ' . ENTRY_POSTCODE_MIN_LENGTH . ' caratteri.\n');
define('JS_CITY', '* la \'citt&agrave;\' deve essere composta da minimo ' . ENTRY_CITY_MIN_LENGTH . ' caratteri.\n');
define('JS_STATE', '* La  \'Provincia\' deve essere specificata.\n');
define('JS_STATE_SELECT', '-- selezioni sopra --');
define('JS_ZONE', '* La \'Provincia\' deve essere selezionata dalla lista relativa a questo Paese.');
define('JS_COUNTRY', '* Il \'Paese\' deve essere selezionato.\n');
define('JS_TELEPHONE', '* Il \'numero di telefono\' deve essere composto da minimo ' . ENTRY_TELEPHONE_MIN_LENGTH . ' segni.\n');
define('JS_PASSWORD', '* La \'Password\' così come la \'conferma Password\' devono essere uguali e composti da minimo ' . ENTRY_PASSWORD_MIN_LENGTH . ' segni.\n');
define('JS_ORDER_DOES_NOT_EXIST', 'Il numero incarico %s non esiste!');
define('CATEGORY_PERSONAL', 'Dati personali');
define('CATEGORY_ADDRESS', 'Indirizzo');
define('CATEGORY_CONTACT', 'Contatto');
define('CATEGORY_COMPANY', 'Ditta');
define('CATEGORY_OPTIONS', 'Altre opinioni');
define('ENTRY_GENDER', 'Titolo:');
define('ENTRY_GENDER_ERROR', '&nbsp;<span class="errorText">Indicazioni importanti</span>');
define('ENTRY_FIRST_NAME', 'Nome:');
define('ENTRY_FIRST_NAME_ERROR', '&nbsp;<span class="errorText">minimo ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' caratteri</span>');
define('ENTRY_LAST_NAME', 'Cognome:');
define('ENTRY_LAST_NAME_ERROR', '&nbsp;<span class="errorText">minimo ' . ENTRY_LAST_NAME_MIN_LENGTH . ' caratteri</span>');
define('ENTRY_DATE_OF_BIRTH', 'Data di nascita:');
define('ENTRY_DATE_OF_BIRTH_ERROR', '&nbsp;<span class="errorText">(z.B. 21.05.1970)</span>');
define('ENTRY_EMAIL_ADDRESS', 'Indirizzo e-mail:');
define('ENTRY_EMAIL_ADDRESS_ERROR', '&nbsp;<span class="errorText">minimo ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . 'caratteri</span>');
define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', '&nbsp;<span class="errorText">indirizzo e-mail non valido!</span>');
define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', '&nbsp;<span class="errorText">Questo indirizzo e-mail &egrave; gi&agrave; esistente!</span>');
define('ENTRY_COMPANY', 'Nome ditta:');
define('ENTRY_STREET_ADDRESS', 'Via:');
define('ENTRY_STREET_ADDRESS_ERROR', '&nbsp;<span class="errorText">minimo ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' caratteri</span>');
define('ENTRY_SUBURB', 'altri indirizzi:');
define('ENTRY_POST_CODE', 'CAP:');
define('ENTRY_POST_CODE_ERROR', '&nbsp;<span class="errorText">minimo ' . ENTRY_POSTCODE_MIN_LENGTH . ' numeri</span>');
define('ENTRY_CITY', 'Citt&agrave;:');
define('ENTRY_CITY_ERROR', '&nbsp;<span class="errorText">minimo ' . ENTRY_CITY_MIN_LENGTH . ' caratteri</span>');
define('ENTRY_STATE', 'Regione:');
define('ENTRY_STATE_ERROR', '&nbsp;<span class="errorText">informazione necessaria</font></small>');
define('ENTRY_COUNTRY', 'Paese:');
define('ENTRY_TELEPHONE_NUMBER', 'numero di telefono:');
define('ENTRY_TELEPHONE_NUMBER_ERROR', '&nbsp;<span class="errorText">minimo ' . ENTRY_TELEPHONE_MIN_LENGTH . ' numeri</span>');
define('ENTRY_FAX_NUMBER', 'numero fax:');
define('ENTRY_NEWSLETTER', 'Circolare:');
define('ENTRY_CUSTOMERS_STATUS', 'gruppo cliente:');
define('ENTRY_NEWSLETTER_YES', 'abbonati');
define('ENTRY_NEWSLETTER_NO', 'non abbonati');
define('ENTRY_MAIL_ERROR','&nbsp;<span class="errorText">Effettui una scelta</span>');
define('ENTRY_PASSWORD','Password (\'esegui autom\')');
define('ENTRY_PASSWORD_ERROR','&nbsp;<span class="errorText">La sua PAssword deve essere composta da minimo ' . ENTRY_PASSWORD_MIN_LENGTH . ' caratteri.</span>');
define('ENTRY_MAIL_COMMENTS','Testo e-mail aggiuntivo:');
define('ENTRY_MAIL','Inviare e-mail con PAssword al cliente?');
define('YES','si');
define('NO','no');
define('SAVE_ENTRY','Salvare modifiche?');
define('TEXT_CHOOSE_INFO_TEMPLATE','Presentazione per dettagli articoli');
define('TEXT_CHOOSE_OPTIONS_TEMPLATE','Presentazione per opzioni articoli');
define('TEXT_SELECT','-- Selezioni --');
// Icons
define('ICON_ARROW_RIGHT','contrassegnato');
define('ICON_BIG_WARNING','Attenzione!');
define('ICON_CROSS', 'Errato');
define('ICON_CURRENT_FOLDER', 'ordine attuale');
define('ICON_DELETE', 'Cancellare');
define('ICON_EDIT','Modifica');
define('ICON_ERROR', 'Errore');
define('ICON_FILE', 'File');
define('ICON_FILE_DOWNLOAD', 'Scaricare');
define('ICON_FOLDER', 'raccoglitore');
define('ICON_LOCKED', 'Bloccato');
define('ICON_POPUP','Anteprima banner');
define('ICON_PREVIOUS_LEVEL', 'Livello');
define('ICON_PREVIEW', 'Presentazione');
define('ICON_STATISTICS', 'Statistica');
define('ICON_SUCCESS', 'eseguito');
define('ICON_TICK', 'autentico');
define('ICON_UNLOCKED', 'sbloccato');
define('ICON_WARNING', 'Avviso');
// constants for use in tep_prev_next_display function
define('TEXT_RESULT_PAGE', 'pagina %s di %d');
define('TEXT_DISPLAY_NUMBER_OF_BANNERS', 'saranno mostrate <b>%d</b> fino <b>%d</b> (di un totale <b>%d</b> Banner)');
define('TEXT_DISPLAY_NUMBER_OF_COUNTRIES', 'Saranno mostrate <b>%d</b> fino <b>%d</b> (di un totale <b>%d</b> Paesi)');
define('TEXT_DISPLAY_NUMBER_OF_CUSTOMERS', 'saranno mostrati <b>%d</b> fino <b>%d</b> (di un totale <b>%d</b> clienti)');
define('TEXT_DISPLAY_NUMBER_OF_CURRENCIES', 'Saranno mostrati <b>%d</b> fino <b>%d</b> (di un totale <b>%d</b> Valute)');
define('TEXT_DISPLAY_NUMBER_OF_LANGUAGES', 'saranno mostrate <b>%d</b> fino <b>%d</b> (di un totale <b>%d</b> Lingue)');
define('TEXT_DISPLAY_NUMBER_OF_MANUFACTURERS', 'saranno mostrate <b>%d</b> fino <b>%d</b> (di un totale <b>%d</b> produttori)');
define('TEXT_DISPLAY_NUMBER_OF_NEWSLETTERS', 'saranno mostrati <b>%d</b> fino <b>%d</b> (di un totale <b>%d</b> circolari)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS', 'saranno mostrati <b>%d</b> fino <b>%d</b> (di un totale <b>%d</b> ordini)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS_STATUS', 'saranno mostrati <b>%d</b> fino <b>%d</b> (di un totale <b>%d</b> stato ordini)');
define('TEXT_DISPLAY_NUMBER_OF_XSELL_GROUP', 'saranno mostrati <b>%d</b> fino <b>%d</b> (di un totale <b>%d</b> gruppi Cross-Marketing)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_VPE', 'saranno mostrati <b>%d</b> fino <b>%d</b> (di un totale <b>%d</b> totalit&agrave; di imballaggi)');
define('TEXT_DISPLAY_NUMBER_OF_SHIPPING_STATUS', 'saranno mostrati <b>%d</b> fino <b>%d</b> (di un totale <b>%d</b> stato spedizione)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', 'Saranno mostrati <b>%d</b> fino <b>%d</b> (di un totale <b>%d</b> Articoli)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_EXPECTED', 'saranno mostrati <b>%d</b> fino <b>%d</b> (di un totale <b>%d</b> articoli attesi)');
define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', 'saranno mostrati <b>%d</b> fino <b>%d</b> (di un totale <b>%d</b> valutazioni)');
define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', 'Saranno mostrati <b>%d</b> fino <b>%d</b> (di un totale <b>%d</b> offerte speciali)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_CLASSES', 'Saranno mostrati <b>%d</b> bis <b>%d</b> (di un totale <b>%d</b> fascie fiscali)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_ZONES', 'saranno mostrati <b>%d</b> fino <b>%d</b> (di un totale <b>%d</b> zone fiscali)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_RATES', 'saranno mostrate <b>%d</b> fino <b>%d</b> (di un totale <b>%d</b> aliquote imposta)');
define('TEXT_DISPLAY_NUMBER_OF_ZONES', 'saranno mostrate <b>%d</b> fino <b>%d</b> (di un totale <b>%d</b> Regione)');
define('TEXT_DISPLAY_NUMBER_OF_WHOS_ONLINE', 'saranno mostrate <b>%d</b> fino <b>%d</b> (di un totale <b>%d</b> Clienti che sono online)');
define('PREVNEXT_BUTTON_PREV', '&laquo;');
define('PREVNEXT_BUTTON_NEXT', '&raquo;');
define('TEXT_DEFAULT', 'Standard');
define('TEXT_SET_DEFAULT', 'definiti come standard');
define('TEXT_FIELD_REQUIRED', '&nbsp;<span class="fieldRequired">* Richiesto</span>');
define('ERROR_NO_DEFAULT_CURRENCY_DEFINED', 'Errore: Non &egrave; stata definita nessuna valuta standard. La definisca sotto amministrazione -> Lingue/Valute -> Valuti una valuta Standard.');
define('TEXT_CACHE_CATEGORIES', 'Box categorie');
define('TEXT_CACHE_MANUFACTURERS', 'Box produttore');
define('TEXT_CACHE_ALSO_PURCHASED', 'Moduli acquistati');
define('TEXT_NONE', '--nessuno--');
define('TEXT_AUTO_PROPORTIONAL', '--auto proporzionale--');
define('TEXT_AUTO_MAX', '--auto max--');
define('TEXT_TOP', 'Top');
define('ERROR_DESTINATION_DOES_NOT_EXIST', 'Errore: La destinazione di memorizzazione non esiste.');
define('ERROR_DESTINATION_NOT_WRITEABLE', 'Errore: la destinazione di memorizzazione non &egrave; scrivibile.');
define('ERROR_FILE_NOT_SAVED', 'Errore: il file non &egrave; stato salvato.');
define('ERROR_FILETYPE_NOT_ALLOWED', 'Errore: il tipo  di dato non &egrave; autorizzato.');
define('SUCCESS_FILE_SAVED_SUCCESSFULLY', 'Esito: il caricamento file &egrave; avvenuto con successo.');
define('WARNING_NO_FILE_UPLOADED', 'Avviso: non &egrave; stato caricato nessun file.');
define('ERROR_FILE_NOT_REMOVEABLE', 'Errore: File non rimosso.');
define('DELETE_ENTRY','Cancellare registrazione?');
define('TEXT_PAYMENT_ERROR','<b>ATTENZIONE:</b><br />Attivi un modulo di pagamento!');
define('TEXT_SHIPPING_ERROR','<b>ATTENZIONE:</b><br />Attivi un modulo spedizioni!');
define('TEXT_PAYPAL_CONFIG','<b>ATTENZIONE:</b> Configurare qui le impostazioni di pagamento PayPal per la "Modalità live": <a href="%s"><strong>Partner -> PayPal</strong></a>.'); //DokuMan - 2012-05-31 - show warning if PayPal payment module activated, but not configured for live mode yet
define('TEXT_DUPLICATE_CONFIG_ERROR','<b>ATTENZIONE:</b> Chiave di configurazione duplicata: ');
define('TEXT_NETTO','Netto: ');
define('ENTRY_CID','numero cliente:');
define('IP','IP ordine:');
define('CUSTOMERS_MEMO','Memos:');
define('DISPLAY_MEMOS','Mostrare/Scrivere');
define('TITLE_MEMO','MEMO clienti');
define('ENTRY_LANGUAGE','lingua:');
define('CATEGORIE_NOT_FOUND','categoria non esistente');
define('IMAGE_RELEASE', 'riscuoti buono');
define('IMAGE_ICON_STATUS_GREEN_STOCK','in magazzino');
define('IMAGE_ICON_STATUS_GREEN','attivo');
define('IMAGE_ICON_STATUS_GREEN_LIGHT','attivare');
define('IMAGE_ICON_STATUS_RED','inattivo');
define('IMAGE_ICON_STATUS_RED_LIGHT','disattivare');
define('IMAGE_ICON_INFO','selezionare');
define('_JANUARY', 'Gennaio');
define('_FEBRUARY', 'Febbraio');
define('_MARCH', 'Marzo');
define('_APRIL', 'Aprile');
define('_MAY', 'Maggio');
define('_JUNE', 'Giugno');
define('_JULY', 'Luglio');
define('_AUGUST', 'Agosto');
define('_SEPTEMBER', 'Settembre');
define('_OCTOBER', 'Ottobre');
define('_NOVEMBER', 'Novembre');
define('_DECEMBER', 'Dicembre');
//descrizione per link registrazione nella Newsletter
define('TEXT_NEWSLETTER_REMOVE', 'Per registrarsi alle nostre Newsletter faccia clic qua:');
define('TEXT_DISPLAY_NUMBER_OF_GIFT_VOUCHERS', 'saranno mostrati <b>%d</b> fino <b>%d</b> (di un totale <b>%d</b> buoni)');
define('TEXT_DISPLAY_NUMBER_OF_COUPONS', 'saranno mostrati <b>%d</b> fino <b>%d</b> ((di un totale <b>%d</b> Coupons)');
define('TEXT_VALID_PRODUCTS_LIST', 'Lista articoli');
define('TEXT_VALID_PRODUCTS_ID', 'numero articolo');
define('TEXT_VALID_PRODUCTS_NAME', 'Nome articolo');
define('TEXT_VALID_PRODUCTS_MODEL', 'modello articolo');
define('TEXT_VALID_CATEGORIES_LIST', 'Lista categoria');
define('TEXT_VALID_CATEGORIES_ID', 'numero categoria');
define('TEXT_VALID_CATEGORIES_NAME', 'nome categoria');

define('TXT_ALL','Tutti');
// UST ID
define('HEADING_TITLE_VAT','Partita IVA');
define('ENTRY_VAT_ID','Partita IVA:');
define('ENTRY_CUSTOMERS_VAT_ID', 'Partita IVA:');
define('TEXT_VAT_FALSE','<font color="FF0000">Verificato/Errato!</font>');
define('TEXT_VAT_TRUE','<font color="FF0000">Verificato/OK!</font>');
define('TEXT_VAT_UNKNOWN_COUNTRY','<font color="FF0000">Non verificato/Paese sconosciuto!</font>');
define('TEXT_VAT_UNKNOWN_ALGORITHM','<font color="FF0000">non verificato/nessun controllo &egrave; possibile!</font>');
define('TEXT_VAT_INVALID_INPUT','<span class="messageStackError">Non controllato/Il CountryCode fornito non &egrave; valido o il numero di partita IVA &egrave; vuoto!</span>');
define('TEXT_VAT_SERVICE_UNAVAILABLE','<span class="messageStackError">Non controllato / Il servizio SOAP non &egrave; disponibile, riprovare pi&ugrave; tardi!</span>');
define('TEXT_VAT_MS_UNAVAILABLE','<span class="messageStackError">Non controllato / Il servizio dello Stato membro non &egrave; disponibile, riprovare pi&ugrave; tardi o con un altro Stato membro!</span>');
define('TEXT_VAT_TIMEOUT','<span class="messageStackError">Non Controllato/Il servizio dello Stato membro non &egrave; stato raggiunto in tempo, riprovare pi&ugrave; tardi o con un altro Stato membro!</span>');
define('TEXT_VAT_SERVER_BUSY','<span class="messageStackError">Non Controllato/Il servizio non &egrave; in grado di elaborare la vostra richiesta. Riprova pi&ugrave; tardi!</span>');
define('TEXT_VAT_NO_PHP5_SOAP_SUPPORT','<span class="messageStackError">Non controllato/Il vostro sistema non ha il supporto di PHP5 SOAP!</span>');
define('TEXT_VAT_CONNECTION_NOT_POSSIBLE','<span class="messageStackError">ERRORE: Collegamento al webservice non possibile (SOAP-ERROR)!</span>');
define('ENTRY_VAT_ID_ERROR', '<font color="FF0000">* il numero Partita IVA dato &egrave; falso o al momento non pu&ograve; essere verificato!</font>');
define('ERROR_GIF_MERGE', 'supporto GDlib Gif errato, nessuna filigrana possibile');
define('ERROR_GIF_UPLOAD','supporto GDlib Gif errato, non &egrave; possibile nessun Upload di immagine GIF');
define('TEXT_REFERER','Referer: ');
// BOF - Tomcraft - 2009-06-17 Google Sitemap
define('BOX_GOOGLE_SITEMAP', 'Google Sitemap');
// EOF - Tomcraft - 2009-06-17 Google Sitemap
// BOF - Tomcraft - 2009-10-03 - Paypal Express Modul
define('BOX_PAYPAL','PayPal');
// EOF - Tomcraft - 2009-10-03 - Paypal Express Modul
// BOF - Dokuman - 2009-10-02 - added moneybookers payment module version 2.4
define('_PAYMENT_MONEYBOOKERS_EMAILID_TITLE','Indirizzo e-mail di Skrill');
define('_PAYMENT_MONEYBOOKERS_EMAILID_DESC','L\'indirizzo e-mail con cui ti sei registrato a Skrill.<br />Se non hai un account Skrill puoi ottenerne uno gratuitamente all\'indirizzo  <a href="https://account.skrill.com/signup/page1" target="_blank">Skrill.com</a>.');
define('_PAYMENT_MONEYBOOKERS_MERCHANTID_TITLE','ID Mercante');
define('_PAYMENT_MONEYBOOKERS_MERCHANTID_DESC','Il tuo Skrill Merchant ID');
define('_PAYMENT_MONEYBOOKERS_PWD_TITLE','Parola segreta di Skrill');
define('_PAYMENT_MONEYBOOKERS_PWD_DESC','La parola segreta si trova nel tuo profilo Skrill (non &egrave; la tua password!). Deve essere composta solo da caratteri minuscoli e numeri.<br />Per attivare l\'elaborazione in Skrill: Invia un\'e-mail con il tuo indirizzo e-mail Skrill e il nome di dominio di shopsystems<br />A: <a href="mailto:ecommerce@skrill.com?subject=modified eCommerce Shopsoftware: Activation of Skrill Quick Checkout">ecommerce@skrill.com</a>');
define('_PAYMENT_MONEYBOOKERS_TMP_STATUS_ID_TITLE','stato dell\'ordine - ordine temporaneo');
define('_PAYMENT_MONEYBOOKERS_TMP_STATUS_ID_DESC','Un ordine temporaneo viene creato dopo aver inviato "invia ordine" durante il processo di ordinazione. Se si verificano problemi si trova un ordine con questo stato.');
define('_PAYMENT_MONEYBOOKERS_PROCESSED_STATUS_ID_TITLE','stato dell\'ordine - pagamento OK');
define('_PAYMENT_MONEYBOOKERS_PROCESSED_STATUS_ID_DESC','Se tutto va bene e la transazione &egrave; confermata da Skrill.');
define('_PAYMENT_MONEYBOOKERS_PENDING_STATUS_ID_TITLE','stato dell\'ordine - pagamento in attesa');
define('_PAYMENT_MONEYBOOKERS_PENDING_STATUS_ID_DESC','Se qualcuno non ha un saldo sul suo conto Skrill. Il pagamento &egrave; in attesa di pagamento fino a quando Skrill non ricever&agrave; il saldo.');
define('_PAYMENT_MONEYBOOKERS_CANCELED_STATUS_ID_TITLE','stato dell\'ordine - pagamento annullato');
define('_PAYMENT_MONEYBOOKERS_CANCELED_STATUS_ID_DESC','Se un pagamento (con carta di credito) viene rifiutato.');
define('MB_ERROR_NO_MERCHANT','Non esiste un account Skrill associato a questo indirizzo email.');
define('MB_MERCHANT_OK','Conto Skrill OK, merchant ID %s ricevuti e salvati.');
define('MB_INFO','<img src="../images/icons/moneybookers/MBbanner.jpg"><br /><br />&Egrave; possibile accettare carte di credito, note di debito, bonifico bancario online, Giropay e altri importanti pagamenti locali dopo una sola attivazione. Non avrete bisogno di contratti con ogni processore di pagamento se andate con Skrill. Tutto &egrave; fatto con <a href="https://account.skrill.com/signup/page1" target="_blank"><b>conto Skrill gratuito</b></a>. Ulteriori opzioni di pagamento sono gratuite, e non ci sono <b>nessun canone mensile o costi di attivazione</b>.<br /><br /><br /><b>Il vostro vantaggio:</b><br />- pi&ugrave; vendite accettando tutti i pagamenti principali<br />- costi e sforzi ridotti - un solo contratto<br />- facile elaborazione per il vostro cliente - pagamento diretto senza bisogno di creare un account aggiuntivo<br />- un click di attivazione e integrazione<br />- buono <a href="https://www. skrill.com/it/fees/" target="_blank"><b>condizioni</b></a><br />- notifica immediata del pagamento e prova dei dettagli del cliente<br />- nessun costo aggiuntivo, anche all\'estero<br />- 11 milioni di clienti in tutto il mondo');
// EOF - Dokuman - 2009-10-02 - added moneybookers payment module version 2.4
// BOF - Tomcraft - 2009-11-02 - set global customers-group-permissions
define('BOX_CUSTOMERS_GROUP','Autorizzazioni CG');
// EOF - Tomcraft - 2009-11-02 - set global customers-group-permissions
// BOF - Tomcraft - 2009-11-02 - New admin top menu
define('TEXT_ADMIN_START', 'Home');
define('BOX_HEADING_CONFIGURATION2','Avv. Configurazione');
// EOF - Tomcraft - 2009-11-02 - New admin top menu
//BOF - web28 - 2010-04-10 - ADMIN SEARCH BAR
define('ASB_QUICK_SEARCH_CUSTOMER','Ricerca clienti...');
define('ASB_QUICK_SEARCH_ORDER','Ordini di ricerca...');
define('ASB_QUICK_SEARCH_ORDER_ID','Ricerca ordini ID...');
define('ASB_QUICK_SEARCH_ARTICLE','Ricerca prodotti/categorie...');
define('ASB_QUICK_SEARCH_EMAIL', 'Ricerca indirizzi e-mail...');
define('ASB_QUICK_SEARCH_ARTICLE_ID','Ricerca prodotti/categorie ID...');
//EOF - web28 - 2010-04-10 - ADMIN SEARCH BAR
//BOF - web28 - 2010.05.30 - accounting - set all checkboxes , countries - set all flags
define('BUTTON_SET','selezionare Tutti');
define('BUTTON_UNSET','Deselezionare tutti');
//EOF - web28 - 2010.05.30 - accounting - set all checkboxes 
//BOF - DokuMan - 2010-08-12 - added possibility to reset admin statistics
define('TEXT_ROWS','Row');
define('TABLE_HEADING_RESET','Azzera le statistiche');
//EOF - DokuMan - 2010-08-12 - added possibility to reset admin statistics
//BOF - web28 - 2010-11-13 - add BUTTON_CLOSE_WINDOW
define('BUTTON_CLOSE_WINDOW' , 'Chiudere la finestra');
//EOF - web28 - 2010-11-13 - add BUTTON_CLOSE_WINDOW
//BOF - hendrik - 2011-05-14 - independent invoice number and date
define('ENTRY_INVOICE_NUMBER',  'Numero di fattura:'); 
define('ENTRY_INVOICE_DATE',    'Data fattura:'); 
//EOF - hendrik - 2011-05-14 - independent invoice number and date 
//BOF - web28 - 2010-07-06 - added missing error text
define('ENTRY_VAT_ERROR', '&nbsp;<span class="errorText">FUORI GAMMA IVA Reg.</span>');
//EOF - web28 - 2010-07-06 - added missing error text
define ('CONFIG_INT_VALUE_ERROR', '"% s" ERRORE: Inserire solo numeri &egrave; stato ignorato% s');
define ('CONFIG_MAX_VALUE_WARNING', '"% s" ATTENZIONE:% s ingresso &egrave; stato ignorato [maximum:% s]');
define ('CONFIG_MIN_VALUE_WARNING', '"% s" ATTENZIONE:% s ingresso &egrave; stato ignorato [Minimo:% s]');
define ('WHOS_ONLINE_TIME_LAST_CLICK_INFO', 'Periodo di visualizzazione in secondi:% s Dopo questo tempo, le voci vengono cancellate.');
define('TEXT_GLOBAL_PRODUCTS_MODEL', 'Prodotti Modello');
define ('TEXT_INFO_MODULE_RESTORE', 'Vuoi ripristinare le impostazioni salvate? <br /><br /><b>Avvertenza</b>: Questo sovrascriver&agrave; le impostazioni correnti!');
define ('TEXT_INFO_MODULE_REMOVE', 'Vuoi disinstallare il modulo? <br /><br /><b>Attenzione</b>: Anche tutte le impostazioni del modulo vengono cancellate!');
define ('TEXT_INFO_MODULE_BACKUP', 'Volete eseguire il backup delle impostazioni del modulo?');
define ('MODULE_BACKUP_CONFIRM', 'Le impostazioni del modulo sono state salvate con successo!');
define ('MODULE_RESTORE_CONFIRM', 'Le impostazioni del modulo sono state ripristinate con successo!');
define ('MODULE_UPDATE_CONFIRM', 'Le impostazioni del modulo sono state aggiornate con successo!');
/* magnalister v1.0.0 */
define('BOX_HEADING_MAGNALISTER', 'magnalister');
define('BOX_MAGNALISTER', 'magnalister Admin');
/* END magnalister */
define('CHARS_LEFT', 'caratteri a sinistra');
define('CHARS_MAX', 'di max.');
define('DISPLAY_PER_PAGE', 'Visualizzazione per pagina: ');
define('SPECIALS_DATE_START_TT', 'Le offerte iniziano alle 00:00:00');
define('SPECIALS_DATE_END_TT', 'Le offerte terminano a mezzanotte (23:59:59)');
define('BOX_PARCEL_CARRIERS', 'Portapacchi');
define('TEXT_DISPLAY_NUMBER_OF_CARRIERS', 'Visualizzazione da <b>%d</b> a <b>%d</b> (di <b>%d</b> vettori)');
define('RSS_FEED_TITLE', 'Ultime informazioni dal blog di eCommerce Shopsoftware modificato');
define('RSS_FEED_DESCRIPTION', 'Ultime informazioni dal forum di supporto eCommerce Shopsoftware modificato');
define('RSS_FEED_LINK', 'http://www.modified-shop.org/blog');
define('RSS_FEED_ALTERNATIVE', 'Purtroppo le ultime notizie non possono essere visualizzate nel feed RSS. Si prega di visitare il nostro Blog all\'indirizzo <a href="'.RSS_FEED_LINK.'">www.modified-shop.org/blog</a> per ottenere informazioni importanti per i gestori dei negozi sui seguenti argomenti: <ul><li>Aggiornamenti e correzioni importanti</li><li>Estensioni delle funzioni</li><li>giurisdizioni</li><li>Notizie</li><li>Gossip</li></ul>');
define('RSS_FEED_NOT_REACHABLE', 'Il newsfeed non ha potuto essere aggiornato per molto tempo.<br>Non perdetevi le notizie importanti, le offerte e molto altro ancora. Venite a trovarci <a target="_blank" href="https://www.modified-shop.org/blog">www.modified-shop.org/blog</a><br>');
define('TEXT_DISPLAY_NUMBER_OF_NEWSFEED', 'Visualizzati da <b>%d</b> a <b>%d</b> (di <b>%d</b> notizie)');
define('CFG_TXT_YES', 'S&igrave;');
define('CFG_TXT_NO', 'No');
define('CFG_TXT_OR', 'oppure');
define('CFG_TXT_AND', 'e');
define('CFG_TXT_ASC', 'ascendente');
define('CFG_TXT_DESC', 'discendente');
define('CFG_TXT_PRODUCTS_NAME', 'Nome del prodotto');
define('CFG_TXT_PRODUCTS_MODEL', 'Modello del prodotto');
define('CFG_TXT_DATE_EXPECTED', 'Data prevista');
define('CFG_TXT_ACCOUNT', 'Conto');
define('CFG_TXT_GUEST', 'Ospite');
define('CFG_TXT_BOTH', 'entrambi');
define('CFG_TXT_NONE', 'nessuno');
define('CFG_TXT_ADMIN', 'admin');
define('CFG_TXT_ALL', 'tutti');
define('CFG_TXT_WEIGHT', 'Peso');
define('CFG_TXT_PRICE', 'Prezzo');
define('CFG_TXT_ITEM', 'Voce');
define('CFG_TXT_WHOS_ONLINE', 'Online');
define('CFG_TXT_ORDERS', 'Ordini');
define('CFG_TXT_CUSTOMERS', 'Clienti');
define('CFG_TXT_SALES_REPORT', 'Statistiche');
define('CFG_TXT_BLOG', 'Blog');
define('CSRF_TOKEN_MANIPULATION', 'Manipolazione CSRFToken (a causa di aspetti di sicurezza non &egrave; pi&ugrave; consentito lavorare nell\'area amministrativa in diverse schede del browser.)');
define('CSRF_TOKEN_NOT_DEFINED', 'CSRFToken non definito (a causa di aspetti di sicurezza non &egrave; pi&ugrave; consentito lavorare nell\'area amministrativa in diverse schede del browser.)');
define('TEXT_ACCOUNTING_INFO','L\'amministratore principale [1] non pu&ograve; essere privato dei diritti di accesso.');
define('JAVASCRIPT_DISABLED_INFO', 'JavaScript sembra essere disabilitato nel tuo browser. Attivare JavaScript per poter utilizzare tutte le funzioni di questo sito e tutti i contenuti del sito');
define('BOX_MODULE_TYPE', 'Moduli di estensione di classe');
define('MULTIPLE_INSTALLATION', '<span style="color:red">[Installazione multipla: %s]</span>');
define('FILEUPLOAD_INPUT_TXT', 'Nessun file');
define('FILEUPLOAD_BTN_TXT', 'Ricerca');
define('CHECK_LABEL_PRICE', 'Controlla il prezzo');
define('TEXT_PAYPAL_TAB_CONFIG', 'Configurazione PayPal');
define('TEXT_PAYPAL_TAB_PROFILE', 'Profilo PayPal');
define('TEXT_PAYPAL_TAB_WEBHOOK', 'PayPal Webhook');
define('TEXT_PAYPAL_TAB_MODULE', 'Prodotti PayPal');
define('TEXT_PAYPAL_TAB_INFO', 'Informazioni PayPal');
define('TEXT_DEFAULT_SORT_ORDER_TITLE', 'Criterio di ordinamento');
define('TEXT_DEFAULT_SORT_ORDER_DESC', 'Ordine di elaborazione. Il numero pi&ugrave; piccolo viene eseguito per primo.');
define('TEXT_DEFAULT_STATUS_TITLE', 'Attivare il modulo?');
define('TEXT_DEFAULT_STATUS_DESC', 'Stato dei moduli');
define('TEXT_HOUR', 'ora');
define('TEXT_HOURS', 'orari');
define('DELETE_LOGS_SUCCESSFUL', 'I file di registro sono stati cancellati con successo.');
define('BOX_BLACKLIST_LOGS', 'Registri della lista nera');
define('CONTINUE_WITHOUT_SAVE', 'I cambiamenti non salvati saranno respinti.');
define('TEXT_SORT_ASC','ascendente');
define('TEXT_SORT_DESC','discendente');
define('MSRP','MSRP');
define('YOUR_PRICE','il tuo prezzo ');
define('UNIT_PRICE','prezzo unitario ');
define('ONLY',' Ora solo ');
define('FROM','da ');
define('YOU_SAVE','si salva ');
define('INSTEAD','Il nostro prezzo precedente ');
?>