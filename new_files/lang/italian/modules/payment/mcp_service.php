<?php
/**
 *
 * @package    micropayment
 * @copyright  Copyright (c) 2015 Micropayment GmbH (http://www.micropayment.de)
 * @author     micropayment GmbH <shop-plugins@micropayment.de>
 */

define('MODULE_PAYMENT_MCP_SERVICE_TEXT_TITLE','micropayment - Gateway');
define('MODULE_PAYMENT_MCP_SERVICE_TEXT_DESCRIPTION','Bla Blub ding dong');
define('MODULE_PAYMENT_MCP_SERVICE_TEXT_INFO','INFOTEXT von MCP_SERVICE');
define('MODULE_PAYMENT_MCP_SERVICE_STATUS_TITLE','Stato');
define('MODULE_PAYMENT_MCP_SERVICE_STATUS_DESC','Attivare il modulo micropayment&trade;');
define('MODULE_PAYMENT_MCP_SERVICE_SORT_ORDER_TITLE','Posizionamento');
define('MODULE_PAYMENT_MCP_SERVICE_SORT_ORDER_DESC','Posizione nella lista');
define('MODULE_PAYMENT_MCP_SERVICE_ACCOUNT_ID_TITLE','<div style="color:#850000;font-style: italic;">Le seguenti impostazioni di configurazione vengono utilizzate globalmente per tutti i micropayment&trade; moduli di pagamento e devono essere configurati una sola volta</div><br />Account ID');
define('MODULE_PAYMENT_MCP_SERVICE_ACCOUNT_ID_DESC','Account ID da micropayment&trade;');
define('MODULE_PAYMENT_MCP_SERVICE_ACCESS_KEY_TITLE','Access-Key');
define('MODULE_PAYMENT_MCP_SERVICE_ACCESS_KEY_DESC','Access-Key da micropayment&trade;');
define('MODULE_PAYMENT_MCP_SERVICE_PROJECT_CODE_TITLE','Codice del progetto');
define('MODULE_PAYMENT_MCP_SERVICE_PROJECT_CODE_DESC','Codice progetto da micropagamento&trade;');
define('MODULE_PAYMENT_MCP_SERVICE_PAYTEXT_TITLE','Testo di pagamento');
define('MODULE_PAYMENT_MCP_SERVICE_PAYTEXT_DESC','Questa opzione &egrave; indicata sulla fattura e sul titolo della pagina della finestra di pagamento. Con il segnaposto #ORDER# &egrave; possibile integrare automaticamente l\'OrderID nella finestra della fattura o del pagamento. ad esempio "Ordine: #ORDER#" mostrerebbe "Ordine: 0000023"');
define('MODULE_PAYMENT_MCP_SERVICE_THEME_TITLE','Tema');
define('MODULE_PAYMENT_MCP_SERVICE_THEME_DESC','Tema per le finestre di pagamento, il valore predefinito &egrave; x1');
define('MODULE_PAYMENT_MCP_SERVICE_GFX_TITLE','Logo-Codice');
define('MODULE_PAYMENT_MCP_SERVICE_GFX_DESC','Inserite qui il vostro Logo-Codice');
define('MODULE_PAYMENT_MCP_SERVICE_BGGFX_TITLE','Parametro dell\'immagine di sfondo');
define('MODULE_PAYMENT_MCP_SERVICE_BGGFX_DESC','Inserire qui il parametro dell\'immagine di sfondo.');
define('MODULE_PAYMENT_MCP_SERVICE_BGCOLOR_TITLE','Colore di sfondo');
define('MODULE_PAYMENT_MCP_SERVICE_BGCOLOR_DESC','Inserisci qui il tuo colore di sfondo in HEX.');
define('MODULE_PAYMENT_MCP_SERVICE_SECRET_FIELD_TITLE','Nome del campo di sicurezza');
define('MODULE_PAYMENT_MCP_SERVICE_SECRET_FIELD_DESC','Per una maggiore sicurezza nella comunicazione da server a server, si prega di inserire un nome che solo voi conoscete.');
define('MODULE_PAYMENT_MCP_SERVICE_SECRET_FIELD_VALUE_TITLE','Valore del campo di sicurezza');
define('MODULE_PAYMENT_MCP_SERVICE_SECRET_FIELD_VALUE_DESC','Si prega di inserire un codice di sicurezza privato che non deve essere trasmesso ai clienti. Il micropayment&trade; server elaborer&agrave; questo codice ad ogni notifica per una maggiore sicurezza.');
define('MODULE_PAYMENT_MCP_SERVICE_SUCCESS_TRANSACTION','L\'ordine &egrave; stato pagato. Il Codice Autentico &egrave;: %s');
define('MODULE_PAYMENT_MCP_SERVICE_IP_NOT_ALLOWED','L\'indirizzo IP non &egrave; valido.');

define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PENDING_PAYMENT_ID_TITLE',' Bestellstatus: in Bezahlung');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PENDING_PAYMENT_ID_DESC','Kunde ist am bezahlen der Bestellung');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PROCESSING_ID_TITLE',' Bestellstatus: bezahlt');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PROCESSING_ID_DESC','Kunde hat erfolgreich bezahlt.');

define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_CANCELLED_ID_TITLE',' Stato dell\'ordine: Annullato');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_CANCELLED_ID_DESC', 'Quando un ordine viene cancellato, viene impostato questo stato');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_REFUNDED_ID_TITLE',' Stato dell\'ordine: Rimborsato');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_REFUNDED_ID_DESC','Quando viene attivato un rimborso, questo stato viene impostato.');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PAYMENT_REVIEW_ID_TITLE',' Stato dell\'ordine: Pagamento in sospeso');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PAYMENT_REVIEW_ID_DESC','In caso di problemi, questo stato &egrave; impostato in modo da poterlo controllare..');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_CONFLICT_ID_TITLE',' Stato dell\'ordine: Conflitto');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_CONFLICT_ID_DESC','Se si verifica un flusso di lavoro di eventi devianti, questo stato &egrave; impostato.');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PARTPAY_ID_TITLE',' Bestellstatus: Vorkasse - Teilzahlung');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PARTPAY_ID_DESC', 'Se una ricevuta di pagamento &egrave; segnalata per il pagamento anticipato ma l\'ordine non &egrave; completamente pagato, questo stato &egrave; impostato.');
define('MODULE_PAYMENT_MCP_SERVICE_REFUND_COMMENT','&Egrave; stato attivato un rimborso..');
define('MODULE_PAYMENT_MCP_SERVICE_SUCCESS_TRANSACTION','L\'ordine &egrave; stato pagato. Il codice di autorizzazione &egrave;: %s');
define('MODULE_PAYMENT_MCP_SERVICE_ERROR_TERMINATED','La richiesta non &egrave; valida.');
define('MODULE_PAYMENT_MCP_SERVICE_ERROR_UNKNOWN_ORDER_ID','L\'ordine non esiste');
define('MODULE_PAYMENT_MCP_SERVICE_ERROR_SECRET_FIELD_MISSMATCH','Il campo di sicurezza non corrisponde!');
define('MODULE_PAYMENT_MCP_SERVICE_ERROR_AMOUNT_MISSMATCH','La somma non corrisponde al valore pagato! Attuale: %s Obiettivo: %s');
define('MODULE_PAYMENT_MCP_SERVICE_UNKNOWN_FUNCTION','La funzione non &egrave; nota.');
define('MODULE_PAYMENT_MCP_SERVICE_ERROR_INVALID_AUTH_CODE','Il codice di autorizzazione non &egrave; corretto');
define('MODULE_PAYMENT_MCP_SERVICE_ERROR_INVALID_AMOUNT_VALUE','L\'importo non &egrave; corretto');
define('MODULE_PAYMENT_MCP_SERVICE_EXPIRE_DAYS_TITLE','Cancellazione di ordini non pagati');
define('MODULE_PAYMENT_MCP_SERVICE_EXPIRE_DAYS_DESC','Per quanto tempo un ordine pu&ograve; rimanere nello stato "In attesa di pagamento" prima di essere rimosso dal pulsante "Effettua ordine". Si prega di impostare il numero di giorni. IMPORTANTE: Questo non rimuover&agrave; nessun ordine prepagato.');
define('MODULE_PAYMENT_MCP_SERVICE_ERROR_TERMINATED','La richiesta non &egrave; valida.');
define('MODULE_PAYMENT_MCP_SERVICE_ERROR_UNKNOWN_ORDER_ID','Questo ordine non esiste');
define('MODULE_PAYMENT_MCP_SERVICE_ERROR_SECRET_FIELD_MISSMATCH','Campo di sicurezza sbagliato!');
define('MODULE_PAYMENT_MCP_SERVICE_ERROR_AMOUNT_MISSMATCH','La somma non corrisponde all\'importo pagato! Effettivo: %s Saldo dovuto: %s');
define('MODULE_PAYMENT_MCP_SERVICE_PAYIN_MESSAGE','%s %s &egrave; stato pagato.');
define('MODULE_PAYMENT_MCP_SERVICE_UNKNOWN_FUNCTION','funzione sconosciuta');
define('MODULE_PAYMENT_MCP_SERVICE_ERROR_INVALID_AUTH_CODE','codice auth non valido');
define('MODULE_PAYMENT_MCP_SERVICE_ERROR_INVALID_AMOUNT_VALUE','importo non valido');
define('MODULE_PAYMENT_MCP_SERVICE_PENDING_PAYMENT','Pagamento in sospeso. Cancellazione automatica %s');
define('MODULE_PAYMENT_MCP_PREPAY_EXPIRED','Nessuna ricevuta di pagamento, cancellazione automatica');
define('MODULE_PAYMENT_MCP_SERVICE_REFUND_COMMENT','Il rimborso &egrave; aumentato.');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PENDING_PAYMENT_ID_TITLE','Stato dell\'ordine: in corso');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PENDING_PAYMENT_ID_DESC','Il cliente paga l\'ordine');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PROCESSING_ID_TITLE','Stato dell\'ordine: pagato');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PROCESSING_ID_DESC','Il cliente ha pagato con successo.');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_CANCELLED_ID_TITLE','Stato dell\'ordine: Annullato / Errore');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_CANCELLED_ID_DESC','Se si verifica un back posting, questo stato &egrave; impostato');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_REFUNDED_ID_TITLE','Stato dell\'ordine: Rimborsato');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_REFUNDED_ID_DESC','Se il rimborso &egrave; aumentato, questo stato &egrave; impostato.');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PAYMENT_REVIEW_ID_TITLE','Stato dell\'ordine: Pagamento');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PAYMENT_REVIEW_ID_DESC','Questo stato viene impostato se si &egrave; verificato un problema e il pagamento deve essere rivisto');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_CONFLICT_ID_TITLE','Stato dell\'ordine: conflitto');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_CONFLICT_ID_DESC','il flusso logico dei pagamenti &egrave; stato interrotto. Si prega di rivedere questo ordine.');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PARTPAY_ID_TITLE',' Stato dell\'ordine: Pagamento anticipato - pagamento parziale');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PARTPAY_ID_DESC','questo ordine ha un pagamento parziale ma non &egrave; stato ancora interamente pagato');
define('MODULE_PAYMENT_MCP_SERVICE_NEW_VERSION','%s<div class="mcp_notice_register">Nuova versione di micropayment&trade; Sono disponibili moduli di pagamento. <a href="http://ecommerce.micropayment.de/modifiedshop/?lang=EN" target="_new">Clicca qui per scaricare.</a></div>');
define('MODULE_PAYMENT_MCP_SERVICE_NO_ACCOUNT','%s<div class="mcp_notice_register">Per garantire la funzionalit&agrave; dei moduli di micropagamento&trade; Pagamento, si prega di registrare prima un conto e creare un progetto. <a href="https://%s.micropayment.de" target="blank">Clicca qui per registrarti.</a></div>');
define('MODULE_PAYMENT_MCP_SERVICE_CSS','
<style type="text/css">
.mcp_notice_register {
    margin-bottom: 5px;
    background-image: url("../images/micropayment/logo_small.png");
	background-position: 10px 10px;
	background-color: #ffdede;
    background-repeat: no-repeat;
    background-size: 100px;
    height: 40px;
	padding-left:130px;
	padding-top: 18px;
	border: 1px #cdcdcd solid;
}
</style>
');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PENDING_PAYMENT_GERMAN_TITLE','Il pagamento &egrave; in sospeso');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PARTPAY_GERMAN_TITLE','Pagamento anticipato, pagamento parziale');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PROCESSING_GERMAN_TITLE','in corso');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_CANCELLED_GERMAN_TITLE','Cancellato');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PAYMENT_REVIEW_GERMAN_TITLE','Controllare l\'ordine');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_CONFLICT_GERMAN_TITLE','Problema dell\'evento!');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PENDING_PAYMENT_ENGLISH_TITLE','in attesa di pagamento');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PARTPAY_ENGLISH_TITLE','prepagamento, partpay');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PROCESSING_ENGLISH_TITLE','elaborazione');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_CANCELLED_ENGLISH_TITLE','cancellato');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PAYMENT_REVIEW_ENGLISH_TITLE','revisione dei pagamenti');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_CONFLICT_ENGLISH_TITLE','evento-conflitto!');
define('MODULE_PAYMENT_MCP_SERVICE_EXPIRE_DAYS_TITLE','Cancellazione di ordini non pagati');
define('MODULE_PAYMENT_MCP_SERVICE_EXPIRE_DAYS_DESC','Quanti giorni pu&ograve; avere un ordine con lo stato "in attesa di pagamento" prima di essere cancellato dal pulsante "cancella i vecchi ordini". Importante: gli ordini di pagamento anticipato non verranno cancellati.');
?>