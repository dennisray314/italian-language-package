<?php
/**
 * Shopgate GmbH
 *
 * URHEBERRECHTSHINWEIS
 *
 * Dieses Plugin ist urheberrechtlich geschützt. Es darf ausschließlich von Kunden der Shopgate GmbH
 * zum Zwecke der eigenen Kommunikation zwischen dem IT-System des Kunden mit dem IT-System der
 * Shopgate GmbH über www.shopgate.com verwendet werden. Eine darüber hinausgehende Vervielfältigung, Verbreitung,
 * öffentliche Zugänglichmachung, Bearbeitung oder Weitergabe an Dritte ist nur mit unserer vorherigen
 * schriftlichen Zustimmung zulässig. Die Regelungen der §§ 69 d Abs. 2, 3 und 69 e UrhG bleiben hiervon unberührt.
 *
 * COPYRIGHT NOTICE
 *
 * This plugin is the subject of copyright protection. It is only for the use of Shopgate GmbH customers,
 * for the purpose of facilitating communication between the IT system of the customer and the IT system
 * of Shopgate GmbH via www.shopgate.com. Any reproduction, dissemination, public propagation, processing or
 * transfer to third parties is only permitted where we previously consented thereto in writing. The provisions
 * of paragraph 69 d, sub-paragraphs 2, 3 and paragraph 69, sub-paragraph e of the German Copyright Act shall remain unaffected.
 *
 * @author Shopgate GmbH <interfaces@shopgate.com>
 */
### Plugin ###
define('SHOPGATE_CONFIG_EXTENDED_ENCODING', 'Codifica del sistema di negozio');
define('SHOPGATE_CONFIG_EXTENDED_ENCODING_DESCRIPTION', 'Scegliete la codifica del vostro sistema di negozio. Di solito si tratta di "ISO-8859-15" per le versioni precedenti al 1.06.');
### Menu ###
define('BOX_SHOPGATE', 'Shopgate');
define('BOX_SHOPGATE_INFO', 'Cos\'&egrave; Shopgate');
define('BOX_SHOPGATE_HELP', 'Aiuto all\'installazione');
define('BOX_SHOPGATE_CONFIG', 'Impostazioni');
### Links ###
define('SHOPGATE_LINK_HOME', 'https://www.shopgate.com/en/?partner=30051');
define('SHOPGATE_LINK_WIKI', 'https://support.shopgate.com/hc/en-us/articles/202911763');
### Configuration ###
define('SHOPGATE_CONFIG_TITLE', 'SHOPGATE');
define('SHOPGATE_CONFIG_ERROR', 'ERRORE:');
define('SHOPGATE_CONFIG_ERROR_SAVING', 'Errore nella configurazione di salvataggio. ');
define('SHOPGATE_CONFIG_ERROR_LOADING', 'Errore nel caricamento della configurazione. ');
define('SHOPGATE_CONFIG_ERROR_READ_WRITE', 'Si prega di controllare i permessi (777) per la cartella &quot;/shopgate_library/config&quot; del plugin Shopgate.');
define('SHOPGATE_CONFIG_ERROR_INVALID_VALUE', 'Si prega di controllare i dati inseriti nei seguenti campi: ');
define('SHOPGATE_CONFIG_ERROR_DUPLICATE_SHOP_NUMBERS', 'Ci sono pi&ugrave; configurazioni con lo stesso numero di negozio. Questo pu&ograve; causare grossi problemi imprevisti!');
define('SHOPGATE_CONFIG_INFO_MULTIPLE_CONFIGURATIONS', 'Sono attive le configurazioni per pi&ugrave; mercati.');
define('SHOPGATE_CONFIG_SAVE', 'Salva');
define('SHOPGATE_CONFIG_GLOBAL_CONFIGURATION', 'Configurazione globale');
define('SHOPGATE_CONFIG_USE_GLOBAL_CONFIG', 'Utilizzare la configurazione globale per questa lingua.');
define('SHOPGATE_CONFIG_MULTIPLE_SHOPS_BUTTON', 'Impostazione di pi&ugrave; mercati Shopgate');
define(
'SHOPGATE_CONFIG_LANGUAGE_SELECTION',
    'Allo Shopgate avete bisogno di un negozio per ogni mercato limitato ad una lingua e ad una valuta. Qui potete mappare le lingue configurate per i vostri negozi Shopgate su diversi '
    .
    'mercati. Scegliete una lingua e inserite le credenziali del vostro Shopgate shop nel mercato corrispondente. Se non avete uno Shopgate shop per una determinata lingua '
    .
    'per questo verr&agrave; utilizzata la configurazione globale.'
);
### Connection Settings ###
define('SHOPGATE_CONFIG_CONNECTION_SETTINGS', 'Impostazioni di connessione');
define('SHOPGATE_CONFIG_CUSTOMER_NUMBER', 'Numero cliente');
define('SHOPGATE_CONFIG_CUSTOMER_NUMBER_DESCRIPTION', 'Potete trovare il vostro numero cliente nella sezione &quot;Integration&quot; sezione del vostro negozio.');
define('SHOPGATE_CONFIG_SHOP_NUMBER', 'Numero del negozio');
define('SHOPGATE_CONFIG_SHOP_NUMBER_DESCRIPTION', 'Potete trovare il numero del negozio nella sezione &quot;Integration&quot;Integration&quot; sezione del vostro negozio.');
define('SHOPGATE_CONFIG_APIKEY', 'Chiave API');
define('SHOPGATE_CONFIG_APIKEY_DESCRIPTION', 'Potete trovare la chiave API nella sezione &quot;Integration&quot; sezione del vostro negozio.');
### Mobile Redirect ###
define('SHOPGATE_CONFIG_MOBILE_REDIRECT_SETTINGS', 'Reindirizzamento mobile');
define('SHOPGATE_CONFIG_ALIAS', 'Alias del negozio');
define('SHOPGATE_CONFIG_ALIAS_DESCRIPTION', 'Potete trovare lo pseudonimo nella sezione &quot;Integration&quot; sezione del vostro negozio.');
define('SHOPGATE_CONFIG_CNAME', 'URL personalizzato alla pagina web mobile (CNAME) incl. http://');
define(
'SHOPGATE_CONFIG_CNAME_DESCRIPTION',
    'Inserisci un URL personalizzato (definito dal CNAME) per il tuo sito web mobile. Potete trovare l\'URL nella sezione &quot;Integration&quot; sezione del vostro negozio  '
    .
    'dopo aver attivato questa opzione nella sezione &quot;Impostazioni&quot; &equals;&quot;Mobile website / webapp&quot;.'
);
define('SHOPGATE_CONFIG_REDIRECT_LANGUAGES', 'Lingue reindirizzate');
define(
'SHOPGATE_CONFIG_REDIRECT_LANGUAGES_DESCRIPTION',
'Scegliete le lingue che devono essere reindirizzate a questo Shopgate shop. Deve essere selezionata almeno una lingua. Tenere premuto CTRL per selezionare pi&ugrave; voci.'
);
### Export ###
define('SHOPGATE_CONFIG_EXPORT_SETTINGS', 'Esportazione di categorie e prodotti');
define('SHOPGATE_CONFIG_LANGUAGE', 'Lingua');
define('SHOPGATE_CONFIG_LANGUAGE_DESCRIPTION', 'Scegliere la lingua in cui le categorie e i prodotti devono essere esportati.');
define('SHOPGATE_CONFIG_EXTENDED_CURRENCY', 'Valuta');
define('SHOPGATE_CONFIG_EXTENDED_CURRENCY_DESCRIPTION', 'Scegliere la valuta per l\'esportazione dei prodotti.');
define('SHOPGATE_CONFIG_EXTENDED_COUNTRY', 'Paese');
define('SHOPGATE_CONFIG_EXTENDED_COUNTRY_DESCRIPTION', 'Scegliete il paese per il quale i vostri prodotti devono essere esportati');
define('SHOPGATE_CONFIG_EXTENDED_TAX_ZONE', 'Zona fiscale per Shopgate');
define('SHOPGATE_CONFIG_EXTENDED_TAX_ZONE_DESCRIPTION', 'Scegliere la zona fiscale valida per Shopgate.');
define('SHOPGATE_CONFIG_EXTENDED_REVERSE_CATEGORIES_SORT_ORDER', 'Invertire l\'ordine di ordinamento delle categorie');
define('SHOPGATE_CONFIG_EXTENDED_REVERSE_CATEGORIES_SORT_ORDER_ON', 'S&igrave;');
define('SHOPGATE_CONFIG_EXTENDED_REVERSE_CATEGORIES_SORT_ORDER_OFF', 'No');
define(
'SHOPGATE_CONFIG_EXTENDED_REVERSE_CATEGORIES_SORT_ORDER_DESCRIPTION',
'Scegliete "S&igrave;" se il tipo di ordine delle categorie nel vostro negozio mobile appare sottosopra.'
);
define('SHOPGATE_CONFIG_EXTENDED_REVERSE_ITEMS_SORT_ORDER', 'Ordina i prodotti in ordine inverso');
define('SHOPGATE_CONFIG_EXTENDED_REVERSE_ITEMS_SORT_ORDER_ON', 'S&igrave;');
define('SHOPGATE_CONFIG_EXTENDED_REVERSE_ITEMS_SORT_ORDER_OFF', 'No');
define(
'SHOPGATE_CONFIG_EXTENDED_REVERSE_ITEMS_SORT_ORDER_DESCRIPTION',
'Scegliete "S&igrave;" se il tipo di ordine dei prodotti nel vostro negozio mobile appare sottosopra.'
);
define('SHOPGATE_CONFIG_EXTENDED_PRODUCTSDESCRIPTION', 'Descrizione dei prodotti');
define('SHOPGATE_CONFIG_EXTENDED_PRODUCTSDESCRIPTION_DESC_ONLY', 'Solo descrizione');
define('SHOPGATE_CONFIG_EXTENDED_PRODUCTSDESCRIPTION_SHORTDESC_ONLY', 'Solo una breve descrizione');
define('SHOPGATE_CONFIG_EXTENDED_PRODUCTSDESCRIPTION_DESC_SHORTDESC', 'Descrizione e breve descrizione');
define('SHOPGATE_CONFIG_EXTENDED_PRODUCTSDESCRIPTION_SHORTDESC_DESC', 'Breve descrizione e descrizione');
define('SHOPGATE_CONFIG_EXTENDED_PRODUCTSDESCRIPTION_DESCRIPTION', 'Si prega di selezionare il metodo da utilizzare per costruire le descrizioni per il negozio mobile.');
define('SHOPGATE_CONFIG_EXTENDED_CUSTOMER_PRICE_GROUP', 'Gruppo di prezzi per Shopgate');
define('SHOPGATE_CONFIG_EXTENDED_CUSTOMER_PRICE_GROUP_DESCRIPTION', 'Scegliere il gruppo di prezzi valido per Shopgate (il gruppo di clienti di cui vengono prese le informazioni sui prezzi per l\'esportazione dei prodotti).');
define('SHOPGATE_CONFIG_EXTENDED_CUSTOMER_PRICE_GROUP_OFF', '-- Disattivato --');
define('SHOPGATE_CONFIG_EXPORT_NEW_PRODUCTS_CATEGORY', 'Esportare la categoria "Nuovo"');
define('SHOPGATE_CONFIG_EXPORT_NEW_PRODUCTS_CATEGORY_DESCRIPTION', 'Questo sistema di negozi permette di mostrare tutti i nuovi prodotti in una categoria virtuale. Con questa opzione &egrave; possibile esportare i nuovi prodotti in una categoria reale. Pertanto &egrave; possibile utilizzare il campo di inserimento per modificare l\'id della categoria.');
define('SHOPGATE_CONFIG_EXPORT_NEW_PRODUCTS_CATEGORY_ON', 'S&igrave;');
define('SHOPGATE_CONFIG_EXPORT_NEW_PRODUCTS_CATEGORY_OFF', 'No');
define('SHOPGATE_CONFIG_EXPORT_NEW_PRODUCTS_CATEGORY_MAX_ID', 'Attualmente la categoria-Id pi&ugrave; alta nel sistema di negozi');
define('SHOPGATE_CONFIG_EXPORT_OPTIONS_AS_INPUT_FIELD', 'Opzioni del prodotto da esportare come campi di immissione');
define('SHOPGATE_CONFIG_EXPORT_OPTIONS_AS_INPUT_FIELD_DESCRIPTION', 'Aggiungere gli ID delle opzioni (vedi "Opzioni del prodotto") che devono essere esportati come campi di immissione. Esempio: 1,2,3');
define('SHOPGATE_CONFIG_EXPORT_SPECIAL_PRODUCTS_CATEGORY', 'Esportare la categoria "Speciale"');
define('SHOPGATE_CONFIG_EXPORT_SPECIAL_PRODUCTS_CATEGORY_DESCRIPTION', 'Questo sistema di negozi permette di mostrare tutti i prodotti speciali in una categoria virtuale. Con questa opzione &egrave; possibile esportare i nuovi prodotti in una categoria reale. Pertanto &egrave; possibile utilizzare il campo di inserimento per modificare l\'id della categoria.');
define('SHOPGATE_CONFIG_EXPORT_SPECIAL_PRODUCTS_CATEGORY_ON', 'S&igrave;');
define('SHOPGATE_CONFIG_EXPORT_SPECIAL_PRODUCTS_CATEGORY_OFF', 'No');
define('SHOPGATE_CONFIG_EXPORT_SPECIAL_PRODUCTS_CATEGORY_MAX_ID', 'Attualmente la categoria-Id pi&ugrave; alta nel sistema di negozi');
define('SHOPGATE_PLUGIN_FIELD_AVAILABLE_TEXT_AVAILABLE_ON_DATE', 'Disponibile su #DATE#');
### Orders Import ###
define('SHOPGATE_CONFIG_ORDER_IMPORT_SETTINGS', 'Importazione di ordini');
defined('SHOPGATE_ORDER_CUSTOM_FIELD') OR define('SHOPGATE_ORDER_CUSTOM_FIELD', 'Campo(i) personalizzato(i) di questo ordine Shopgate:');
define('SHOPGATE_CONFIG_EXTENDED_CUSTOMER_GROUP', 'Gruppo di clienti');
define('SHOPGATE_CONFIG_EXTENDED_CUSTOMER_GROUP_DESCRIPTION', 'Scegliere il gruppo di clienti Shopgate (il gruppo di clienti a cui tutti i clienti ospiti saranno impostati al momento dell\'importazione degli ordini).');
define('SHOPGATE_CONFIG_EXTENDED_SHIPPING', 'Metodo di spedizione');
define('SHOPGATE_CONFIG_EXTENDED_SHIPPING_DESCRIPTION', 'Scegliere il metodo di spedizione per l\'importazione degli ordini. Questo verr&agrave; utilizzato per calcolare la tassa per le spese di spedizione.');
define('SHOPGATE_CONFIG_EXTENDED_SHIPPING_NO_SELECTION', '-- nessuna selezione --');
define('SHOPGATE_CONFIG_EXTENDED_STATUS_ORDER_SHIPPING_APPROVED', 'Spedizione non bloccata');
define('SHOPGATE_CONFIG_EXTENDED_STATUS_ORDER_SHIPPING_APPROVED_DESCRIPTION', 'Scegliere lo stato per gli ordini che non sono bloccati per la spedizione da Shopgate.');
define('SHOPGATE_CONFIG_EXTENDED_STATUS_ORDER_SHIPPING_BLOCKED', 'Spedizione bloccata');
define('SHOPGATE_CONFIG_EXTENDED_STATUS_ORDER_SHIPPING_BLOCKED_DESCRIPTION', 'Scegliere lo stato per gli ordini che sono bloccati per la spedizione da Shopgate.');
define('SHOPGATE_CONFIG_EXTENDED_STATUS_ORDER_SENT', 'Spedito');
define('SHOPGATE_CONFIG_EXTENDED_STATUS_ORDER_SENT_DESCRIPTION', 'Scegliere lo stato che si applica agli ordini che sono stati spediti.');
define('SHOPGATE_CONFIG_EXTENDED_STATUS_ORDER_CANCELED', 'Cancellato');
define('SHOPGATE_CONFIG_EXTENDED_STATUS_ORDER_CANCELED_NOT_SET', '- Stato non impostato -');
define('SHOPGATE_CONFIG_EXTENDED_STATUS_ORDER_CANCELED_DESCRIPTION', 'Scegliere lo stato per gli ordini che sono stati cancellati.');
define('SHOPGATE_CONFIG_SEND_ORDER_EMAIL', 'Posta di conferma');
define('SHOPGATE_CONFIG_SEND_ORDER_EMAIL_ON', 'S&igrave;');
define('SHOPGATE_CONFIG_SEND_ORDER_EMAIL_OFF', 'No');
define('SHOPGATE_CONFIG_SEND_ORDER_EMAIL_DESCRIPTION', 'Dopo che un ordine shopgate &egrave; stato completato con successo, una mail di conferma sar&agrave; inviata al cliente.se il prodotto o i prodotti erano scaricabili il link per il download &egrave; incluso in questa mail.');
define('SHOPGATE_CONFIG_PAYMENT_NAME_MAPPING', 'Mostra i nomi per i metodi di pagamento');
define('SHOPGATE_CONFIG_PAYMENT_NAME_MAPPING_DESCRIPTION', "Nomi individuali per i metodi di pagamento, che vengono utilizzati all'importazione dell'ordine. Definito da '=' e separato da ';'.<br/>(Esempio: PREPAY=Prepay;SHOPGATE=Gestito da Shopgate)<br/>");
define('SHOPGATE_CONFIG_PAYMENT_NAME_MAPPING_LINK', 'https://support.shopgate.com/hc/en-us/articles/202911763-Connecting-to-modified-eCommerce#4.4');
define('SHOPGATE_CONFIG_PAYMENT_NAME_MAPPING_LINK_DESCRIPTION', 'Link alla pagina di supporto');
### System Settings ###
define('SHOPGATE_CONFIG_SYSTEM_SETTINGS', 'Impostazioni di sistema');
define('SHOPGATE_CONFIG_SERVER_TYPE', 'Server Shopgate');
define('SHOPGATE_CONFIG_SERVER_TYPE_LIVE', 'In diretta su');
define('SHOPGATE_CONFIG_SERVER_TYPE_PG', 'Parco giochi');
define('SHOPGATE_CONFIG_SERVER_TYPE_CUSTOM', 'Personalizzato');
define('SHOPGATE_CONFIG_SERVER_TYPE_CUSTOM_URL', 'Url del server Shopgate personalizzato');
define('SHOPGATE_CONFIG_SERVER_TYPE_DESCRIPTION', 'Scegliere il server Shopgate a cui connettersi.');
?>