<html>
<x-layout>
    <!-- $title のところに入れる -->
    <x-slot name="title">コミュニティ詳細/スケジュール</x-slot>
    <!-- $slotに入れる内容は裸で置く -->
    <div class="">
        <p>MYPAGE＞＞交流会検索＞＞コミュニティ情報＞＞詳細＞＞スケジュール</p>
    </div>
    <div class="center-block flex-column border rounded" style="padding: 1%;">
        <div class="d-flex justify-content-around">
            <img src="{{asset('/images/3711-1402-98ed6e0732e1e5d0884a96fde52521ce-1800x1204.webp')}}" class="align-self-center" style="width: 30%; height:fit-content;">
            <div style="width: 30%;">
                <p>コミュニティ名:</br>
                    iKONを応援し隊</p>
                <p>対象：</br>
                    iKON</p>
                <p>参加人数：</br>
                    30人</p>
            </div>
            <button type="submit" class="btn btn-primary align-self-center" style="height: 50%;">退会する</button>
        </div>
    </div>
    <div class="border rounded">
        ・<br>
        ・<br>
        ・<br>
        ・<br>
        ・<br>
        ・<br>
        ・<br>
        ・<br>
       カレンダーの表示<br>
        ・<br>
        ・<br>
        ・<br>
        ・<br>
        ・<br>
        ・<br>
        ・<br>
        ・<br>
        ・<br>
<form>
  <button type="submit" class="btn btn-primary">スケジュール追加</button>
</form>
    </div>    
</x-layout>

<!-- <head>
  <title>マイページトップ</title>
</head>
<body>
  <h1>マイページトップ</h1>

  @if (session('login_msg'))
  <div class="alert alert-success">
    {{ session('login_msg') }}
  </div>
  @endif

  @if (Auth::guard('members')->check())
  <div>ユーザーID {{ Auth::guard('members')->user()->userid }}でログイン中</div>
  @endif

  <ul>
    <li>管理者（Administrator）ログインユーザー: {{ Auth::guard('admins')->check() }}</li>
    <li>マイページ（members） ログインユーザー: {{ Auth::guard('members')->check() }}</li>
  </ul>

  <div>
    <a href="/logout">ログアウト</a>
  </div>

</body> -->

</html>