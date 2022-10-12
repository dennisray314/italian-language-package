<?php
/*
 * Released under the GNU General Public License
 *
 * @author Andre Estel - www.estelco.de
 * @author Timo Paul <mail@timopaul.biz>
 */

$NUM_OF_ZONES = 128;

define('MODULE_SHIPPING_TOLLZIPZONES_TEXT_TITLE', 'Freight delivery');
define('MODULE_SHIPPING_TOLLZIPZONES_TEXT_DESCRIPTION', 'Freight delivery to');
define('MODULE_SHIPPING_TOLLZIPZONES_ALLOWED_TITLE', 'Permitted shipping zones');
define('MODULE_SHIPPING_TOLLZIPZONES_ALLOWED_DESC', 'Please enter the zones <b>separately</b> which should be allowed to use this module (e.g. AT,DE (leave empty if you want to allow all zones)');
define('MODULE_SHIPPING_TOLLZIPZONES_STATUS_TITLE', 'Enable freight delivery:');
define('MODULE_SHIPPING_TOLLZIPZONES_STATUS_DESC', 'Do you want to enable freight delivery?');
define('MODULE_SHIPPING_TOLLZIPZONES_HANDLING_TITLE', 'in fee');
define('MODULE_SHIPPING_TOLLZIPZONES_HANDLING_DESC', 'What should be the basic price?');
define('MODULE_SHIPPING_TOLLZIPZONES_TEXT_UNITS', 'kg');
define('MODULE_SHIPPING_TOLLZIPZONES_LOW_ORDER_TOTAL', 'Freight delivery minimum order value: ');
define('MODULE_SHIPPING_TOLLZIPZONES_SORT_ORDER_TITLE', 'Sort Order');
define('MODULE_SHIPPING_TOLLZIPZONES_SORT_ORDER_DESC', 'Order of display');
define('MODULE_SHIPPING_TOLLZIPZONES_TAX_CLASS_TITLE' , 'rate of taxation');
define('MODULE_SHIPPING_TOLLZIPZONES_TAX_CLASS_DESC' , 'Select the VAT rate for this dispatch from.');
define('MODULE_SHIPPING_TOLLZIPZONES_CALCULATION_TITLE', 'Basis of calculation');
define('MODULE_SHIPPING_TOLLZIPZONES_CALCULATION_DESC', 'Basis for calculation of shipping costs');
for ($area = 0; $area < $NUM_OF_ZONES; $area++) {
  define('MODULE_SHIPPING_TOLLZIPZONES_ZONE_' . $area . '_COUNTRY_TITLE', 'Country area for ' . ($area + 1));
  define('MODULE_SHIPPING_TOLLZIPZONES_ZONE_' . $area . '_COUNTRY_DESC', 'ISO-Code, e.g. DE, CH or AT');
  define('MODULE_SHIPPING_TOLLZIPZONES_ZONE_' . $area . '_CODES_TITLE', 'Zip codes for the area ' . ($area + 1));
  define('MODULE_SHIPPING_TOLLZIPZONES_ZONE_' . $area . '_CODES_DESC', 'Areas can be defined with individual postal codes or ranges. e.g. "00000-10000,10010,10020". But even with wildcards, e.g. "010*" for all postal codes from 01000-01099. Combinations are also possible');
  define('MODULE_SHIPPING_TOLLZIPZONES_ZONE_' . $area . '_MIN_AMOUNT_TITLE', 'Minimum value for range ' . ($area + 1));
  define('MODULE_SHIPPING_TOLLZIPZONES_ZONE_' . $area . '_MIN_AMOUNT_DESC', 'From this value, this payment method will be displayed in this area');
  define('MODULE_SHIPPING_TOLLZIPZONES_ZONE_' . $area . '_RATE_TITLE', 'Shipping costs range ' . ($area + 1));
  define('MODULE_SHIPPING_TOLLZIPZONES_ZONE_' . $area . '_RATE_DESC', 'The shipping cost is based on the following calculation basis:<br />example: 25:5.50,50:8.50,etc.. to 25 will 5.50 charged, dar&uuml;ber to 50 will 8.50 charged, etc');
}
