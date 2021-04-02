<?php

namespace App\Observers;

use App\Models\Transaction;

class TransactionObserver
{
    public function saving(Transaction $transaction)
    {
        $transaction->movement = $transaction->movement * 100;
    }

}
