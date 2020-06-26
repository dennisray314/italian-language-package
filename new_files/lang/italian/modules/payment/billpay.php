<?php
/* Default Messages */
define('MODULE_PAYMENT_BILLPAY_TEXT_TITLE', 'BillPay - Fattura');
define('MODULE_PAYMENT_BILLPAY_TEXT_DESCRIPTION', 'BillPay - Fattura');
define('MODULE_PAYMENT_BILLPAY_TEXT_ERROR_MESSAGE', 'BillPay Messaggio di errore');
define('MODULE_PAYMENT_BILLPAY_TEXT_INFO', '<div style="margin-top:6px"><img src="https://www.billpay.de/wp-content/uploads/2011/04/LogoSmall_0.png" alt="BillPay Logo" title="BillPay Logo" /></div>');
define('MODULE_PAYMENT_BILLPAY_ALLOWED_TITLE' , 'Paesi ammessi');
define('MODULE_PAYMENT_BILLPAY_ALLOWED_DESC' , 'Inserire i paesi (es. AT, DE) ammessi per l\'utilizzo di questo metodo di pagamento. Se vuoto, tutti i paesi sono ammessi');
define('MODULE_PAYMENT_BILLPAY_LOGGING_TITLE' , 'Percorso assoluto per il file di log');
define('MODULE_PAYMENT_BILLPAY_LOGGING_DESC' , 'Il modulo di pagamento scriver&agrave; tutte le comunicazioni con il server BillPay sul file. Se vuoto, utilizzer&agrave; il percorso predefinito (/includes/external/billpay/log).');
define('MODULE_PAYMENT_BILLPAY_DATA_PROVIDED_BY_BILLPAY' , 'Dati forniti da BillPay');
define('MODULE_PAYMENT_BILLPAY_GS_MERCHANT_ID_TITLE' , 'ID Mercante');
define('MODULE_PAYMENT_BILLPAY_GS_MERCHANT_ID_DESC' , MODULE_PAYMENT_BILLPAY_DATA_PROVIDED_BY_BILLPAY);
define('MODULE_PAYMENT_BILLPAY_ORDER_STATUS_TITLE' , 'Stato dell\'ordine predefinito');
define('MODULE_PAYMENT_BILLPAY_ORDER_STATUS_DESC' , 'Tutti gli ordini effettuati con questo metodo di pagamento e approvati da BillPay, saranno creati con questo stato. (impostazione predefinita: "BillPay in attesa di pagamento")');
define('MODULE_PAYMENT_BILLPAY_GS_PORTAL_ID_TITLE' , 'ID del portale');
define('MODULE_PAYMENT_BILLPAY_GS_PORTAL_ID_DESC' , MODULE_PAYMENT_BILLPAY_DATA_PROVIDED_BY_BILLPAY);
define('MODULE_PAYMENT_BILLPAY_GS_SECURE_TITLE' , 'Password API');
define('MODULE_PAYMENT_BILLPAY_GS_SECURE_DESC' , MODULE_PAYMENT_BILLPAY_DATA_PROVIDED_BY_BILLPAY);
define('MODULE_PAYMENT_BILLPAY_GS_PUBLIC_API_KEY_TITLE', 'Chiave API pubblica');
define('MODULE_PAYMENT_BILLPAY_GS_PUBLIC_API_KEY_DESC', MODULE_PAYMENT_BILLPAY_DATA_PROVIDED_BY_BILLPAY);
define('MODULE_PAYMENT_BILLPAY_SORT_ORDER_TITLE' , 'Ordine di visualizzazione');
define('MODULE_PAYMENT_BILLPAY_SORT_ORDER_DESC' , 'Ordine di visualizzazione. Il numero pi&ugrave; piccolo viene visualizzato per primo.');
define('MODULE_PAYMENT_BILLPAY_STATUS_TITLE' , 'Abilitato');
define('MODULE_PAYMENT_BILLPAY_STATUS_DESC' , 'Volete attivare questo metodo di pagamento?');
define('MODULE_PAYMENT_BILLPAY_GS_TESTMODE_TITLE' , 'Attivare la modalit&agrave; di prova');
define('MODULE_PAYMENT_BILLPAY_GS_TESTMODE_DESC' , 'In modalit&agrave; test-mode, vengono visualizzati messaggi di errore dettagliati. Dovrebbe essere disattivato in ambiente di produzione.');
define('MODULE_PAYMENT_BILLPAY_ZONE_TITLE' , 'Zona fiscale');
define('MODULE_PAYMENT_BILLPAY_ZONE_DESC' , '');
define('MODULE_PAYMENT_BILLPAY_GS_API_URL_BASE_TITLE' , 'API url base');
define('MODULE_PAYMENT_BILLPAY_GS_API_URL_BASE_DESC' , 'Dati forniti da BillPay. Attenzione: Gli URL per i sistemi live e di test sono diversi.');
define('MODULE_PAYMENT_BILLPAY_GS_TESTAPI_URL_BASE_TITLE' , 'Testare la base di url API');
define('MODULE_PAYMENT_BILLPAY_GS_TESTAPI_URL_BASE_DESC' , 'Dati forniti da BillPay. Attenzione: Gli URL per i sistemi live e di test sono diversi.');
define('MODULE_PAYMENT_BILLPAY_LOGGING_ENABLE_TITLE' , 'Registrazione abilitata');
define('MODULE_PAYMENT_BILLPAY_LOGGING_ENABLE_DESC' , 'Se abilitato, tutte le comunicazioni saranno scritte in un file di log.');
define('MODULE_PAYMENT_BILLPAY_MIN_AMOUNT_TITLE', 'Valore minimo d\'ordine');
define('MODULE_PAYMENT_BILLPAY_MIN_AMOUNT_DESC', 'Per ordini inferiori a questo valore, questo metodo di pagamento sar&agrave; nascosto.');
define('MODULE_PAYMENT_BILLPAY_LOGPATH_TITLE', 'Percorso di registrazione');
define('MODULE_PAYMENT_BILLPAY_LOGPATH_DESC', '');
define('MODULE_PAYMENT_BILLPAY_GS_HTTP_X_TITLE', 'X_FORWARDED_FOR consentire');
define('MODULE_PAYMENT_BILLPAY_GS_HTTP_X_DESC', 'Attivare questa funzione se il vostro negozio utilizza il sistema Cloud');
// Payment selection texts
define('MODULE_PAYMENT_BILLPAY_TEXT_BIRTHDATE', 'Data di nascita');
define('MODULE_PAYMENT_BILLPAY_TEXT_ENTER_BIRTHDATE', 'Si prega di impostare la data di nascita nella pagina del conto.');
define('MODULE_PAYMENT_BILLPAY_TEXT_ENTER_GENDER', 'Si prega di impostare il sesso nella pagina del conto.');
define('MODULE_PAYMENT_BILLPAY_TEXT_ENTER_TITLE', 'Inserisci il tuo titolo');
define('MODULE_PAYMENT_BILLPAY_TEXT_ENTER_BIRTHDATE_AND_GENDER', 'Si prega di impostare la data di nascita e il sesso nella pagina del conto.');
define('MODULE_PAYMENT_BILLPAY_TEXT_ENTER_PHONE', 'Inserisci il tuo numero di telefono.');
define('MODULE_PAYMENT_BILLPAY_TEXT_NOTE', '');
define('MODULE_PAYMENT_BILLPAY_TEXT_REQ', '');
define('MODULE_PAYMENT_BILLPAY_TEXT_GENDER', 'Sesso');
define('MODULE_PAYMENT_BILLPAY_TEXT_SALUTATION', 'Saluto');
define('MODULE_PAYMENT_BILLPAY_TEXT_MALE', 'maschio');
define('MODULE_PAYMENT_BILLPAY_TEXT_FEMALE', 'femminile');
define('MODULE_PAYMENT_BILLPAY_TEXT_MR', 'Sig.');
define('MODULE_PAYMENT_BILLPAY_TEXT_MRS', 'Signora');
define('JS_BILLPAY_EULA', '* Si prega di accettare l\'EULA per continuare.\n\n');
define('JS_BILLPAY_DOBDAY', '* Si prega di impostare la data di nascita nella pagina del conto.\n\n');
define('JS_BILLPAY_DOBMONTH', JS_BILLPAY_DOBDAY);
define('JS_BILLPAY_DOBYEAR', JS_BILLPAY_DOBDAY);
define('JS_BILLPAY_GENDER', '* Si prega di impostare il sesso nella pagina del conto.\n\n');
define('JS_BILLPAY_CODE', '* Si prega di fornire il codice del conto bancario.\n\n');
define('JS_BILLPAY_NUMBER', '* Si prega di fornire il numero di conto bancario.\n\n');
define('JS_BILLPAY_NAME', '* Si prega di fornire il nome del titolare del conto bancario selezionato.\n\n');
define('JS_BILLPAY_PHONE', '* Si prega di fornire il proprio numero di telefono.\n\n');
define('MODULE_PAYMENT_BILLPAY_TEXT_ERROR_EULA', '* Si prega di accettare l\'EULA per continuare.');
define('MODULE_PAYMENT_BILLPAY_TEXT_ERROR_DOB', 'Hai inserito una data di nascita errata!');
define('MODULE_PAYMENT_BILLPAY_TEXT_ERROR_DEFAULT', 'Errore interno, scegliere un metodo di pagamento diverso.');
define('MODULE_PAYMENT_BILLPAY_TEXT_ERROR_SHORT', 'Errore interno, scegliere un metodo di pagamento diverso.');
define('MODULE_PAYMENT_BILLPAY_TEXT_INVOICE_CREATED_COMMENT', 'La fattura &egrave; stata creata.');
define('MODULE_PAYMENT_BILLPAY_TEXT_CANCEL_COMMENT', 'L\'ordine &egrave; stato annullato da BillPay.');
define('MODULE_PAYMENT_BILLPAY_TEXT_ERROR_DUEDATE', 'Il pagamento non pu&ograve; essere avviato perch&eacute; la data di scadenza &egrave; vuota.');
define('MODULE_PAYMENT_BILLPAY_TEXT_ERROR_CODE', '* Si prega di correggere il codice del conto bancario.');
define('MODULE_PAYMENT_BILLPAY_TEXT_ERROR_NUMBER', '* Si prega di correggere il numero di conto bancario.');
define('MODULE_PAYMENT_BILLPAY_TEXT_ERROR_NAME', '* Si prega di correggere il nome del titolare del conto bancario selezionato.');
define('MODULE_PAYMENT_BILLPAY_TEXT_ERROR_PHONE', '* Si prega di fornire il proprio numero di telefono.');
define('MODULE_PAYMENT_BILLPAY_TEXT_CREATE_INVOICE', 'Crea ora la fattura BillPay?');
define('MODULE_PAYMENT_BILLPAY_TEXT_CANCEL_ORDER', 'Annulla il pagamento BillPay ora?');
define('MODULE_PAYMENT_BILLPAY_TEXT_ACCOUNT_HOLDER', 'Titolare del conto');
define('MODULE_PAYMENT_BILLPAY_TEXT_IBAN', 'IBAN');
define('MODULE_PAYMENT_BILLPAY_TEXT_BANK_NAME', 'Banca');
define('MODULE_PAYMENT_BILLPAY_TEXT_BIC', 'BIC');
define('MODULE_PAYMENT_BILLPAY_TEXT_INVOICE_REFERENCE', 'Numero di fattura');
define('MODULE_PAYMENT_BILLPAY_TEXT_PHONE', 'Numero di telefono');
define('MODULE_PAYMENT_BILLPAY_TEXT_BANKDATA', 'Si prega di fornire le vostre coordinate bancarie.');
define('MODULE_PAYMENT_BILLPAY_DUEDATE_TITLE', 'Scadenza');
define('MODULE_PAYMENT_BILLPAY_TEXT_PURPOSE', 'Utilizzo');
define('MODULE_PAYMENT_BILLPAY_TEXT_ADD', 'pi&ugrave;');
define('MODULE_PAYMENT_BILLPAY_TEXT_FEE', 'Tassa');
define('MODULE_PAYMENT_BILLPAY_TEXT_SANDBOX', 'Sei in modalit&agrave; sandbox:');
define('MODULE_PAYMENT_BILLPAY_TEXT_CHECK', 'Sei in modalit&agrave; di accettazione:');
define('MODULE_PAYMENT_BILLPAY_UNLOCK_INFO', 'Informazioni da un server live');
define('MODULE_PAYMENT_BILLPAY_B2BCONFIG_TITLE', 'Tipo di clienti');
define('MODULE_PAYMENT_BILLPAY_B2BCONFIG_DESC', 'Volete offrire un metodo di pagamento per clienti privati (B2C), commerciali (B2B) o entrambi (BOTH)?');
define('MODULE_PAYMENT_BILLPAY_B2B_COMPANY_NAME_TEXT', 'Nome dell\'azienda');
define('MODULE_PAYMENT_BILLPAY_B2B_COMPANY_LEGAL_FORM_TEXT', 'Forma giuridica');
define('MODULE_PAYMENT_BILLPAY_B2B_COMPANY_LEGAL_FORM_SELECT_HTML', "");
define('MODULE_PAYMENT_BILLPAY_B2B_CHOOSE_CLIENT_TEXT', 'Cliente tipico');
define('MODULE_PAYMENT_BILLPAY_B2B_PRIVATE_CLIENT_TEXT', 'Cliente privato');
define('MODULE_PAYMENT_BILLPAY_B2B_BUSINESS_CLIENT_TEXT', 'Cliente commerciale');
define('MODULE_PAYMENT_BILLPAY_B2B_COMPANY_FIELD_EMPTY', 'Inserire il nome dell\'azienda');
define('MODULE_PAYMENT_BILLPAY_B2B_LEGAL_FORM_FIELD_EMPTY', 'Si prega di fornire la forma giuridica');
define('MODULE_PAYMENT_BILLPAY_B2B_HOLDER_NAME_EMPTY', 'Si prega di fornire il nome del titolare');
define('MODULE_PAYMENT_BILLPAY_B2B_REGISTER_NUMBER_EMPTY', 'Si prega di fornire il numero di registro');
define('MODULE_PAYMENT_BILLPAY_B2B_TAX_NUMBER_EMPTY', 'Si prega di fornire Tax-ID');
define('MODULE_PAYMENT_BILLPAY_B2B_REGISTER_NUMBER_TEXT', 'Numero di registro');
define('MODULE_PAYMENT_BILLPAY_B2B_TAX_NUMBER_TEXT', 'Tax-ID');
define('MODULE_PAYMENT_BILLPAY_B2B_HOLDER_NAME_TEXT', 'Nome del titolare');
define('MODULE_PAYMENT_BILLPAY_B2B_CONTACT_PERSON_TEXT', 'Persona di contatto');
define('MODULE_ORDER_TOTAL_BILLPAY_FEE_FROM_TOTAL', 'dell\'importo della fattura');
define('MODULE_PAYMENT_BILLPAY_GS_UTF8_ENCODE_TITLE', 'Codifica locale');
define('MODULE_PAYMENT_BILLPAY_GS_UTF8_ENCODE_DESC', 'Il tuo sito utilizza la codifica locale (diversa da utf-8)?');
define('MODULE_PAYMENT_BILLPAY_ACTIVATE_ORDER', 'L\'ordine non &egrave; stato attivato da BillPay. Si prega di attivare l\'ordine immediatamente prima della spedizione in cui &egrave; stato impostato lo stato appropriato.');
define('MODULE_PAYMENT_BILLPAY_ACTIVATE_ORDER_WARNING', '<strong style="color:red">Attenzione: Il pagamento non &egrave; ancora stato avviato da BillPay!</strong><br/>');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_ADDRESS', 'Questo indirizzo non &egrave; consentito su ordini con BillPay.');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_PRODUCT', 'Questo prodotto non &egrave; consentito su ordini con BillPay.');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_PAYMENT', 'Questo pagamento non &egrave; consentito su ordini con BillPay.');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_CURRENCY', 'Questa valuta non &egrave; consentita su ordini con BillPay.');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_GENERAL', 'Non &egrave; possibile farlo per il metodo di pagamento BillPay.');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_HIGHER_QUANTITY', 'Con BillPay non &egrave; possibile ordinare pi&ugrave; prodotti rispetto all\'ordine originale');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_NEGATIVE_QUANTITY', 'Non &egrave; possibile ordinare una quantit&agrave; negativa di prodotti con BillPay.');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_TAX', 'L\'adeguamento dell\'aliquota d\'imposta per l\'ordine non &egrave; consentito.');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_PRICE', 'L\'adeguamento del prezzo per l\'ordine non &egrave; consentito.');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_ID', 'La regolazione dell\'id del prodotto per l\'ordine non &egrave; consentita.');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_ZERO_REDUCTION', 'La riduzione a zero per l\'ordine non &egrave; consentita.');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_NEGATIVE_REDUCTION', 'La riduzione negativa per l\'ordine non &egrave; consentita.');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_NEGATIVE_SHIPPING', 'La spedizione negativa per l\'ordine non &egrave; consentita.');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_INCREASED_SHIPPING', 'Non &egrave; consentita una maggiore spedizione per l\'ordine.');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_ADDED_SHIPPING', 'La spedizione aggiunta per l\'ordine non &egrave; consentita.');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_FORBIDDEN', 'Questa azione non &egrave; consentita su ordini con BillPay.');
define('MODULE_PAYMENT_BILLPAY_PARTIAL_CANCEL_NOT_PROCESSED', 'Attenzione! L\'adattamento degli ordini senza articoli fiscali non viene inviato automaticamente a BillPay a causa di un errore nel software del negozio. Si prega di regolare manualmente l\'importo nel Back Office BillPay (https://admin.billpay.de)!');
define('MODULE_PAYMENT_BILLPAY_PARTIAL_CANCEL_ERROR_CUSTOMER_CARE', 'L\'adattamento dell\'ordine con BillPay &egrave; fallito. Si prega di contattare immediatamente il nostro servizio clienti (haendler@billpay.de)!');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_ADJUST_CHARGEABLE', 'La personalizzazione di un\'opzione di prodotto a pagamento non &egrave; consentita.');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_ADD_CHARGEABLE', 'La personalizzazione di un\'opzione di prodotto a pagamento non &egrave; consentita.');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_REMOVE_CHARGEABLE', 'La personalizzazione di un\'opzione di prodotto a pagamento non &egrave; consentita.');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_CONTACT_BILLPAY', 'Si &egrave; verificato un errore. Si prega di contattare il servizio clienti BillPay (haendler@billpay.de).');
define('MODULE_PAYMENT_BILLPAY_HISTORY_INFO_PARTIAL_CANCEL', 'Cancellazione parziale inviata con successo a BillPay.');
define('MODULE_PAYMENT_BILLPAY_HISTORY_INFO_EDIT_CART_CONTENT', 'Modificare il contenuto del carrello inviato con successo a BillPay.');
define('MODULE_PAYMENT_BILLPAY_TRANSACTION_MODE_TEST' , 'Modalit&agrave; di test');
define('MODULE_PAYMENT_BILLPAY_TRANSACTION_MODE_LIVE' , 'Modalit&agrave; live');
// -- Order States
// waiting for prepayment or decision
define('MODULE_PAYMENT_BILLPAY_STATUS_PENDING_TITLE_EN' , 'BillPay pending');
define('MODULE_PAYMENT_BILLPAY_STATUS_PENDING_TITLE_DE' , 'BillPay nicht abgeschlossen');
define('MODULE_PAYMENT_BILLPAY_STATUS_PENDING_TITLE_IT' , 'BillPay in attesa di pagamento');
// ready to activate
define('MODULE_PAYMENT_BILLPAY_STATUS_APPROVED_TITLE_EN' , 'BillPay approved');
define('MODULE_PAYMENT_BILLPAY_STATUS_APPROVED_TITLE_DE' , 'BillPay genehmigt');
define('MODULE_PAYMENT_BILLPAY_STATUS_APPROVED_TITLE_IT' , 'BillPay approvato');
// invoice created
define('MODULE_PAYMENT_BILLPAY_STATUS_ACTIVATED_TITLE_EN' , 'BillPay activated');
define('MODULE_PAYMENT_BILLPAY_STATUS_ACTIVATED_TITLE_DE' , 'BillPay aktiviert');
define('MODULE_PAYMENT_BILLPAY_STATUS_ACTIVATED_TITLE_IT' , 'BillPay attivato');
// order cancelled or timed out from pending
define('MODULE_PAYMENT_BILLPAY_STATUS_CANCELLED_TITLE_EN' , 'BillPay cancelled');
define('MODULE_PAYMENT_BILLPAY_STATUS_CANCELLED_TITLE_DE' , 'BillPay storniert');
define('MODULE_PAYMENT_BILLPAY_STATUS_CANCELLED_TITLE_IT' , 'BillPay annullato');
// error in order
define('MODULE_PAYMENT_BILLPAY_STATUS_ERROR_TITLE_EN' , 'BillPay error!');
define('MODULE_PAYMENT_BILLPAY_STATUS_ERROR_TITLE_DE' , 'BillPay Fehler!');
define('MODULE_PAYMENT_BILLPAY_STATUS_ERROR_TITLE_IT' , 'BillPay errore!');
// -- end of Order States
define('MODULE_PAYMENT_BILLPAY_STATUS_PENDING_DESC', 'BillPay - in attesa di approvazione');
define('MODULE_PAYMENT_BILLPAY_STATUS_APPROVED_DESC', 'BillPay - approvato');
define('MODULE_PAYMENT_BILLPAY_STATUS_ACTIVATED_DESC', 'BillPay - attivato');
define('MODULE_PAYMENT_BILLPAY_STATUS_CANCELLED_DESC', 'BillPay - cancellato');
define('MODULE_PAYMENT_BILLPAY_STATUS_ERROR_DESC', 'BillPay - A causa di un errore, questo ordine richiede una correzione manuale. Si prega di contattare il supporto BillPay');
define('MODULE_PAYMENT_BILLPAY_SALUTATION_MALE', MODULE_PAYMENT_BILLPAY_TEXT_MR);
define('MODULE_PAYMENT_BILLPAY_SALUTATION_FEMALE', MODULE_PAYMENT_BILLPAY_TEXT_MRS);
define('MODULE_PAYMENT_BILLPAY_TEXT_INVOICE_INFO',              'Si prega di trasferire l\'importo totale con il numero di transazione BillPay (%1$s) entro il termine di pagamento di %2$02s.%3$02s.%4$04s sul seguente conto:');
define('MODULE_PAYMENT_BILLPAY_TEXT_INVOICE_INFO_NO_DUEDATE',   'Si prega di trasferire l\'importo totale con il numero di transazione BillPay (%1$s) entro il termine di pagamento scritto sulla fattura sul seguente conto:');
define('MODULE_PAYMENT_BILLPAY_TEXT_INVOICE_INFO1', 'Avete scelto di acquistare in conto corrente con BillPay. Si prega di trasferire l\'importo totale fino al ');
define('MODULE_PAYMENT_BILLPAY_TEXT_INVOICE_INFO2', ' al seguente conto: ');
define('MODULE_PAYMENT_BILLPAY_TEXT_INVOICE_INFO3', 'Scadenza che ricevete con la fattura');
define('MODULE_PAYMENT_BILLPAY_TEXT_INVOICE_INFO_MAIL', '<br/>Si prega di trasferire l\'importo totale, indicando il numero di transazione BillPay nella causale del pagamento (%s), sul seguente conto entro la data di scadenza che ricevete insieme alla fattura:');
define('MODULE_PAYMENT_BILLPAY_TEXT_FEE_INFO1', 'Per questo ordine tramite fattura una tassa di ');
define('MODULE_PAYMENT_BILLPAY_TEXT_FEE_INFO2', ' raccolto');
// Plugin 1.7
define('MODULE_PAYMENT_BILLPAY_THANK_YOU_TEXT', 'Grazie per aver scelto BillPay Invoice al momento dell\'acquisto.');
define('MODULE_PAYMENT_BILLPAY_PAY_UNTIL_TEXT', 'PSi prega di trasferire %1$s %2$s %2$s di %3$s, indicando il riferimento, sul seguente conto:');
define('MODULE_PAYMENT_BILLPAY_PAY_UNTIL_TEXT_ADD_CH', 'I pagamenti allo sportello postale sono soggetti a spese aggiuntive. In caso di pagamento tramite bollettino di versamento, si prega di trasferire un ulteriore %1$s %2$s.');
define('MODULE_PAYMENT_BILLPAY_TEXT_PAYEE', 'Destinatario del pagamento');
define('MODULE_PAYMENT_BILLPAY_TEXT_PAYEE_CH', 'Succursale Svizzera (Regensdorf)');
define('MODULE_PAYMENT_BILLPAY_TEXT_IBAN_CH', 'Numero di conto');
define('MODULE_PAYMENT_BILLPAY_TEXT_BIC_CH', 'BC Numero');
define('MODULE_PAYMENT_BILLPAY_TEXT_BANK', 'Banca');
define('MODULE_PAYMENT_BILLPAY_TEXT_TOTAL_AMOUNT', 'Importo');
define('MODULE_PAYMENT_BILLPAY_UPDATE_AVAILABLE', '&Egrave; disponibile la versione %2$s del Plugin di pagamento BillPay (attualmente installato: %1$s). Clicca <a href="%3$s">qui</a> per scaricare.');
?>