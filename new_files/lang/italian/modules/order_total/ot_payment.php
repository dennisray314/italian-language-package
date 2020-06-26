<?php
$num = 3; //Number scale of discounts
define('MODULE_ORDER_TOTAL_PAYMENT_HELP_LINK', ' <a onclick="window.open(\'popup_help.php?type=order_total&modul=ot_payment&lng=english\', \'HELP\', \'scrollbars=yes,resizable=yes,menubar=yes,width=800,height=600\'); return false" target="_blank" href="popup_help.php?type=order_total&modul=ot_payment&lng=english"><b>[HELP]</b></a>');
define('MODULE_ORDER_TOTAL_PAYMENT_HELP_TEXT', '<h2>Tipo di pagamento sconto &amp; supplemento</h2>
Se ci sono pi&ugrave; scale di sconti richiesti (il valore predefinito &egrave; <b>3</b>), il valore della variabile $num (file di lingua) e $this->num (file di modulo) deve essere cambiato al valore desiderato.
Un aumento successivo richiede una disinstallazione / reinstallazione del modulo o una correzione manuale del database!
<hr>
<h3>Campi scala di sconto</h3>
<p class="red">Nota: l\'indirizzo di spedizione &egrave; fondamentale per i codici dei paesi. Se uno sconto/supplemento deve essere valido per tutti i paesi, deve essere utilizzato il codice 00 o il codice del paese deve essere omesso completamente (incluso il &quot;|&quot;)!</p>
<h4>Per gli sconti utilizzare la seguente notazione:</h4>
<pre>   <span class="blue">DE</span>|<span class="green">100</span>:<span class="red">4</span>,<span class="green">200</span>:<span class="red">5</span></pre>
<p>Significato:</p>
<p>Per i clienti di <span class="blue">Germania</span>  con un volume d\'ordine da <span class="green">100&euro;</span> uno sconto di <span class="red">4%</span> sar&agrave; concesso, a partire da <span class="green">200&euro;</span> sar&agrave; concesso uno sconto del <span class="red">5%</span>.</p>
<pre>   <span class="green">100</span>:<span class="red">2</span>,<span class="green">200</span>:<span class="red">3</span></pre>
<p>Significato:</p>
<p>Per i clienti di tutti i paesi con un volume d\'ordine da <span class="green">100&euro;</span> sar&agrave; concesso uno sconto di <span class="rosso">2%</span>, da <span class="green">200&euro;</span> sar&agrave; concesso uno sconto di <span class="red">3%</span>.</p>
<h4>Per i supplementi utilizzare la seguente notazione:</h4>
<pre>   <span class="blue">DE</span>|<span class="green">100</span>:<span class="red">-3</span></pre>
<p>Significato:</p>
<p>Per i clienti di <span class="blue">Germania</span> con un volume d\'ordine di <span class="green">100&euro;</span> verr&agrave; aggiunto un supplemento di <span class="red">3%</span>.</p>.
<h4>Esempio per Paypal</h4>
1. scala di sconto
<pre>   <span class="blue">DE</span>|<span class="green">0</span>:<span class="red">-1.9</span>&amp;<span class="lila">-0.35</span></pre>
2. scala di sconto
<pre>   <span class="blue">00</span>|<span class="green">0</span>:<span class="red">-3.4</span>&amp;<span class="lila">-0.35</span></pre>
<p>Significato:</p>
<p>Per i clienti di <span class="blue">Germania</span> con un volume d\'ordine di <span class="green">0&euro;</span> (cio&egrave; sempre) verr&agrave; aggiunto un supplemento di <span class="red">1,9%</span> pi&ugrave; <span class="lila">0,35&euro;</span>.</p>.
<p>Per i clienti di <span class="blue">tutti gli altri paesi (00=tutti)</span> con un volume d\'ordine da <span class="green">0&euro;</span> verr&agrave; aggiunto un supplemento di <span class="red">3,4%</span> pi&ugrave; <span class="lila">0,35&euro;</span>.</p>.
<p>Important is the sequence of the entries (all other countries always at last) and that  &quot;Multiple calculation&quot; is set to &quot;false&quot;, otherwise both surcharges will be added.</p>
<h4>Esempio per importi fissi</h4>
<pre>   <span class="green">0</span>:<span class="red">0</span>&amp;<span class="lila">-2</span></pre>
<p>Significato:</p>
<p>Per i clienti di tutti i paesi con un volume d\'ordine di <span class="green">0&euro;</span> (cio&egrave; sempre) verr&agrave; aggiunto un supplemento di <span class="red">0%</span> (quindi nessun supplemento percentuale) pi&ugrave; <span class="lila">2,00&euro;</span> (supplemento fisso).</p>.
<hr>
<h3>Fields payment type</h3>
<p>Inserire il codice di utilizzo interno <b>codice</b> del tipo di pagamento, ad esempio <b>ordine di denaro</b> per assegno/ordine di denaro o <b>codice</b> per contrassegno. Altri tipi di pagamento devono essere separati da virgola.</p>
Vedi anche Moduli -&gt; Sistemi di pagamento -&gt; colonna &quot;Modulname (per uso interno)&quot;.<br/><br/>
<hr>
<h3>Visualizzazione nel pagamento alla cassa durante il processo di ordinazione</h3>
Se lo sconto appropriato deve essere mostrato durante il processo di ordinazione quando un pagamento deve essere selezionato, impostare l\'opzione &quot;Visualizza in tipi di pagamento&quot; a &quot;true&quot;. <br/><br/><br/>
Weiter kann man mit der Option &quot;Anzeigeart im Bestellprozess bei der Zahlungsauswahl&quot; die Art der Darstellung einstellen:
<p> -- default: percentuale o importo, a seconda delle voci della scala degli sconti</p>
<p> -- prezzo: indicare sempre l\'importo effettivo</p>'
);
define('MODULE_ORDER_TOTAL_PAYMENT_TITLE', 'Tipo di pagamento sconto &amp; supplemento');
define('MODULE_ORDER_TOTAL_PAYMENT_DESCRIPTION', 'Tipo di pagamento sconto &amp; supplemento'.MODULE_ORDER_TOTAL_PAYMENT_HELP_LINK);
define('MODULE_ORDER_TOTAL_PAYMENT_STATUS_TITLE', 'Mostra lo sconto');
define('MODULE_ORDER_TOTAL_PAYMENT_STATUS_DESC', 'Vuoi attivare lo sconto per l\'ordine');
define('MODULE_ORDER_TOTAL_PAYMENT_SORT_ORDER_TITLE', '<hr>Criterio di ordinamento');
define('MODULE_ORDER_TOTAL_PAYMENT_SORT_ORDER_DESC', 'Sequenza di visualizzazione');
if (defined('MODULE_ORDER_TOTAL_PAYMENT_NUMBER')) {
  for ($j=1; $j<=MODULE_ORDER_TOTAL_PAYMENT_NUMBER; $j++) {
    define('MODULE_ORDER_TOTAL_PAYMENT_PERCENTAGE' . $j . '_TITLE', $j . '. Percentuale di sconto');
    define('MODULE_ORDER_TOTAL_PAYMENT_PERCENTAGE' . $j . '_DESC', 'Importo dello sconto (paesi|valore:percentuale&tariffa)');
    define('MODULE_ORDER_TOTAL_PAYMENT_TYPE' . $j . '_TITLE', $j . '. Tipo di pagamento');
    define('MODULE_ORDER_TOTAL_PAYMENT_TYPE' . $j . '_DESC', 'Tipo di pagamento per ottenere lo sconto');
  }
}
define('MODULE_ORDER_TOTAL_PAYMENT_INC_SHIPPING_TITLE', '<hr>Includi la spedizione');
define('MODULE_ORDER_TOTAL_PAYMENT_INC_SHIPPING_DESC', 'Includere la spedizione nel calcolo');
define('MODULE_ORDER_TOTAL_PAYMENT_INC_TAX_TITLE', '<hr>Includere l\'imposta');
define('MODULE_ORDER_TOTAL_PAYMENT_INC_TAX_DESC', 'Includere la spedizione nel calcolo');
define('MODULE_ORDER_TOTAL_PAYMENT_CALC_TAX_TITLE', '<hr>Calcolare l\'imposta');
define('MODULE_ORDER_TOTAL_PAYMENT_CALC_TAX_DESC', 'Ricalcolare l\'imposta sull\'importo scontato');
define('MODULE_ORDER_TOTAL_PAYMENT_ALLOWED_TITLE', '<hr>Zone consentite');
define('MODULE_ORDER_TOTAL_PAYMENT_ALLOWED_DESC' , 'Si prega di inserire le zone <b>separatamente</b> che dovrebbero essere autorizzate ad utilizzare questo modulo (ad es. AT,DE (lasciare vuote se si desidera consentire tutte le zone))');
define('MODULE_ORDER_TOTAL_PAYMENT_DISCOUNT', 'Sconto');
define('MODULE_ORDER_TOTAL_PAYMENT_FEE', 'Tassa');
define('MODULE_ORDER_TOTAL_PAYMENT_TAX_CLASS_TITLE','<hr>Classe fiscale');
define('MODULE_ORDER_TOTAL_PAYMENT_TAX_CLASS_DESC','Utilizzare la seguente classe fiscale sulla tassa d\'ordine bassa.');
define('MODULE_ORDER_TOTAL_PAYMENT_BREAK_TITLE','<hr>Calcolo multiplo');
define('MODULE_ORDER_TOTAL_PAYMENT_BREAK_DESC','&Egrave; possibile il calcolo multiplo? Se il falso calcolo viene interrotto dopo la prima impostazione del raccordo.');
define('MODULE_ORDER_TOTAL_PAYMENT_SHOW_IN_CHECKOUT_PAYMENT_TITLE', '<hr>Visualizzazione nei tipi di pagamento');
define('MODULE_ORDER_TOTAL_PAYMENT_SHOW_IN_CHECKOUT_PAYMENT_DESC', 'Visualizzazione durante il processo di checkout alla cassa');
define('MODULE_ORDER_TOTAL_PAYMENT_SHOW_TYPE_TITLE', '<hr>Modalit&agrave; di visualizzazione dei tipi di pagamento');
define('MODULE_ORDER_TOTAL_PAYMENT_SHOW_TYPE_DESC', 'Visualizzazione nel processo di ordinazione alla cassa <br /> - default: percentuale o importo, a seconda degli input a sconto <br /> - prezzo: mostrer&agrave; sempre l\'importo effettivo');
define('MODULE_ORDER_TOTAL_PAYMENT_NUMBER_TITLE', 'Numero Tipo di pagamento');
define('MODULE_ORDER_TOTAL_PAYMENT_NUMBER_DESC', 'Numero di Tipo di pagamento sconto &amp; supplemento');
?>