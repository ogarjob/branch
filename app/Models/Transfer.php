<?php

namespace App\Models;

use App\Models\Concerns\ObservesWrites;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transfer extends Model
{
    use HasFactory, ObservesWrites;

    public static function booted()
    {
        static::creating(function ($wallet) {
            Wallet::find(request('from_wallet_id'))->decrement('balance', request('amount'));

            Wallet::find(request('to_wallet_id'))->increment('balance', request('amount'));
        });
    }
}
