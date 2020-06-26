<?php
define('MODULE_EXCLUDE_PAYMENT_TEXT_TITLE', 'Metodi di pagamento a seconda del metodo di spedizione');
define('MODULE_EXCLUDE_PAYMENT_TEXT_DESCRIPTION', '');
define('MODULE_EXCLUDE_PAYMENT_STATUS_TITLE' , 'Stato');
define('MODULE_EXCLUDE_PAYMENT_STATUS_DESC' , 'Attivare il modulo?');
define('MODULE_EXCLUDE_PAYMENT_NUMBER_TITLE' , 'Numero di metodi di spedizione');
define('MODULE_EXCLUDE_PAYMENT_NUMBER_DESC' , 'Numero di opzioni di consegna da configurare.');
if (defined('MODULE_EXCLUDE_PAYMENT_NUMBER')) {
	for ($module_exclude_payment_i = 1; $module_exclude_payment_i <= (int)MODULE_EXCLUDE_PAYMENT_NUMBER; $module_exclude_payment_i ++) {
	  define('MODULE_EXCLUDE_PAYMENT_SHIPPING_'.$module_exclude_payment_i.'_TITLE' , '<hr noshade>'.$module_exclude_payment_i.'. metodo di spedizione');
	  define('MODULE_EXCLUDE_PAYMENT_SHIPPING_'.$module_exclude_payment_i.'_DESC' , 'Selezionare il metodo di consegna in cui si desidera escludere un metodo di pagamento.');
	  define('MODULE_EXCLUDE_PAYMENT_PAYMENT_'.$module_exclude_payment_i.'_TITLE' , $module_exclude_payment_i.'. escluso metodo di pagamento');
	  define('MODULE_EXCLUDE_PAYMENT_PAYMENT_'.$module_exclude_payment_i.'_DESC' , 'Selezionare il metodo di pagamento che si desidera escludere.');
	}
}
?>