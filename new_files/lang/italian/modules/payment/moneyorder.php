<?php
define('MODULE_PAYMENT_MONEYORDER_TEXT_TITLE', 'assegno/pagamento anticipato');
define('MODULE_PAYMENT_MONEYORDER_TEXT_DESCRIPTION', 'pagabile a:&nbsp;' . MODULE_PAYMENT_MONEYORDER_PAYTO . '<br />indirizzo:<br /><br />' . nl2br(STORE_NAME_ADDRESS) . '<br /><br />' . 'il suo ordine non sar&agrave; spedito finch&egrave; non arriver&agrave; il denaro!');
define('MODULE_PAYMENT_MONEYORDER_TEXT_EMAIL_FOOTER', "pagabile a: ". MODULE_PAYMENT_MONEYORDER_PAYTO . "\n\nAdressat:\n" . STORE_NAME_ADDRESS . "\n\n" . 'Il suo ordine non sar&agrave; spedito finch&egrave; non arriver&agrave; il denaro!');
    if (defined('MODULE_PAYMENT_MONEYORDER_SUCCESS') && MODULE_PAYMENT_MONEYORDER_SUCCESS == 'True') {
    define('MODULE_PAYMENT_MONEYORDER_TEXT_INFO','Spediamo il vostro ordine dopo il ricevimento del pagamento. Riceverai i dati del conto nell\'ultima fase del checkout.');
  } else {
    define('MODULE_PAYMENT_MONEYORDER_TEXT_INFO','Spediamo il vostro ordine dopo il ricevimento del pagamento. Riceverai i dati dell\'account via e-mail quando il tuo ordine sar&agrave; stato confermato.');
  }
define('MODULE_PAYMENT_MONEYORDER_STATUS_TITLE' , 'attivare modulo ordine Check/Money');
define('MODULE_PAYMENT_MONEYORDER_STATUS_DESC' , 'Desidera accettare pagamenti tramite Check/Money?');
define('MODULE_PAYMENT_MONEYORDER_ALLOWED_TITLE' , 'zone permesse');
define('MODULE_PAYMENT_MONEYORDER_ALLOWED_DESC' , 'inserisca le <b>singole</b> zone, nelle quali deve essere valido questo modulo. (es. AT,DE (se il campo resta vuoto saranno autorizzate tutte le zone))');
define('MODULE_PAYMENT_MONEYORDER_PAYTO_TITLE' , 'pagabile a:');
define('MODULE_PAYMENT_MONEYORDER_PAYTO_DESC' , 'a chi deve essere effettuato il pagamento?');
define('MODULE_PAYMENT_MONEYORDER_SORT_ORDER_TITLE' , 'sequenza di visualizzazione');
define('MODULE_PAYMENT_MONEYORDER_SORT_ORDER_DESC' , 'sequenza di visualizzazione. Le cifre piccole devono essere mostrate per prima.');
define('MODULE_PAYMENT_MONEYORDER_ZONE_TITLE' , 'zona pagamento');
define('MODULE_PAYMENT_MONEYORDER_ZONE_DESC' , 'Quando viene selezionata una zona, questo metodo di pagamento &egrave; valido solo per questa zona.');
define('MODULE_PAYMENT_MONEYORDER_ORDER_STATUS_ID_TITLE' , 'stabilisci stato ordine');
define('MODULE_PAYMENT_MONEYORDER_ORDER_STATUS_ID_DESC' , 'mettere su questo stato gli ordini che vengono effettuati con questo modulo.');
define('MODULE_PAYMENT_MONEYORDER_SUCCESS_TITLE' , 'Visualizzare i dati bancari');
define('MODULE_PAYMENT_MONEYORDER_SUCCESS_DESC' , 'Visualizzare i dati bancari sul successo della cassa?');
?>