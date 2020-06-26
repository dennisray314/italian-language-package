<?php
define('MODULE_PAYMENT_TYPE_PERMISSION', 'cod');
define('MODULE_PAYMENT_AUTHORIZENET_TEXT_TITLE', 'Authorize.net');
define('MODULE_PAYMENT_AUTHORIZENET_TEXT_DESCRIPTION', 'carta di credito Test Info:<br /><br />CC#: 4111111111111111<br />valida fino a: sempre');
define('MODULE_PAYMENT_AUTHORIZENET_TEXT_INFO', '');
define('MODULE_PAYMENT_AUTHORIZENET_TEXT_TYPE', 'Tipo:');
define('MODULE_PAYMENT_AUTHORIZENET_TEXT_CREDIT_CARD_OWNER', 'Titolare carta di credito:');
define('MODULE_PAYMENT_AUTHORIZENET_TEXT_CREDIT_CARD_NUMBER', 'numero carta di credito.:');
define('MODULE_PAYMENT_AUTHORIZENET_TEXT_CREDIT_CARD_EXPIRES', 'Valida fino a:');
define('MODULE_PAYMENT_AUTHORIZENET_TEXT_JS_CC_OWNER', '* Il nome del titolare della carta di credito deve essere composta da minimo'.CC_OWNER_MIN_LENGTH.' lettere.\n');
define('MODULE_PAYMENT_AUTHORIZENET_TEXT_JS_CC_NUMBER', '* Il numero della carta di credito deve essere composta da minimo '.CC_NUMBER_MIN_LENGTH.' cifre.\n');
define('MODULE_PAYMENT_AUTHORIZENET_TEXT_ERROR_MESSAGE', 'Durante la verifica della sua carta di credito si &egrave; verificato un errore! Riprovi.');
define('MODULE_PAYMENT_AUTHORIZENET_TEXT_DECLINED_MESSAGE', 'La sua carta di credito &egrave; stata rifiutata. Riprovi con un\'altra carta o contatti la sua banca per ulteriori informazioni.');
define('MODULE_PAYMENT_AUTHORIZENET_TEXT_ERROR', 'Errore durante la verifica della carta di credito!');
define('TEXT_CCVAL_ERROR_INVALID_DATE', 'la data "valida fino a" non &egrave; valida. Corregga i suoi dati.');
define('TEXT_CCVAL_ERROR_INVALID_NUMBER', 'Il "numero carta di credito", che ha inserito non &egrave; valido. Corregga i suoi dati.');
define('TEXT_CCVAL_ERROR_UNKNOWN_CARD', 'Le prime 4 cifre della sua carta di credito sono: %s se questo dato &egrave; esatto, questo tipo di carta non pu&ograve; essere accettata. Eventualmente corregga i suoi dati.');
define('MODULE_PAYMENT_AUTHORIZENET_TXNKEY_TITLE', 'codice transazione');
define('MODULE_PAYMENT_AUTHORIZENET_TXNKEY_DESC', 'codice transazione utilizzato per decifrare i dati TP');
define('MODULE_PAYMENT_AUTHORIZENET_TESTMODE_TITLE', 'modi transazione');
define('MODULE_PAYMENT_AUTHORIZENET_TESTMODE_DESC', 'modi transazione che devono essere utilizzati per questo modulo');
define('MODULE_PAYMENT_AUTHORIZENET_METHOD_TITLE', 'Metodi transazione');
define('MODULE_PAYMENT_AUTHORIZENET_METHOD_DESC', 'Metodi transazione che devono essere utilizzati per questo modulo');
define('MODULE_PAYMENT_AUTHORIZENET_EMAIL_CUSTOMER_TITLE', 'informazioni da comunicare al cliente');
define('MODULE_PAYMENT_AUTHORIZENET_EMAIL_CUSTOMER_DESC', 'Authorize.Net deve inviare al cliente una e-mail di conferma?');
define('MODULE_PAYMENT_AUTHORIZENET_STATUS_TITLE', 'Attivare modulo Authorize.net');
define('MODULE_PAYMENT_AUTHORIZENET_STATUS_DESC', 'Desidera accettare pagamenti tramite Authorize.net?');
define('MODULE_PAYMENT_AUTHORIZENET_LOGIN_TITLE', 'iscrizione nome utente');
define('MODULE_PAYMENT_AUTHORIZENET_LOGIN_DESC', 'Nome utente che deve essere utilizzato per Authorize.net Service');
define('MODULE_PAYMENT_AUTHORIZENET_ORDER_STATUS_ID_TITLE', 'Definisci stato ordini');
define('MODULE_PAYMENT_AUTHORIZENET_ORDER_STATUS_ID_DESC', 'mettere gli ordini che vengono effettuati con questo modulo su questo stato');
define('MODULE_PAYMENT_AUTHORIZENET_SORT_ORDER_TITLE', 'sequenza di visualizzazione');
define('MODULE_PAYMENT_AUTHORIZENET_SORT_ORDER_DESC', 'sequenza di visualizzazione. Le cifre piccole devono essere mostrate per prima.');
define('MODULE_PAYMENT_AUTHORIZENET_ZONE_TITLE', 'zone pagamento');
define('MODULE_PAYMENT_AUTHORIZENET_ZONE_DESC', 'Quando viene selezionata una zona, questo metodo di pagamento &egrave; valido solo per questa zona.');
define('MODULE_PAYMENT_AUTHORIZENET_ALLOWED_TITLE', 'zone permesse');
define('MODULE_PAYMENT_AUTHORIZENET_ALLOWED_DESC', 'inserisca le <b>singole</b> zone, nelle quali deve essere valido questo modulo. (es. AT,DE (se il campo resta vuoto saranno autorizzate tutte le zone.)');
?>