<?php

namespace App\Http\Controllers;

use App\Domain\Entities\Wallet\Wallet;
use App\Http\Middleware\RedirectIfAuthenticated;
use Illuminate\Http\Request;
use App\Wallet\Infrastructure\Repositories\WalletRepository as WalletRepositoryContract;

class WalletController extends Controller
{

    private $walletController;

    public function __construct(WalletRepositoryContract $walletRepository)
    {
        $this->walletController = $walletRepository;
    }

    public function create(Request $request)
    {
        $wallet = $this->walletController->create($request);
    }
}
