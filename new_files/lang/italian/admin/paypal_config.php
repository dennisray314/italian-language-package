<?php
$lang_array = array(
  'TEXT_PAYPAL_CONFIG_HEADING_TITLE' => 'Configurazione PayPal',
  'TEXT_PAYPAL_CONFIG_SECRET_LIVE' => 'Segreto in diretta:',
  'TEXT_PAYPAL_CONFIG_CLIENT_LIVE' => 'ID cliente in diretta:',
  'TEXT_PAYPAL_CONFIG_CLIENT_LIVE_INFO' => 'I dati dell\'APP PayPal o rinnovarli.',
  'TEXT_PAYPAL_CONFIG_SECRET_SANDBOX' => 'Sandbox segreto:',
  'TEXT_PAYPAL_CONFIG_CLIENT_SANDBOX' => 'ID cliente Sandbox:',
  'TEXT_PAYPAL_CONFIG_CLIENT_SANDBOX_INFO' => 'I dati dell\'APP PayPal o rinnovarli.',
  'TEXT_PAYPAL_APPINATOR_LIVE' => 'Richiesta dati in tempo reale',
  'TEXT_PAYPAL_APPINATOR_SANDBOX' => 'Richiesta dati sandbox',
  'TEXT_PAYPAL_CONFIG_MODE' => 'Modo:',
  'TEXT_PAYPAL_CONFIG_MODE_INFO' => '',
  'TEXT_PAYPAL_CONFIG_INVOICE_PREFIX' => 'Prefisso per l\'ID dell\'ordine',
  'TEXT_PAYPAL_CONFIG_INVOICE_PREFIX_INFO' => 'Stringa di lettere arbitrarie (prefisso), che viene posta davanti ad ogni numero d\'ordine e che viene utilizzata per generare il numero di fattura PayPal.<br />Questo permette l\'operazione di pi&ugrave; negozi con una sola App PayPal. I conflitti relativi ai numeri d\'ordine vengono evitati. Ogni ordine ha i propri numeri di fattura all\'interno del conto PayPal.',
  'TEXT_PAYPAL_CONFIG_TRANSACTION' => 'Operazione:',
  'TEXT_PAYPAL_CONFIG_TRANSACTION_INFO' => 'Scegliere il tipo di transazione.<br/><br/><b>Nota:</b> Con PayPal Plus e Rate Powered by PayPal si effettua sempre una vendita.',
  'TEXT_PAYPAL_CONFIG_CAPTURE' => 'Catturare manualmente:',
  'TEXT_PAYPAL_CONFIG_CAPTURE_INFO' => 'Catturare manualmente i pagamenti PayPal? <br/><br/><b>Nota:</b> Pertanto &egrave; necessario che la Transazione sia impostata per Autorizzare.',
  'TEXT_PAYPAL_CONFIG_CART' => 'Carrello:',
  'TEXT_PAYPAL_CONFIG_CART_INFO' => 'Trasferire i dettagli del carrello a PayPal? <br/><br/><b>Nota:</b> Questa impostazione pu&ograve; causare problemi quando si utilizzano i moduli ot-moduli sotto "Moduli" -> "Totale ordine", che concedono uno sconto o un supplemento ("Sconto [ot_discount]", "Buoni sconto [ot_coupon]", "Buoni regalo [ot_gv]", "Tipo di pagamento sconto &amp; supplemento [ot_payment]", ecc.<br/>Impostazione raccomandata: "no"',
  'TEXT_PAYPAL_INSTALLMENT_BANNER_DISPLAY' => 'Striscione di credito:',
  'TEXT_PAYPAL_INSTALLMENT_BANNER_DISPLAY_INFO' => 'Visualizza il banner di credito? <br/><br/><b>Nota:</b> PayPal Installment &egrave; disponibile solo se il tuo conto PayPal &egrave; approvato.',
  'TEXT_PAYPAL_INSTALLMENT_BANNER_COLOR' => 'Colore della bandiera:',
  'TEXT_PAYPAL_INSTALLMENT_BANNER_COLOR_INFO' => 'Scegliere il colore per il banner.',
  'TEXT_PAYPAL_CONFIG_STATE_SUCCESS' => 'Stato di successo:',
  'TEXT_PAYPAL_CONFIG_STATE_SUCCESS_INFO' => 'Stato per l\'ordine di successo',
  'TEXT_PAYPAL_CONFIG_STATE_REJECTED' => 'Stato respinto:',
  'TEXT_PAYPAL_CONFIG_STATE_REJECTED_INFO' => 'Stato per l\'ordine respinto',
  'TEXT_PAYPAL_CONFIG_STATE_PENDING' => 'Stato in sospeso:',
  'TEXT_PAYPAL_CONFIG_STATE_PENDING_INFO' => 'Stato dopo l\'ordine riuscito, non ancora confermato da PayPal',
  'TEXT_PAYPAL_CONFIG_STATE_CAPTURED' => 'Stato catturato:',
  'TEXT_PAYPAL_CONFIG_STATE_CAPTURED_INFO' => 'Stato per l\'ordine catturato',
  'TEXT_PAYPAL_CONFIG_STATE_REFUNDED' => 'Stato rimborsato:',
  'TEXT_PAYPAL_CONFIG_STATE_REFUNDED_INFO' => 'Stato per l\'ordine rimborsato',
  'TEXT_PAYPAL_CONFIG_STATE_TEMP' => 'Stato temp:',
  'TEXT_PAYPAL_CONFIG_STATE_TEMP_INFO' => 'Stato per ordine non confermato',
  'TEXT_PAYPAL_CONFIG_LOG' => 'Log:',
  'TEXT_PAYPAL_CONFIG_LOG_INFO' => 'Si deve scrivere un diario di bordo?',
  'TEXT_PAYPAL_CONFIG_LOG_LEVEL' => 'Livello di log:',
  'TEXT_PAYPAL_CONFIG_LOG_LEVEL_INFO' => '<b>Nota:</b> In modalit&agrave; live, &egrave; registrato solo fino al livello INFO.',
  'BUTTON_PAYPAL_STATUS_INSTALL' => 'Installare lo stato degli ordini',
);
foreach ($lang_array as $key => $val) {
  defined($key) or define($key, $val);
}
// orders status
$PAYPAL_INST_ORDER_STATUS_TMP_NAME = 'PayPal annullato';
$PAYPAL_INST_ORDER_STATUS_SUCCESS_NAME = 'Il successo di PayPal';
$PAYPAL_INST_ORDER_STATUS_PENDING_NAME = 'PayPal in attesa';
$PAYPAL_INST_ORDER_STATUS_CAPTURED_NAME = 'PayPal catturato';
$PAYPAL_INST_ORDER_STATUS_REFUNDED_NAME = 'PayPal rimborsato';
$PAYPAL_INST_ORDER_STATUS_REJECTED_NAME = 'PayPal rifiutato';
$PAYPAL_INST_ORDER_STATUS_ACCEPTED_NAME = 'PayPal accettato';
?>