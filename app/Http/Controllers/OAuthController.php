<?php

namespace App\Http\Controllers;

use App\Http\Requests\OAuthCallbackRequest;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class OAuthController extends Controller
{
    public function create($provider)
    {
        return Socialite::with($provider)->redirect();
    }
}
