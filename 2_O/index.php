<?php 

require_once __DIR__.'/autoload.php';


$paypalIpn = new PaypalIpn();
$creditCard = new CreditCard();


// $paymentManager = new PaymentManager($paypalIpn);
$paymentManager = new PaymentManager($creditCard);
$paymentManager->process();