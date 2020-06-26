<?php
$lang_array = array(
  'MODULE_PAYMENT_PAYPALINSTALLMENT_TEXT_TITLE' => 'Pagamento a rate Alimentato da PayPal',
  'MODULE_PAYMENT_PAYPALINSTALLMENT_TEXT_INFO' => '<img src="https://www.paypal.com/de_DE/DE/i/logo/lockbox_150x47.gif" />',
  'MODULE_PAYMENT_PAYPALINSTALLMENT_TEXT_DESCRIPTION' => 'Riscatto alimentato da PayPal<br/>Potete trovare maggiori informazioni su Riscatto alimentato da PayPal <a target="_blank" href="https://www.paypal.com/de/webapps/mpp/installments">qui</a>.',
  'MODULE_PAYMENT_PAYPALINSTALLMENT_ALLOWED_TITLE' => 'Zone consentite',
  'MODULE_PAYMENT_PAYPALINSTALLMENT_ALLOWED_DESC' => 'Si prega di inserire le zone <b>separatamente</b> che dovrebbero essere autorizzate ad utilizzare questo modulo (ad esempio AT,DE (lasciare vuote se si desidera consentire tutte le zone))',
  'MODULE_PAYMENT_PAYPALINSTALLMENT_STATUS_TITLE' => 'Abilita il pagamento a rate con PayPal',
  'MODULE_PAYMENT_PAYPALINSTALLMENT_STATUS_DESC' => 'Vuoi accettare Pagamenti a rate Alimentato da pagamenti PayPal?',
  'MODULE_PAYMENT_PAYPALINSTALLMENT_SORT_ORDER_TITLE' => 'Ordine di ordinamento',
  'MODULE_PAYMENT_PAYPALINSTALLMENT_SORT_ORDER_DESC' => 'Ordina la vista in ordine sparso. Il numero pi&ugrave; basso sar&agrave; visualizzato per primo',
  'MODULE_PAYMENT_PAYPALINSTALLMENT_ZONE_TITLE' => 'Zona di pagamento',
  'MODULE_PAYMENT_PAYPALINSTALLMENT_ZONE_DESC' => 'Se viene scelta una zona, il metodo di pagamento sar&agrave; valido solo per questa zona.',
  'MODULE_PAYMENT_PAYPALINSTALLMENT_LP' => '<br /><br /><a target="_blank" href="http://www.paypal.com/de/webapps/mpp/referral/paypal-business-account2?partner_id=EHALBVD4M2RQS"><strong>Crea ora un conto PayPal.</strong></a>',
  'MODULE_PAYMENT_PAYPALINSTALLMENT_TEXT_EXTENDED_DESCRIPTION' => '<strong><font color="red">ATTENZIONE:</font></strong> Si prega di impostare la configurazione di PayPal sotto "Moduli per i partner" -> "PayPal" -> <a href="'.xtc_href_link('paypal_config.php').'"><strong>"Configurazione PayPal"</strong></a>!',
  'MODULE_PAYMENT_PAYPALINSTALLMENT_TEXT_ERROR_HEADING' => 'Nota',
  'MODULE_PAYMENT_PAYPALINSTALLMENT_TEXT_ERROR_MESSAGE' => 'Il pagamento PayPal &egrave; stato annullato',
  'MODULE_PAYMENT_PAYPALINSTALLMENT_TEXT_CHECKBOX' => 'Accetto che i miei dati siano condivisi con PayPal.',
  'MODULE_PAYMENT_PAYPALINSTALLMENT_TEXT_ERROR_CHECKBOX' => 'Si prega di accettare che i vostri dati saranno condivisi con PayPal.',
);
foreach ($lang_array as $key => $val) {
  defined($key) or define($key, $val);
}
?>