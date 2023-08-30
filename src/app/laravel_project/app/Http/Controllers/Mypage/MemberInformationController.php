<?php

namespace App\Http\Controllers\Mypage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MemberInformationController extends Controller
{
    public function get(){
        return view('mypage.home.member_information');
    }
}
