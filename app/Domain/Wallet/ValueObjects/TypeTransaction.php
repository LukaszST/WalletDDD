<?php

namespace App\Domain\Wallet\Domain\ValueObjects\TypeTransaction;

use Doctrine\Instantiator\Exception\InvalidArgumentException;

class TypeTransaction
{
    private $typeTransaction;

    /**
     * Transactions constructor.
     * @param $typeTransaction
     */
    public function __construct($typeTransaction)
    {
        $this->dissalowTypeTransactions($typeTransaction);
        $this->typeTransaction = $typeTransaction;
    }

    private function dissalowTypeTransactions($typeTransaction)
    {
        if (!in_array($typeTransaction, ['income', 'expense'])) {
            throw new InvalidArgumentException('This type transaction is not supported');
        }
    }

    function __toString(): string
    {
        return strval($this->typeTransaction);
    }
}