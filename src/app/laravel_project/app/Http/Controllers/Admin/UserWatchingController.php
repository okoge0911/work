<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserWatchingController extends Controller
{
    public function get(){
        return view('admin.home.admin_user_watching');
    }
}
