<?php
  /* --------------------------------------------------------------
   $Id: cookie_consent.php 13006 2020-12-06 15:26:30Z GTB $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2019 [www.modified-shop.org]
   --------------------------------------------------------------
   Copyright (c) 2019, Andreas Guder [info@andreas-guder.de]     
   --------------------------------------------------------------   
   Released under the GNU General Public License
   --------------------------------------------------------------*/

  define('HEADING_TITLE', 'Cookie-Consenso');
  define('HEADING_TITLE_DETAIL', 'Consenso per i cookie - Cookie');

  define('TABLE_HEADING_ACTION', 'Azione');
  define('TABLE_HEADING_STATUS', 'Stato');
  define('TABLE_HEADING_SORT', 'Ordina');

  define('TABLE_HEADING_VALUES_CONTENT', 'Cookie/Gruppo');
  define('TABLE_HEADING_VALUES_NAME', 'Nome');
  define('TABLE_HEADING_VALUES_DESCRIPTION', 'Descrizione');
  define('TABLE_HEADING_VALUES_COOKIES', 'Cookie');

  define('TABLE_HEADING_OPTIONS_NAME', 'Nome');
  define('TABLE_HEADING_OPTIONS_DESCRIPTION', 'Descrizione');

  define('TEXT_INFO_DATE_ADDED', 'Date added:');
  define('TEXT_INFO_LAST_MODIFIED', 'Last modified:');

  define('TEXT_INFO_VALUE_NAME', 'Nome:');
  define('TEXT_INFO_VALUE_DESCRIPTION', 'Descrizione:');
  define('TEXT_INFO_VALUE_COOKIES', 'Cookie:');
  define('TEXT_INFO_VALUE_SORT', 'Ordina:');
  define('TEXT_INFO_VALUE_COOKIES_DESC', 'Inserite il nome del cookie da cancellare. Si possono specificare pi&ugrave; nomi separati da virgole. Puoi anche inserire solo i primi caratteri dei nomi, ma non devono sovrapporsi ad altri cookie per non cancellare il cookie sbagliato.');

  define('TEXT_INFO_HEADING_NEW_VALUE', 'Nuovo cookie/gruppo');
  define('TEXT_INFO_NEW_VALUE_INTRO', 'Inserisci il nuovo cookie includendo tutti i dati rilevanti');
  define('TEXT_INFO_HEADING_EDIT_VALUE', 'modifica cookie');
  define('TEXT_INFO_EDIT_VALUE_INTRO', 'Si prega di fare tutte le modifiche necessarie.');
  define('TEXT_INFO_HEADING_DELETE_VALUE', 'cancella cookie/gruppi');
  define('TABLE_HEADING_VALUES_PURPOSEID', 'purpose-id');
  define('TEXT_INFO_HEADING_JSCRIPT_SRC', 'Javascript-Tag per include script');
  define('TEXT_INFO_HEADING_JSCRIPT_DIRECT', 'Tag Javascript per script in linea');
  define('TEXT_INFO_HEADING_JSCRIPT_OTHER_CODE', 'Codice per altri elementi di tracciamento');
  define('TEXT_INFO_DELETE_VALUE_INTRO', 'Sei sicuro di voler cancellare questo cookie?');
  define('TEXT_INFO_HEADING_EXTERNAL_TRIGGER', '&quot;MODOilTrack&quot; contiene');

  define('TEXT_DISPLAY_NUMBER_OF_VALUES', 'Visualizzati da <b>%d</b> a <b>%d</b> (di <b>%d</b> biscotti)');
  define('TEXT_INFO_WARNING_COOKIES', '<b>ATTENZIONE:</b> Ci sono ancora %s cookies associati a questa categoria! Questi cookie vengono cancellati insieme alla categoria.');

  define('TEXT_INFO_OPTION_NAME', 'Nome:');
  define('TEXT_INFO_OPTION_DESCRIPTION', 'Descrizione:');
  define('TEXT_INFO_OPTION_SORT', 'Ordina:');

  define('TEXT_INFO_NUMBER_OPTION', 'Numero di cookie:');
  define('TEXT_INFO_HEADING_NEW_OPTION', 'nuova categoria');
  define('TEXT_INFO_NEW_OPTION_INTRO', 'Inserisci la nuova categoria includendo tutti i dati rilevanti');
  define('TEXT_INFO_HEADING_EDIT_OPTION', 'modifica categoria');
  define('TEXT_INFO_EDIT_OPTION_INTRO', 'Si prega di fare tutte le modifiche necessarie.');
  define('TEXT_INFO_HEADING_DELETE_OPTION', 'Cancellare la categoria');
  define('TEXT_INFO_DELETE_OPTION_INTRO', 'Sei sicuro di voler cancellare questa categoria?');

  define('TEXT_DISPLAY_NUMBER_OF_OPTIONS', 'Visualizzati sono <b>%d</b> a <b>%d</b> (di un totale di <b>%d</b> propriet&agrave;)');

  define('SORT_ORDER','Ordinamento');
  define('TEXT_SORTORDER', 'Ordinamento');
  define('BUTTON_COOKIES', 'Cookie');
