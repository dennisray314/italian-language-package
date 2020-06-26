<?php
$lang_array = array(
  'TEXT_PAYPAL_MODULE_HEADING_TITLE' => 'Prodotti PayPal',
  'TABLE_HEADING_MODULES' => 'Modulo',
  'TABLE_HEADING_FILENAME' => 'Nome del modulo (per uso interno)',
  'TABLE_HEADING_SORT_ORDER' => 'Ordinamento',
  'TABLE_HEADING_STATUS' => 'Stato',
  'TABLE_HEADING_ACTION' => 'Azione',
  'TABLE_HEADING_WALL_STATUS' => 'Esposizione a Paymentwall',
  'TABLE_HEADING_WALL_DESCRIPTION' => 'Descrizione',
  'TEXT_PAYPAL_MODULE_PROFILE' => 'Profilo',
  'TEXT_PAYPAL_NO_PROFILE' => 'no Profilo Web',
  'TEXT_PAYPAL_STANDARD_PROFILE' => 'Profilo Web standard',
  'TEXT_PAYPAL_MODULE_LINK_SUCCESS' => 'Collegamento alla cassa',
  'TEXT_PAYPAL_MODULE_LINK_SUCCESS_INFO' => 'Il link per il pagamento deve essere visualizzato alla cassa?',
  'TEXT_PAYPAL_MODULE_LINK_ACCOUNT' => 'Collegamento al conto',
  'TEXT_PAYPAL_MODULE_LINK_ACCOUNT_INFO' => 'Il link per il pagamento deve essere visualizzato nel conto?',
  'TEXT_PAYPAL_MODULE_LINK_PRODUCT' => 'Pulsante al prodotto',
  'TEXT_PAYPAL_MODULE_LINK_PRODUCT_INFO' => 'Il pulsante PayPal deve essere visualizzato nei dettagli del prodotto?',
  'TEXT_PAYPAL_MODULE_USE_TABS' => 'Fisarmonica / schede',
  'TEXT_PAYPAL_MODULE_USE_TABS_INFO' => 'Il modello utilizza la fisarmonica o le schede alla cassa?',
  'TEXT_PAYPAL_MODULE_SHIPPING_COST' => 'spese di spedizione provvisorie',
  'TEXT_PAYPAL_MODULE_SHIPPING_COST_INFO' => 'Importo per le spese di spedizione provvisorie.',
  'TEXT_PAYPAL_MODULE_UPSTREAM_PRODUCT' => 'Mostra al prodotto',
  'TEXT_PAYPAL_MODULE_UPSTREAM_PRODUCT_INFO' => 'Mostra i dettagli per l\'Rata al prodotto?',
  'TEXT_PAYPAL_MODULE_UPSTREAM_CART' => 'Mostra al carrello',
  'TEXT_PAYPAL_MODULE_UPSTREAM_CART_INFO' => 'Mostra i dettagli per l\'iscrizione al carrello?',
  'TEXT_PAYPAL_MODULE_UPSTREAM_PAYMENT' => 'Mostra alla cassa',
  'TEXT_PAYPAL_MODULE_UPSTREAM_PAYMENT_INFO' => 'Mostra i dettagli per il pagamento rateale durante il checkout?',
);
foreach ($lang_array as $key => $val) {
  defined($key) or define($key, $val);
}
?>