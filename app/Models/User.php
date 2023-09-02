<?php

namespace App\Models;

use App\Models\Concerns\ChecksUserState;
use App\Models\Concerns\ObservesWrites;
use App\Models\Enums\Gender;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, HasApiTokens, Notifiable, SoftDeletes, ChecksUserState, ObservesWrites;

    /**
     * The attributes that should be hidden for serialization.
     */
    protected $hidden = ['password', 'remember_token', 'meta'];

    /**
     * The attributes that should be cast.
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'last_login'        => 'datetime',
        'banned_until'      => 'datetime',
        'gender'            => Gender::class,
        'password'          => 'hashed',
    ];

    public function name(): Attribute
    {
        return Attribute::get(fn () => Str::title(
            $this->first_name.' '.$this->last_name
        ));
    }

    public function photo(): Attribute
    {
        return Attribute::get(fn () => "https://ui-avatars.com/api?background=f8f5ff&color=7239ea&name={$this->name}&format=svg");
    }

    public function wallets(): HasMany
    {
        return $this->HasMany(Wallet::class);
    }
}
