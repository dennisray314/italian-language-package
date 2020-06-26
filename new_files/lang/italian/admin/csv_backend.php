<?php
   define('TITLE','CSV Backend');
   define('IMPORT','Import');
   define('EXPORT','Export');
   define('UPLOAD','carica file sul server');
   define('SELECT','Scegliere i dati importati e trasmetterli (/registro import)');
   define('SAVE','Memorizzare sul server (/registro export)');
   define('LOAD','Invia i dati  nel Browser');
   define('CSV_TEXTSIGN_TITLE','segni di riconoscimento del testo');
   define('CSV_TEXTSIGN_DESC','es. "');
   define('CSV_SEPERATOR_TITLE','segni separatori');
   define('CSV_SEPERATOR_DESC','es. ;');
   define('COMPRESS_EXPORT_TITLE','compressione');
   define('COMPRESS_EXPORT_DESC','compressione dei file esportati');
   define('CSV_SETUP','Registrazione');
   define('TEXT_IMPORT','');
   define('TEXT_PRODUCTS','Prodotti');
   define('TEXT_EXPORT','Il file esportato sar&agrave; memorizzato nel registro /export');
   define('CSV_CATEGORY_DEFAULT_TITLE','Categoria per l\'importazione');
   define('CSV_CATEGORY_DEFAULT_DESC','Tutti i prodotti del csv-importfile che <b>non</b> hanno una categoria definita saranno importati in questa categoria.<br/><b>Attenzione:</b> Se non volete importare prodotti che non hanno una categoria definita, allora selezionate la categoria "Top" in quanto non &egrave; possibile importare in questa categoria.');
   define('CSV_CAT_DEPTH_TITLE','Categoria profondit&agrave;');
   define('CSV_CAT_DEPTH_DESC','Quanto deve andare in profondit&agrave; l\'albero delle categorie? (ad es. con il default 4: categoria principale pi&ugrave; 3 sottocategorie)<br />Questa indicazione &egrave; importante per far s&igrave; che le categorie integrate nel CSV siano importate bene. Lo stesso vale per la funzione di esportazione.<br /><span style="color:#c00;">Pi&ugrave; di 4 pu&ograve; comportare una perdita di prestazioni e probabilmente non &egrave; facile da usare!');
?>