<?php
require_once(DIR_FS_CATALOG.'api/it-recht-kanzlei/classes/class.api_it_recht_kanzlei.php');
$api_it_recht_kanzlei = new api_it_recht_kanzlei();
define('MODULE_API_IT_RECHT_KANZLEI_TEXT_TITLE', 'IT Studio legale AGB-Interfaccia AGB v'.$api_it_recht_kanzlei->modulversion);
define('MODULE_API_IT_RECHT_KANZLEI_TEXT_DESCRIPTION', 'IT-Recht Kanzlei - Auto Updater per testi legali automatici<br/><br/><b>Attenzione:</b> Prima di utilizzare il modulo, &egrave; necessario effettuare l\'assegnazione delle pagine di contenuto.<hr noshade>');
define('MODULE_API_IT_RECHT_KANZLEI_STATUS_TITLE', 'Stato');
define('MODULE_API_IT_RECHT_KANZLEI_STATUS_DESC', 'Stato del modulo');
define('MODULE_API_IT_RECHT_KANZLEI_TOKEN_TITLE', 'Auth-Token');
define('MODULE_API_IT_RECHT_KANZLEI_TOKEN_DESC', 'Auth-Token devi dire all\'IT-Recht Kanzlei.');
define('MODULE_API_IT_RECHT_KANZLEI_VERSION_TITLE', 'Versione API');
define('MODULE_API_IT_RECHT_KANZLEI_VERSION_DESC', 'Questo dovrebbe essere cambiato solo se l\'IT-Recht Kanzlei vi dice di farlo. (Predefinito: 1.0)');
define('MODULE_API_IT_RECHT_KANZLEI_TYPE_AGB_TITLE', '<hr noshade>Testo legale Termini e condizioni');
define('MODULE_API_IT_RECHT_KANZLEI_TYPE_AGB_DESC', 'Si prega di specificare in quale pagina questo testo legale deve essere inserito automaticamente.');
define('MODULE_API_IT_RECHT_KANZLEI_TYPE_DSE_TITLE', 'Testo Legale Privacy');
define('MODULE_API_IT_RECHT_KANZLEI_TYPE_DSE_DESC', 'Si prega di specificare in quale pagina questo testo legale deve essere inserito automaticamente.');
define('MODULE_API_IT_RECHT_KANZLEI_TYPE_WRB_TITLE', 'Testo giuridico Revoca');
define('MODULE_API_IT_RECHT_KANZLEI_TYPE_WRB_DESC', 'Si prega di specificare in quale pagina questo testo legale deve essere inserito automaticamente.');
define('MODULE_API_IT_RECHT_KANZLEI_TYPE_IMP_TITLE', 'Testo legale Impronta');
define('MODULE_API_IT_RECHT_KANZLEI_TYPE_IMP_DESC', 'Si prega di specificare in quale pagina questo testo legale deve essere inserito automaticamente.');
define('MODULE_API_IT_RECHT_KANZLEI_PDF_AGB_TITLE', '<hr noshade>Termini di selezione PDF');
define('MODULE_API_IT_RECHT_KANZLEI_PDF_AGB_DESC', 'Indicazione se il testo di legge delle Condizioni sar&agrave; disponibile in formato PDF.');
define('MODULE_API_IT_RECHT_KANZLEI_PDF_DSE_TITLE', 'Selezione dell\'informativa sulla privacy PDF');
define('MODULE_API_IT_RECHT_KANZLEI_PDF_DSE_DESC', 'Indicazione se il testo legale dell\'Informativa sulla privacy sar&agrave; disponibile in formato PDF.');
define('MODULE_API_IT_RECHT_KANZLEI_PDF_WRB_TITLE', 'Revoca della selezione PDF');
define('MODULE_API_IT_RECHT_KANZLEI_PDF_WRB_DESC', 'Indicazione se il testo di legge sulla revoca deve essere disponibile in formato PDF.');
define('MODULE_API_IT_RECHT_KANZLEI_PDF_FILE_TITLE', '<hr noshade>Posizione PDF');
define('MODULE_API_IT_RECHT_KANZLEI_PDF_FILE_DESC', 'Specificare la posizione dei testi legali in PDF.');
?>