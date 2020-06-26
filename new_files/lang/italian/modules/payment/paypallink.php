<?php
$lang_array = array(
  'MODULE_PAYMENT_PAYPALLINK_TEXT_TITLE' => 'PayPal Link',
  'MODULE_PAYMENT_PAYPALLINK_TEXT_INFO' => '<img src="https://www.paypal.com/de_DE/DE/i/logo/lockbox_150x47.gif" />',
  'MODULE_PAYMENT_PAYPALLINK_TEXT_DESCRIPTION' => 'PayPal come link di pagamento per il cliente dopo il completamento dell\'ordine. Decidete voi stessi dove il cliente riceve la richiesta di pagamento.',
  'MODULE_PAYMENT_PAYPALLINK_ALLOWED_TITLE' => 'Zone consentite',
  'MODULE_PAYMENT_PAYPALLINK_ALLOWED_DESC' => 'Si prega di inserire le zone <b>separatamente</b> che dovrebbero essere autorizzate ad utilizzare questo modulo (ad esempio AT,DE (lasciare vuote se si desidera consentire tutte le zone))',
  'MODULE_PAYMENT_PAYPALLINK_STATUS_TITLE' => 'Attivare il collegamento PayPal',
  'MODULE_PAYMENT_PAYPALLINK_STATUS_DESC' => 'Vuoi accettare pagamenti con PayPal Link?',
  'MODULE_PAYMENT_PAYPALLINK_SORT_ORDER_TITLE' => 'Ordine di ordinamento',
  'MODULE_PAYMENT_PAYPALLINK_SORT_ORDER_DESC' => 'Ordina la vista in ordine sparso. Il numero pi&ugrave; basso sar&agrave; visualizzato per primo',
  'MODULE_PAYMENT_PAYPALLINK_ZONE_TITLE' => 'Zona di pagamento',
  'MODULE_PAYMENT_PAYPALLINK_ZONE_DESC' => 'Se viene scelta una zona, il metodo di pagamento sar&agrave; valido solo per questa zona.',
  'MODULE_PAYMENT_PAYPALLINK_LP' => '<br /><br /><a target="_blank" href="http://www.paypal.com/de/webapps/mpp/referral/paypal-business-account2?partner_id=EHALBVD4M2RQS"><strong>Crea subito un conto PayPal.</strong></a>',
  'MODULE_PAYMENT_PAYPALLINK_TEXT_EXTENDED_DESCRIPTION' => '<strong><font color="red">ATTENZIONE:</font></strong> Si prega di impostare la configurazione di PayPal sotto "Moduli per i partner" -> "PayPal" -> <a href="'.xtc_href_link('paypal_config.php').'"><strong>"Configurazione PayPal"</strong></a>!',
  'MODULE_PAYMENT_PAYPALLINK_TEXT_ERROR_HEADING' => 'Nota',
  'MODULE_PAYMENT_PAYPALLINK_TEXT_ERROR_MESSAGE' => 'Il pagamento PayPal &egrave; stato annullato',
    'MODULE_PAYMENT_PAYPALLINK_TEXT_SUCCESS' => 'Paga ora con PayPal. Cliccare sul seguente link:<br/> %s',
  'MODULE_PAYMENT_PAYPALLINK_TEXT_COMPLETED' => 'Grazie per aver pagato con PayPal.',
);
foreach ($lang_array as $key => $val) {
  defined($key) or define($key, $val);
}
?>