<?php
$lang_array = array(
  'MODULE_PAYMENT_PAYPALPLUS_TEXT_TITLE' => 'PayPal Plus',
  'MODULE_PAYMENT_PAYPALPLUS_TEXT_ADMIN_TITLE' => 'PayPal Plus con PayPal Express',
  'MODULE_PAYMENT_PAYPALPLUS_TEXT_INFO' => 'Selezionare uno dei metodi di pagamento qui elencati cliccando.',
  'MODULE_PAYMENT_PAYPALPLUS_TEXT_DESCRIPTION' => 'PayPal Plus - i quattro metodi di pagamento pi&ugrave; popolari tra gli acquirenti tedeschi: PayPal, addebito diretto, carta di credito e fattura.<br/>Puoi trovare maggiori informazioni su PayPal Plus <a target="_blank" href="https://www.paypal.com/de/webapps/mpp/paypal-plus">here</a>.',
  'MODULE_PAYMENT_PAYPALPLUS_ALLOWED_TITLE' => 'Zone consentite',
  'MODULE_PAYMENT_PAYPALPLUS_ALLOWED_DESC' => 'Si prega di inserire le zone <b>separatamente</b> che dovrebbero essere autorizzate ad utilizzare questo modulo (ad esempio AT,DE (lasciare vuote se si desidera consentire tutte le zone))',
  'MODULE_PAYMENT_PAYPALPLUS_STATUS_TITLE' => 'Attivare PayPal Plus',
  'MODULE_PAYMENT_PAYPALPLUS_STATUS_DESC' => 'Vuoi accettare PayPal, carta di credito, addebito diretto di un pagamento su fattura?',
  'MODULE_PAYMENT_PAYPALPLUS_SORT_ORDER_TITLE' => 'Ordine di ordinamento',
  'MODULE_PAYMENT_PAYPALPLUS_SORT_ORDER_DESC' => 'Ordina la vista in ordine sparso. Il numero pi&ugrave; basso sar&agrave; visualizzato per primo',
  'MODULE_PAYMENT_PAYPALPLUS_ZONE_TITLE' => 'Zona di pagamento',
  'MODULE_PAYMENT_PAYPALPLUS_ZONE_DESC' => 'Se viene scelta una zona, il metodo di pagamento sar&agrave; valido solo per questa zona.',
  'MODULE_PAYMENT_PAYPALPLUS_LP' => '<br /><br /><a target="_blank" href="http://www.paypal.com/de/webapps/mpp/referral/paypal-business-account2?partner_id=EHALBVD4M2RQS"><strong>Crea ora un conto PayPal.</strong></a>',
  'MODULE_PAYMENT_PAYPALPLUS_TEXT_EXTENDED_DESCRIPTION' => '<strong><font color="red">ATTENZIONE:</font></strong> Si prega di impostare la configurazione di PayPal sotto "Moduli per i partner" -> "PayPal" -> <a href="'.xtc_href_link('paypal_config.php').'"><strong>"Configurazione PayPal"</strong></a>!',
  'MODULE_PAYMENT_PAYPALPLUS_TEXT_ERROR_HEADING' => 'Nota',
  'MODULE_PAYMENT_PAYPALPLUS_TEXT_ERROR_MESSAGE' => 'Il pagamento PayPal &egrave; stato annullato',
  'MODULE_PAYMENT_PAYPALPLUS_INVOICE' => 'Pagamento su fattura',
);
foreach ($lang_array as $key => $val) {
  defined($key) or define($key, $val);
}
?>