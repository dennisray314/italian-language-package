<?php
$sofort_code = 'SOFORT_IDEAL';

define('MODULE_PAYMENT_'.$sofort_code.'_TEXT_TITLE', 'iDEAL');
define('MODULE_PAYMENT_'.$sofort_code.'_TEXT_DESCRIPTION', '<b>iDEAL</b><br />Appena il cliente avr&agrave; selezionato la modalit&agrave; di pagamento e la sua banca, verr&agrave; reindirizzato alla sua banca mediante Payment SOFORT AG. In seguito effettuer&agrave; il pagamento e verr&agrave; reindirizzato alla sua piattaforma. Se il pagamento &egrave; avvenuto con successo verr&agrave; avviato un callback al sistema del negozio online attraverso SOFORT AG, che modificher&agrave; di conseguenza lo stato di pagamento dell\'ordine.<br />Messo a disposizione da SOFORT AG');
define('MODULE_PAYMENT_'.$sofort_code.'_TEXT_INFO', 'iDEAL.nl - pagamenti online per l\'e-commerce nei Paesi Bassi. Per il pagamento tramite iDEAL &egrave; necessario un conto presso una delle banche elencate. Essi effettueranno il trasferimento direttamente alla vostra banca. I servizi / beni vengono consegnati o spediti quando disponibili IMMEDIATAMENTE!');
// checkout
define('MODULE_PAYMENT_'.$sofort_code.'_TEXT_DESCRIPTION_CHECKOUT_PAYMENT_IMAGE', '
  <table border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td valign="bottom">
        <a onclick="javascript:window.open(\'http://www.ideal.nl\',\'Information\',\'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1020, height=900\');" style="float:left; width:auto;">{{image}}</a>
      </td>
    </tr>
    <tr>
      <td class="main">{{text}}</td>
    </tr>
  </table>');
define('MODULE_PAYMENT_'.$sofort_code.'_TEXT_DESCRIPTION_CHECKOUT_PAYMENT_IMAGEALT', 'iDeal');
define('MODULE_PAYMENT_'.$sofort_code.'_TEXT_DESCRIPTION_CHECKOUT_PAYMENT_TEXT', '
  <ul>
    <li>pagamenti online per il commercio elettronico nei Paesi Bassi</li>
    <li>Per il pagamento tramite iDEAL &egrave; necessario un conto presso una delle banche elencate</li>
    <li>Effettueranno il bonifico direttamente alla vostra banca</li>
    <li>I servizi / beni sono consegnati o spediti quando disponibili IMMEDIATAMENTE</li>
  </ul>');
define('MODULE_PAYMENT_'.$sofort_code.'_SELECTBOX', 'Scegliete la vostra Banca');
// admin
define('MODULE_PAYMENT_'.$sofort_code.'_STATUS_TITLE', 'attivare iDeal Modul');
define('MODULE_PAYMENT_'.$sofort_code.'_STATUS_DESC', 'Attiva/disattiva iDeal');
include(DIR_FS_CATALOG.'lang/english/modules/payment/sofort_payment.php');
?>