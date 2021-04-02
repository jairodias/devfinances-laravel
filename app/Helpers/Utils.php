<?php

namespace App\Helpers;

class Utils {

    public function formatBalance(float $amount)
    {
        $signal = ($amount > 0) ? "" : "-";

        return $signal . " R$ " . number_format(preg_replace('/-/',"",$amount,), 2, ',', '.');
    }
}