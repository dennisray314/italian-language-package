<?php
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_TEXT_TITLE', 'trasferimento bancario EU standard');
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_TEXT_DESCRIPTION', 
          '<br />Il pi&ugrave; semplice ed economico metodo di pagamento entro l\'Europa &egrave; il trasferimento bancario tramite IBAN e BIC.' .
                             '<br />Utilizzi i seguenti dati per il trasferimento dell\'importo totale:<br />' .
          (defined('MODULE_PAYMENT_EUSTANDARDTRANSFER_BANKNAM') ? '<br />Nome della banca: ' . MODULE_PAYMENT_EUSTANDARDTRANSFER_BANKNAM : '') .
          (defined('MODULE_PAYMENT_EUSTANDARDTRANSFER_BRANCH')  ? '<br />Filiale: ' . MODULE_PAYMENT_EUSTANDARDTRANSFER_BRANCH : '') .
          (defined('MODULE_PAYMENT_EUSTANDARDTRANSFER_ACCNAM')  ? '<br />nome conto: ' . MODULE_PAYMENT_EUSTANDARDTRANSFER_ACCNAM : '') .
          (defined('MODULE_PAYMENT_EUSTANDARDTRANSFER_ACCNUM')  ? '<br />numero conto: ' . MODULE_PAYMENT_EUSTANDARDTRANSFER_ACCNUM : '') .
          (defined('MODULE_PAYMENT_EUSTANDARDTRANSFER_ACCIBAN') ? '<br />IBAN: ' . MODULE_PAYMENT_EUSTANDARDTRANSFER_ACCIBAN : '') .
          (defined('MODULE_PAYMENT_EUSTANDARDTRANSFER_BANKBIC') ? '<br />BIC/SWIFT: ' . MODULE_PAYMENT_EUSTANDARDTRANSFER_BANKBIC : '') .
          '<br />Purpose of payment: %s'.
          '<br /><br />La merce sar&agrave; inviata quando l\'importo sar&agrave; pervenuto.<br />');

  if (defined('MODULE_PAYMENT_EUSTANDARDTRANSFER_SUCCESS') && MODULE_PAYMENT_EUSTANDARDTRANSFER_SUCCESS == 'True') {
    define('MODULE_PAYMENT_EUSTANDARDTRANSFER_TEXT_INFO', 'Si prega di trasferire il totale della fattura sul nostro conto bancario. Riceverai i dati del conto nell\'ultima fase del checkout.');
  } else {
    define('MODULE_PAYMENT_EUSTANDARDTRANSFER_TEXT_INFO', 'Si prega di trasferire il totale della fattura sul nostro conto bancario. Riceverai i dati del conto via e-mail quando il tuo ordine sar&agrave; stato confermato.');
  }
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_STATUS_TITLE', 'Consentire il pagamento tramite bonifico bancario');
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_STATUS_DESC', 'o si desidera accettare pagamenti tramite bonifico bancario?');
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_BRANCH_TITLE', 'Beneficiario');
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_BRANCH_DESC', 'Il conto del beneficiario.');
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_BANKNAM_TITLE', 'Nome della banca');
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_BANKNAM_DESC', 'Il tuo nome completo della banca');
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_ACCNAM_TITLE', 'Codice bancario');
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_ACCNAM_DESC', 'Il codice bancario del vostro conto.');
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_ACCNUM_TITLE', 'Numero di conto bancario');
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_ACCNUM_DESC', 'Il tuo numero di conto.');
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_ACCIBAN_TITLE', 'Conto bancario IBAN');
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_ACCIBAN_DESC', 'ID conto internazionale.<br />(chiedete alla vostra banca se non lo sapete)');
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_BANKBIC_TITLE', 'Banca Bic');
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_BANKBIC_DESC', 'ID conto internazionale.<br />(chiedete alla vostra banca se non lo sapete)');
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_SORT_ORDER_TITLE', 'Modulo Ordina l\'ordine di visualizzazione');
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_SORT_ORDER_DESC', 'Ordina l\'ordine di visualizzazione. Il pi&ugrave; basso viene visualizzato per primo.');
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_ALLOWED_TITLE', 'Zone consentite');
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_ALLOWED_DESC', 'Si prega di inserire le zone <b>separatamente</b> che dovrebbero essere autorizzate ad utilizzare questo modul. (ad es. AT,DE (lasciare vuoto se si desidera consentire tutte le zone))');
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_ZONE_TITLE', 'Zona di pagamento');
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_ZONE_DESC', 'Se viene selezionata una zona, abilitare questo metodo di pagamento solo per quella zona.');
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_ORDER_STATUS_ID_TITLE', 'Impostare lo stato dell\'ordine');
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_ORDER_STATUS_ID_DESC', 'Impostare lo stato degli ordini effettuati con questo modulo di pagamento a questo valore.');
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_SUCCESS_TITLE', 'Visualizzare i dati bancari');
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_SUCCESS_DESC', 'Visualizzare i dati bancari sul successo della cassa?');
?>