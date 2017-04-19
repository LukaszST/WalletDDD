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
        $this->dissallowCurrencyString($currency);
        $this->currency = $currency;
    }

    private function dissallowCurrencyString($currency)
    {
        if (!in_array($currency, ['PLN'])) {
            throw new Exception('This currency is not supported');
        }
    }

    function __toString()
    {
        return (string) $this->currency;
    }

}
