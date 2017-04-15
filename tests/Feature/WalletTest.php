<?php

namespace Tests\Feature;

use App\User;
use App\Wallet;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class WalletTest extends TestCase
{
    /** @test */
    public function can_create_wallet()
    {
        $wallet = Wallet::create();
    }
}