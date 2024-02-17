<?php 

declare(strict_types=1);

require_once '../Transaction.php';

// Classes & Objects
$transaction = (new Transaction(100, 'Transaction 1'))
    ->addTax(8)
    ->applyDiscount(10);

$amount = $transaction->getAmount();

unset($transaction);

var_dump($amount);

