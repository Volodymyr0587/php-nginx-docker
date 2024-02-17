<?php 

declare(strict_types=1);

require_once '../PaymentProfile.php';
require_once '../Customer.php';
require_once '../Transaction.php';

// Classes & Objects
$transaction = new Transaction(5, 'Test');

echo $transaction->getCustomer()?->getPaymentProfile()?->id ?? 'foo';


