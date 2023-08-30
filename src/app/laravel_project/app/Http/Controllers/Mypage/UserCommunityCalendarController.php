<?php

namespace App\Http\Controllers\Mypage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserCommunityCalendarController extends Controller
{
    public function get(){
        return view('mypage.home.user_community_calender');
    }
}
