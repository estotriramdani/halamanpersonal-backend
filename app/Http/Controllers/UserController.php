<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index($username)
    {
        $user = User::where('username', $username)->first();

        return response()->json([
            'status' => 'success',
            'message' => "$username detailed profile",
            'data' => $user
        ]);
    }
}
