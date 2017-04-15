<?php

namespace App\Wallet\Infrastructure\Repositories;

use App\Wallet as WalletModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Domain\Entities\Wallet\Wallet;
use App\Wallet\Domain\Repositories\WalletRepository as WalletRepositoryContract;
use League\Flysystem\Exception;

class WalletRepository implements WalletRepositoryContract
{
    /**
     * @inheritdoc
     */
    public function create(Request $request)
    {
        DB::beginTransaction();
        try {

            $wallet = new WalletModel();
            $wallet->UserID = $request->UserID;
            $wallet->currency = $request->Currency;
            $wallet->Name = $request->Name;
            $wallet->Amount = $request->Amount;
            $wallet->Transactions = $request->Transactions;
            $wallet->Pin = $request->Pin;
            $wallet->save();
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            throw $e;

        }
    }
}