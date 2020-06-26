<?php
define('MODULE_SHIPPING_ITEM_TEXT_TITLE', 'Spese di spedizione per pezzo');
define('MODULE_SHIPPING_ITEM_TEXT_DESCRIPTION', 'Spese di spedizione per pezzo');
define('MODULE_SHIPPING_ITEM_TEXT_WAY', 'miglior percorso');
define('MODULE_SHIPPING_ITEM_INVALID_ZONE', 'Purtroppo non &egrave; possibile spedire in questo paese');
define('MODULE_SHIPPING_ITEM_STATUS_TITLE' , 'attivare spese di spedizione per pezzo');
define('MODULE_SHIPPING_ITEM_STATUS_DESC' , 'desidera offrire spese di spedizione per pezzo?');
define('MODULE_SHIPPING_ITEM_ALLOWED_TITLE' , 'zone di spedizione permesse');
define('MODULE_SHIPPING_ITEM_ALLOWED_DESC' , 'inserisca le <b> singole</b> zone, nelle quali sar&agrave; possibile effettuare la spedizione. (es. AT,DE (se desidera che ttte le zone siano permesse lasci vuoto il campo))');
define('MODULE_SHIPPING_ITEM_TAX_CLASS_TITLE' , 'fascia fiscale');
define('MODULE_SHIPPING_ITEM_TAX_CLASS_DESC' , 'applicare la seguente fascia fiscale alle spese di spedizione');
define('MODULE_SHIPPING_ITEM_ZONE_TITLE' , 'zone spedizione');
define('MODULE_SHIPPING_ITEM_ZONE_DESC' , 'Se &egrave; stata selezionata una zona, questo metodo di spedizione sar&agrave; utilizzato esclusivamente per questa zona di spedizione');
define('MODULE_SHIPPING_ITEM_SORT_ORDER_TITLE' , 'criterio ordinamento');
define('MODULE_SHIPPING_ITEM_SORT_ORDER_DESC' , 'sequenza di visualizzazione');
define('MODULE_SHIPPING_ITEM_COST_TITLE' , 'spese di spedizione');
define('MODULE_SHIPPING_ITEM_COST_DESC' , 'se &egrave; stato scelto questo tipo di spedizione, i costi di spedizione saranno moltiplicati in base alla quantit&agrave; di merce ordinata.');
define('MODULE_SHIPPING_ITEM_HANDLING_TITLE' , 'applicazione tariffa');
define('MODULE_SHIPPING_ITEM_HANDLING_DESC' , 'applicazione tariffa per questo tipo di spedizione.');
define('MODULE_SHIPPING_ITEM_NUMBER_ZONES_TITLE' , 'Numero di zone');
define('MODULE_SHIPPING_ITEM_NUMBER_ZONES_DESC' , 'Numero di zone da utilizzare');
define('MODULE_SHIPPING_ITEM_DISPLAY_TITLE' , 'Abilita visualizzazione');
define('MODULE_SHIPPING_ITEM_DISPLAY_DESC' , 'Vuoi visualizzare, se la spedizione a destinazione non &egrave; possibile o se non &egrave; possibile calcolare i costi di spedizione?');
if (defined('MODULE_SHIPPING_ITEM_NUMBER_ZONES')) {
  for ($module_shipping_item_i = 1; $module_shipping_item_i <= MODULE_SHIPPING_ITEM_NUMBER_ZONES; $module_shipping_item_i ++) {
    define('MODULE_SHIPPING_ITEM_COUNTRIES_'.$module_shipping_item_i.'_TITLE' , '<hr/>Zona '.$module_shipping_item_i.' Paesi');
    define('MODULE_SHIPPING_ITEM_COUNTRIES_'.$module_shipping_item_i.'_DESC' , 'Elenco separato da virgole di due caratteri dei codici ISO dei paesi che fanno parte della zona '.$module_shipping_item_i.' (Inserisci WORLD per il resto del mondo.).');
    define('MODULE_SHIPPING_ITEM_COST_'.$module_shipping_item_i.'_TITLE' , 'Zona '.$module_shipping_item_i.' Tabella di spedizione');
    define('MODULE_SHIPPING_ITEM_COST_'.$module_shipping_item_i.'_DESC' , 'Le tariffe di spedizione alla zona '.$module_shipping_item_i.' saranno moltiplicate per il numero di articoli in un ordine che utilizza questo metodo di spedizione.');
    define('MODULE_SHIPPING_ITEM_HANDLING_'.$module_shipping_item_i.'_TITLE' , 'Zona '.$module_shipping_item_i.' Tassa di movimentazione');
    define('MODULE_SHIPPING_ITEM_HANDLING_'.$module_shipping_item_i.'_DESC' , 'Tassa di movimentazione per questa zona di spedizione');
  }
}
?>