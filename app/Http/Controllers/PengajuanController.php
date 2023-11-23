<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengajuanController extends Controller
{
    public function index (){
        return view ('contents.submissions.index');
    }

    public function create (){
        return view('contents.submissions.create');
    }

    public function detail (){
        return view('contents.submissions.detail');
    }

    public function edit (){
        return view('contents.submissions.edit');
    }

    // tinggal bikin fungsi delete

}
