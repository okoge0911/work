<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InfoChatFromUserController extends Controller
{
    public function get(){
        return view('admin.home.info_chat_from_user');
    }
}
