<?php
define('HEADING_TITLE','Rimuovere le vecchie immagini dei prodotti');
define('LINK_INFO_TEXT', '<p>Con questa funzione &egrave; possibile cancellare le immagini dei prodotti dispensabili dalle seguenti directory:</p>
- /images/product_images/info_images<br/>
- /images/product_images/original_images<br/>
- /images/product_images/popup_images<br/>
- /images/product_images/thumbnail_images<br/>
<p>se non ci sono pi&ugrave; riferimenti ad essi nel database.<br/>Quando un\'immagine non &egrave; pi&ugrave; necessaria ad un articolo pu&ograve; essere rimossa in modo intelligente dal webserver.</p><br/>');
define('LINK_ORIGINAL', 'Rimuovere le vecchie immagini originali');
define('LINK_INFO', 'Rimuovere le vecchie immagini informative');
define('LINK_THUMBNAIL', 'Rimuovere le vecchie immagini in miniatura');
define('LINK_POPUP', 'Rimuovere le vecchie immagini popup');
define ('LINK_MESSAGE', 'Le immagini degli articoli superflui della directory "/images/product_images/%s_images" sono state cancellate.');
define ('LINK_MESSAGE_NO_DELETE', 'Non ci sono elementi superflui nella directory delle immagini &egrave; stato trovato "/images/product_images/%s_images".');
?>