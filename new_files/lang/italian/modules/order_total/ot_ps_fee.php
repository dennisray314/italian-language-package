<?php
  define('MODULE_ORDER_TOTAL_PS_FEE_TITLE', 'Personale');
  define('MODULE_ORDER_TOTAL_PS_FEE_DESCRIPTION', 'calcolo personale');
  define('MODULE_ORDER_TOTAL_PS_FEE_STATUS_TITLE','Personale');
  define('MODULE_ORDER_TOTAL_PS_FEE_STATUS_DESC','calcolo personale');
  define('MODULE_ORDER_TOTAL_PS_FEE_SORT_ORDER_TITLE','criterio di ordinamento');
  define('MODULE_ORDER_TOTAL_PS_FEE_SORT_ORDER_DESC','sequenza di visualizzazione');
  define('MODULE_ORDER_TOTAL_PS_FEE_TAX_CLASS_TITLE','Classe fiscale');
  define('MODULE_ORDER_TOTAL_PS_FEE_TAX_CLASS_DESC','Scegliere una classe fiscale.');
  function define_shipping_titles_ps() {
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
        $title = $shipping_code == 'FREE' ? 'Spedizione gratuita (ordinare il modulo totale di spedizione)' : $title;
        
        $shipping_code = ($shipping_code == 'FREEAMOUNT') ? 'FREEAMOUNT_FREE' : 'FEE_' . $shipping_code;

        define('MODULE_ORDER_TOTAL_PS_'.$shipping_code.'_TITLE',$title);
        define('MODULE_ORDER_TOTAL_PS_'.$shipping_code.'_DESC','&lt;ISO2-Code&gt;:&lt;Preis&gt;, ....<br />
        00 come ISO2-Code permette la spedizione PS in tutti i paesi. Se
        00 &egrave; usato bisogna inserirlo come ultimo argomento. Se
        no 00:9.99 &egrave; inserito il PS spedizione in paesi stranieri non sar&agrave; calcolato
        (non &egrave; possibile). Per escludere un solo paese, non inserire i costi per questo paese.
        Esempio: DE:4.00,CH:,00:9.99<br />-> Spiegazione: Spedizione in DE: 4&euro; / Spedizione in CH: non possibile
        / Spedizione nel resto del mondo: 9,99&euro;');
      }
    }
  }
  define_shipping_titles_ps();
?>