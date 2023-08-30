<?php

namespace App\Http\Controllers\Mypage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserSearchCommunityController extends Controller
{
    public function get(){
        return view('mypage.home.user_search_community');
    }

    public function innerShow(){
        return view('mypage.home.community_inner');
    }

    public function communityJoin(){
        return view('mypage.home.community_join');
    }

    public function galleryShow(){
        return view('mypage.home.community_gallery');
    }
}
