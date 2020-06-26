<?php
// CUSTOMIZE THIS SETTING
define('NUMBER_OF_ZONES',10);
define('MODULE_SHIPPING_ZONES_TEXT_TITLE', 'Spese di spedizione per');
define('MODULE_SHIPPING_ZONES_TEXT_DESCRIPTION', 'Spese di spedizioni basate sulla zona');
define('MODULE_SHIPPING_ZONES_TEXT_WAY', 'invio in:');
define('MODULE_SHIPPING_ZONES_TEXT_UNITS', 'kg');
define('MODULE_SHIPPING_ZONES_INVALID_ZONE', 'In questo paese non &egrave; possibile effettuare nessuna spedizione!');
define('MODULE_SHIPPING_ZONES_UNDEFINED_RATE', 'Le spese di spedizione al momento non possono essere calcolate.');
define('MODULE_SHIPPING_ZONES_STATUS_TITLE' , 'Attiva metodo spese di spedizione in base alla zona');
define('MODULE_SHIPPING_ZONES_STATUS_DESC' , 'Vuole offrire le spese di spedizione in base alla zona?');
define('MODULE_SHIPPING_ZONES_ALLOWED_TITLE' , 'permetta invio zone');
define('MODULE_SHIPPING_ZONES_ALLOWED_DESC' , 'inserisca le <b>singole</b> zone, nelle quali sar&agrave; possibile la spedizione. (es. AT,DE (se desidera tutte le zone lasci il campo vuoto))');
define('MODULE_SHIPPING_ZONES_TAX_CLASS_TITLE' , 'fascia fiscale');
define('MODULE_SHIPPING_ZONES_TAX_CLASS_DESC' , 'applica la seguente fascia fiscale alle spese di spedizione');
define('MODULE_SHIPPING_ZONES_ZONE_TITLE' , 'Zona di spedizione');
define('MODULE_SHIPPING_ZONES_ZONE_DESC' , 'Se si sceglie una zona solo questa zona di spedizione utilizzata.');
define('MODULE_SHIPPING_ZONES_SORT_ORDER_TITLE' , 'criterio di ordinamento');
define('MODULE_SHIPPING_ZONES_SORT_ORDER_DESC' , 'ordinamento da mostrare');
define('MODULE_SHIPPING_ZONES_NUMBER_ZONES_TITLE' , 'Numero di zone');
define('MODULE_SHIPPING_ZONES_NUMBER_ZONES_DESC' , 'Numero di zone da utilizzare');
define('MODULE_SHIPPING_ZONES_DISPLAY_TITLE' , 'Abilita visualizzazione');
define('MODULE_SHIPPING_ZONES_DISPLAY_DESC' , 'Vuoi visualizzare, se la spedizione a destinazione non &egrave; possibile o se non &egrave; possibile calcolare i costi di spedizione?');
if (defined('MODULE_SHIPPING_ZONES_NUMBER_ZONES')) {
  for ($module_shipping_zones_i = 1; $module_shipping_zones_i <= MODULE_SHIPPING_ZONES_NUMBER_ZONES; $module_shipping_zones_i ++) {
   define('MODULE_SHIPPING_ZONES_COUNTRIES_'.$ii.'_TITLE' , 'Zona '.$ii.' Paesi');
   define('MODULE_SHIPPING_ZONES_COUNTRIES_'.$ii.'_DESC' , 'lista di Paesi, in base al codice ISO i paesi sono composti da due lettere e separati dalla virgola, i paesi che appartengono alla zona'.$ii.'.');
   define('MODULE_SHIPPING_ZONES_COST_'.$ii.'_TITLE' , 'Zona '.$ii.' Spese di spedizione');
   define('MODULE_SHIPPING_ZONES_COST_'.$ii.'_DESC' , 'Spese di spedizione nella zona '.$ii.' luoghi stabiliti, basati su un gruppo di massimo. Peso ordine. Esempio: 3:8.50,7:10.50,... Il peso inferiore o uguale a  3 &egrave; di 8.50 per la zona '.$ii.' Costi paese di destinazione.');
   define('MODULE_SHIPPING_ZONES_HANDLING_'.$ii.'_TITLE' , 'Zona '.$ii.'tariffa Handling');
   define('MODULE_SHIPPING_ZONES_HANDLING_'.$ii.'_DESC' , 'tariffa Handling per questa zona di spedizione');
   }
}
?>