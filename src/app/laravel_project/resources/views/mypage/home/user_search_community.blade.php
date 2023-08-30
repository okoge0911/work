<html>
<x-layout>
  <!-- $title のところに入れる -->
  <x-slot name="title">ユーザー用コミュニティ検索画面</x-slot>
  <!-- $slotに入れる内容は裸で置く -->
  <div class="">
    <p>MYPAGE＞＞交流会検索</p>
  </div>
  <div class="center-block flex-column border rounded" style="padding: 1%;">
    <form>
      <p>フリーワード</p>
      <input type="text" class="form-control" placeholder="キーワードを入力">
      <p><label for="select1">コミュニティ規模</label></p>
      <select class="form-control" id="select1">
        <option>~30</option>
        <option>31~50</option>
        <option>51~100</option>
        <option>100~</option>
      </select>
      <p>コミュニティ開設時期〜</p>
      <input type="date">
      <button type="submit" class="btn btn-primary" style="margin-left: 90%;">検索</button>
    </form>
  </div>
  <div class="" style="margin-top: 35px; margin-bottom: 100px;">
    <div class="d-flex justify-content-between border rounded">
      <img src="{{asset('/images/3711-1402-98ed6e0732e1e5d0884a96fde52521ce-1800x1204.webp')}}" class="align-self-center" style="width: 20%; height:fit-content;">
      <div>
        <p>コミュニティ名:</br>
          iKONを応援し隊</p>
        <p>対象：</br>
          iKON</p>
        <p>参加人数：</br>
          30人</p>
      </div>
      <div style="width: 40%;">
        <p><b>コミュニティ説明</b></p>
        <p>2015年にYGエンターテイメントからデビューをしたiKONを応援するコミュニティです。日々の活動の情報共有などを行いたくさんのコニギと繋がりを持てたらと開設しました。お気軽に皆様に参加していただければと思います。</p>
      </div>
      <button class="btn btn-outline-primary align-self-center">Check!</button>
    </div>
    <div class="d-flex justify-content-between border rounded">
      <img src="{{asset('/images/BP9-1280x720.jpg')}}" class="align-self-center" style="width: 20%; height:fit-content;">
      <div>
        <p>コミュニティ名:</br>
          ブルピンになりたい</p>
        <p>対象：</br>
          BLACKPINK</p>
        <p>参加人数：</br>
          50人</p>
      </div>
      <div style="width: 40%;">
        <p><b>コミュニティ説明</b></p>
        <p>現世代のガールクラッシュといえば、ブルピン！そんなブルピンに憧れる女子たちの集まりにぜひ参加してみてください！</p>
      </div>
      <button class="btn btn-outline-primary align-self-center">Check!</button>
    </div>
    <div class="d-flex justify-content-between border rounded">
      <img src="{{asset('/images/bigbang.jpg')}}" class="align-self-center" style="width: 20%; height:fit-content;">
      <div>
        <p>コミュニティ名:</br>
          king of k-pop</p>
        <p>対象：</br>
          BIGBANG</p>
        <p>参加人数：</br>
          40人</p>
      </div>
      <div style="width: 40%;">
        <p><b>コミュニティ説明</b></p>
        <p>キングオブK-POPといえば、、、BIGBANG！すっかり活動は無くなったけど、愛はみんなで共有した！いつかまた５人でのステージを夢見て！</p>
      </div>
      <button class="btn btn-outline-primary align-self-center">Check!</button>
    </div>

    <nav aria-label="Page navigation example" class="" style="margin-top: 30px; ">
      <ul class="pagination" style="margin-left:41.5%;">
        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">Next</a></li>
      </ul>
    </nav>
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