<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminUserManagementController extends Controller
{
    public function get(){
        return view('admin.home.admin_user_management');
    }
}
