<?php

namespace App\Wallet\Domain\Repositories;

use Illuminate\Http\Request;

interface TransactionsRepository
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function income(Request $request);

    public function expense(Request $request);
}