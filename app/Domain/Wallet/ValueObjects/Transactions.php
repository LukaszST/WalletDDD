<?php

namespace App\Domain\Wallet\Domain\ValueObjects\Transactions;

use Doctrine\Instantiator\Exception\InvalidArgumentException;

class Transactions
{
    private $transactions;

    /**
     * Transactions constructor.
     * @param $transactions
     */
    public function __construct($transactions)
    {
        $this->dissalowTransactions($transactions);
        $this->transactions = $transactions;
    }

    private function dissalowTransactions($transactions)
    {
        if ($transactions < 0) {
            throw new InvalidArgumentException('Transactions can\'t be bellowe zero');
        }
    }

    function __toString()
    {
        return strval($this->transactions);
    }
}