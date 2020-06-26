<?php
/**
 *
 * @package    micropayment
 * @copyright  Copyright (c) 2015 Micropayment GmbH (http://www.micropayment.de)
 * @author     micropayment GmbH <shop-plugins@micropayment.de>
 */
require_once('mcp_service.php');
define('MODULE_PAYMENT_MCP_EBANK2PAY_TEXT_DESCRIPTION', 'micropayment&trade; modulo di bonifico bancario online
<br /><br />
link<br />
<b>strumenti</b><br />
<a target="_new" href="../callback/micropayment/cleanup.php">
    <input type="button" value="Ordini chiari e vecchi">
</a><br />
<br />
<b>Esterno</b><br />
<a href="http://ecommerce.micropayment.de/download/modified/micropayment_modified-shop_2.x.pdf?version=2.1.0">
    <input type="button" value="Manuale">
</a>&nbsp;
<a target="_new" href="https://r120.micropayment.de">
    <input type="button" value="Registro dei micropagamenti">
    </a>
');
define('MODULE_PAYMENT_MCP_EBANK2PAY_TEXT_TITLE', 'micropagamento&trade; bonifico bancario online');
define('MODULE_PAYMENT_MCP_EBANK2PAY_TEXT_TITLE_EXTERN', 'Bonifico bancario online');
define('MODULE_PAYMENT_MCP_EBANK2PAY_TEXT_INFO', '
<div style="margin:10px;">
<div style="float:right;"><img src="./images/micropayment/logo_small.png" width="150"/></div><div style="float:left;">
<b>Tenete a portata di mano i vostri dati bancari online.</b><br />
Per concludere il vostro ordine, sarete ora inoltrati al nostro fornitore di servizi di pagamento, micropayment&trade; in collaborazione con sofort.com.<br /><br />
&#10004; sicuro &nbsp; &#10004; semplice &nbsp; &#10004; non &egrave; necessaria la registrazione
</div>
');
define('MODULE_PAYMENT_MCP_EBANK2PAY_STATUS_TITLE','Bonifico bancario online');
define('MODULE_PAYMENT_MCP_EBANK2PAY_STATUS_DESC','Modulo di bonifico bancario online tramite micropagamento&trade;');
define('MODULE_PAYMENT_MCP_EBANK2PAY_MINIMUM_AMOUNT_TITLE','Importo minimo');
define('MODULE_PAYMENT_MCP_EBANK2PAY_MINIMUM_AMOUNT_DESC','Importo minimo per questo metodo di pagamento');
define('MODULE_PAYMENT_MCP_EBANK2PAY_MAXIMUM_AMOUNT_TITLE','Importo massimo');
define('MODULE_PAYMENT_MCP_EBANK2PAY_MAXIMUM_AMOUNT_DESC','Importo massimo per questo metodo di pagamento');
define('MODULE_PAYMENT_MCP_EBANK2PAY_SORT_ORDER_TITLE','Posizionamento');
define('MODULE_PAYMENT_MCP_EBANK2PAY_SORT_ORDER_DESC','Posizionamento nella selezione del metodo di pagamento');
define('MODULE_PAYMENT_MCP_EBANK2PAY_ALLOWED_TITLE','Selezione del paese');
define('MODULE_PAYMENT_MCP_EBANK2PAY_ALLOWED_DESC','Consentire ordini solo da questi paesi (elenco separato di virgole DE,IT)');
?>