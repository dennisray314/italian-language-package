<?php
$lang_array = array(
  'TEXT_PAYPAL_PROFILE_HEADING_TITLE' => 'Profilo PayPal',
  'TEXT_PAYPAL_PROFILE_STATUS' => 'Predefinito:',
  'TEXT_PAYPAL_PROFILE_STATUS_INFO' => 'Se questo &egrave; il profilo predefinito?<br/><br/><b>Nota:</b> &Egrave; possibile assegnare un profilo dipendente dalla lingua per ogni singolo modulo.',
  'TEXT_PAYPAL_PROFILE_NAME' => 'Nome interno:',
  'TEXT_PAYPAL_PROFILE_NAME_INFO' => '',
  'TEXT_PAYPAL_PROFILE_BRAND' => 'Nome del display:',
  'TEXT_PAYPAL_PROFILE_BRAND_INFO' => 'Questo nome verr&agrave; visualizzato ai clienti su PayPal (max. 127 caratteri)',
  'TEXT_PAYPAL_PROFILE_LOGO' => 'Logo URL:',
  'TEXT_PAYPAL_PROFILE_LOGO_INFO' => 'URL completo (max. 127 caratteri)<br/><br/><b>Nota:</b> Affinch&eacute; il logo appaia, l\'URL deve iniziare con https://',
  'TEXT_PAYPAL_PROFILE_LOCALE' => 'Lingua:',
  'TEXT_PAYPAL_PROFILE_LOCALE_INFO' => '',
  'TEXT_PAYPAL_PROFILE_PAGE' => 'Pagina:',
  'TEXT_PAYPAL_PROFILE_PAGE_INFO' => '<b>Predefinito:</b> Login<br/><br/>Per la fatturazione l\'atto di trasferimento senza conto cliente &egrave; preselezionato.',
  'TEXT_PAYPAL_PROFILE_ADDRESS' => 'Indirizzo di sovrascrittura:',
  'TEXT_PAYPAL_PROFILE_ADDRESS_INFO' => 'L\'indirizzo di spedizione fornito da PayPal deve essere preso in carico?',
  'TEXT_PAYPAL_PROFILE_INFO' => 'Nessun profilo PayPal disponibile.<br/><br/>Utilizza un profilo PayPal in:<ul><li> cambia il nome del conto visualizzato su PayPal</li><li> utilizza un\'immagine su PayPal</li><li> imposta la landingpage su PayPal</li></ul>',  
);
foreach ($lang_array as $key => $val) {
  defined($key) or define($key, $val);
}
?>