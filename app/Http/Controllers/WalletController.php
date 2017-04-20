<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wallet\Infrastructure\Repositories\WalletRepository as WalletRepositoryContract;

/**
 * Class WalletController
 * @package App\Http\Controllers
 */
class WalletController extends Controller
{

    /**
     * @var WalletRepositoryContract
     */
    private $walletRepository;

    /**
     * WalletController constructor.
     * @param WalletRepositoryContract $walletRepository
     */
    public function __construct(WalletRepositoryContract $walletRepository)
    {
        $this->walletRepository = $walletRepository;
    }

    /**
     * @param Request $request
     */
    public function create(Request $request)
    {
        $wallet = $this->walletRepository->create($request);
    }
}
