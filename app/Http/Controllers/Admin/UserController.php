<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    // Mostra la lista degli utenti
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }
}