<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NgWordController extends Controller
{
    public function get(){
        return view('admin.home.ng_word');
    }
}
