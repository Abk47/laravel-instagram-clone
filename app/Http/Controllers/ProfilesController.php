<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index($user)
    {
        $user = User::findOrFail($user); // Manually fetching the user from the DB
        return view('profiles.index', [
            'user' => $user,
        ]);
    }
}
