<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use App\Models\skripsi;

class ListController extends Controller // Ubah Controllers ke Controller
{
    public function index()
    {
        $admins = Admin::all();
        $users = User::all();
        $skripsis = Skripsi::all();

        return view('welcome', compact('admins', 'users','skripsis'));
    }
}
