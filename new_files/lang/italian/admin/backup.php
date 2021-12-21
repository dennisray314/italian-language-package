<?php
define('HEADING_TITLE', 'Protezione bancadati'); 
define('TABLE_HEADING_TITLE', 'Titolo');
define('TABLE_HEADING_FILE_DATE', 'Data');
define('TABLE_HEADING_FILE_SIZE', 'Dimensione');
define('TABLE_HEADING_ACTION', 'Azione');
define('TEXT_INFO_HEADING_NEW_BACKUP', 'Nuova memorizzazione');
define('TEXT_INFO_HEADING_RESTORE_LOCAL', 'Ripristino locale');
define('TEXT_INFO_NEW_BACKUP', 'Il processo di memorizzazione non deve essere interrotto IN NESSUN CASO. Questo pu&ograve; durare alcuni minuti.');
define('TEXT_INFO_UNPACK', '<br /><br />(Dopo che i file vengono estratti dall\'archivio)');
define('TEXT_INFO_RESTORE', 'Il processo di ripristino non deve essere interrotto IN NESSUN CASO.<br /><br />Pi&ugrave; &egrave; grande il file protezione - pi&ugrave; dura il processo!<br /><br />Se &egrave; possibile utilizzi il mysql client.<br /><br />esempio:<br /><br /><b>mysql -h' . DB_SERVER . ' -u' . DB_SERVER_USERNAME . ' -p ' . DB_DATABASE . ' < %s </b> %s');
define('TEXT_INFO_RESTORE_LOCAL', 'Il processo di ripristino non deve essere interrotto IN NESSUN CASO.<br /><br />Pi&ugrave; &egrave; grande il file Protezione - pi&ugrave; dura il processo!');
define('TEXT_INFO_RESTORE_LOCAL_RAW_FILE', 'Il file caricato deve essere del tipo raw sql (solo testo).');
define('TEXT_INFO_DATE', 'Data:');
define('TEXT_INFO_SIZE', 'Dimensione:');
define('TEXT_INFO_COMPRESSION', 'comprimere:');
define('TEXT_INFO_USE_GZIP', 'con GZIP');
define('TEXT_INFO_USE_ZIP', 'con ZIP');
define('TEXT_INFO_USE_NO_COMPRESSION', 'nessuna compressione (Raw SQL)');
define('TEXT_INFO_DOWNLOAD_ONLY', 'Solo da scaricare (non memorizzare sul Server)');
define('TEXT_INFO_BEST_THROUGH_HTTPS', 'usare il collegamento HTTPS sicuro!');
define('TEXT_DELETE_INTRO', 'Sei sicuro di voler cancellare questo backup?');
define('TEXT_NO_EXTENSION', 'nessuna');
define('TEXT_BACKUP_DIRECTORY', 'registro memorizzazione:');
define('TEXT_LAST_RESTORATION', 'Ultima registrazione:');
define('TEXT_FORGET', '(<u>dimenticata</u>)');
define('TEXT_DELETE_INTRO', '&egrave; sicuro di voler cancellare questa registrazione?');
define('ERROR_BACKUP_DIRECTORY_DOES_NOT_EXIST', 'Errore: Questo registro memorizzazione non esiste.');
define('ERROR_BACKUP_DIRECTORY_NOT_WRITEABLE', 'Errore: Questo registro memorizzazione &egrave; protetto da scrittura.');
define('ERROR_DOWNLOAD_LINK_NOT_ACCEPTABLE', 'Errore: Download Link non accettabile.');
define('SUCCESS_LAST_RESTORE_CLEARED', 'Esito: l\'ultima registrazione dati &egrave; stata cancellata.');
define('SUCCESS_DATABASE_SAVED', 'Esito: La banca dati &egrave; protetta.');
define('SUCCESS_DATABASE_RESTORED', 'Esito: La banca dati &egrave; stata ripristinata.');
define('SUCCESS_BACKUP_DELETED', 'Esito: La protezione file &egrave; stata cancellata.');
define('SUCCESS_BACKUP_UPLOAD', 'Il successo: Il file di backup &egrave; stato caricato.');
//TEXT_COMPLETE_INSERTS
define('TEXT_COMPLETE_INSERTS', "<b>Completa 'INSERISCI</b><br> - i nomi dei campi vengono inseriti in ogni riga INSERIRE (backup aumentato)");
define('TEXT_INFO_TABLES_IN_BACKUP', '<br />' . "\n" .'<b>Tabelle in questo backup:</b>' . "\n");
define('TEXT_INFO_NO_INFORMATION', 'Nessuna informazione disponibile');
//UTF-8 convert
define('TEXT_CONVERT_TO_UTF', 'Convertire il database in UTF-8');
define('TEXT_IMPORT_UTF', 'Ripristinare la banca dati UTF-8');
//TEXT_REMOVE_COLLATE
define('TEXT_REMOVE_COLLATE', "<b>Senza codifica 'COLLATE' e 'DEFAULT CHARSET'.</b><br> - Le dichiarazioni di codifica non sono inserite. Utile quando si migra verso un'altra codifica di database.");
//TEXT_REMOVE_ENGINE
define('TEXT_REMOVE_ENGINE', "<b>Senza motori di stoccaggio 'ENGINE'.</b><br> - Le dichiarazioni del motore di archiviazione (MyISAM,InnoDB) non sono inserite.");
define('TEXT_IMPORT_UTF8_NOTICE', '<b>Attenzione:</b> il database viene convertito in UTF-8.');
define('TEXT_INFO_CHARSET', 'Charset:');

define('TEXT_TABLES_BACKUP_TYPE', '<b>Backup</b><br> - Quali tabelle devono essere salvate?');
define('TEXT_BACKUP_ALL', 'Tutti i tavoli');
define('TEXT_BACKUP_CUSTOM', 'Tabelle selezionate');
define('TEXT_TABLES_TO_BACKUP', '<b>Le seguenti tabelle dovrebbero essere salvate:</b>');
?>