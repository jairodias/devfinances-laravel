<?php

namespace App\Http\Controllers;

use App\Helpers\Utils;
use App\Interfaces\Transactions;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller implements Transactions
{

   /**
     * @var Utils
     */
    private $utils;

    /**
     * @var Transaction
     */
    private $transaction;


    /**
     * @param Utils $utils
     * @param Transaction $transaction
     */
    public function __construct(Utils $utils, Transaction $transaction)
    {
        $this->middleware('auth');

        $this->utils = $utils;
        $this->transaction = $transaction;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $transactions = $request->user()->transactions;

        return view('home', [
            'transactions' => $transactions,
            'incomes' => $request->user()->incomes,
            'expenses' => $request->user()->expenses,
            'total' => $this->utils->formatBalance($request->user()->total)
        ]);
    }

    public function create(Request $request)
    {
        $this->transaction->create($request->all());

        return back()->with('success', 'Movimentação criada com sucesso !');
    }

    public function delete(Transaction $transaction)
    {
       $transaction->delete();

       return back()->with('success', 'Movimentação deletada com sucesso !');
    }
}
