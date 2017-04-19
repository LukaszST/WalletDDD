<?php

namespace App\Wallet\Infrastructure\Repositories;

use Illuminate\Http\Request;
use App\Wallet\Domain\Repositories\TransactionsRepository as TransactionsRepositoryContract;
class TransactionsRepository implements TransactionsRepositoryContract
{
    public function income(Request $request)
    {
        
    }

    public function expense(Request $request)
    {
        
    }
}