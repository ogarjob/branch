<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTransferRequest;
use App\Models\Location;
use App\Models\ProductTransfer;
use App\Models\Stock;
use App\Models\Transfer;
use App\Models\Wallet;
use Illuminate\Auth\Middleware\Authorize;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TransferController extends Controller
{
    public function store(Request $request, Wallet $wallet)
    {
        Transfer::create($request->validate([
            'from_wallet_id' => 'required',
            'to_wallet_id' => 'required',
//            'product_id'   => 'required',
            'amount'       => ['required', 'numeric', 'max:'.$wallet->balance],
        ]));

        return Response::api('Transfer was successful');
    }
}
