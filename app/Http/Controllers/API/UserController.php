<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use GrahamCampbell\Binput\Facades\Binput;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function getUser() {
        if ($user = Binput::get('user')){
            return User::find($user);
        }
        return Auth::user();
    }
}
