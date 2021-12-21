<?php
  /* --------------------------------------------------------------
   $Id: cookie_consent.js.php $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2019 [www.modified-shop.org]
   --------------------------------------------------------------
   Released under the GNU General Public License
   --------------------------------------------------------------*/

  define('MODULE_COOKIE_CONSENT_STATUS_TITLE', 'Stato del modulo');
  define('MODULE_COOKIE_CONSENT_STATUS_DESC', 'Attivare il modulo?');
  define('MODULE_COOKIE_CONSENT_SET_READABLE_COOKIE_TITLE', 'Imposta cookie leggibile');
  define('MODULE_COOKIE_CONSENT_SET_READABLE_COOKIE_DESC', '');

  define('MODULE_COOKIE_CONSENT_SET_READABLE_COOKIE_DETAIL', 'Se utilizza Google Tag Manager o altri software, anche questi possono inserire script e impostare cookie solo se il visitatore lo permette. Un ulteriore cookie leggibile pu&ograve; essere impostato in modo che il tag manager possa leggere la richiesta del cliente.<br /><br />Impostazione in Google Tag Manager:<br />Vai al menu \"Variabili\" e crea una nuova variabile sotto \"Variabili definite dall\'utente\". Per esempio, chiamatelo \"Cookieconsent\".<br />Poi cliccate su \"Configure Variable\" e selezionate il tipo \"First-Party-Cookie\". Inserisci il nome del cookie \"MODOilTrack\".<br /><br />Infine, puoi modificare il tuo \"Trigger\". <br />Imposta il tipo di trigger \"Pageview\" e seleziona l\'opzione \"Alcune pageviews\".<br />Come condizione, specifica: <em>\"Cookieconsent\"</em> (nome della variabile) contiene <em>[\"1\":true]</em>. Potete trovare il valore contenuto per ogni cookie nella configurazione del consenso dei cookie.<br /><br />Un\'istruzione illustrata pu&ograve; essere trovata qui');

  define('MODULE_COOKIE_CONSENT_EXTENDED_DESCRIPTION', '<strong><font color=\"red\">ATTENZIONE:</font></strong>  Fai le impostazioni sotto \"Configurazione\". -> <a href="'.xtc_href_link(FILENAME_COOKIE_CONSENT).'"><strong>\"Consenso dei cookie\"</strong></a> vor!');
  define('MODULE_COOKIE_CONSENT_MORE_INFO', 'Pi&ugrave; informazioni:');