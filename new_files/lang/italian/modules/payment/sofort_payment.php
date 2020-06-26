<?php
defined('MODULE_PAYMENT_'.$sofort_code.'_TEXT_TITLE') OR define('MODULE_PAYMENT_'.$sofort_code.'_TEXT_TITLE', 'Online Bank Transfer.');
defined('MODULE_PAYMENT_'.$sofort_code.'_TEXT_DESCRIPTION') OR define('MODULE_PAYMENT_'.$sofort_code.'_TEXT_DESCRIPTION', 'Il bonifico bancario online. &Egrave; il metodo di pagamento gratuito certificato T&Uuml;V di SOFORT AG.');
defined('MODULE_PAYMENT_'.$sofort_code.'_TEXT_INFO') OR define('MODULE_PAYMENT_'.$sofort_code.'_TEXT_INFO', 'Potete pagare con il sistema bancario online certificato T&Uuml;V Online Bank Transfer. di SOFORT AG.');
// checkout
defined('MODULE_PAYMENT_'.$sofort_code.'_TEXT_DESCRIPTION_CHECKOUT_PAYMENT_IMAGE') OR define('MODULE_PAYMENT_'.$sofort_code.'_TEXT_DESCRIPTION_CHECKOUT_PAYMENT_IMAGE', '
  <table border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td valign="bottom">
	      <a onclick="javascript:window.open(\'https://images.sofort.com/en/su/landing.php\',\'Customerinformationen\',\'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1020, height=900\');" style="float:left; width:auto;">{{image}}</a>
	    </td>
	  </tr>
	  <tr>
	    <td class="main">{{text}}</td>
	  </tr>
	</table>');
defined('MODULE_PAYMENT_'.$sofort_code.'_TEXT_DESCRIPTION_CHECKOUT_PAYMENT_IMAGEALT') OR define('MODULE_PAYMENT_'.$sofort_code.'_TEXT_DESCRIPTION_CHECKOUT_PAYMENT_IMAGEALT', 'Bonifico bancario online.');
defined('MODULE_PAYMENT_'.$sofort_code.'_TEXT_DESCRIPTION_CHECKOUT_PAYMENT_TEXT') OR define('MODULE_PAYMENT_'.$sofort_code.'_TEXT_DESCRIPTION_CHECKOUT_PAYMENT_TEXT', '
  <ul>
    <li>Semplice e sicuro.</li>
  </ul>');
// admin
defined('MODULE_PAYMENT_'.$sofort_code.'_STATUS_TITLE') OR define('MODULE_PAYMENT_'.$sofort_code.'_STATUS_TITLE', 'Attivare il bonifico bancario online.');
defined('MODULE_PAYMENT_'.$sofort_code.'_STATUS_DESC') OR define('MODULE_PAYMENT_'.$sofort_code.'_STATUS_DESC', 'Attiva/disattiva il bonifico bancario online.');
define('MODULE_PAYMENT_'.$sofort_code.'_ALLOWED_TITLE', 'Zone consentite');
define('MODULE_PAYMENT_'.$sofort_code.'_ALLOWED_DESC', 'Si prega di inserire <b>einzeln</b> le zone, che dovrebbero essere consentite per questo modulo. (ad esempio consentire AT, DE (se vuote, tutte le zone))');
define('MODULE_PAYMENT_'.$sofort_code.'_TMP_ORDER_TITLE', 'Ordine temporaneo');
define('MODULE_PAYMENT_'.$sofort_code.'_TMP_ORDER_DESC', 'Volete creare un ordine temporaneo?');
define('MODULE_PAYMENT_'.$sofort_code.'_LOGGING_TITLE', 'attivare la registrazione');
define('MODULE_PAYMENT_'.$sofort_code.'_LOGGING_DESC', 'Attiva/disattiva la registrazione<br/>I file di log vengono salvati in /log');
define('MODULE_PAYMENT_'.$sofort_code.'_KEY_TITLE', 'Tasto di configurazione');
define('MODULE_PAYMENT_'.$sofort_code.'_KEY_DESC', 'La chiave di configurazione si trova in Bonifico bancario online.');
define('MODULE_PAYMENT_'.$sofort_code.'_SORT_ORDER_TITLE', 'Ordine di visualizzazione');
define('MODULE_PAYMENT_'.$sofort_code.'_SORT_ORDER_DESC', 'Ordine di visualizzazione. Il numero pi&ugrave; piccolo viene visualizzato per primo');
define('MODULE_PAYMENT_'.$sofort_code.'_ZONE_TITLE', 'Zona di pagamento');
define('MODULE_PAYMENT_'.$sofort_code.'_ZONE_DESC', 'Se viene selezionata una zona, il metodo di pagamento &egrave; valido solo per quella zona.');
define('MODULE_PAYMENT_'.$sofort_code.'_CURRENCY_TITLE', 'Valuta della transazione');
define('MODULE_PAYMENT_'.$sofort_code.'_CURRENCY_DESC', 'Ricezione della valuta Impostazione del bonifico bancario online.');
define('MODULE_PAYMENT_'.$sofort_code.'_ORDER_STATUS_ID_TITLE', 'Ordine confermato');
define('MODULE_PAYMENT_'.$sofort_code.'_ORDER_STATUS_ID_DESC', 'Lo stato dell\'ordine dopo il ricevimento di un ordine, &egrave; stato inviato in anticipo rispetto alla conferma di avvenuto pagamento');
define('MODULE_PAYMENT_'.$sofort_code.'_TMP_STATUS_ID_TITLE', 'Stato dell\'ordine temporaneo');
define('MODULE_PAYMENT_'.$sofort_code.'_TMP_STATUS_ID_DESC', 'Ordine per operazioni non ancora concluse');
define('MODULE_PAYMENT_'.$sofort_code.'_UNC_STATUS_ID_TITLE', 'Per controllare lo stato dell\'ordine');
define('MODULE_PAYMENT_'.$sofort_code.'_UNC_STATUS_ID_DESC', 'Stato dell\'ordine &egrave; stato ricevuto in una conferma di pagamento errata dopo il ricevimento di un ordine');
define('MODULE_PAYMENT_'.$sofort_code.'_REC_STATUS_ID_TITLE', 'Stato dell\'ordine dopo il pagamento');
define('MODULE_PAYMENT_'.$sofort_code.'_REC_STATUS_ID_DESC', 'Stato dell\'ordine dopo l\'accredito del denaro sul vostro conto.');
define('MODULE_PAYMENT_'.$sofort_code.'_REF_STATUS_ID_TITLE', 'Stato dell\'ordine dopo il chargeback');
define('MODULE_PAYMENT_'.$sofort_code.'_REF_STATUS_ID_DESC', 'Stato dell\'ordine dopo un chargeback.');
define('MODULE_PAYMENT_'.$sofort_code.'_LOSS_STATUS_ID_TITLE', 'Stato dell\'ordine se non &egrave; arrivato denaro');
define('MODULE_PAYMENT_'.$sofort_code.'_LOSS_STATUS_ID_DESC', 'Stato dell\'ordine se non viene accreditato denaro sul vostro conto.');
define('MODULE_PAYMENT_'.$sofort_code.'_REASON_1_TITLE', 'Utilizzo Linea 1');
define('MODULE_PAYMENT_'.$sofort_code.'_REASON_1_DESC', 'Se non viene creato un ordine temporaneo, il numero d\'ordine non &egrave; disponibile. Pertanto, deve essere inserito su -TRANSAZIONE-');
define('MODULE_PAYMENT_'.$sofort_code.'_REASON_2_TITLE', 'Utilizzo Linea 2');
define('MODULE_PAYMENT_'.$sofort_code.'_REASON_2_DESC', 'In uso (massimo 27 caratteri) da sostituire i seguenti segnaposto:<br /> {{order_id}}<br />{{order_date}}<br />{{customer_id}}<br />{{customer_name}}<br />{{customer_company}}<br />{{customer_email}}');
define('MODULE_PAYMENT_'.$sofort_code.'_IMAGE_TITLE', 'Grafico di pagamento / Testo');
define('MODULE_PAYMENT_'.$sofort_code.'_IMAGE_DESC', 'Grafico / Testo sul pagamento alla cassa');
define('MODULE_PAYMENT_'.$sofort_code.'_KS_STATUS_TITLE', 'Protezione del cliente attivata');
define('MODULE_PAYMENT_'.$sofort_code.'_KS_STATUS_DESC', 'Attivare la protezione del cliente per il bonifico bancario online.');
define('MODULE_PAYMENT_'.$sofort_code.'_USER_ID_TITLE', 'Numero cliente');
define('MODULE_PAYMENT_'.$sofort_code.'_USER_ID_DESC', 'Numero cliente su Bonifico bancario online.');
define('MODULE_PAYMENT_'.$sofort_code.'_PROJECT_ID_TITLE', 'Progetto Nummer');
define('MODULE_PAYMENT_'.$sofort_code.'_PROJECT_ID_DESC', 'Il numero del progetto responsabile nella navigazione immediata utilizzare Bonifico bancario online. al pagamento appartiene');
define('MODULE_PAYMENT_'.$sofort_code.'_PROJECT_PASS_TITLE', 'Password del progetto');
define('MODULE_PAYMENT_'.$sofort_code.'_PROJECT_PASS_DESC', 'Trovate questo in Impostazioni su Bonifico bancario online.');
define('MODULE_PAYMENT_'.$sofort_code.'_NOTIFY_PASS_TITLE', 'Notifica Password');
define('MODULE_PAYMENT_'.$sofort_code.'_NOTIFY_PASS_DESC', 'Trovate questo sotto Impostazioni su Bonifico bancario online.');
define('MODULE_PAYMENT_'.$sofort_code.'_HASH_ALGORITHM_TITLE', 'Hash-Algorithmus:');
define('MODULE_PAYMENT_'.$sofort_code.'_HASH_ALGORITHM_DESC', 'Trovate questo sotto Impostazioni su Bonifico bancario online.');
define('MODULE_PAYMENT_'.$sofort_code.'_DESCRIPTION_INSTALL', '<br/><br/>Vuoi installare lo stato dell\'ordine corretto?<br/>Gli stati attualmente impostati sono sovrascritti.');
// status
defined('TEXT_NO_STATUSUPDATE') OR define('TEXT_NO_STATUSUPDATE', 'Durante il processo &egrave; stato segnalato il seguente errore');
// error
define('MODULE_PAYMENT_'.$sofort_code.'_TEXT_ERROR_HEADING', 'Durante il processo &egrave; stato segnalato il seguente errore:');
define('MODULE_PAYMENT_'.$sofort_code.'_TEXT_ERROR_MESSAGE', 'Il pagamento purtroppo non &egrave; possibile o &egrave; stato annullato dal cliente. Si prega di selezionare un altro metodo di pagamento.');
// callback
defined('TEXT_SOFORT_NOT_CREDITED_YET') OR define('TEXT_SOFORT_NOT_CREDITED_YET', 'Bonifico bancario online completato con successo.');
defined('TEXT_SOFORT_NOT_CREDITED') OR define('TEXT_SOFORT_NOT_CREDITED', 'Non ha ricevuto denaro in conto');
defined('TEXT_SOFORT_LOSS') OR define('TEXT_SOFORT_LOSS', 'verificare l\'ordine');
defined('TEXT_SOFORT_RECEIVED') OR define('TEXT_SOFORT_RECEIVED', 'Ricevuto denaro in conto');
defined('TEXT_SOFORT_CREDITED') OR define('TEXT_SOFORT_CREDITED', TEXT_SOFORT_RECEIVED);
defined('TEXT_SOFORT_REFUNDED') OR define('TEXT_SOFORT_REFUNDED', 'Il denaro &egrave; stato rimborsato per intero');
defined('TEXT_SOFORT_CANCELED') OR define('TEXT_SOFORT_CANCELED', 'Bonifico bancario online. annullato');
defined('TEXT_SOFORT_WAIT_FOR_MONEY') OR define('TEXT_SOFORT_WAIT_FOR_MONEY', 'In attesa di pagamento');
defined('TEXT_SOFORT_CONFIRMATION_PERIOD_EXPIRED') OR define('TEXT_SOFORT_CONFIRMATION_PERIOD_EXPIRED', 'Bonifico bancario online. Timeout');
defined('TEXT_SOFORT_REJECTED') OR define('TEXT_SOFORT_REJECTED', 'Bonifico bancario online. rifiutato');
defined('TEXT_SOFORT_SOFORT_BANK_ACCOUNT_NEEDED') OR define('TEXT_SOFORT_SOFORT_BANK_ACCOUNT_NEEDED', TEXT_SOFORT_NOT_CREDITED_YET);
define('MODULE_PAYMENT_'.$sofort_code.'_ERROR_TRANSACTION', "Errore durante la notifica HTTP\nControllare la transazione e la notifica\nTransaction-ID: %s");
define('MODULE_PAYMENT_'.$sofort_code.'_ERROR_PAYMENT', "Denaro NON ancora ricevuto\nTransaction-ID: %s");
define('MODULE_PAYMENT_'.$sofort_code.'_ERROR_UNEXPECTED_STATUS', "Errore (SU204): Stato inatteso\nTransaction-ID: %s");
define('MODULE_PAYMENT_'.$sofort_code.'_SUCCESS_TRANSACTION', "Pagamento avvenuto con successo\nTransaction-ID: %s");
define('MODULE_PAYMENT_'.$sofort_code.'_SUCCESS_PAYMENT', "Denaro ricevuto\nTransaction-ID: %s");
// order status
$SOFORT_INST_ORDER_STATUS_TMP_NAME = 'Temp';
$SOFORT_INST_ORDER_STATUS_UNC_NAME = 'In attesa di';
$SOFORT_INST_ORDER_STATUS_LOSS_NAME = 'In attesa di';
$SOFORT_INST_ORDER_STATUS_REC_NAME = 'Pagamento ricevuto';
$SOFORT_INST_ORDER_STATUS_REF_NAME = 'Rimborsato';
$SOFORT_INST_ORDER_STATUS_ORDER_NAME = 'Pagamento';
?>