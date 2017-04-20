<?php

namespace App\Wallet\Infrastructure\Repositories;

use App\Domain\Wallet\Domain\ValueObjects\Currency\Currency;
use App\Domain\Wallet\Entities\Wallet\Wallet;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Wallet\Domain\Repositories\WalletRepository as WalletRepositoryContract;

class WalletRepository implements WalletRepositoryContract
{
    /**
     * @inheritdoc
     */
    public function create(Request $request)
    {
        Auth::user();
        $userId = (int)Auth::id();

        $currency = new Currency($request->input('currency'));

        return Wallet::create($userId, $currency, $request->input('name'));
    }
}