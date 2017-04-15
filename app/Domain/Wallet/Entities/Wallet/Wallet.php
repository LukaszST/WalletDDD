<?php

namespace App\Domain\Entities\Wallet;

use App\Domain\Entities\Base;

class Wallet extends Base
{

    protected $user_id;

    protected $currency;

    protected $name;

    protected $amount;

    protected $transactions;

    protected $pin;

    public function __construct(
        int $id,
        int $user_id,
        string $currency,
        string $name,
        int $amount,
        int $transactions,
        int $pin
    )
    {
        $this->id = $id;
        $this->user_id = $user_id;
        $this->currency = $currency;
        $this->name = $name;
        $this->amount = $amount;
        $this->transactions = $transactions;
        $this->pin = $pin;
    }
}