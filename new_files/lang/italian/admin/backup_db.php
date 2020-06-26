<?php
define('HEADING_TITLE', 'Gestione del backup del database');
define('TEXT_INFO_DO_BACKUP', 'Il database &egrave; in fase di backup!');
define('TEXT_INFO_DO_BACKUP_OK', 'Il database &egrave; stato sottoposto a backup con successo!');
define('TEXT_INFO_DO_GZIP', 'Il file di backup &egrave; confezionato!');
define('TEXT_INFO_WAIT', 'Si prega di attendere!');
define('TEXT_INFO_DO_RESTORE', 'Il database &egrave; in fase di ripristino!');
define('TEXT_INFO_DO_RESTORE_OK', 'Il database &egrave; stato ripristinato con successo!');
define('TEXT_INFO_DO_GUNZIP', 'Il database &egrave; in fase di disimballaggio!');
define('ERROR_BACKUP_DIRECTORY_DOES_NOT_EXIST', 'Errore: La directory per il backup non esiste. Si prega di correggere l\'errore nel vostro configure.php.');
define('ERROR_BACKUP_DIRECTORY_NOT_WRITEABLE', 'Errore: Impossibile scrivere nella directory di backup.');
define('ERROR_DOWNLOAD_LINK_NOT_ACCEPTABLE', 'Errore: Il link per il download non &egrave; accettabile.');
define('ERROR_DECOMPRESSOR_NOT_AVAILABLE', 'Errore: Nessun disimballatore adatto disponibile.');
define('ERROR_UNKNOWN_FILE_TYPE', 'Errore: Tipo di file sconosciuto.');
define('ERROR_RESTORE_FAILES', 'Errore: Ripristino fallito.');
define('ERROR_DATABASE_SAVED', 'Errore: Non &egrave; stato possibile eseguire il backup del database.');
define('ERROR_TEXT_PATH', 'Errore: Il percorso per mysqldump non trovato o dato!');
define('SUCCESS_LAST_RESTORE_CLEARED', 'Di successo: L\'ultima data di restauro &egrave; stata cancellata.');
define('SUCCESS_DATABASE_SAVED', 'Di successo: &Egrave; stato effettuato il backup della banca dati.');
define('SUCCESS_DATABASE_RESTORED', 'Di successo: Il database &egrave; stato ripristinato.');
define('SUCCESS_BACKUP_DELETED', 'Di successo: Il backup &egrave; stato rimosso.');
define('TEXT_BACKUP_UNCOMPRESSED', 'Il file di backup &egrave; stato scompattato: ');
define('TEXT_SIMULATION', '<br>(Simulazione con file di log)');
?>