<html>
<x-layout>
    <!-- $title のところに入れる -->
    <x-slot name="title">お問合せ</x-slot>
    <!-- $slotに入れる内容は裸で置く -->
    <div class="">
        <p>MYPAGE＞＞お問わせ</p>
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
        チャットの内容を表示させる<br>
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
  <div class="form-group">
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">送信    </button>
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