<?php

namespace App\Wallet\Infrastructure\Repositories;

use App\Domain\Wallet\Domain\ValueObjects\Currency\Currency;
use App\Domain\Wallet\Entities\Wallet\Wallet;
use App\Domain\Wallet\ValueObjects\Amount\Amount;
use App\Domain\Wallet\ValueObjects\Transactions\Transactions;
use Illuminate\Http\Request;
use App\Domain\Wallet\Domain\ValueObjects\TypeTransaction\TypeTransaction;
use App\Wallet\Domain\Repositories\TransactionsRepository as TransactionsRepositoryContract;
use Illuminate\Support\Facades\Auth;

/**
 * Class TransactionsRepository
 * @package App\Wallet\Infrastructure\Repositories
 */
class TransactionsRepository implements TransactionsRepositoryContract
{
    /**
     * @inheritdoc
     */
    public function make(Request $request)
    {
        Auth::user();
        $userId = (int)Auth::id();

        $type = new TypeTransaction($request->input('type'));

        $walletId = $request->input('walletId');

        $currency = new Currency($request->input('currency'));

        $amount = new Amount($request->input('amount'), $type);

        $name = $request->input('name');

        $transaction = Transactions::make($userId, $type, $walletId, $currency, $amount, $name);

        $updateWallet = Wallet::updateAfterCreateTransaction($walletId, $amount);
    }
}