<?php

/* -----------------------------------------------------------------------------------------
   $Id: amoneybookers.php 85 2007-01-14 15:19:44Z mzanier $

   xt:Commerce - community made shopping
   http://www.xt-commerce.com

   Copyright (c) 2006 xt:Commerce
   -----------------------------------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(moneybookers.php,v 1.01 2003/01/20); www.oscommerce.com

   Released under the GNU General Public License
   -----------------------------------------------------------------------------------------
   Third Party contributions:
   Moneybookers v1.0                       Autor:    Gabor Mate  <gabor(at)jamaga.hu>

   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/

define('MODULE_PAYMENT_AMONEYBOOKERS_TEXT_TITLE', 'Pagamento sicuro attraverso Skrill');
//define('MODULE_PAYMENT_AMONEYBOOKERS_TEXT_DESCRIPTION', 'Skrill<br /><br /><img src="images/icon_arrow_right.gif"> <b><a href="http://www.xt-commerce.com/index.php?option=com_content&task=view&id=76&lang=en" target="_blank">Help / Explanation</a></b>');
define('MODULE_PAYMENT_AMONEYBOOKERS_TEXT_DESCRIPTION', 'Skrill');
define('MODULE_PAYMENT_AMONEYBOOKERS_NOCURRENCY_ERROR', 'Non &egrave; installata la valuta accettata da Skrill!');
define('MODULE_PAYMENT_AMONEYBOOKERS_ERRORTEXT1', 'payment_error=');
define('MODULE_PAYMENT_AMONEYBOOKERS_TEXT_INFO','');
define('MODULE_PAYMENT_AMONEYBOOKERS_ERRORTEXT2', '&error=C\'&egrave; stato un errore durante il pagamento presso Skrill!');
define('MODULE_PAYMENT_AMONEYBOOKERS_ORDER_TEXT', 'Data dell\'ordine: ');
define('MODULE_PAYMENT_AMONEYBOOKERS_TEXT_ERROR', 'Errore di pagamento!');
define('MODULE_PAYMENT_AMONEYBOOKERS_CONFIRMATION_TEXT', 'Grazie per il vostro ordine!');
define('MODULE_PAYMENT_AMONEYBOOKERS_TRANSACTION_FAILED_TEXT', 'La vostra transazione di pagamento presso Skrill &egrave; fallita. Riprova, oppure seleziona un\'altra opzione di pagamento!');
define('MODULE_PAYMENT_AMONEYBOOKERS_TEXT_INFO_2', '<b>100% sicurezza</b> - Tutte le transazioni di dati sono sicure con la pi&ugrave; moderna tecnologia di sicurezza Skrill');
define('MODULE_PAYMENT_AMONEYBOOKERS_TEXT_INFO_3', '<b>100% protezione dei dati</b> - I vostri dati personali saranno conservati presso Skrill e non saranno trasmessi al negozio');
define('MODULE_PAYMENT_AMONEYBOOKERS_TEXT_INFO_4', '<b>Massimo comfort</b> - Una volta che avete un conto Skrill, avete bisogno solo del vostro indirizzo e-mail e della vostra password per tutte le transazioni future');
define('MODULE_PAYMENT_AMONEYBOOKERS_TEXT_INFO_5', '<b>Accettazione all\'estero</b> - Con Skrill, puoi pagare in migliaia di negozi');
define('MODULE_PAYMENT_AMONEYBOOKERS_TEXT_INFO_1', '<br /><br />Paga istantaneamente con...');

define('MB_TEXT_MBDATE', 'Ultimo cambiamento:');
define('MB_TEXT_MBTID', 'TR ID:');
define('MB_TEXT_MBERRTXT', 'Stato:');

define('MODULE_PAYMENT_AMONEYBOOKERS_PROCESSED_STATUS_ID_TITLE', 'Stato dell\'ordine - Elaborato');
define('MODULE_PAYMENT_AMONEYBOOKERS_PROCESSED_STATUS_ID_DESC', '');

define('MODULE_PAYMENT_AMONEYBOOKERS_PENDING_STATUS_ID_TITLE', 'Stato dell\'ordine - Programmato');
define('MODULE_PAYMENT_AMONEYBOOKERS_PENDING_STATUS_ID_DESC', '');

define('MODULE_PAYMENT_AMONEYBOOKERS_CANCELED_STATUS_ID_TITLE', 'Stato dell\'ordine - Annullato');
define('MODULE_PAYMENT_AMONEYBOOKERS_CANCELED_STATUS_ID_DESC', '');

define('MODULE_PAYMENT_AMONEYBOOKERS__TMP_STATUS_ID_TITLE', 'Stato dell\'ordine - Temp');
define('MODULE_PAYMENT_AMONEYBOOKERS__TMP_STATUS_ID_DESC', '');

define('MODULE_PAYMENT_AMONEYBOOKERS_ICONS_TITLE', 'Icone');
define('MODULE_PAYMENT_AMONEYBOOKERS_ICONS_DESC', '');

define('MODULE_PAYMENT_AMONEYBOOKERS_STATUS_TITLE', 'Abilita Skrill');
//define('MODULE_PAYMENT_AMONEYBOOKERS_STATUS_DESC', 'Do you want to accept payments through Skrill?<br /><br /><img src="images/icon_arrow_right.gif"> <b><a href="http://www.xt-commerce.com/index.php?option=com_content&task=view&id=76&lang=en" target="_blank">Help / Explanation</a></b>');
define('MODULE_PAYMENT_AMONEYBOOKERS_STATUS_DESC', 'Vuoi accettare pagamenti tramite Skrill?');
define('MODULE_PAYMENT_AMONEYBOOKERS_EMAILID_TITLE', 'Indirizzo e-mail');
define('MODULE_PAYMENT_AMONEYBOOKERS_EMAILID_DESC', 'Indirizzo email che hai registrato con Skrill. <font color="#ff0000">* Richiesto</font>');
define('MODULE_PAYMENT_AMONEYBOOKERS_PWD_TITLE', 'Parola segreta di Skrill');
define('MODULE_PAYMENT_AMONEYBOOKERS_PWD_DESC', 'La parola segreta si trova nel tuo profilo Skrill (non &egrave; la tua password!)');
define('MODULE_PAYMENT_AMONEYBOOKERS_MERCHANTID_TITLE', 'ID Mercante');
define('MODULE_PAYMENT_AMONEYBOOKERS_MERCHANTID_DESC', 'Merchant ID del tuo conto Skrill <font color="#ff0000">* Richiesto</font>');
define('MODULE_PAYMENT_AMONEYBOOKERS_SORT_ORDER_TITLE', 'Ordina l\'ordine di visualizzazione.');
define('MODULE_PAYMENT_AMONEYBOOKERS_SORT_ORDER_DESC', 'Ordina l\'ordine di visualizzazione. Il pi&ugrave; basso viene visualizzato per primo.');
define('MODULE_PAYMENT_AMONEYBOOKERS_CURRENCY_TITLE', 'Valuta della transazione');
define('MODULE_PAYMENT_AMONEYBOOKERS_CURRENCY_DESC', 'Se la valuta dell\'utente non &egrave; disponibile su Skrill, questa verr&agrave; utilizzata per il pagamento.');
define('MODULE_PAYMENT_AMONEYBOOKERS_LANGUAGE_TITLE', 'Lingua della transazione');
define('MODULE_PAYMENT_AMONEYBOOKERS_LANGUAGE_DESC', 'Se la lingua dell\'utente non &egrave; disponibile su Skrill, questa lingua sar&agrave; utilizzata per il pagamento.');
define('MODULE_PAYMENT_AMONEYBOOKERS_ZONE_TITLE', 'Zona di pagamento');
define('MODULE_PAYMENT_AMONEYBOOKERS_ZONE_DESC', 'Se viene selezionata una zona, abilitare questo metodo di pagamento solo per quella zona.');
define('MODULE_PAYMENT_AMONEYBOOKERS_ALLOWED_TITLE' , 'Zone consentite');
define('MODULE_PAYMENT_AMONEYBOOKERS_ALLOWED_DESC' , 'Si prega di inserire le zone <b>separatamente</b> che dovrebbero essere autorizzate ad utilizzare questo modulo (ad es. AT,DE (lasciare vuote se si desidera consentire tutte le zone))');
?>