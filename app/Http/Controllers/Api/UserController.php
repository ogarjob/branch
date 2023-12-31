<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Response;

class UserController extends Controller
{
    public function update(UpdateUserRequest $request, User $user)
    {
        $user->update($request->validated());

        return Response::api('Profile update successful');
    }
}
