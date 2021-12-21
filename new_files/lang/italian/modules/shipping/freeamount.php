<?php
define('MODULE_SHIPPING_FREEAMOUNT_TEXT_TITLE', 'spese di spedizione gratuite');
define('MODULE_SHIPPING_FREEAMOUNT_TEXT_DESCRIPTION', 'consegna con spese di spedizione gratuite');
define('MODULE_SHIPPING_FREEAMOUNT_TEXT_WAY', 'dal %s  del valore dell\'ordine vi spediamo la sua ordinazione gratuitamente');
define('MODULE_SHIPPING_FREEAMOUNT_SORT_ORDER', 'criterio di ordinamento');
define('MODULE_SHIPPING_FREEAMOUNT_INVALID_ZONE', 'Purtroppo non &egrave; possibile spedire in questo paese');
define('MODULE_SHIPPING_FREEAMOUNT_ALLOWED_TITLE' , 'zone per la spedizione permesse');
define('MODULE_SHIPPING_FREEAMOUNT_ALLOWED_DESC' , 'inserisca le <b>singole</b>, nelle quali &egrave; permessa la spedizione. (es. AT,DE (se desidera permettere tutte le zone lasci vuoto questo campo))');
define('MODULE_SHIPPING_FREEAMOUNT_STATUS_TITLE' , 'attivare spedizione gratuite');
define('MODULE_SHIPPING_FREEAMOUNT_STATUS_DESC' , 'desidera attivare le spedizioni gratuite?');
define('MODULE_SHIPPING_FREEAMOUNT_ZONE_TITLE' , 'Zona di spedizione');
define('MODULE_SHIPPING_FREEAMOUNT_ZONE_DESC' , 'Se si sceglie una zona solo questa zona di spedizione utilizzata.');
define('MODULE_SHIPPING_FREEAMOUNT_NUMBER_ZONES_TITLE' , 'Numero di zone');
define('MODULE_SHIPPING_FREEAMOUNT_NUMBER_ZONES_DESC' , 'Numero di zone da utilizzare');
define('MODULE_SHIPPING_FREEAMOUNT_DISPLAY_TITLE' , 'attivare indicazioni');
define('MODULE_SHIPPING_FREEAMOUNT_DISPLAY_DESC' , 'desidera mostrare l\'importo minimo che non permette la consegna VK gratuita?');
define('MODULE_SHIPPING_FREEAMOUNT_AMOUNT_TITLE' , 'importo minimo');
define('MODULE_SHIPPING_FREEAMOUNT_AMOUNT_DESC' , 'minimo valore ordinato, con il quale la spedizione &egrave; gratuita?');
define('MODULE_SHIPPING_FREEAMOUNT_SORT_ORDER_TITLE' , 'criterio ordinamento');
define('MODULE_SHIPPING_FREEAMOUNT_SORT_ORDER_DESC' , 'sequenza di visualizzazione');
if (defined('MODULE_SHIPPING_DP_NUMBER_ZONES')) {
  for ($module_shipping_freeamount_i = 1; $module_shipping_freeamount_i <= MODULE_SHIPPING_FREEAMOUNT_NUMBER_ZONES; $module_shipping_freeamount_i ++) {
    define('MODULE_SHIPPING_FREEAMOUNT_COUNTRIES_'.$module_shipping_freeamount_i.'_TITLE' , '<hr/>Zona '.$module_shipping_freeamount_i.' Paesi');
    define('MODULE_SHIPPING_FREEAMOUNT_COUNTRIES_'.$module_shipping_freeamount_i.'_DESC' , 'Elenco separato da virgole di due caratteri dei codici ISO dei paesi che fanno parte della zona '.$module_shipping_freeamount_i.' (Inserisci "WORLD" per il resto del mondo.).');
    define('MODULE_SHIPPING_FREEAMOUNT_AMOUNT_'.$module_shipping_freeamount_i.'_TITLE' , 'Zona '.$module_shipping_freeamount_i.' Costo minimo');
    define('MODULE_SHIPPING_FREEAMOUNT_AMOUNT_'.$module_shipping_freeamount_i.'_DESC' , 'Importo minimo dell\'ordine minimo acquistato per la zona  '.$module_shipping_freeamount_i.' prima della spedizione &egrave; gratuito.');
  }
}
?>