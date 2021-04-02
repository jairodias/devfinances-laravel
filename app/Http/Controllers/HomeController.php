<?php

namespace App\Http\Controllers;

use App\Helpers\Utils;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * @var Utils
     */
    private $utils;

    /**
    *  @param Utils $utils
    */
    public function __construct(Utils $utils)
    {
        $this->middleware('auth');

        $this->utils = $utils;
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
}
