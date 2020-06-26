<?php
define('MODULE_SHIPPING_AP_TEXT_TITLE', 'Poste austriache AG');
define('MODULE_SHIPPING_AP_TEXT_DESCRIPTION', 'Österreichische Post AG - modulo spedizione mondiale');
define('MODULE_SHIPPING_AP_TEXT_WAY', 'Spedizione a');
define('MODULE_SHIPPING_AP_TEXT_UNITS', 'kg');
define('MODULE_SHIPPING_AP_INVALID_ZONE', 'Purtroppo non &egrave; possibile spedire in questo paese');
define('MODULE_SHIPPING_AP_UNDEFINED_RATE', 'Le spese di spedizione non possono essere calcolate per il momento');

define('MODULE_SHIPPING_AP_STATUS_TITLE' , 'Poste austriache AG');
define('MODULE_SHIPPING_AP_STATUS_DESC' , 'Volete offrire la spedizione della posta austriaca?');
define('MODULE_SHIPPING_AP_ALLOWED_TITLE' , 'Zone consentite');
define('MODULE_SHIPPING_AP_ALLOWED_DESC' , 'Si prega di inserire le zone <b>separatamente</b> che dovrebbero essere autorizzate ad utilizzare questo modulo (ad es. AT,DE (lasciare vuote se si desidera consentire tutte le zone))');
define('MODULE_SHIPPING_AP_TAX_CLASS_TITLE' , 'Classe fiscale');
define('MODULE_SHIPPING_AP_TAX_CLASS_DESC' , 'Utilizzare la seguente classe fiscale sulla tassa di spedizione.');
define('MODULE_SHIPPING_AP_ZONE_TITLE' , 'Zona di spedizione');
define('MODULE_SHIPPING_AP_ZONE_DESC' , 'Se viene selezionata una zona, abilitare questo metodo di spedizione solo per quella zona.');
define('MODULE_SHIPPING_AP_SORT_ORDER_TITLE' , 'Ordine di ordinamento');
define('MODULE_SHIPPING_AP_SORT_ORDER_DESC' , 'Ordina l\'ordine di visualizzazione.');
define('MODULE_SHIPPING_AP_NUMBER_ZONES_TITLE' , 'Numero di zone');
define('MODULE_SHIPPING_AP_NUMBER_ZONES_DESC' , 'Numero di zone da utilizzare');
define('MODULE_SHIPPING_AP_DISPLAY_TITLE' , 'Abilita visualizzazione');
define('MODULE_SHIPPING_AP_DISPLAY_DESC' , 'Vuoi visualizzare, se la spedizione a destinazione non &egrave; possibile o se non &egrave; possibile calcolare i costi di spedizione?');
define('MODULE_SHIPPING_AP_NUMBER_ZONES_TITLE' , 'Numero di zone');
define('MODULE_SHIPPING_AP_NUMBER_ZONES_DESC' , 'Numero di zone da utilizzare');
define('MODULE_SHIPPING_AP_DISPLAY_TITLE' , 'Abilita visualizzazione');
define('MODULE_SHIPPING_AP_DISPLAY_DESC' , 'Vuoi visualizzare, se la spedizione a destinazione non &egrave; possibile o se non &egrave; possibile calcolare i costi di spedizione?');
if (defined('MODULE_SHIPPING_AP_NUMBER_ZONES')) {
  for ($module_shipping_ap_i = 1; $module_shipping_ap_i <= MODULE_SHIPPING_AP_NUMBER_ZONES; $module_shipping_ap_i ++) {
    define('MODULE_SHIPPING_AP_COUNTRIES_'.$module_shipping_ap_i.'_TITLE' , '<hr/>Zona '.$module_shipping_ap_i.' Paesi');
    define('MODULE_SHIPPING_AP_COUNTRIES_'.$module_shipping_ap_i.'_DESC' , 'Elenco separato da virgole di due caratteri dei codici ISO dei paesi che fanno parte della zona '.$module_shipping_ap_i.' (Inserire WORLD per il resto del mondo)');
    define('MODULE_SHIPPING_AP_COST_'.$module_shipping_ap_i.'_TITLE' , 'Zona '.$module_shipping_ap_i.' Tabella di spedizione');
    define('MODULE_SHIPPING_AP_COST_'.$module_shipping_ap_i.'_DESC' , 'Le tariffe di spedizione per la zona  '.$module_shipping_ap_i.' saranno moltiplicate per il numero di articoli in un ordine che utilizza questo metodo di spedizione.');
    define('MODULE_SHIPPING_AP_HANDLING_'.$module_shipping_ap_i.'_TITLE' , 'Zona '.$module_shipping_ap_i.' Tassa di movimentazione');
    define('MODULE_SHIPPING_AP_HANDLING_'.$module_shipping_ap_i.'_DESC' , 'Tassa di movimentazione per questa zona di spedizione');
  }
}
?>