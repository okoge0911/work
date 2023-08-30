<html>
<x-layout>
  <!-- $title のところに入れる -->
  <x-slot name="title">コミュニティ詳細</x-slot>
  <!-- $slotに入れる内容は裸で置く -->
  <div class="">
    <p>MYPAGE＞＞交流会検索＞＞コミュニティ情報＞＞ホーム</p>
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
        <p>活動内容：</br>
          スケジュールの共有・チャットでの交流・画像の共有等</p>
      </div>
      <button type="submit" class="btn btn-primary align-self-center" style="height: 50%;">退会する</button>
    </div>
    <div class="border rounded" style="margin-top: 2%; width:90%; margin-left: auto; margin-right: auto;">
      <p><b>コミュニティ説明:</b></p>
      <p>2015年にYGエンターテイメントからデビューをしたiKONを応援するコミュニティです。日々の活動の情報共有などを行いたくさんのコニギと繋がりを持てたらと開設しました。お気軽に皆様に参加していただければと思います。お互いに尊重をし合いながら活動をしております。誹謗中傷や考えを一方的に押し付けつけるなどの勝手な行為あった場合には強制的に退室していただきます。</p>
    </div>
    <div class="border rounded" style="margin-top: 2%; width:90%; margin-left: auto; margin-right: auto;">
      <p><b>ルール・禁止事項:</b></p>
      <p>誹謗中傷、他者の考えを否定したり自身の考えを他人に押し付ける行為は禁止とします。また対象者であるiKONに対しても過激な意見の発信は禁止。みんなが快く過ごすことができるコミュニティづくりに協力ください。</p>
    </div>
    <div style="margin-top: 2%; width:90%; margin-left: auto; margin-right: auto;">
      <p>コミュニティ作成者：バビバビ</p>
      <div class="" style="display: flex;">
      <div class="mt-2">
        <img class="border rounded-circle" style="width: 85px;height: 85px;margin-left:1.5rem;" src="{{asset('/images/246960.jpg')}}">
      </div>
      <div class="align-self-center" style="margin-left: 5%;">
        <p>みんなで仲良く交流していければいいと思っております。</p>
      </div>
      </div>
    </div>
  </div>
  <div class="d-grid gap-2" style="margin-top: 5%; margin-bottom: 5%; width: 70%; margin-left: auto; margin-right: auto;">
    <h5>活動</h5>
   
      <button class="btn btn-outline-primary">コミュニティチャット</button>
   
      <button class="btn btn-outline-primary">スケジュール</button>
    
      <button class="btn btn-outline-primary">ギャラリー</button>
    
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