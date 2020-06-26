<?php
$lang_array = array(
  'TEXT_PAYPAL_WEBHOOK_HEADING_TITLE' => 'PayPal Webhooks',
  'TEXT_PAYPAL_WEBHOOK_STATUS_NOT_DEFINED' => 'non configurato',
  'TEXT_PAYPAL_WEBHOOK_INFO' => '<ul><li>Nessun Webhooks disponibile.</li><li>Con Webhhoks ricevete aggiornamenti sullo stato dei pagamenti e degli ordini</li><li>Per utilizzare webhook, &egrave; indispensabile disporre di un certificato SSL valido.</li></ul>',
  'TEXT_PAYPAL_WEBHOOK_CREDENTIAL_INFO' => 'Nessun Webhooks disponibile. Si prega di controllare le credenziali.',
  'TABLE_HEADING_URL' => 'URL',
  'TABLE_HEADING_WEBHOOK' => 'Webhook',
  'TABLE_HEADING_STATUS' => 'Stato',
  'TABLE_HEADING_DESCRIPTION' => 'Descrizione',
);
foreach ($lang_array as $key => $val) {
  defined($key) or define($key, $val);
}
?>