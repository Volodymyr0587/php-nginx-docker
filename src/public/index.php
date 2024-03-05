<?php

require_once __DIR__ . '/../vendor/autoload.php';

$service = new \App\Interfaces\DebtCollectionService();

echo $service->collectDebt(new App\Interfaces\Rocky()) . PHP_EOL;