<?php

namespace App\Wallet\Domain\Repositories;

use Illuminate\Http\Request;

/**
 * Interface TransactionsRepository
 * @package App\Wallet\Domain\Repositories
 */
interface TransactionsRepository
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function make(Request $request);
}
