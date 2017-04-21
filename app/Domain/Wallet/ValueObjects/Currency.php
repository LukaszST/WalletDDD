<?php

namespace App\Domain\Wallet\Domain\ValueObjects\Currency;

use League\Flysystem\Exception;

class Currency
{
    private $currency;

    /**
     * Currency constructor.
     * @param $currency
     */
    public function __construct($currency)
    {
        $this->disallowCurrency($currency);
        $this->currency = $currency;
    }

    private function disallowCurrency($currency)
    {
        if (!in_array($currency, ['PLN', 'EUR'])) {
            throw new Exception('This currency is not supported');
        }
    }

    function __toString(): string
    {
        return (string) $this->currency;
    }

}
