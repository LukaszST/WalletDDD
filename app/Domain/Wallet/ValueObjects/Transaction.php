<?php

namespace App\Domain\Wallet\Domain\ValueObjects\Transaction;

use Doctrine\Instantiator\Exception\InvalidArgumentException;

class Transaction
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
            throw new InvalidArgumentException('Transactions can\'t be bellow zero');
        }
    }

    function __toString()
    {
        return strval($this->transactions);
    }
}