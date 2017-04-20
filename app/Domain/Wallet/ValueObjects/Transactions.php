<?php

namespace App\Domain\Wallet\ValueObjects\Transactions;

use App\Domain\Wallet\Domain\ValueObjects\Currency\Currency;
use App\Domain\Wallet\ValueObjects\Amount\Amount;
use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    protected $table = 'transactions';

    const INCOME = 'income';
    const EXPENSE = 'expense';

    public $timestamps = true;

    protected $fillable = ['UserID', 'Type', 'WalletID', 'Currency', 'Amount', 'Name'];

    /**
     * @param string $UserID
     * @param Currency $Currency
     * @param string $Name
     * @return mixed
     */
    public static function make(
        string $UserID,
        string $Type,
        int $WalletID,
        Currency $Currency,
        Amount $Amount,
        string $Name
    )
    {
        $transaction = new static(compact('UserID', 'Type', 'WalletID', 'Currency', 'Amount', 'Name'));

        return $transaction->save();
    }
}