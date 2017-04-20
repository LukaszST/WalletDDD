<?php

namespace App\Domain\Wallet\ValueObjects\Amount;

use Doctrine\Instantiator\Exception\InvalidArgumentException;

class Amount
{

    private $amount;

    function __construct($amount, $type = null)
    {
        $this->disallowInvalidAmount($amount, $type);

        $this->amount = $amount;
    }

    private function disallowInvalidAmount($amount, $type)
    {
        if (!is_numeric($amount)) {
            throw new InvalidArgumentException('Amount is not numeric');
        }

        if ($amount > 0 && $type == 'expense') {
            throw new InvalidArgumentException('Amount can\'t be above zero when type is income');
        }

        if ($amount < 0 && $type == 'income') {
            throw new InvalidArgumentException('Amount can\'t be bellow zero when type is income');
        }
    }

    function __toString()
    {
        return (string) $this->amount;
    }

    public function toInt()
    {
        return strval($this->amount);
    }
}