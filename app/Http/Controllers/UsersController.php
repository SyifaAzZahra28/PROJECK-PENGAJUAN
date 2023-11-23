<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){
        return view('contents.users.index');
    }

    public function create(){
        return view('contents.users.create');
    }

    public function edit(){
        return view('contents.users.edit');
    }

    // tinggal buat fungsi delete
}
