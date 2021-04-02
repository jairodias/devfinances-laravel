<?php

namespace App\Http\Controllers;

use App\Models\Transaction;

class TransactionController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function delete(Transaction $transaction)
    {
       $transaction->delete();

       return back()->with('success', 'Movimentação deletada com sucesso !');
    }
}
