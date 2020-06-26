<?php
  define('MODULE_ORDER_TOTAL_COD_FEE_TITLE', 'Tassa per spedizione con contrassegno');
  define('MODULE_ORDER_TOTAL_COD_FEE_DESCRIPTION', 'Calcolo della tassa per spedizione con contrassegno');
  define('MODULE_ORDER_TOTAL_COD_FEE_STATUS_TITLE','Tassa per spedizione con contrassegno');
  define('MODULE_ORDER_TOTAL_COD_FEE_STATUS_DESC','Calcolo della tassa per spedizione con contrassegno');
  define('MODULE_ORDER_TOTAL_COD_FEE_SORT_ORDER_TITLE','criterio di ordinamento');
  define('MODULE_ORDER_TOTAL_COD_FEE_SORT_ORDER_DESC','sequenza di visualizzazione');
  define('MODULE_ORDER_TOTAL_COD_FEE_TAX_CLASS_TITLE','Fascia fiscale');
  define('MODULE_ORDER_TOTAL_COD_FEE_TAX_CLASS_DESC','selezioni una fascia fiscale.');
  function define_shipping_titles_cod() {
    $module_keys = str_replace('.php','',MODULE_SHIPPING_INSTALLED);
    $installed_shipping_modules = explode(';',$module_keys);
    //support for ot_shipping
    $installed_shipping_modules[] = 'free';

    if (count($installed_shipping_modules) > 0) {
      foreach($installed_shipping_modules as $shipping_code) {
        $module_type = 'shipping';
        $file = $shipping_code.'.php';
        $shipping_code = strtoupper($shipping_code);
        $title = '';

        if (defined('DIR_FS_LANGUAGES') && file_exists(DIR_FS_LANGUAGES . 'english/modules/' . $module_type . '/' . $file)) {
            include_once(DIR_FS_LANGUAGES . 'english/modules/' . $module_type . '/' . $file);
            $title = constant('MODULE_SHIPPING_'.$shipping_code.'_TEXT_TITLE');
        }
        //support for ot_shipping
        $title = $shipping_code == 'FREE' ? 'Free Shipping (order total modul ot_shipping)' : $title;
        
        $shipping_code = ($shipping_code == 'FREEAMOUNT') ? 'FREEAMOUNT_FREE' : 'FEE_' . $shipping_code;

        define('MODULE_ORDER_TOTAL_COD_'.$shipping_code.'_TITLE',$title);
        define('MODULE_ORDER_TOTAL_COD_'.$shipping_code.'_DESC','&lt;ISO2-Code&gt;:&lt;Prezzo&gt;, ....<br />
  00 come codice ISO2 rende possibile la spedizione  con contrassegno in tutti i paesi. quando 
  viene utilizzato 00, questo deve essere registrato come ultimo argomento. quando non &egrave; inserito nessun 
  00:9.99, non viene messa in conto la spedizione con contrassegno all\'estero 
  (non possibile). Per escludere un solo paese, non inserire i costi per questo paese.
        Esempio: DE:4.00,CH:,00:9.99<br />-> Spiegazione: Spedizione in DE: 4&euro; / Spedizione a CH: non possibile
        / Spedizione nel resto del mondo: 9,99&euro;');
      }
    }
  }
  define_shipping_titles_cod();
?>