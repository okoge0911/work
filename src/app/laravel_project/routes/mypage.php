<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Mypage\HomeController;
use App\Http\Controllers\Mypage\UserSearchCommunityController;
use App\Http\Controllers\Mypage\UserCommunityChatController;
use App\Http\Controllers\Mypage\UserCommunityCalendarController;
use App\Http\Controllers\Mypage\MemberInformationController;
use App\Http\Controllers\Mypage\UserInfomationController;

Route::get('login', [LoginController::class, 'index'])->name('login.index');
Route::post('login', [LoginController::class, 'login'])->name('login.login');
Route::get('logout', [LoginController::class, 'logout'])->name('login.logout');

Route::prefix('mypage')->middleware('auth.members:members')->group(function () {
  Route::get('/', [HomeController::class, 'dashboard'])->name('mypage.dashboard');
  Route::prefix('/search_community')->group(function(){
    Route::get('/', [UserSearchCommunityController::class, 'get']); //コミュニティ検索画面
    Route::get('/search_community_inner', [UserSearchCommunityController::class, 'innerShow']); //コミュニティ情報
  }); 
  Route::prefix('/community_join')->group(function(){
    Route::get('/', [UserSearchCommunityController::class, 'communityJoin']); //参加コミュニティのホーム
    Route::get('/community_chat', [UserCommunityChatController::class, 'get']);  //参加コミュニティのチャット
    Route::get('/calender', [UserCommunityCalendarController::class, 'get']); //参加コミュニティのスケジュール管理
    Route::get('/community_gallery', [UserSearchCommunityController::class, 'galleryShow']); //参加コミュニティのギャラリー
  });
  Route::get('/member_information', [MemberInformationController::class, 'get']); //会員情報
  Route::get('/user_info', [UserInfomationController::class, 'get']); //ユーザーのサイト問い合わせ画面
  
  
});