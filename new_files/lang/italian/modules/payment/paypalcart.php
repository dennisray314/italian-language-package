<?php
$lang_array = array(
  'MODULE_PAYMENT_PAYPALCART_TEXT_TITLE' => 'PayPal Express',
  'MODULE_PAYMENT_PAYPALCART_TEXT_INFO' => '<img src="https://www.paypal.com/de_DE/DE/i/logo/lockbox_150x47.gif" />',
  'MODULE_PAYMENT_PAYPALCART_TEXT_DESCRIPTION' => 'PayPal Express Checkout - il pulsante PayPal nel carrello e nella pagina dell\'articolo per la massima conversione.<br/>Puoi trovare maggiori informazioni su PayPal Express Shortcut <a target="_blank" href="https://www.paypal.com/de/webapps/mpp/express-checkout">qui</a>.',
  'MODULE_PAYMENT_PAYPALCART_ALLOWED_TITLE' => 'Zone consentite',
  'MODULE_PAYMENT_PAYPALCART_ALLOWED_DESC' => 'Si prega di inserire le zone <b>separatamente</b> che dovrebbero essere autorizzate ad utilizzare questo modulo (ad esempio AT,DE (lasciare vuote se si desidera consentire tutte le zone))',
  'MODULE_PAYMENT_PAYPALCART_STATUS_TITLE' => 'Attivare PayPal Express',
  'MODULE_PAYMENT_PAYPALCART_STATUS_DESC' => 'Vuoi accettare pagamenti PayPal Express?',
  'MODULE_PAYMENT_PAYPALCART_SORT_ORDER_TITLE' => 'Ordine di ordinamento',
  'MODULE_PAYMENT_PAYPALCART_SORT_ORDER_DESC' => 'Ordina la vista in ordine sparso. Il numero pi&ugrave; basso sar&agrave; visualizzato per primo',
  'MODULE_PAYMENT_PAYPALCART_ZONE_TITLE' => 'Zona di pagamento',
  'MODULE_PAYMENT_PAYPALCART_ZONE_DESC' => 'Se viene scelta una zona, il metodo di pagamento sar&agrave; valido solo per questa zona.',
  'MODULE_PAYMENT_PAYPALCART_LP' => '<br /><br /><a target="_blank" href="http://www.paypal.com/de/webapps/mpp/referral/paypal-business-account2?partner_id=EHALBVD4M2RQS"><strong>Crea ora un conto PayPal.</strong></a>',
  'MODULE_PAYMENT_PAYPALCART_TEXT_EXTENDED_DESCRIPTION' => '<strong><font color="red">ATTENZIONE:</font></strong> Si prega di impostare la configurazione di PayPal sotto "Moduli per i partner" -> "PayPal" -> <a href="'.xtc_href_link('paypal_config.php').'"><strong>"Configurazione PayPal"</strong></a>!',
  'MODULE_PAYMENT_PAYPALCART_TEXT_ERROR_HEADING' => 'Nota',
  'MODULE_PAYMENT_PAYPALCART_TEXT_ERROR_MESSAGE' => 'Il pagamento PayPal &egrave; stato annullato',
  'TEXT_PAYPAL_CART_ACCOUNT_CREATED' => 'Abbiamo creato un conto cliente con il tuo indirizzo e-mail PayPal. Potete richiedere la password per il vostro nuovo conto cliente in un secondo momento utilizzando la funzione "Password dimenticata".',
);
foreach ($lang_array as $key => $val) {
  defined($key) or define($key, $val);
}
?>