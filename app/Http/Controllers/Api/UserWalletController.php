<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UserWalletController extends Controller
{
    public function store(Request $request, User $user)
    {
        $user->wallets()->create($request->validate([
            'type_id' => 'required',
            'name'    => 'required',
        ]));

        return Response::api('Activated Successfully');
    }

    public function fund(Request $request, Wallet $wallet)
    {
        $wallet->increment('balance', request('amount'));

        return Response::api('Funded Successfully');
    }
}
