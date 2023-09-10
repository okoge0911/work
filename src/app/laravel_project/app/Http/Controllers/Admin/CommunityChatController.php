<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommunityChatController extends Controller
{
    public function get(){
        return view('admin.home.admin_community_chat');
    }
}
