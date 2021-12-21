<?php
define('MODULE_SHIPPING_TABLE_TEXT_TITLE', 'Tabella delle spese di spedizione');
define('MODULE_SHIPPING_TABLE_TEXT_DESCRIPTION', 'Tabella spese di spedizione');
define('MODULE_SHIPPING_TABLE_TEXT_WAY', 'miglior percorso');
define('MODULE_SHIPPING_TABLE_TEXT_UNITS', 'kg');
define('MODULE_SHIPPING_TABLE_TEXT_WEIGHT', 'peso');
define('MODULE_SHIPPING_TABLE_TEXT_AMOUNT', 'quantit&agrave;');
define('MODULE_SHIPPING_TABLE_INVALID_ZONE', 'Nessuna spedizione disponibile per il paese selezionato!');
define('MODULE_SHIPPING_TABLE_UNDEFINED_RATE', 'La tariffa di spedizione non pu&ograve; essere determinata in questo momento.');
define('MODULE_SHIPPING_TABLE_STATUS_TITLE' , 'Attivare la tabella delle spese di spedizione');
define('MODULE_SHIPPING_TABLE_STATUS_DESC' , 'Desidera offrire la tabella delle spese di spedizione?');
define('MODULE_SHIPPING_TABLE_ALLOWED_TITLE' , 'Zone di spedizione permesse');
define('MODULE_SHIPPING_TABLE_ALLOWED_DESC' , 'inserisca le  <b>singole</b> zone, nelle quali &egrave; possibile effettuare la spedizione. (es. AT,DE (se &egrave; interessato a tutte le zone lasci libero questo campo))');
define('MODULE_SHIPPING_TABLE_MODE_TITLE' , 'Metodo spese di spedizione');
define('MODULE_SHIPPING_TABLE_MODE_DESC' , 'Le spese di spedizione si basano sul totale delle spese oppure sul totale del peso delle merce ordinata.');
define('MODULE_SHIPPING_TABLE_TAX_CLASS_TITLE' , 'fascia fiscale');
define('MODULE_SHIPPING_TABLE_TAX_CLASS_DESC' , 'applicare la seguente fascia fiscale per le spese di spedizone');
define('MODULE_SHIPPING_TABLE_ZONE_TITLE' , 'zona spedizione');
define('MODULE_SHIPPING_TABLE_ZONE_DESC' , 'Se viene selezionata una Zona questo metodo di spedizione sar&agrave; usata esclusivamente per questa zona');
define('MODULE_SHIPPING_TABLE_SORT_ORDER_TITLE' , 'criterio di ordinamento');
define('MODULE_SHIPPING_TABLE_SORT_ORDER_DESC' , 'sequenza di visualizzazione');
define('MODULE_SHIPPING_TABLE_NUMBER_ZONES_TITLE' , 'Numero di zone');
define('MODULE_SHIPPING_TABLE_NUMBER_ZONES_DESC' , 'Numero di zone da utilizzare');
define('MODULE_SHIPPING_TABLE_DISPLAY_TITLE' , 'Abilita visualizzazione');
define('MODULE_SHIPPING_TABLE_DISPLAY_DESC' , 'Vuoi visualizzare, se la spedizione a destinazione non &egrave; possibile o se non &egrave; possibile calcolare i costi di spedizione?');
if (defined('MODULE_SHIPPING_TABLE_NUMBER_ZONES')) {
  for ($module_shipping_table_i = 1; $module_shipping_table_i <= MODULE_SHIPPING_TABLE_NUMBER_ZONES; $module_shipping_table_i ++) {
    define('MODULE_SHIPPING_TABLE_COUNTRIES_'.$module_shipping_table_i.'_TITLE' , '<hr/>Zona '.$module_shipping_table_i.' Paesi');
    define('MODULE_SHIPPING_TABLE_COUNTRIES_'.$module_shipping_table_i.'_DESC' , 'Elenco separato da virgole di due caratteri dei codici ISO dei paesi che fanno parte della zona '.$module_shipping_table_i.' (Inserisci WORLD per il resto del mondo.).');
    define('MODULE_SHIPPING_TABLE_COST_'.$module_shipping_table_i.'_TITLE' , 'Zona '.$module_shipping_table_i.' Tabella di spedizione');
    define('MODULE_SHIPPING_TABLE_COST_'.$module_shipping_table_i.'_DESC' , 'Tariffe di spedizione verso la zona '.$module_shipping_table_i.' destinazioni basate su un gruppo di pesi massimi dell\'ordine o sul totale dell\'ordine. Esempio: 3:8.50,7:10.50,... Pesi / Totale inferiore o uguale a 3 costerebbe 8,50 per Zona '.$module_shipping_table_i.' destinazioni.');
    define('MODULE_SHIPPING_TABLE_HANDLING_'.$module_shipping_table_i.'_TITLE' , 'Zona '.$module_shipping_table_i.' Tassa di movimentazione');
    define('MODULE_SHIPPING_TABLE_HANDLING_'.$module_shipping_table_i.'_DESC' , 'Tassa di movimentazione per questa zona di spedizione');
  }
}
define('MODULE_SHIPPING_TABLE_COST_TITLE' , 'Spese di spedizione');
define('MODULE_SHIPPING_TABLE_COST_DESC' , 'Le spese di spedizione si basano sul totale delle spese oppure sul totale del peso delle merce ordinata. Esempio: 25:5.50,50:8.50,etc.. fino 25 saranno calcolati 5.50, oltre fino a 50 saranno calcolati 8.50, etc');
define('MODULE_SHIPPING_TABLE_HANDLING_TITLE' , 'applicazione tariffa');
define('MODULE_SHIPPING_TABLE_HANDLING_DESC' , 'tariffa da applicare per questo metodo di spedizione');
?>