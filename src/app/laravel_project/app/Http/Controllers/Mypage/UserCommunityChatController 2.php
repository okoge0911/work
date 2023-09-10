<?php

namespace App\Http\Controllers\Mypage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserCommunityChatController extends Controller
{
    public function get(){
        return view('mypage.home.user_community_chat');
    }
}
