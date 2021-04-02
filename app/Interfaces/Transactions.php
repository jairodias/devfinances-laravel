<?php

namespace App\Interfaces;

use App\Models\Transaction;
use Illuminate\Http\Request;

interface Transactions {
    public function index(Request $request);

    public function delete(Transaction $transaction);

    public function create(Request $request);
}