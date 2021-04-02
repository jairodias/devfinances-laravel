<?php

namespace App\Models\Traits;

use App\Models\Transaction;

trait Balance {

    public function getIncomesAttribute()
    {

        $incomes = $this->transactions->map(function(Transaction $transaction) {
            return ($transaction->movement > 0) ? $transaction->movement : 0;
        })->sum();

        return $incomes/100;
    }

    public function getExpensesAttribute()
    {
        $expenses = (int) $this->transactions->map(function(Transaction $transaction) {
            return ($transaction->movement < 0) ? $transaction->movement : 0;
        })->sum();

        return $expenses/100;
    }

    public function getTotalAttribute()
    {
        return $this->incomes + $this->expenses;
    }
}