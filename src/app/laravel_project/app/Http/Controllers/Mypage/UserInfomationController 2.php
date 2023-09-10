<?php

namespace App\Http\Controllers\Mypage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserInfomationController extends Controller
{
    public function get(){
        return view('mypage.home.user_info_chat');
    }
}
