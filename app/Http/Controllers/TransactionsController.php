<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wallet\Infrastructure\Repositories\TransactionsRepository as TransactionsRepositoryContract;

/**
 * Class TransactionsController
 * @package App\Http\Controllers
 */
class TransactionsController extends Controller
{

    /**
     * @var TransactionsRepositoryContract
     */
    private $transactionsRepository;


    /**
     * TransactionsController constructor.
     * @param TransactionsRepositoryContract $transactionsRepository
     */
    public function __construct(TransactionsRepositoryContract $transactionsRepository)
    {
        $this->transactionsRepository = $transactionsRepository;
    }

    /**
     * @param Request $request
     */
    public function make(Request $request)
    {
        $transaction = $this->transactionsRepository->make($request);;
    }
}
