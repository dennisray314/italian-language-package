<?php
/* -----------------------------------------------------------------------------------------
   $Id: products_export.php 13060 2020-12-14 13:45:14Z GTB $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/

  define('MODULE_PRODUCTS_EXPORT_TEXT_DESCRIPTION', 'Esportazione di prodotti');
  define('MODULE_PRODUCTS_EXPORT_TEXT_TITLE', 'Esportazione di prodotti - CSV');

  define('MODULE_PRODUCTS_EXPORT_STATUS_DESC','Stato del modulo');
  define('MODULE_PRODUCTS_EXPORT_STATUS_TITLE','Stato');
  define('MODULE_PRODUCTS_EXPORT_FILE_TITLE' , 'Nome del file');
  define('MODULE_PRODUCTS_EXPORT_FILE_DESC' , 'Inserisci un nome di file.<br />(esportazione di directory/)');

  define('MODULE_PRODUCTS_EXPORT_CUSTOMERS_STATUS_TITLE','<br><strong>Stato dei clienti:</strong>');
  define('MODULE_PRODUCTS_EXPORT_CUSTOMERS_STATUS_DESC','Seleziona il gruppo di clienti per il prezzo esportato. (Se non hai prezzi per gruppi di clienti, scegli <i>Ospite</i>):');
  define('MODULE_PRODUCTS_EXPORT_LANGUAGE_TITLE','<br><strong>Lingua:</strong>');
  define('MODULE_PRODUCTS_EXPORT_LANGUAGE_DESC','Lingua nel file di esportazione');
  define('MODULE_PRODUCTS_EXPORT_CURRENCY_TITLE','<br><strong>Valuta:</strong>');
  define('MODULE_PRODUCTS_EXPORT_CURRENCY_DESC','Valuta nel file di esportazione');
  define('MODULE_PRODUCTS_EXPORT_CAMPAIGNS_TITLE','<br><strong>Campagna:</strong>');
  define('MODULE_PRODUCTS_EXPORT_CAMPAIGNS_DESC','Collegati alla campagna.');
  define('MODULE_PRODUCTS_EXPORT_EXPORT_TITLE','<br><strong>Stoccaggio:</strong>');
  define('MODULE_PRODUCTS_EXPORT_EXPORT_DESC','Si prega di NON interrompere il processo di backup. Questo pu&ograve; richiedere alcuni minuti.');

  define('TEXT_EXPORT_YES','Scaricare');
  define('TEXT_EXPORT_NO','Salva');
