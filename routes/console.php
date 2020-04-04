<?php

use App\User;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('token', function () {
    $user = User::first();
    $token = $user->createToken('test');
    $this->comment($token->plainTextToken);
})->describe('Generate a token for the first user');
