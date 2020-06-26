<?php
define('MODULE_SHIPPING_DP_TEXT_TITLE', 'Deutsche Post');
define('MODULE_SHIPPING_DP_TEXT_DESCRIPTION', 'Deutsche Post - Modulo di spedizione in tutto il mondo');
define('MODULE_SHIPPING_DP_TEXT_WAY', 'Spedizione in');
define('MODULE_SHIPPING_DP_TEXT_UNITS', 'kg');
define('MODULE_SHIPPING_DP_INVALID_ZONE', 'In questo Paese non &egrave; possibile effettuare spedizioni');
define('MODULE_SHIPPING_DP_UNDEFINED_RATE', 'In qusto momento non &egrave; possibile calcolare le spese di spedizione');
define('MODULE_SHIPPING_DP_STATUS_TITLE' , 'Deutsche Post WorldNet');
define('MODULE_SHIPPING_DP_STATUS_DESC' , 'Desidera offrire la spedizione tramite la Deutsche Post?');
define('MODULE_SHIPPING_DP_HANDLING_TITLE' , 'Handling Fee');
define('MODULE_SHIPPING_DP_HANDLING_DESC' , 'calcola tariffa in Euro per questo tipo di spedizione');
define('MODULE_SHIPPING_DP_TAX_CLASS_TITLE' , 'Aliquota imposta');
define('MODULE_SHIPPING_DP_TAX_CLASS_DESC' , 'scelga il tasso IVA per questo tipo di spedizione.');
define('MODULE_SHIPPING_DP_ZONE_TITLE' , 'Zone spedizioni');
define('MODULE_SHIPPING_DP_ZONE_DESC' , 'Se seleziona una zona, questo tipo di spedizione sar&agrave; offerto solo per questa zona.');
define('MODULE_SHIPPING_DP_SORT_ORDER_TITLE' , 'Sequenza di visualizzazione');
define('MODULE_SHIPPING_DP_SORT_ORDER_DESC' , 'Il pi&ugrave; basso sar&agrave; mostrato per primo.');
define('MODULE_SHIPPING_DP_ALLOWED_TITLE' , 'Singole zone di spedizione');
define('MODULE_SHIPPING_DP_ALLOWED_DESC' , 'inserisca le <b>singole</b> zone, nelle quali sar&agrave; possibile effettuare la spedizione. es. AT,DE');
define('MODULE_SHIPPING_DP_NUMBER_ZONES_TITLE' , 'Numero di zone');
define('MODULE_SHIPPING_DP_NUMBER_ZONES_DESC' , 'Numero di zone da utilizzare');
define('MODULE_SHIPPING_DP_DISPLAY_TITLE' , 'Abilita visualizzazione');
define('MODULE_SHIPPING_DP_DISPLAY_DESC' , 'Vuoi visualizzare, se la spedizione a destinazione non &egrave; possibile o se non &egrave; possibile calcolare i costi di spedizione?');
if (defined('MODULE_SHIPPING_FREEAMOUNT_NUMBER_ZONES')) {
  for ($module_shipping_dp_i = 1; $module_shipping_dp_i <= MODULE_SHIPPING_DP_NUMBER_ZONES; $module_shipping_dp_i ++) {
    define('MODULE_SHIPPING_DP_COUNTRIES_'.$module_shipping_dp_i.'_TITLE' , '<hr/>DP Zona '.$module_shipping_dp_i.' Paesi');
    define('MODULE_SHIPPING_DP_COUNTRIES_'.$module_shipping_dp_i.'_DESC' , 'Elenco separato da virgole di due caratteri dei codici ISO dei paesi che fanno parte della zona '.$module_shipping_dp_i. '(Inserire "WORLD" per il resto del mondo).');
    define('MODULE_SHIPPING_DP_COST_'.$module_shipping_dp_i.'_TITLE' , 'DP Zone '.$module_shipping_dp_i.' Shipping Table');
    define('MODULE_SHIPPING_DP_COST_'.$module_shipping_dp_i.'_DESC' , 'Tariffe di spedizione verso le destinazioni della zona '.$module_shipping_dp_i.' in base a una serie di pesi dell\'ordine. Esempio: 0-3:8.50,3-7:10.50... Pesi superiori a 0 e inferiori o uguali a 3 costerebbero 32,98 per le destinazioni della zona '.$module_shipping_dp_i.'.');
  }
}
?>