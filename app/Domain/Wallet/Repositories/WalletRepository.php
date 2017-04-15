<?php

namespace App\Wallet\Domain\Repositories;

use Illuminate\Http\Request;

interface WalletRepository
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function create(Request $request);
}