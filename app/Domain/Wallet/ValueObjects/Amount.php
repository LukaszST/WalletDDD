<?php

namespace App\Domain\Wallet\ValueObjects\Amount;

use Doctrine\Instantiator\Exception\InvalidArgumentException;

class Amount
{

    private $amount;

    function __construct($amount)
    {
        $this->disallowInvalidAmount($amount);

        $this->amount = $amount;
    }

    private function disallowInvalidAmount($amount)
    {
        if (!is_numeric($amount)) {
            throw new InvalidArgumentException('Amount is not numeric');
        }
    }

    function __toString()
    {
        return (string) $this->amount;
    }
}