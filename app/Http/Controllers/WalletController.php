<?php

namespace App\Http\Controllers;

use App\Models\Wallet;
use Illuminate\Http\Request;

class WalletController extends Controller
{
    public function index(Request $request)
    {
        $wallets = Wallet::all();

        return view('wallets.index', compact('wallets'));
    }
}
