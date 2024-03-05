<?php

namespace App\Interfaces;

class CollectionAgency implements DebtCollector
{
    public function collect(float $owedAmount): float
    {
        $guaranted = $owedAmount * 0.5;

        return mt_rand($guaranted, $owedAmount);
    }
}