<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $users = User::query()
              ->paginate(8);

        return view( 'user.index', compact('users'));

    }
}
