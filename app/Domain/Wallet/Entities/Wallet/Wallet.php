<?php

namespace App\Domain\Wallet\Entities\Wallet;

use App\Domain\Wallet\Domain\ValueObjects\Currency\Currency;
use App\Domain\Wallet\Domain\ValueObjects\Transactions\Transactions;
use App\User;
use App\Domain\Wallet\ValueObjects\Amount\Amount;
use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    protected $table = 'wallet';

    public $timestamps = true;

    protected $fillable = ['UserID', 'Currency', 'Name', 'Amount', 'Transactions'];

    protected $user_id;

    protected $currency;

    protected $name;

    protected $amount;

    protected $transactions;

//    public function __construct(
//        int $id,
//        int $user_id,
//        string $currency,
//        string $name,
//        int $amount,
//        int $transactions,
//        int $pin
//    )
//    {
//        $this->id = $id;
//        $this->user_id = $user_id;
//        $this->currency = $currency;
//        $this->name = $name;
//        $this->amount = $amount;
//        $this->transactions = $transactions;
//        $this->pin = $pin;
//    }

    public static function create(
        string $UserID,
        Currency $Currency,
        string $Name
    )
    {
        $Amount = new Amount(0);
        $Transactions = new Transactions(213);

        $wallet = new static(compact('UserID', 'Currency', 'Name', 'Amount', 'Transactions'));

        return $wallet->save();
    }
}