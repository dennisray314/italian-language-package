<?php
/* --------------------------------------------------------------
   $Id: customers_status.php 1062 2005-07-21 19:57:29Z gwinger $

   XT-Commerce - community made shopping
   http://www.xt-commerce.com

   Copyright (c) 2003 XT-Commerce
   --------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(customers.php,v 1.76 2003/05/04); www.oscommerce.com
   (c) 2003	 nextcommerce (customers_status.php,v 1.12 2003/08/14); www.nextcommerce.org

   Released under the GNU General Public License
   --------------------------------------------------------------*/

define('HEADING_TITLE', 'Gruppi di clienti');

define('ENTRY_CUSTOMERS_FSK18','Funzione di blocco per l\'acquisto di prodotti FSK18?');
define('ENTRY_CUSTOMERS_FSK18_DISPLAY','Mostra i prodotti FSK18?');
define('ENTRY_CUSTOMERS_STATUS_ADD_TAX','Mostra l\'imposta in ordine di totale');
define('ENTRY_CUSTOMERS_STATUS_MIN_ORDER','Valore minimo d\'ordine:');
define('ENTRY_CUSTOMERS_STATUS_MAX_ORDER','Valore massimo dell\'ordine:');
define('ENTRY_CUSTOMERS_STATUS_BT_PERMISSION','Ritiro via banca');
define('ENTRY_CUSTOMERS_STATUS_CC_PERMISSION','Tramite carta di credito');
define('ENTRY_CUSTOMERS_STATUS_COD_PERMISSION','In contanti alla consegna');
define('ENTRY_CUSTOMERS_STATUS_DISCOUNT_ATTRIBUTES','Sconto');
define('ENTRY_CUSTOMERS_STATUS_PAYMENT_UNALLOWED','Inserire i metodi di pagamento non ammessi');
define('ENTRY_CUSTOMERS_STATUS_PUBLIC','Pubblico');
define('ENTRY_CUSTOMERS_STATUS_SHIPPING_UNALLOWED','Inserire i moduli di spedizione non ammessi');
define('ENTRY_CUSTOMERS_STATUS_SHOW_PRICE','Prezzo');
define('ENTRY_CUSTOMERS_STATUS_SHOW_PRICE_TAX','Prezzi IVA inclusa');
define('ENTRY_CUSTOMERS_STATUS_WRITE_REVIEWS','Il gruppo di clienti &egrave; autorizzato a scrivere recensioni?');
define('ENTRY_CUSTOMERS_STATUS_READ_REVIEWS','Il gruppo di clienti pu&ograve; leggere le recensioni?');
define('ENTRY_CUSTOMERS_STATUS_REVIEWS_STATUS','Attivare automaticamente le recensioni?');
define('ENTRY_GRADUATED_PRICES','Prezzi graduati');
define('ENTRY_NO','numero');
define('ENTRY_OT_XMEMBER', 'Sconto cliente sul totale dell\'ordine? :');
define('ENTRY_YES','Si');

define('ERROR_REMOVE_DEFAULT_CUSTOMERS_STATUS', 'Errore: Non &egrave; possibile cancellare il gruppo di clienti predefinito. Impostare un altro gruppo su un gruppo di clienti predefinito e riprovare.');
define('ERROR_STATUS_USED_IN_CUSTOMERS', 'Errore: Questo gruppo di clienti &egrave; effettivamente in uso.');
define('ERROR_STATUS_USED_IN_HISTORY', 'Errore: Questo gruppo di clienti &egrave; effettivamente in uso per la cronologia degli ordini.');

define('TABLE_HEADING_ACTION','Azione');
define('TABLE_HEADING_CUSTOMERS_GRADUATED','Prezzi graduati');
define('TABLE_HEADING_CUSTOMERS_STATUS','Gruppo clienti');
define('TABLE_HEADING_CUSTOMERS_UNALLOW','Metodi di pagamento non consentiti');
define('TABLE_HEADING_CUSTOMERS_UNALLOW_SHIPPING','Spedizione non consentita');
define('TABLE_HEADING_DISCOUNT','Sconto');
define('TABLE_HEADING_TAX_PRICE','Prezzo / Tassa');

define('TAX_NO','escl');
define('TAX_YES','incl');

define('TEXT_DISPLAY_NUMBER_OF_CUSTOMERS_STATUS', 'Gruppi di clienti esistenti:');

define('TEXT_INFO_CUSTOMERS_FSK18_DISPLAY_INTRO','<strong>Prodotti FSK18</strong>');
define('TEXT_INFO_CUSTOMERS_FSK18_INTRO','<strong>Blocco FSK18</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_ADD_TAX_INTRO','<strong>Se "Prezzi IVA inclusa" = "Si", impostare su "No".</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_MIN_ORDER_INTRO','<strong>Definire un valore minimo d\'ordine o lasciare il campo vuoto.</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_MAX_ORDER_INTRO','<strong>Definire un valore massimo dell\'ordine o lasciare il campo vuoto.</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_BT_PERMISSION_INTRO', '<strong>Permettiamo ai clienti di questo gruppo di pagare tramite incasso bancario?</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_CC_PERMISSION_INTRO', '<strong>Permettiamo ai clienti di questo gruppo di pagare con carta di credito?</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_COD_PERMISSION_INTRO', '<strong>Permettiamo ai clienti di questo gruppo di pagare in contrassegno?</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_DISCOUNT_ATTRIBUTES_INTRO','<strong>Sconto sulle caratteristiche del prodotto</strong><br />(Max. % di sconto sul singolo prodotto)');
define('TEXT_INFO_CUSTOMERS_STATUS_DISCOUNT_OT_XMEMBER_INTRO','<strong>Sconto sul totale dell\'ordine</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_DISCOUNT_PRICE', 'Sconto (da 0 a 100%):');
define('TEXT_INFO_CUSTOMERS_STATUS_DISCOUNT_PRICE_INTRO', '<strong>Si prega di definire uno sconto tra 0 e 100% che viene utilizzato su ogni prodotto visualizzato.</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_GRADUATED_PRICES_INTRO','<strong>Prezzi graduati</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_IMAGE', '<strong>Immagine del gruppo clienti:</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_NAME','<strong>Nome del gruppo</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_PAYMENT_UNALLOWED_INTRO','<strong>Metodi di pagamento non consentiti</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_PUBLIC_INTRO','<strong>Mostra al pubblico?</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_SHIPPING_UNALLOWED_INTRO','<strong>Moduli di spedizione non ammessi</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_SHOW_PRICE_INTRO','<strong>Mostra il prezzo nel negozio</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_SHOW_PRICE_TAX_INTRO', '<strong>Volete esporre i prezzi IVA inclusa o tassa esclusiva?</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_WRITE_REVIEWS_INTRO','<strong>La recensione dei prodotti scrive</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_READ_REVIEWS_INTRO', '<strong>Leggi la recensione dei prodotti</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_REVIEWS_STATUS_INTRO', '<strong>Stato di revisione dei prodotti</strong>');

define('TEXT_INFO_DELETE_INTRO', 'Sei sicuro di voler cancellare questo gruppo di clienti?');
define('TEXT_INFO_EDIT_INTRO', 'Si prega di apportare tutte le modifiche necessarie');
define('TEXT_INFO_INSERT_INTRO', 'Si prega di creare un nuovo gruppo di clienti all\'interno di tutti i valori necessari.');

define('TEXT_INFO_HEADING_DELETE_CUSTOMERS_STATUS', 'Cancellare il gruppo di clienti');
define('TEXT_INFO_HEADING_EDIT_CUSTOMERS_STATUS','Modifica i dati del gruppo');
define('TEXT_INFO_HEADING_NEW_CUSTOMERS_STATUS', 'Nuovo gruppo di clienti');

define('TEXT_INFO_CUSTOMERS_STATUS_BASE', '<strong>Gruppo di clienti di base per i prezzi dei prodotti</strong>');
define('ENTRY_CUSTOMERS_STATUS_BASE', 'Applicare i prezzi del gruppo di clienti del seguente gruppo di clienti. Se selezione = Admin, non vengono applicati prezzi al nuovo gruppo di clienti.');
define('ENTRY_CUSTOMERS_STATUS_BASE_EDIT', 'Applicare i prezzi del gruppo di clienti del seguente gruppo di clienti. Se selezione = Admin, non vengono applicati prezzi al gruppo di clienti.<br /><span class="col-red"><strong>ATTENZIONE:</strong></span> Con la presente si sovrascrivono tutti i prezzi del gruppo di clienti esistenti per il gruppo di clienti!');

define('TEXT_INFO_CUSTOMERS_GROUP_ADOPT_PERMISSION', '<strong>Adottare le autorizzazioni per i gruppi di clienti</strong>');
define('ENTRY_CUSTOMERS_GROUP_ADOPT_PERMISSION', 'Adottare i diritti di visibilit&agrave; per categorie, prodotti e pagine di contenuto del seguente gruppo di clienti:');
define('CUSTOMERS_GROUP_ADOPT_PERMISSIONS', 'Non adottare alcun diritto');

define('TEXT_INFO_CUSTOMERS_STATUS_SHOW_PRICE_TAX_TOTAL', '<b>Mostra l\'IVA sul totale</b>');
define('ENTRY_CUSTOMERS_STATUS_SHOW_PRICE_TAX_TOTAL', 'Totale minimo');

define('TABLE_HEADING_CUSTOMERS_SPECIALS', 'Prezzi speciali');
define('TEXT_INFO_CUSTOMERS_STATUS_SPECIALS_INTRO', '<strong>Prezzi speciali</strong>');
define('ENTRY_CUSTOMERS_STATUS_SPECIALS', 'Il gruppo pu&ograve; vedere i prezzi speciali?');

define('CUSTOMERS_GROUP_PUBLIC','pubblico');
?>