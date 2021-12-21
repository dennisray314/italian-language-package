<?php
/* -----------------------------------------------------------------------------------------
   $Id: semknox_system.php 13231 2021-01-26 07:56:21Z GTB $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/

  define('MODULE_SEMKNOX_SYSTEM_TEXT_TITLE', 'Ricerca nel sito 360 Ricerca prodotti');
  define('MODULE_SEMKNOX_SYSTEM_TEXT_DESCRIPTION', 'Rivoluzionaria ricerca di prodotti di nuova generazione per il tuo business con preparazione dei dati completamente automatizzata.');
  define('MODULE_SEMKNOX_SYSTEM_STATUS_TITLE', 'Stato del modulo');
  define('MODULE_SEMKNOX_SYSTEM_STATUS_DESC', 'Attivare la ricerca nel sito 360 Ricerca prodotti');
  define('MODULE_SEMKNOX_SYSTEM_DEFAULT_CSS_TITLE', 'CSS standard');
  define('MODULE_SEMKNOX_SYSTEM_DEFAULT_CSS_DESC', 'Se il CSS standard di Site Search 360 deve essere caricato?');
  define('MODULE_SEMKNOX_SYSTEM_COLOR_TITLE', 'Colore d\'accento');
  define('MODULE_SEMKNOX_SYSTEM_COLOR_DESC', 'Specifica il colore d\'accento per titoli e pulsanti (l\'impostazione si applica solo quando viene caricato il CSS standard).');
  
  $languages = xtc_get_languages();
  foreach ($languages as $language) {
    define('MODULE_SEMKNOX_SYSTEM_API_'.$language['id'].'_TITLE', '['.strtoupper($language['code']).'] Chiave API');
    define('MODULE_SEMKNOX_SYSTEM_API_'.$language['id'].'_DESC', 'Chiave API per '.strtoupper($language['code']).'');

    define('MODULE_SEMKNOX_SYSTEM_PROJECT_'.$language['id'].'_TITLE', '['.strtoupper($language['code']).'] ID del progetto');
    define('MODULE_SEMKNOX_SYSTEM_PROJECT_'.$language['id'].'_DESC', 'ID del progetto per '.strtoupper($language['code']).'');
  }