<?php
define('NAVBAR_TITLE', 'esecuzione conto');
define('HEADING_TITLE', 'Amministratore conto cliente');
define('TEXT_ORIGIN_LOGIN', '<font color="#FF0000"><small><b>ATTENZIONE:</b></font></small> Se possiede un conto si registri su <a href="%s"><u><b>hier</b></u></a>.');
define('EMAIL_SUBJECT', 'Benvenuto in ' . STORE_NAME);
define('EMAIL_GREET_MR', 'Gentile Signor ' . stripslashes($HTTP_POST_VARS['lastname']) . ',' . "\n\n");
define('EMAIL_GREET_MS', 'Gentile Signora ' . stripslashes($HTTP_POST_VARS['lastname']) . ',' . "\n\n");
define('EMAIL_GREET_NONE', 'Gentile ' . stripslashes($HTTP_POST_VARS['firstname']) . ',' . "\n\n");
define('EMAIL_WELCOME', 'BEnvenuto in  <b>' . STORE_NAME . '</b>.' . "\n\n");
define('EMAIL_TEXT', 'Ora pu&ograve; utilizzare il nostro <b>Online-Service</b>. Il servizo &egrave; offerto da:' . "\n\n" . '<li><b>Carrello</b> - Ogni articolo resta registrato fino a quando sar&agrave; pagato alla cassa o tolto dal carrello.' . "\n" . '<li><b>lista indirizzi</b> - Ora possiamo inviare l\'articolo all\'indirizzo datoci. La strada perfetta per inviare un regalo di compleanno.' . "\n" . '<li><b>ordinazioni</b> - Ora pu&ograve; controllare i suoi ordini.' . "\n" . '<li><b>Considerazioni sul\'articolo</b> - Comunichi le sue considerazioni agli altri clienti.' . "\n\n");
define('EMAIL_CONTACT', 'In caso di domande al nostro servizio clienti si metta in contatto con noi: ' . STORE_OWNER_EMAIL_ADDRESS . '.' . "\n\n");
define('EMAIL_WARNING', '<b>Attenzione:</b>Questo indirizzo e-mail ci &egrave; stato comunicato da un cliente. Se lei non &egrave; registrato ci invii una comunicazione per e-mail ' . STORE_OWNER_EMAIL_ADDRESS . '.' . "\n");
define('ENTRY_PAYMENT_UNALLOWED','Modulo pagamento non disponibile:');
define('ENTRY_SHIPPING_UNALLOWED','Modulo spedizione non disponibile:');
?>