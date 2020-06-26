<?php
$lang_array = array(
  'TEXT_PAYPAL_ORDERS_HEADING' => 'Dettagli PayPal',
  'TEXT_PAYPAL_NO_INFORMATION' => 'nessun dettaglio di pagamento disponibile',
    // transaction
  'TEXT_PAYPAL_TRANSACTION' => 'Dettagli sul pagamento',
  'TEXT_PAYPAL_TRANSACTION_ACCOUNT_OWNER' => 'Proprietario del conto:',
  'TEXT_PAYPAL_TRANSACTION_ADDRESS' => 'Indirizzo di spedizione:',
  'TEXT_PAYPAL_TRANSACTION_METHOD' => 'Pagamento:',
  'TEXT_PAYPAL_TRANSACTION_EMAIL' => 'Indirizzo e-mail:',
  'TEXT_PAYPAL_TRANSACTION_ACCOUNT_STATE' => 'Stato del conto:',
  'TEXT_PAYPAL_TRANSACTION_INTENT' => 'Intento:',
  'TEXT_PAYPAL_TRANSACTION_STATE' => 'Stato:',
   // transactions
  'TEXT_PAYPAL_TRANSACTIONS_STATUS' => 'Transaktions',
  'TEXT_PAYPAL_TRANSACTIONS_PAYMENT' => 'Pagamento:',
  'TEXT_PAYPAL_TRANSACTIONS_REASON' => 'Motivo:',
  'TEXT_PAYPAL_TRANSACTIONS_STATE' => 'Stato:',
  'TEXT_PAYPAL_TRANSACTIONS_TOTAL' => 'Importo:',
  'TEXT_PAYPAL_TRANSACTIONS_VALID' => 'valido per:',
  'TEXT_PAYPAL_TRANSACTIONS_ID' => 'ID:',
   // instruction
  'TEXT_PAYPAL_INSTRUCTIONS' => 'Vaglia postale',
  'TEXT_PAYPAL_INSTRUCTIONS_CHECKOUT' => 'Si prega di trasferire l\'importo di %s almeno a %s sul seguente conto:',
  'TEXT_PAYPAL_INSTRUCTIONS_CHECKOUT_SHORT' => 'Si prega di trasferire l\'importo di %s sul seguente conto:',
  'TEXT_PAYPAL_INSTRUCTIONS_AMOUNT' => 'Importo:',
  'TEXT_PAYPAL_INSTRUCTIONS_REFERENCE' => 'Utilizzo:',
  'TEXT_PAYPAL_INSTRUCTIONS_PAYDATE' => 'Pagabile a:',
  'TEXT_PAYPAL_INSTRUCTIONS_ACCOUNT' => 'Conto:',
  'TEXT_PAYPAL_INSTRUCTIONS_HOLDER' => 'Titolare:',
  'TEXT_PAYPAL_INSTRUCTIONS_IBAN' => 'IBAN:',
  'TEXT_PAYPAL_INSTRUCTIONS_BIC' => 'BIC:',
  // refund
  'TEXT_PAYPAL_REFUND' => 'Rimborso',
  'TEXT_PAYPAL_REFUND_LEFT' => 'Importo dei possibili rimborsi: ',
  'TEXT_PAYPAL_REFUND_COMMENT' => 'Commento:<br />(max 127 caratteri)',
  'TEXT_PAYPAL_REFUND_AMOUNT' => 'Importo:',
  'TEXT_PAYPAL_REFUND_SUBMIT' => 'Rimborso',
  // capture
  'TEXT_PAYPAL_CAPTURE' => 'Catturare',
  'TEXT_PAYPAL_CAPTURE_LEFT' => 'Importo delle catture possibili: ',
  'TEXT_PAYPAL_CAPTURE_IS_FINAL' => 'Acquisizione finale:',
  'TEXT_PAYPAL_CAPTURE_AMOUNT' => 'Importo:',
  'TEXT_PAYPAL_CAPTURE_SUBMIT' => 'Catturare',
  'TEXT_PAYPAL_CAPTURED' => 'Pagamento catturato',
  // error
  'TEXT_PAYPAL_ERROR_AMOUNT' => 'Si prega di inserire un importo valido',
  'TEXT_PAYPAL_ERROR_ALREADY_PAID' => 'Abbiamo gi&agrave; ricevuto il vostro pagamento. Grazie mille!',
  // diverse
  'MODULE_PAYMENT_PAYPAL_TEXT_ORDER' => 'Il tuo ordine a '.STORE_NAME,
  // status
  'TEXT_PAYPAL_NO_STATUS_CHANGE' => 'nessun cambiamento di stato',
    // template
  'TEXT_PAYPALINSTALLMENT_HEADING' => 'Pagare facilmente in rate mensili',
  'TEXT_PAYPALINSTALLMENT_DESCRIPTION' => 'Potete scegliere il vostro pagamento rateale e il piano di finanziamento adeguato nell\'ambito del processo di ordinazione. La vostra richiesta &egrave; completamente online e sar&agrave; completata in pochi passi qui nel negozio.',
  'TEXT_PAYPALINSTALLMENT_RATING_PLAN' => 'Finanziamento da %s con %s Rate Powered by PayPal',
  'TEXT_PAYPALINSTALLMENT_RATING_PLAN_SHORT' => 'Finanziamento da %s nel mese con',
  'TEXT_PAYPALINSTALLMENT_LEGAL' => 'Esempio rappresentativo secondo &sect; 6a PAngV',
  'TEXT_PAYPALINSTALLMENT_NOMINAL_RATE' => 'Tasso nominale',
  'TEXT_PAYPALINSTALLMENT_APR' => 'Tasso di interesse effettivo',
  'TEXT_PAYPALINSTALLMENT_TOTAL_COST' => 'Importo totale',
  'TEXT_PAYPALINSTALLMENT_TOTAL_NETTO' => 'Importo netto del prestito',
  'TEXT_PAYPALINSTALLMENT_TOTAL_INTEREST' => 'Interesse',
  'TEXT_PAYPALINSTALLMENT_MONTHLY_PAYMENT' => 'Rate mensili di ogni',
  'TEXT_PAYPALINSTALLMENT_NOTICE' => 'Finanziamenti disponibili da %s a %s valore del paniere con',
  'TEXT_PAYPALINSTALLMENT_NOTICE_PRODUCT' => 'Potete anche finanziare questo prodotto!',
  'TEXT_PAYPALINSTALLMENT_NOTICE_CART' => 'Potete anche finanziare questo cestino!',
  'TEXT_PAYPALINSTALLMENT_NOTICE_PAYMENT' => 'Potete anche finanziare questo ordine!',
   'TEXT_PAYPALINSTALLMENT_CREDITOR' => 'Prestatore',
  'TEXT_PAYPALINSTALLMENT_INFO_LINK' => 'Informazioni sulle possibili tariffe',
);
// define 
foreach ($lang_array as $key => $val) {
  defined($key) or define($key, $val);
}
?>