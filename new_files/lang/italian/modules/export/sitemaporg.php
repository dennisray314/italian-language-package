<?php
/* -----------------------------------------------------------------------------------------
   
   $Id: sitemaporg.php 
   XML-Sitemap.org for xt:Commerce SP2.1a
   by Mathis Klooss
   V1.2
   -----------------------------------------------------------------------------------------
      Original Script:
   $Id: gsitemaps.php 
   Google Sitemaps by hendrik.koch@gmx.de
   V1.1 August 2006
   -----------------------------------------------------------------------------------------
   XT-Commerce - community made shopping
   http://www.xt-commerce.com

   -----------------------------------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(cod.php,v 1.28 2003/02/14); www.oscommerce.com 
   (c) 2003	 nextcommerce (invoice.php,v 1.6 2003/08/24); www.nextcommerce.org

   Released under the GNU General Public License 
   ---------------------------------------------------------------------------------------*/

define('MODULE_SITEMAPORG_TEXT_DESCRIPTION', 'La definizione standard pu&ograve; essere trovata qui: <a href="http://www.sitemaps.org/" target="_blank">www.sitemap.org</a>');
define('MODULE_SITEMAPORG_TEXT_TITLE', 'XML Sitemap.org');
define('MODULE_SITEMAPORG_FILE_TITLE' , '<hr />Nome del file');
define('MODULE_SITEMAPORG_FILE_DESC' , 'Inserisci un nome di file per la mappa del sito, se vuoi che sia salvata localmente<br />(Directory "export/")');
define('MODULE_SITEMAPORG_STATUS_DESC','Stato del modulo');
define('MODULE_SITEMAPORG_STATUS_TITLE','Stato');
define('MODULE_SITEMAPORG_ROOT_TITLE', '<hr /><b>Installazione in Shoproot?</b>');
define('MODULE_SITEMAPORG_ROOT_DESC', 'Salvare il file sitemap nella directory principale?');
define('MODULE_SITEMAPORG_GZIP_TITLE', '<b>Utilizzare la compressione gzip?</b>');
define('MODULE_SITEMAPORG_GZIP_DESC', 'L\'estensione del file ".gz" viene aggiunta automaticamente!');
define('MODULE_SITEMAPORG_EXPORT_TITLE', '<hr /><b>Scaricare?</b>');
define('MODULE_SITEMAPORG_EXPORT_DESC', 'Vuoi scaricare il file?');
define('MODULE_SITEMAPORG_CUSTOMERS_STATUS_TITLE', 'Gruppo di clienti');
define('MODULE_SITEMAPORG_CUSTOMERS_STATUS_DESC','Inserisci qui quale gruppo di clienti deve essere usato per l\'esportazione di sitemap.xml.');
define('MODULE_SITEMAPORG_LANGUAGE_TITLE', 'Lingua');
define('MODULE_SITEMAPORG_LANGUAGE_DESC','Inserisci qui quale lingua dovrebbe essere usata per l\'esportazione di sitemap.xml.');
?>