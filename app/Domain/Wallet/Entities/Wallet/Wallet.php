<?php

namespace App\Domain\Wallet\Entities\Wallet;

use App\Domain\Wallet\Domain\ValueObjects\Currency\Currency;
use App\Domain\Wallet\Domain\ValueObjects\Transaction\Transaction;
use App\Domain\Wallet\ValueObjects\Amount\Amount;
use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    protected $table = 'wallet';

    public $timestamps = true;

    protected $fillable = ['UserID', 'Currency', 'Name', 'Amount', 'Transactions'];

    /**
     * @param string $UserID
     * @param Currency $Currency
     * @param string $Name
     * @return mixed
     */
    public static function create(
        string $UserID,
        Currency $Currency,
        string $Name
    )
    {
        $Amount = new Amount(0);
        $Transactions = new Transaction(0);

        $wallet = new static(compact('UserID', 'Currency', 'Name', 'Amount', 'Transactions'));

        return $wallet->save();
    }

    public static function updateAfterCreateTransaction(int $WalletID, Amount $Amount)
    {
        $wallet = self::find($WalletID);
            $wallet->Amount += $Amount->toInt();
            $wallet->Transactions += 1;
        $wallet->save();
    }
}