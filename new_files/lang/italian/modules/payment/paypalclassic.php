<?php
$lang_array = array(
  'MODULE_PAYMENT_PAYPALCLASSIC_TEXT_TITLE' => 'PayPal',
  'MODULE_PAYMENT_PAYPALCLASSIC_TEXT_ADMIN_TITLE' => 'PayPal con PayPal Express',
  'MODULE_PAYMENT_PAYPALCLASSIC_TEXT_INFO' => '<img src="https://www.paypal.com/de_DE/DE/i/logo/lockbox_150x47.gif" />',
  'MODULE_PAYMENT_PAYPALCLASSIC_TEXT_DESCRIPTION' => 'Dopo aver "confermato" il vostro sar&agrave; routet a PayPal per pagare il vostro ordine.<br />Indietro nel negozio si otterr&agrave; il vostro ordine-mail.<br />PayPal &egrave; il modo pi&ugrave; sicuro per pagare online. Teniamo i tuoi dati al sicuro dagli altri e possiamo aiutarti a riavere i tuoi soldi se qualcosa dovesse andare storto.',
  'MODULE_PAYMENT_PAYPALCLASSIC_ALLOWED_TITLE' => 'Zone consentite',
  'MODULE_PAYMENT_PAYPALCLASSIC_ALLOWED_DESC' => 'Si prega di inserire le zone <b>separatamente</b> che dovrebbero essere autorizzate ad utilizzare questo modulo (ad esempio AT,DE (lasciare vuote se si desidera consentire tutte le zone))',
  'MODULE_PAYMENT_PAYPALCLASSIC_STATUS_TITLE' => 'Attivare PayPal',
  'MODULE_PAYMENT_PAYPALCLASSIC_STATUS_DESC' => 'Vuoi accettare pagamenti con PayPal?',
  'MODULE_PAYMENT_PAYPALCLASSIC_SORT_ORDER_TITLE' => 'Ordine di ordinamento',
  'MODULE_PAYMENT_PAYPALCLASSIC_SORT_ORDER_DESC' => 'Ordina la vista in ordine sparso. Il numero pi&ugrave; basso sar&agrave; visualizzato per primo',
  'MODULE_PAYMENT_PAYPALCLASSIC_ZONE_TITLE' => 'Zona di pagamento',
  'MODULE_PAYMENT_PAYPALCLASSIC_ZONE_DESC' => 'Se viene scelta una zona, il metodo di pagamento sar&agrave; valido solo per questa zona.',
  'MODULE_PAYMENT_PAYPALCLASSIC_LP' => '<br /><br /><a target="_blank" href="http://www.paypal.com/de/webapps/mpp/referral/paypal-business-account2?partner_id=EHALBVD4M2RQS"><strong>Crea subito un conto PayPal.</strong></a>',
  'MODULE_PAYMENT_PAYPALCLASSIC_TEXT_EXTENDED_DESCRIPTION' => '<strong><font color="red">ATTENZIONE:</font></strong> Si prega di impostare la configurazione di PayPal sotto "Moduli per i partner" -> "PayPal" -> <a href="'.xtc_href_link('paypal_config.php').'"><strong>"Configurazione PayPal"</strong></a>!',
  'MODULE_PAYMENT_PAYPALCLASSIC_TEXT_ERROR_HEADING' => 'Nota',
  'MODULE_PAYMENT_PAYPALCLASSIC_TEXT_ERROR_MESSAGE' => 'Il pagamento PayPal &egrave; stato annullato',
);
foreach ($lang_array as $key => $val) {
  defined($key) or define($key, $val);
}
?>