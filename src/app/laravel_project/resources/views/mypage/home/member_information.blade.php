<html>
<x-layout>
  <!-- $title のところに入れる -->
  <x-slot name="title">会員情報</x-slot>
  <!-- $slotに入れる内容は裸で置く -->
  <div class="">
    <p>MYPAGE＞＞会員情報</p>
  </div>
  <div class="center-block flex-column border rounded" style="padding: 1%;">
    <form>
      <p>氏名</p>
      <input type="text" class="form-control" placeholder="姓">
      <input type="text" class="form-control" placeholder="名">
      <p>生年月日</p>
      <input type="date">
      <p>メールアドレス</p>
      <input type="text" class="form-control" placeholder="有効なメールアドレスを入力してください">
      <p>住所</p>
      <input type="text" class="form-control" placeholder="住所を入力してください">
      <p>電話番号</p>
      <input type="text" class="form-control" placeholder="電話番号を入力してください">
      <p>パスワード</p>
      <input type="text" class="form-control" placeholder="パスワードを変更する場合は入力ください">
      <p>アイコン画像</p>
      <p>変更する場合はこちらに登録</p>
      <p>ヘッダー画像</p>
      <p>変更する場合はこちらに登録</p>
      <button type="submit" class="btn btn-primary" style="margin-left: 90%;">登録</button>
      <button type="submit" class="btn btn-primary" style="margin-left: 90%;">アカウント削除</button>
      <p>※アカウント削除は退会扱いとなります。</p>
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