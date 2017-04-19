<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionsController extends Controller
{

    private $transactionRepositry;

    /**
     * TransactionsController constructor.
     * @param $transactionRepositry
     */
    public function __construct($transactionRepositry)
    {
        $this->transactionRepositry = $transactionRepositry;
    }

    public function expense(Request $request)
    {
        $expense = $this->transactionRepositry();
    }

    public function income(Request $request)
    {
        
    }
}
