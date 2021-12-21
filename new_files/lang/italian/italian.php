<?php
/* -----------------------------------------------------------------------------------------
   $Id: italian.php 1308 2005-10-15 14:22:18Z hhgag $

   XT-Commerce - community made shopping
   http://www.xt-commerce.com

   Copyright (c) 2003 XT-Commerce
   -----------------------------------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(german.php,v 1.119 2003/05/19); www.oscommerce.com 
   (c) 2003  nextcommerce (german.php,v 1.25 2003/08/25); www.nextcommerce.org

   Released under the GNU General Public License 
   ---------------------------------------------------------------------------------------*/

/*
 * 
 *  TEMPO / DATA
 * 
 */
 

define('HTML_PARAMS','dir="ltr" xml:lang="it" xmlns="http://www.w3.org/1999/xhtml');

@setlocale(LC_TIME, 'it_IT.ISO8859-1', 'it_IT', 'it-IT', 'it');

define('DATE_FORMAT_SHORT', '%d.%m.%Y');  // this is used for strftime()
define('DATE_FORMAT_LONG', '%A, %d. %B %Y'); // this is used for strftime()
define('DATE_FORMAT', 'd.m.Y');  // this is used for strftime()
define('DATE_TIME_FORMAT', DATE_FORMAT_SHORT . ' %H:%M:%S');
define('DOB_FORMAT_STRING', 'gg.mm.aaaa');

function xtc_date_raw($date, $reverse = false) {
  if ($reverse) {
    return substr($date, 0, 2) . substr($date, 3, 2) . substr($date, 6, 4);
  } else {
    return substr($date, 6, 4) . substr($date, 3, 2) . substr($date, 0, 2);
  }
}

require_once(DIR_FS_INC.'auto_include.inc.php');
foreach(auto_include(DIR_WS_LANGUAGES.'italian/extra/','php') as $file) require ($file);

define('TITLE', STORE_NAME);
define('HEADER_TITLE_TOP', 'Home');    
define('HEADER_TITLE_CATALOG', 'Catalogo');

// if USE_DEFAULT_LANGUAGE_CURRENCY is true, use the following currency, instead of the applications default currency (used when changing language)
define('LANGUAGE_CURRENCY', 'EURO');
define('MALE', 'Signor');
define('FEMALE', 'Signora');
define('DIVERSE', 'Diverso');

/*
 * 
 *  BOX TEXT
 * 
 */

// text for gift voucher redeeming
define('IMAGE_REDEEM_GIFT','Riscuotere buono!');
define('BOX_TITLE_STATISTICS','Statistica:');
define('BOX_ENTRY_CUSTOMERS','Clienti');
define('BOX_ENTRY_PRODUCTS','Articolo');
define('BOX_ENTRY_REVIEWS','Valutazioni');
define('TEXT_VALIDATING','Non confermato');

// manufacturer box text
define('BOX_MANUFACTURER_INFO_HOMEPAGE', '%s Homepage');
define('BOX_MANUFACTURER_INFO_OTHER_PRODUCTS', 'Pi&ugrave; articoli');
define('BOX_HEADING_ADD_PRODUCT_ID','Mettere nel carrello');
define('BOX_LOGINBOX_STATUS','Gruppo cliente:');
define('BOX_LOGINBOX_DISCOUNT','Sconto articolo');
define('BOX_LOGINBOX_DISCOUNT_TEXT','Sconto');
define('BOX_LOGINBOX_DISCOUNT_OT','');

// reviews box text in includes/boxes/reviews.php
define('BOX_REVIEWS_WRITE_REVIEW', 'Valuti l\'articolo!');
define('BOX_REVIEWS_NO_WRITE_REVIEW', 'Nessuna revisione possibile.');
define('BOX_REVIEWS_TEXT_OF_5_STARS', '%s di 5 Stelle!');

// pull down default text
define('PULL_DOWN_DEFAULT', 'Selezionare');

// javascript messages
define('JS_ERROR', 'Mancano informazioni necessarie! Compilare correttamente.\n\n');

define('JS_REVIEW_TEXT', '* Il testo deve essere composto da minimo ' . REVIEW_TEXT_MIN_LENGTH . ' caratteri.\n\n');
define('JS_REVIEW_RATING', '* Inserisca la sua valutazione.\n\n');
define('JS_ERROR_NO_PAYMENT_MODULE_SELECTED', '* Selezioni il metodo di pagamento per i suoi ordini.\n');
define('JS_ERROR_SUBMITTED', 'Questa pagina &egrave; stata appena confermata. Faccia clic su OK e aspetti che termini il processo.');
define('ERROR_NO_PAYMENT_MODULE_SELECTED', '* Selezioni un metodo di pagamento per i suoi ordini.');
define('JS_ERROR_NO_SHIPPING_MODULE_SELECTED', '* Si prega di scegliere un metodo di spedizione per il vostro ordine.\n');
define('JS_ERROR_CONDITIONS_NOT_ACCEPTED', '* Purtroppo non possiamo accettare il vostro ordine a meno che non confermiate di aver letto i nostri termini e condizioni!\n\n');
define('JS_ERROR_REVOCATION_NOT_ACCEPTED', '* Purtroppo non possiamo accettare il vostro ordine, a meno che non accettiate che il diritto di recesso scada per i prodotti virtuali!\n\n');
define('JS_ERROR_PRIVACY_NOTICE_NOT_ACCEPTED', '* Purtroppo non possiamo accettare il vostro ordine a meno che non confermiate la nostra informativa sulla privacy!\n\n');
define('JS_REVIEW_AUTHOR', '* Inserisci il tuo nome.\n\n');

/*
 * 
 * ACCOUNT FORMS
 * 
 */

define('ENTRY_COMPANY_ERROR', '');
define('ENTRY_COMPANY_TEXT', '');
define('ENTRY_GENDER_ERROR', 'Selezioni un titolo.');
define('ENTRY_GENDER_TEXT', '*');
define('ENTRY_FIRST_NAME_ERROR', 'Il suo nome deve essere composto da minimo ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' caratteri.');
define('ENTRY_FIRST_NAME_TEXT', '*');
define('ENTRY_LAST_NAME_ERROR', 'Il suo cognome deve essere composto da minimo' . ENTRY_LAST_NAME_MIN_LENGTH . ' caratteri.');
define('ENTRY_LAST_NAME_TEXT', '*');
define('ENTRY_DATE_OF_BIRTH_ERROR', 'la sua data di nascita deve essere del formato GG.MM.AAAA (es. 21.05.1970)');
define('ENTRY_DATE_OF_BIRTH_TEXT', '* (zB. 21.05.1970)');
define('ENTRY_EMAIL_ADDRESS_ERROR', 'Il suo indirizzo e-mail deve essere composto da un minimo di ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' caratteri.');
define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', 'L\'indirizzo e-mail inserito &egrave; errato - lo controlli.');
define('ENTRY_EMAIL_ERROR_NOT_MATCHING', 'Gli indirizzi e-mail inseriti non corrispondono.'); // 
define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', 'l\'indirizzo e-mail non esiste - lo controlli.');
define('ENTRY_EMAIL_ADDRESS_TEXT', '*');
define('ENTRY_STREET_ADDRESS_ERROR', 'Via/N&deg; deve essere di minimo' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' caratteri.');
define('ENTRY_STREET_ADDRESS_TEXT', '*');
define('ENTRY_SUBURB_TEXT', '');
define('ENTRY_POST_CODE_ERROR', 'Il suo CAP deve essere di minimo ' . ENTRY_POSTCODE_MIN_LENGTH . ' caratteri.');
define('ENTRY_POST_CODE_TEXT', '*');
define('ENTRY_CITY_ERROR', 'Il paese deve essere di minimo ' . ENTRY_CITY_MIN_LENGTH . ' caratteri.');
define('ENTRY_CITY_TEXT', '*');
define('ENTRY_STATE_ERROR', 'La sua regione deve essere composta da minimo ' . ENTRY_STATE_MIN_LENGTH . ' caratteri.');
define('ENTRY_STATE_ERROR_SELECT', 'Selezioni una Provincia dalla lista.');
define('ENTRY_STATE_TEXT', '*');
define('ENTRY_COUNTRY_ERROR', 'Selezioni un paese dalla lista.');
define('ENTRY_COUNTRY_TEXT', '*');
define('ENTRY_TELEPHONE_NUMBER_ERROR', 'Il suo numero telefonico deve essere composto da minimo ' . ENTRY_TELEPHONE_MIN_LENGTH . ' caratteri.');
define('ENTRY_TELEPHONE_NUMBER_TEXT', '*');
define('ENTRY_FAX_NUMBER_TEXT', '');
define('ENTRY_NEWSLETTER_TEXT', '');
define('ENTRY_PASSWORD_ERROR', 'La sua Password deve essere composta da minimo' . ENTRY_PASSWORD_MIN_LENGTH . ' caratteri.');
define('ENTRY_PASSWORD_ERROR_MIN_LOWER', 'La password deve contenere almeno %s caratteri minuscoli');
define('ENTRY_PASSWORD_ERROR_MIN_UPPER', 'La password deve contenere almeno %s caratteri maiuscoli');
define('ENTRY_PASSWORD_ERROR_MIN_NUM', 'La password deve contenere almeno %s numeri');
define('ENTRY_PASSWORD_ERROR_MIN_CHAR', 'La password deve contenere almeno %s caratteri non alfanumerici');
define('ENTRY_PASSWORD_ERROR_NOT_MATCHING', 'Le sue Passwords non corrispondono.');
define('ENTRY_PASSWORD_TEXT', '*');
define('ENTRY_PASSWORD_CONFIRMATION_TEXT', '*');
define('ENTRY_PASSWORD_CURRENT_TEXT', '*');
define('ENTRY_PASSWORD_CURRENT_ERROR', 'La sua Password deve essere di minimo ' . ENTRY_PASSWORD_MIN_LENGTH . ' caratteri.');
define('ENTRY_PASSWORD_NEW_TEXT', '*');
define('ENTRY_PASSWORD_NEW_ERROR', 'La sua nuova Password deve essere composta da minimo ' . ENTRY_PASSWORD_MIN_LENGTH . 'caratteri.');
define('ENTRY_PASSWORD_NEW_ERROR_NOT_MATCHING', 'Le sue Passwords non corrispondono.');

/*
 * 
 *  RESTULTPAGES
 * 
 */
 
define('TEXT_RESULT_PAGE', 'Pagine:');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', 'Mostra <b>%d</b> fino <b>%d</b> (di un totale <b>%d</b> Articoli)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS', 'Mostra <b>%d</b> fino <b>%d</b> (di un totale <b>%d</b> ordini)');
define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', 'Mostra <b>%d</b> fino <b>%d</b> (di un totale <b>%d</b> valutazioni)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_NEW', 'Mostra <b>%d</b> fino <b>%d</b> (di un totale <b>%d</b> nuovi articoli)');
define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', 'Mostra <b>%d</b> fino <b>%d</b> (di un totale <b>%d</b> offerte)');

/*
 * 
 * SITE NAVIGATION
 * 
 */

define('PREVNEXT_TITLE_PREVIOUS_PAGE', 'Pagina precedente');
define('PREVNEXT_TITLE_NEXT_PAGE', 'Pagina successiva');
define('PREVNEXT_TITLE_PAGE_NO', 'Pagina %d');
define('PREVNEXT_TITLE_PREV_SET_OF_NO_PAGE', 'precedente pagina %d');
define('PREVNEXT_TITLE_NEXT_SET_OF_NO_PAGE', 'Successiva pagina %d');

/*
 * 
 * PRODUCT NAVIGATION
 * 
 */

define('PREVNEXT_BUTTON_PREV', '[&lt;&lt;&nbsp;Vorherige]');
define('PREVNEXT_BUTTON_NEXT', '[nächste&nbsp;&gt;&gt;]');

/*
 * 
 * IMAGE BUTTONS
 * 
 */

define('IMAGE_BUTTON_ADD_ADDRESS', 'Nuovo indirizzo');
define('IMAGE_BUTTON_BACK', 'Indietro');
define('IMAGE_BUTTON_CHANGE_ADDRESS', 'Modifica indirizzo');
define('IMAGE_BUTTON_CHECKOUT', 'cassa');
define('IMAGE_BUTTON_CONFIRM_ORDER', 'Acquista');
define('IMAGE_BUTTON_CONTINUE', 'Avanti');
define('IMAGE_BUTTON_DELETE', 'Cancella');
define('IMAGE_BUTTON_LOGIN', 'Registra');
define('IMAGE_BUTTON_IN_CART', 'Nel carrello');
define('IMAGE_BUTTON_SEARCH', 'Cerca');
define('IMAGE_BUTTON_UPDATE', 'Attualizzare');
define('IMAGE_BUTTON_UPDATE_CART', 'attualizzare carrello merci');
define('IMAGE_BUTTON_WRITE_REVIEW', 'Scriva valutazione');
define('IMAGE_BUTTON_ADMIN', 'Admin'); 
define('IMAGE_BUTTON_PRODUCT_EDIT', 'Salva prodotto');
define('IMAGE_BUTTON_LOGIN', 'Registrare');
define('IMAGE_BUTTON_SEND', 'Invia a'); //DokuMan - 2010-03-15 - Added button description for contact form
define('IMAGE_BUTTON_CONTINUE_SHOPPING', 'Continua a fare shopping'); //Hendrik - 2010-11-12 - used in default template ...shopping_cart.html
define('IMAGE_BUTTON_CHECKOUT_STEP2', 'Continuare al punto 2');
define('IMAGE_BUTTON_CHECKOUT_STEP3', 'Continuare al punto 3');
define('SMALL_IMAGE_BUTTON_DELETE', 'Cancellare');
define('SMALL_IMAGE_BUTTON_EDIT', 'Modificare');
define('SMALL_IMAGE_BUTTON_VIEW', 'Mostrare');
define('ICON_ARROW_RIGHT', 'Mostra pi&ugrave;');
define('ICON_CART', 'Nel carrello');
define('ICON_SUCCESS', 'Esito');
define('ICON_WARNING', 'Attenzione');
define('ICON_ERROR', 'Errore');
define('TEXT_PRINT', 'Stampa'); //DokuMan - 2009-05-26 - Added description for 'account_history_info.php'
define('BUTTON_RESET', 'Reset');
define('BUTTON_UPDATE', 'Aggiorna');

/*
 * 
 *  GREETINGS
 * 
 */

define('TEXT_GREETING_PERSONAL', '&egrave; bello che lei sia tornato, <span class="greetUser">%s!</span> Desidera vedere i<a style="text-decoration:underline;" href="%s">nuovi articoli</a>?');
define('TEXT_GREETING_PERSONAL_RELOGON', '<small>Se lei non &egrave; %s, si registri <a style="text-decoration:underline;" href="%s">qui</a> con i suoi dati di registrazione.</small>');
define('TEXT_GREETING_GUEST', 'Benvenuto <span class="greetUser">Gast!</span> Desidera <a style="text-decoration:underline;" href="%s">registrarsi</a>? oppure vuole aprire un <a style="text-decoration:underline;" href="%s">conto cliente</a>?');
define('TEXT_SORT_PRODUCTS', 'L\'ordine dei prodotti &egrave; ');
define('TEXT_DESCENDINGLY', 'scendere');
define('TEXT_ASCENDINGLY', 'salire');
define('TEXT_BY', ' verso ');
define('TEXT_OF_5_STARS', '%s di 5 Stelle!');
define('TEXT_REVIEW_BY', 'da %s');
define('TEXT_REVIEW_WORD_COUNT', '%s parola');
define('TEXT_REVIEW_RATING', 'Valutazione: %s [%s]');
define('TEXT_REVIEW_DATE_ADDED', 'inserita il: %s');
define('TEXT_NO_REVIEWS', 'valutazioni non sono ancora presenti.');
define('TEXT_NO_NEW_PRODUCTS', 'Al momento non ci sono nuovi articoli.');
define('TEXT_UNKNOWN_TAX_RATE', 'aliquota imposta sconosciuta');

/*
 * 
 * WARNINGS
 * 
 */

define('WARNING_INSTALL_DIRECTORY_EXISTS', 'Attenzione: La directory di installazione &egrave; ancora disponibile su: %s. Si prega di cancellare questa directory per motivi di sicurezza!');
define('WARNING_CONFIG_FILE_WRITEABLE', 'Attenzione: L\'eCommerce Shopsoftware modificato &egrave; in grado di scrivere nella directory di configurazione: %s. Ci&ograve; rappresenta un possibile pericolo per la sicurezza - si prega di correggere i diritti di accesso degli utenti per questa directory!');
define('WARNING_SESSION_DIRECTORY_NON_EXISTENT', 'Attenzione: il registro per questa sessione non esiste: ' . xtc_session_save_path() . '. La sessione non funzionera fino a quando non sar&agrave; installato il registro!');
define('WARNING_SESSION_DIRECTORY_NOT_WRITEABLE', 'Attenzione: XT-Commerce non pu&ograve; scrivere in questa sessione: ' . xtc_session_save_path() . '.La sessione non funzioner&agrave; fino a quando non le verr&agrave; assegnato la corretta destinazone uso !');
define('WARNING_SESSION_AUTO_START', 'attenzione: sessione.auto_start &egrave; attivata (enabled) - disattivi (disabled) questo PHP Feature nel php.ini e avvii il nuovo WEB-Server!');
define('WARNING_DOWNLOAD_DIRECTORY_NON_EXISTENT', 'Attenzione: il registro per scaricare questo articolo non esiste: ' . DIR_FS_DOWNLOAD . '. questa funzione non sar&agrave; valida fino a quando il registro non verr&agrave; creato!');
define('SUCCESS_ACCOUNT_UPDATED', 'Il suo conto &egrave; stato attualizzato con successo.');
define('SUCCESS_PASSWORD_UPDATED', 'La sua Password &egrave; stata modificata con successo!');
define('ERROR_CURRENT_PASSWORD_NOT_MATCHING', 'LA Password data non corrisponde con quella registrata. Riprovi.');
define('TEXT_MAXIMUM_ENTRIES', 'Indicazione: lei %s liste indirizzi a disposizione!');
define('SUCCESS_ADDRESS_BOOK_ENTRY_DELETED', 'La lista selezionata &egrave; stata cancellata.');
define('SUCCESS_ADDRESS_BOOK_ENTRY_UPDATED', 'Il suo agenda indirizzi &egrave; stata attualizzata!');
define('WARNING_PRIMARY_ADDRESS_DELETION', 'L\'indirizzo standard non pu&ograve; essere cancellato. Selezioni prima un altro indirizzo standard. Successivamente pu&ograve; cancellare l\'indirizzo.');
define('ERROR_NONEXISTING_ADDRESS_BOOK_ENTRY', 'Questa lista indirizzi non &egrave; esistente.');
define('ERROR_ADDRESS_BOOK_FULL', 'Non pu&ograve; memorizzare altri indirizzi nella sua agenda. Ne cancelli uno non necessario. Poi pu&ograve; inserire il nuovo.');
define('ERROR_CHECKOUT_SHIPPING_NO_METHOD', 'Nessun metodo di spedizione selezionato.');
define('ERROR_CHECKOUT_SHIPPING_NO_MODULE', 'Nessun metodo di spedizione disponibile.');

//  conditions check

define('ERROR_CONDITIONS_NOT_ACCEPTED', '* Fino a quando non accetta le nostre condizioni generali,\n non possiamo prendere in considerazione il suo ordine!\n\n');
define('ERROR_REVOCATION_NOT_ACCEPTED', 'Si prega di accettare che il diritto di recesso scade per i prodotti virtuali.');
define('ERROR_PRIVACY_NOTICE_NOT_ACCEPTED', 'Si prega di confermare di aver letto la nostra informativa sulla privacy.');
define('SUB_TITLE_OT_DISCOUNT','Sconto:');

define('NOT_ALLOWED_TO_SEE_PRICES','Come ospite non pu&ograve; vedere i prezzi');
define('NOT_ALLOWED_TO_SEE_PRICES_TEXT','LEi non ha l\'autorizzazione per vedere i prezzi, crei un conto cliente.');
define('TEXT_DOWNLOAD','Download');
define('TEXT_VIEW','Vedere');
define('TEXT_BUY', '1 x \'');
define('TEXT_NOW', '\' ordinare');
define('TEXT_GUEST','ospite');
define('TEXT_SEARCH_ENGINE_AGENT','Motore di ricerca');

/*
 * 
 * ADVANCED SEARCH
 * 
 */

define('TEXT_AC_ALL_CATEGORIES', 'Tutti');
define('TEXT_ALL_CATEGORIES', 'Tutte le categorie');
define('TEXT_ALL_MANUFACTURERS', 'Tutti i produttori');
define('JS_AT_LEAST_ONE_INPUT', '* Uno dei seguenti campi deve essere compilato:\n    voce\n    Prezzo a partire da \n    Prezzo fino a\n');
define('AT_LEAST_ONE_INPUT', 'Uno dei seguetni campi deve essere compilato:<br />voce con minimo tre segni<br />Prezzo a partire da<br />Prezzo fino a<br />');
define('TEXT_SEARCH_TERM','La tua ricerca per: ');
define('JS_INVALID_FROM_DATE', '* Data non valida (da)\n');
define('JS_INVALID_TO_DATE', '* data non valida(fino)\n');
define('JS_TO_DATE_LESS_THAN_FROM_DATE', '* La data (da) deve essere superiore o uguale alla data (fino)\n');
define('JS_PRICE_FROM_MUST_BE_NUM', '* \"Prezzo a partire da\" deve essere un numero\n\n');
define('JS_PRICE_TO_MUST_BE_NUM', '* \"Prezzo fino a\" deve essere un numero\n\n');
define('JS_PRICE_TO_LESS_THAN_PRICE_FROM', '* Prezzo fino a deve essere uguale o superiore a prezzo da.\n');
define('JS_INVALID_KEYWORDS', '* termine ricerca non ammesso\n');
define('TEXT_LOGIN_ERROR', '<font color="#ff0000"><b>ERRORE:</b></font> nessuna corrispondenza tra\'indirizzo e-mail\' e/o la \'Password\'.');
define('TEXT_RELOGIN_NEEDED', 'Per favore, accedi di nuovo.');
define('TEXT_NO_EMAIL_ADDRESS_FOUND', '<font color="#ff0000"><b>ATTENZIONE:</b></font> indirizzo e-mail non registrato. Riprovi.');
define('TEXT_PASSWORD_SENT', 'Una nuova Password le &egrave; stata inviata tramite e-mail.');
define('TEXT_PRODUCT_NOT_FOUND', 'Articolo non trovato!');
define('TEXT_MORE_INFORMATION', 'Per ulteriori informazioni visiti <a style="text-decoration:underline;" href="%s" onclick="window.open(this.href); return false;">Homepage</a> di questo articolo.');
define('TEXT_DATE_ADDED', 'questo articolo &egrave; stato inserito il %s nel nostro catalogo.');
define('TEXT_DATE_AVAILABLE', '<font color="#ff0000">Questo articolo sar&agrave; disponibile probabilmente dal %s.</font>');
define('SUB_TITLE_SUB_TOTAL', 'subtotale:');
define('OUT_OF_STOCK_CANT_CHECKOUT', 'l\'articolo segnato con ' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . ' non &egrave; disponibile in magazzino nella quantit&agrave; da lei desiderata.<br />riduca la quantit&agrave; ordinata relativa a questo articolo. Molte grazie');
define('OUT_OF_STOCK_CAN_CHECKOUT', 'L\'articolo segnato con ' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . ' non &egrave; disponibile in magazzino nella quantit&agrave; da lei desiderata.<br />La quantit&agrave; da lei ordinata sar&agrave; spedita a breve, Se lei desidera le inviamo solo una parte della merce.');
define('MINIMUM_ORDER_VALUE_NOT_REACHED_1', 'il valore minimo da ordinare: ');
define('MINIMUM_ORDER_VALUE_NOT_REACHED_2', ' non &egrave; stato raggiunto.<br />continui ad ordinare: ');
define('MAXIMUM_ORDER_VALUE_REACHED_1', 'Lei ha superato la somma massima di: ');
define('MAXIMUM_ORDER_VALUE_REACHED_2', 'prevista dall\'ordine.<br /> riduca il suo ordine di minimo: ');
define('ERROR_INVALID_PRODUCT', 'L\'articolo da lei ordinato non &egrave; stato trovato!');
define('JS_KEYWORDS_MIN_LENGTH', 'Il termine di ricerca deve essere almeno ' . (int)SEARCH_MIN_LENGTH . ' caratteri lunghi.\n');
/*
 * 
 * NAVBAR Titel
 * 
 */
define('NAVBAR_TITLE_ACCOUNT', 'Il suo conto');
define('NAVBAR_TITLE_1_ACCOUNT_EDIT', 'il suo conto');
define('NAVBAR_TITLE_2_ACCOUNT_EDIT', 'modificare i suoi dati personali');
define('NAVBAR_TITLE_1_ACCOUNT_HISTORY', 'il suo conto');
define('NAVBAR_TITLE_2_ACCOUNT_HISTORY', 'Il suo ordine');
define('NAVBAR_TITLE_1_ACCOUNT_HISTORY_INFO', 'Il suo conto');
define('NAVBAR_TITLE_2_ACCOUNT_HISTORY_INFO', 'ordine effettuato');
define('NAVBAR_TITLE_3_ACCOUNT_HISTORY_INFO', 'numero ordine %s');
define('NAVBAR_TITLE_1_ACCOUNT_PASSWORD', 'il suo conto');
define('NAVBAR_TITLE_2_ACCOUNT_PASSWORD', 'modifica Password');
define('NAVBAR_TITLE_1_ADDRESS_BOOK', 'Il suo conto');
define('NAVBAR_TITLE_2_ADDRESS_BOOK', 'Rubrica');
define('NAVBAR_TITLE_1_ADDRESS_BOOK_PROCESS', 'il suo conto');
define('NAVBAR_TITLE_2_ADDRESS_BOOK_PROCESS', 'Rubrica');
define('NAVBAR_TITLE_ADD_ENTRY_ADDRESS_BOOK_PROCESS', 'Nuovo entrata');
define('NAVBAR_TITLE_MODIFY_ENTRY_ADDRESS_BOOK_PROCESS', 'modifica registrazione');
define('NAVBAR_TITLE_DELETE_ENTRY_ADDRESS_BOOK_PROCESS', 'cancella registrazione');
define('NAVBAR_TITLE_ADVANCED_SEARCH', 'continua a cercare');
define('NAVBAR_TITLE1_ADVANCED_SEARCH', 'continua a cercare');
define('NAVBAR_TITLE2_ADVANCED_SEARCH', 'risultato ricerca');
define('NAVBAR_TITLE_1_CHECKOUT_CONFIRMATION', 'Cassa');
define('NAVBAR_TITLE_2_CHECKOUT_CONFIRMATION', 'Conferma');
define('NAVBAR_TITLE_1_CHECKOUT_PAYMENT', 'Cassa');
define('NAVBAR_TITLE_2_CHECKOUT_PAYMENT', 'Metodo pagamento');
define('NAVBAR_TITLE_1_PAYMENT_ADDRESS', 'Cassa');
define('NAVBAR_TITLE_2_PAYMENT_ADDRESS', 'Modifica indirizzo conto');
define('NAVBAR_TITLE_1_CHECKOUT_SHIPPING', 'cassa');
define('NAVBAR_TITLE_2_CHECKOUT_SHIPPING', 'Informazioni spedizioni');
define('NAVBAR_TITLE_1_CHECKOUT_SHIPPING_ADDRESS', 'cassa');
define('NAVBAR_TITLE_2_CHECKOUT_SHIPPING_ADDRESS', 'Modifica indirizzo spedizioni');
define('NAVBAR_TITLE_1_CHECKOUT_SUCCESS', 'Cassa');
define('NAVBAR_TITLE_2_CHECKOUT_SUCCESS', 'Esito');
define('NAVBAR_TITLE_CREATE_ACCOUNT', 'crea conto');
define('NAVBAR_TITLE_LOGIN', 'Login');
define('NAVBAR_TITLE_LOGOFF','Arrivederci');
define('NAVBAR_TITLE_PRODUCTS_NEW', 'Nuovo articolo');
define('NAVBAR_TITLE_SHOPPING_CART', 'Carrello');
define('NAVBAR_TITLE_SPECIALS', 'Offerte');
define('NAVBAR_TITLE_COOKIE_USAGE', 'Utilizza Cookie');
define('NAVBAR_TITLE_PRODUCT_REVIEWS', 'Valutazione');
define('NAVBAR_TITLE_REVIEWS_WRITE', 'Valutazioni');
define('NAVBAR_TITLE_REVIEWS','Valutazioni');
define('NAVBAR_TITLE_SSL_CHECK', 'Indicazioni di sicurezza');
define('NAVBAR_TITLE_CRE0ATE_GUEST_ACCOUNT','Crea conto');
define('NAVBAR_TITLE_PASSWORD_DOUBLE_OPT','Password dimenticata?');
define('NAVBAR_TITLE_NEWSLETTER','Newsletter');
define('NAVBAR_GV_REDEEM', 'riscuota buono');
define('NAVBAR_GV_SEND', 'inviare buono');
define('NAVBAR_TITLE_DOWNLOAD', 'Scaricare');

/*
 * 
 *  MISC
 * 
 */

define('TEXT_NEWSLETTER','Desidera essere sempre aggiornato?<br />Non c\'&egrave; problema si registri alla nostra Newsletter.');
define('TEXT_EMAIL_INPUT','Il suo indirizzo e-mail &egrave; stato registrato nel nostro sistema.<br />Contemporaneamente il nostro sistema le invier&agrave; una e-mail che contiene un link di attivazione. Faccia clic sul link presente nella e-mail ricevuta e confermi la sua registrazione. In caso contrario non ricever&agrave; da noi nessuna e-mail!');
define('TEXT_WRONG_CODE','<font color="FF0000">Il codice da lei inserito non corrisponde a quello reale. Riprovi.</font>');
define('TEXT_EMAIL_EXIST_NO_NEWSLETTER','<font color="FF0000">Questo indirizzo e-mail esiste nella banca dati ma non &egrave; abilitato per la ricezione delle Newsletter!</font>');
define('TEXT_EMAIL_EXIST_NEWSLETTER','<font color="FF0000">Questo indirizzo e-mail esiste nella nostra banca dati ed &egrave; abilitato a ricevere le Newsletter!</font>');
define('TEXT_EMAIL_NOT_EXIST','<font color="FF0000">Questa indirizzo e-mail non esiste nella nostra banca dati!</font>');
define('TEXT_EMAIL_DEL','Il suo indirizzo e-mail &egrave; stato cancellato dalla nostra banca dati delle Newsletters.');
define('TEXT_EMAIL_DEL_ERROR','<font color="FF0000">Si &egrave; verificato un errore, il suo indirizzo non &egrave; stato scaricato!</font>');
define('TEXT_EMAIL_ACTIVE','<font color="FF0000">Il suo indirizzo e-mail &egrave; stato appena abilitato per la ricezione delle Newsletter!</font>');
define('TEXT_EMAIL_ACTIVE_ERROR','<font color="FF0000">Si &egrave; verificato un errore, il suo indirizzo e-mail non &egrave; stato abilitato!</font>');
define('TEXT_EMAIL_SUBJECT','La sua registrazione alle Newsletter');
define('TEXT_CUSTOMER_GUEST','Ospite');
define('TEXT_LINK_MAIL_SENDED','La sua richiesta per una nuova Password deve essere prima confermata da lei.<br />Perci&ograve; le &egrave; stata inviata una e-mail con un link per la conferma dal nostro sistema. Dopo la ricezione della e-mail faccia clic sul link per ricevere una nuova e-mail con la nuova Password. In caso contrario la nuova Password non le sar&agrave; assegnata o recapitata!');
define('TEXT_PASSWORD_MAIL_SENDED','Una e-mail con la Password di registrazione le &egrave; stata appena recapitata.<br />Durante la sua prossima visita modifichi la Password come lei desidera.');
define('TEXT_CODE_ERROR','Inserisca nuovamente il suo indirizzo e-mail ed il codice di sicurezza. <br />Faccia attenzione a non commettere errori di battuta!');
define('TEXT_EMAIL_ERROR','Inserisca nuovamente il suo indirizzo e-mail e il suo codice di sicurezza. <br />Attenzone agli errori di battuta!');
define('TEXT_NO_ACCOUNT','Ci dispiace informarla che la sua richiesta per la registrazione di una nuova Password non &egrave; valida oppure &egrave; scaduta.<br />Riprovi.');
define('HEADING_PASSWORD_FORGOTTEN','Rinnovare la Password?');
define('TEXT_PASSWORD_FORGOTTEN','Modifichi la sua Password in tre semplici passi.');
define('TEXT_EMAIL_PASSWORD_FORGOTTEN','E-mail di conferma per modifica Password');
define('TEXT_EMAIL_PASSWORD_NEW_PASSWORD','La sua nuova Password');
define('ERROR_MAIL','Controlli i suoi dati inseriti nel modulo');
define('CATEGORIE_NOT_FOUND','La categoria non &egrave; stata trovata');
define('GV_FAQ', 'FAQ buono');
define('ERROR_NO_REDEEM_CODE', 'Non ha inserito nessun codice.');
define('ERROR_NO_INVALID_REDEEM_GV', 'Codice buono non valido');
define('TABLE_HEADING_CREDIT', 'buono');
define('EMAIL_GV_TEXT_SUBJECT', 'Un buono di %s');
define('MAIN_MESSAGE', 'Lei ha deciso di inviare un buono del valore di %s a %s, all\'indirizzo e-mail &egrave; %s.<br /><br />Il seguente testo &egrave; presente nella sua e-mail:<br /><br />Salve %s<br /><br />Le &egrave; stato inviato un buono dal valore di %s da %s.');
define('REDEEMED_AMOUNT','Il buono &egrave; stato trasferito sul suo conto. Valore buono:');
define('REDEEMED_COUPON','Il coupon &egrave; stato registrato e sar&agrave; automaticamente riscattato durante il suo prossimo ordine.');
define('ERROR_INVALID_USES_USER_COUPON','Il coupon lo pu&ograve; solo ');
define('ERROR_INVALID_USES_COUPON','Questo coupon dai clienti pu&ograve; solo');
define('TIMES',' riscattare.');
define('ERROR_INVALID_STARTDATE_COUPON','Il coupon non &egrave; ancora disponibile.');
define('ERROR_INVALID_FINISDATE_COUPON','Il coupon &egrave; scaduto.');
define('ERROR_INVALID_MINIMUM_ORDER_COUPON', 'Questo coupon pu&ograve; essere riscattato solo con un valore minimo d\'ordine di %s!');
define('ERROR_INVALID_MINIMUM_ORDER_COUPON_ADD','<br/>Al raggiungimento del valore minimo d\'ordine &egrave; necessario inserire nuovamente il codice del coupon!');
define('ERROR_COUPON_REQUIRES_ACCOUNT', 'Per riscattare il buono &egrave; necessario un conto cliente.');
define('PERSONAL_MESSAGE', '%s scrive:');

//Popup Window
define('TEXT_CLOSE_WINDOW', 'Chiudi finestra.');
define('TEXT_LINK_TITLE_INFORMATION', 'Informazioni');

/*
 * 
 *  COUPON POPUP
 * 
 */
 
define('TEXT_CLOSE_WINDOW', 'chiudere finestra [x]');
define('TEXT_COUPON_HELP_HEADER', 'Il suo buono &egrave; stato registrato con successo.');
define('TEXT_COUPON_HELP_NAME', '<br /><br />Contrassegno buono: %s');
define('TEXT_COUPON_HELP_SPECIALS', '<br /><br />Il tuo coupon non pu&ograve; essere applicato alle offerte speciali.');
define('TEXT_COUPON_HELP_FIXED', '<br /><br />Il buono &egrave; di %s ');
define('TEXT_COUPON_HELP_MINORDER', '<br /><br />Il valore minimo da ordinare &egrave; di %s ');
define('TEXT_COUPON_HELP_FREESHIP', '<br /><br />Buono per spedizione gratuita');
define('TEXT_COUPON_HELP_DESC', '<br /><br />descrizione coupon: %s');
define('TEXT_COUPON_HELP_DATE', '<br /><br />Questo coupon &egrave; valido dal %s al %s');
define('TEXT_COUPON_HELP_RESTRICT', '<br /><br />Articolo / categoria limitata');
define('TEXT_COUPON_HELP_CATEGORIES', 'categoria');
define('TEXT_COUPON_HELP_PRODUCTS', 'Articolo');
define('ERROR_ENTRY_AMOUNT_CHECK', 'Importo non valido');
define('ERROR_ENTRY_EMAIL_ADDRESS_CHECK', 'Indirizzo e-mail non valido');
define('TEXT_COUPON_PRODUCTS_RESTRICT', 'Il tuo voucher/coupon &egrave; limitato ad alcuni prodotti.');
define('TEXT_COUPON_CATEGORIES_RESTRICT', 'Il vostro voucher/coupon &egrave; limitato ad alcune categorie.');

// VAT ID
define('ENTRY_VAT_TEXT', 'Solo per la Germania e L\'unione europea!');
define('ENTRY_VAT_ERROR', ' ID Ust non &egrave; valido o al momento non pu&ograve; essere verificato !Inserisca un ID valido oppure lasci vuoto questo campo.');
define('MSRP','UVP');
define('YOUR_PRICE','Il suo prezzo ');
define('UNIT_PRICE','prezzo unitario ');
define('ONLY',' solo ');
define('FROM','Da ');
define('YOU_SAVE','risparmia ');
define('INSTEAD','prezzo al minuto');
define('TXT_PER',' per ');
define('TAX_INFO_INCL','incl. %s UST');
define('TAX_INFO_EXCL','escl. %s UST');
define('TAX_INFO_ADD','pi&ugrave; %s UST');
define('SHIPPING_EXCL','escl.');
define('SHIPPING_INCL','incl.');
define('SHIPPING_COSTS','Costi di spedizione');

// changes 3.0.4 SP2
define('SHIPPING_TIME','<strong>Tempo spedizione DE:</strong> ');
define('MORE_INFO','[di pi&ugrave;]');
define('ENTRY_PRIVACY_ERROR','Si prega di confermare di aver letto la nostra politica sulla privacy!');
define('TEXT_PAYMENT_FEE','Tassa di pagamento');
define('_MODULE_INVALID_SHIPPING_ZONE', 'Purtroppo non consegniamo al paese scelto.');
define('_MODULE_UNDEFINED_SHIPPING_RATE', 'Le spese di spedizione non possono essere calcolate al momento, vi preghiamo di contattarci.');
define('NAVBAR_TITLE_1_ACCOUNT_DELETE', 'Il tuo conto');
define('NAVBAR_TITLE_2_ACCOUNT_DELETE', 'Cancellare il conto');

//contact-form error messages
define('ERROR_EMAIL','<p><b>YIl tuo indirizzo e-mail:</b> Nessun input o input non valido!</p>');
define('ERROR_VVCODE','<p><b>Codice di sicurezza:</b> Nessun riscontro, inserisci di nuovo il tuo codice di sicurezza!</p>');
define('ERROR_MSG_BODY','<p><b>Il vostro messaggio:</b> Nessun input!</p>');

//Table Header checkout_confirmation.php
define('HEADER_QTY', 'Numero');
define('HEADER_ARTICLE', 'Voce');    
define('HEADER_SINGLE', 'Prezzo unico');
define('HEADER_TOTAL','Totale');
define('HEADER_MODEL', 'Modello');

### PayPal API Modul
define('NAVBAR_TITLE_PAYPAL_CHECKOUT','PayPal-Checkout');
define('PAYPAL_ERROR','Interrompere PayPal');
define('PAYPAL_NOT_AVIABLE','PayPal non &egrave; disponibile.<br />Si prega di selezionare un altro metodo di pagamento <br />o riprovare pi&ugrave; tardi.<br />');
define('ERROR_ADDRESS_NOT_ACCEPTED', 'Vi preghiamo di confermare il vostro indirizzo in modo che possiamo elaborare il vostro ordine.');
define('PAYPAL_FEHLER','PayPal ha segnalato un errore durante l\'elaborazione del pagamento.<br />Il vostro ordine &egrave; memorizzato, ma non pu&ograve; essere evaso.<br />Inserisci un nuovo ordine.<br />Grazie per la vostra comprensione.<br />');
define('PAYPAL_WARTEN','PayPal ha segnalato un errore durante l\'elaborazione del pagamento.<br />Effettua il login su PayPal e paga l\'ordine.<br />Qui sotto vedete l\'ordine memorizzato.<br /> Grazie per la vostra comprensione.<br />');
define('PAYPAL_NEUBUTTON','Premere nuovamente il tasto per pagare l\'ordine.<br />Qualsiasi altro pulsante annuller&agrave;.');
define('PAYPAL_GS','Coupon');
define('PAYPAL_TAX','Tassa');
define('PAYPAL_EXP_WARN','Nota! Le eventuali spese di spedizione che ne derivano vengono calcolate solo nel negozio, infine.');
define('PAYPAL_EXP_VORL','Spese di spedizione provvisorie');
define('PAYPAL_EXP_VERS','12.90');
define('PAYPAL_ADRESSE','Il paese nel tuo indirizzo di spedizione PayPal non &egrave; registrato nel nostro negozio.<br />Vi preghiamo di contattarci.<br />Grazie per la comprensione.<br />Dal paese di ricezione di PayPal: ');
define('PAYPAL_AMMOUNT_NULL','L\'importo dell\'ordine che ci si pu&ograve; aspettare (senza spedizione) &egrave; direttamente 0.<br />Quindi PayPal express non &egrave; disponibile.<br />Si prega di selezionare un altro mezzo di pagamento.<br />Grazie per la comprensione.<br />');
### PayPal API Modul

//web28 - 2010-08-20 - VERSANDKOSTEN WARENKORB
define('BASICPRICE_VPE_TEXT','solo in questo volume ');
define('GRADUATED_PRICE_MAX_VALUE', 'da');
define('_SHIPPING_TO', 'Spese di spedizione a ');
define('ERROR_SQL_DB_QUERY','Siamo spiacenti, ma si &egrave; verificato un errore di database da qualche parte in questa pagina!');
define('ERROR_SQL_DB_QUERY_REDIRECT','Verrete reindirizzati alla nostra home page in %s secondi!');
define('TEXT_AGB_CHECKOUT','Si prega di accettare i nostri Termini e condizioni %s, nonch&eacute; le informazioni sui clienti nota %s.');
define('TEXT_REVOCATION_CHECKOUT', ', Politica di cancellazione %s');
define('DOWNLOAD_NOT_ALLOWED', '<h1>Vietato</h1>Questo server non ha potuto verificare che l\'utente sia autorizzato ad accedere al documento richiesto. O avete fornito le credenziali sbagliate (ad esempio, password errata), o il vostro browser non capisce come fornire le credenziali richieste.');
define('TEXT_INFO_DETAILS', ' Dettagli');
define('TEXT_SAVED_BASKET', 'Controlla il tuo carrello. Ci sono prodotti di un\'ultima visita.');


//define('TEXT_PRODUCTS_QTY_REDUCED', 'Quantit&agrave; massima per l\'ultimo articolo aggiunto / aggiornato raggiunto. La quantit&agrave; &egrave; stata ridotta automaticamente.'); // Now we use MAX_PROD_QTY_EXCEEDED

define('ERROR_REVIEW_TEXT', 'Il testo deve essere composto da almeno ' . REVIEW_TEXT_MIN_LENGTH . ' caratteri .');
define('ERROR_REVIEW_RATING', 'Inserisci la tua recensione.');
define('ERROR_REVIEW_AUTHOR', 'Inserisci il tuo nome.');
define('GV_NO_PAYMENT_INFO', '<div class="infomessage">Potete pagare l\'ordine completamente con il vostro credito. Se non volete riscattare il vostro saldo, cancellate la selezione del credito e selezionate un metodo di pagamento!</div>');
define('GV_ADD_PAYMENT_INFO', '<div class="errormessage">Il vostro credito non &egrave; sufficiente o non pu&ograve; essere utilizzato per tutte le posizioni contabili per pagare completamente l\'ordine. Si prega di selezionare un metodo di pagamento in aggiunta!</div>');
define('_SHIPPING_FREE','Spedizione gratuita');
define('TEXT_INFO_FREE_SHIPPING_COUPON', 'Le spese di spedizione sono coperte dal tuo coupon.');
define('TEXT_CONTENT_NOT_FOUND', 'Pagina non trovata!');
define('TEXT_SITE_NOT_FOUND', 'Pagina non trovata!');

// error message for exceeded product quantity, noRiddle
define('MAX_PROD_QTY_EXCEEDED', 'Il numero massimo consentito di ' .MAX_PRODUCTS_QTY. ' per <span style="font-style:italic;">"%s"</span> &egrave; stato superato. Il numero &egrave; stato automaticamente ridotto alla quantit&agrave; consentita.');
define('IMAGE_BUTTON_CONTENT_EDIT', 'Modificare il contenuto');
define('PRINTVIEW_INFO', 'Stampa scheda tecnica');
define('PRODUCTS_REVIEW_LINK', 'Scrivi una recensione');
define('TAX_INFO_SMALL_BUSINESS', 'Prezzo finale &sect; 19 UStG.');
define('TAX_INFO_SMALL_BUSINESS_FOOTER', 'A causa dello status di piccola impresa secondo &sect; 19 UStG., non applichiamo alcuna imposta sulle vendite');
define('NEED_CHANGE_PWD', 'Cambia la tua password.');
define('TEXT_REQUEST_NOT_VALID', 'Questo link non &egrave; valido. Si prega di richiedere una nuova password.');
define('NAVBAR_TITLE_WISHLIST', 'Lista dei desideri');
define('TEXT_TO_WISHLIST', 'Aggiungi alla lista dei desideri');
define('IMAGE_BUTTON_TO_WISHLIST', 'Aggiungi alla lista dei desideri');
define('GUEST_REDEEM_NOT_ALLOWED', 'Gli ospiti non possono riscattare alcun voucher.');
define('GUEST_VOUCHER_NOT_ALLOWED', 'I buoni non possono essere acquistati come ospiti.');
define('TEXT_FILTER_SETTING_DEFAULT', 'Articoli per pagina');
define('TEXT_FILTER_SETTING', '%s articoli per pagina');
define('TEXT_FILTER_SETTING_ALL', 'Mostra tutti gli articoli');
define('TEXT_SHOW_ALL', ' (mostra tutti)');
define('TEXT_FILTER_SORTING_DEFAULT', 'Ordina per ...');
define('TEXT_FILTER_SORTING_ABC_ASC', 'Dalla A alla Z');
define('TEXT_FILTER_SORTING_ABC_DESC', 'Dalla Z alla A');
define('TEXT_FILTER_SORTING_PRICE_ASC', 'Prezzo in ordine crescente');
define('TEXT_FILTER_SORTING_PRICE_DESC', 'Prezzo in ordine decrescente');
define('TEXT_FILTER_SORTING_DATE_DESC', 'Prima i prodotti pi&ugrave; recenti');
define('TEXT_FILTER_SORTING_DATE_ASC', 'I prodotti pi&ugrave; vecchi prima di tutto');
define('TEXT_FILTER_SORTING_ORDER_DESC', 'Prodotti pi&ugrave; venduti');
define('NAVBAR_TITLE_ACCOUNT_CHECKOUT_EXPRESS_EDIT', 'Impostazioni per il mio acquisto rapido');
define('SUCCESS_CHECKOUT_EXPRESS_UPDATED', 'Le impostazioni di My Quick purchase sono state salvate .');
define('TEXT_ERROR_CHECKOUT_EXPRESS_SHIPPING_ADDRESS', 'Selezionare un indirizzo di spedizione');
define('TEXT_ERROR_CHECKOUT_EXPRESS_SHIPPING_MODULE', 'Selezionare un metodo di spedizione');
define('TEXT_ERROR_CHECKOUT_EXPRESS_PAYMENT_ADDRESS', 'Selezionare un indirizzo di fatturazione');
define('TEXT_ERROR_CHECKOUT_EXPRESS_PAYMENT_MODULE', 'Si prega di selezionare un metodo di pagamento');
define('TEXT_CHECKOUT_EXPRESS_INFO_LINK', 'Il mio acquisto veloce');
define('TEXT_CHECKOUT_EXPRESS_INFO_LINK_MORE', 'Ulteriori informazioni per il mio acquisto rapido &raquo;');
define('TEXT_CHECKOUT_EXPRESS_CHECK_CHEAPEST', 'Selezionare sempre il metodo di spedizione pi&ugrave; economico');
define('AC_SHOW_PAGE', 'Pagina ');
define('AC_SHOW_PAGE_OF', ' da ');
define('FREE_SHIPPING_INFO', 'Spedizione gratuita ordine minimo: %s');
define('MANUFACTURER_NOT_FOUND', 'Produttore non trovato');
define('ENTRY_TOKEN_ERROR', 'Si prega di controllare i vostri dati.');
define('IMAGE_BUTTON_CONFIRM', 'Confermare'); // Needed for PayPal

// ***************************************************
//  Kontodaten-Prüfung
// ***************************************************
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_0', 'Coordinate bancarie ok.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_1', 'Il numero di conto e/o il codice bancario non sono validi o non corrispondono!');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_2', 'Il numero di conto non &egrave; automaticamente testabile.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_3', 'Il numero di conto non &egrave; testabile.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_4', 'Il numero di conto non &egrave; testabile! La preghiamo di ricontrollare i suoi dati.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_5', 'Questo numero di instradamento non esiste, si prega di correggere l\'inserimento.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_8', 'Errore nel codice bancario o nessun codice bancario specificato!');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_9', 'Nessun numero di conto specificato!');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_10', 'Non sono indicati i titolari del conto.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_128', 'Errore interno durante il controllo dei dati bancari.');

// Fehlermeldungen alle IBAN-Nummern 
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_1000', 'In IBAN incluso codice paese (1&deg; e 2&deg; posto) sconosciuto.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_1010', 'Lunghezza IBAN errata: Troppi punti inseriti.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_1020', 'Lunghezza IBAN errata: Troppi pochi punti inseriti.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_1030', 'L\'IBAN non &egrave; equivalente a quello stabilito per il formato del paese.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_1040', 'Controllare le cifre dell\'IBAN (punti 3 e 4) non correttamente -> Scrivere un errore di battitura nell\'IBAN.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_1050', 'Il BIC ha un formato non valido.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_1060', 'Lunghezza BIC errata: Troppi caratteri inseriti. Sono necessari 8 o 11 caratteri.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_1070', 'BIC-length wrong: Zu wenige Zeichen angeben. 8 or 11 characters are required.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_1080', 'BIC-lunghezza sbagliata: Zu wenige Zeichen angeben. Sono necessari 8 o 11 caratteri.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_1200', 'Gli IBAN del paese specificato (1&deg; e 2&deg; posto dell\'IBAN) non sono accettati.');

// Fehlermeldungen für deutsche Kontonummern 
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_2001', 'Nell\'IBAN incluso il numero di conto (punti da 13 a 22) e/o il numero di instradamento (punti da 5 a 12) non sono validi o non corrispondono tra loro.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_2002', 'Nell\'IBAN incluso il numero di conto (punti da 13 a 22) non &egrave; automaticamente testabile.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_2003', 'Poich&eacute; nell\'IBAN incluso il numero di conto (punti da 13 a 22) non &egrave; definita alcuna cifra di controllo.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_2004', 'Nell\'IBAN incluso il numero di conto (punti da 13 a 22) non &egrave; testabile!');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_2005', 'Codice bancario (punti da 5 a 12 dell\'IBAN) inesistente!');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_2008', 'Errore nel codice bancario (punti da 5 a 12 dell\'IBAN) o nessun codice bancario specificato!');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_2009', 'Nessun numero di conto (punti da 13 a 22 dell\'IBAN) specificato!');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_2010', 'Nessun titolare di conto indicato.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_2020', 'BIC non valido: Non esiste una banca con questo BIC.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_2128', 'Errore interno durante il controllo dei dati bancari.');

define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_UNKNOWN', 'Errore sconosciuto durante il controllo dei dati bancari.');
define('PRODUCT_REVIEWS_SUCCESS', 'Grazie per la vostra recensione.');
define('PRODUCT_REVIEWS_SUCCESS_WAITING', 'Grazie per la vostra recensione. Questo sar&agrave; controllato prima della pubblicazione.');
define('TITLE_PRODUCTS_NEW', 'Nuovi prodotti');
define('TITLE_SPECIALS', 'Offerte speciali');
define('SITEMAP_ERROR_400', 'Errore 400: Richiesta errata.');
define('SITEMAP_ERROR_401', 'Errore 401: Non autorizzato.');
define('SITEMAP_ERROR_403', 'Errore 403: Vietato.');
define('SITEMAP_ERROR_404', 'Errore 404: Non trovato!');
define('SITEMAP_ERROR_500', 'Errore 500: Errore interno del server.');
define('MOBILETEXT', 'Il nostro negozio &egrave; inoltre ottimizzato per gli smartphone.');
define('MOBILELINKTEXT', 'Clicca qui per ottimizzare.');
?>