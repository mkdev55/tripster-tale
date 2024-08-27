<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OppunityController extends Controller
{
    public function index(){
        return view('oppunity.index');
    }

    public function create(){
        return view('');
    }
}
