<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UserWatchingController;
use App\Http\Controllers\Admin\UserInnerController;
use App\Http\Controllers\Admin\CommunitySearchController;
use App\Http\Controllers\Admin\CommunityInnerController;
use App\Http\Controllers\Admin\CommunityChatController;
use App\Http\Controllers\Admin\AdminUserManagementController;
use App\Http\Controllers\Admin\NgWordController;
use App\Http\Controllers\Admin\InfoController;
use App\Http\Controllers\Admin\InfoChatFromUserController;


Route::prefix('admin')->group(function () {
  Route::get('login', [LoginController::class, 'index'])->name('admin.login.index');
  Route::post('login', [LoginController::class, 'login'])->name('admin.login.login');
  Route::get('logout', [LoginController::class, 'logout'])->name('admin.login.logout');

});

Route::prefix('admin')->middleware('auth:admins')->group(function () {
  Route::get('/', [HomeController::class, 'dashboard'])->name('admin.dashboard'); //管理画面ホーム
  Route::prefix('/user_watching')->group(function(){
    Route::get('/', [UserWatchingController::class, 'get']); //ユーザー管理画面（検索）
    Route::get('/inner', [UserInnerController::class, 'get']); //ユーザー詳細画面
  });
  Route::prefix('/community_search')->group(function(){
    Route::get('/', [CommunitySearchController::class, 'get']); //コミュニティ管理画面（検索）
    Route::get('/inner',[CommunityInnerController::class, 'get']); //コミュニティ詳細画面
    Route::get('/chat',[CommunityChatController::class, 'get']); //チャット確認画面
  });
  Route::get('/admin_user', [AdminUserManagementController::class, 'get']); //管理者権限画面
  Route::get('/ng_word', [NgWordController::class, 'get']); //NGワード登録画面
  Route::prefix('/info')->group(function(){
    Route::get('/', [InfoController::class, 'get']);//お問わせ画面
    Route::get('/inner', [InfoChatFromUserController::class, 'get']); //お問合せ詳細画面
  }); 
});

