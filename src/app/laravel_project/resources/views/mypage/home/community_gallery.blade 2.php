<html>
<x-layout>
  <!-- $title のところに入れる -->
  <x-slot name="title">コミュニティ詳細</x-slot>
  <!-- $slotに入れる内容は裸で置く -->
  <div class="">
    <p>MYPAGE＞＞交流会検索＞＞コミュニティ情報＞＞ホーム＞＞ギャラリー</p>
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
    
  <div class="" style="margin-top: 5%; margin-bottom: 5%; width: 90%; margin-left: auto; margin-right: auto;">
    <h5>Gallery</h5>
      <button class="btn btn-outline-primary">アップロード</button>
    <div style="margin-top: 3%;">
      <img src="{{asset('/images/bi.jpg')}}" style="width: 20%; height:fit-content;">
      <img src="{{asset('/images/246960.jpg')}}" style="width: 20%; height:fit-content;">
      <img src="{{asset('/images/77822313_448x636.jpeg')}}" style="width: 20%; height:fit-content;">
      <img src="{{asset('/images/399067d18b7f28da14977fae13c75dac.jpg')}}" style="width: 20%; height:fit-content;">
      <img src="{{asset('/images/81nRGGqQUOL._AC_SL1500_.jpg')}}" style="width: 20%; height:fit-content;">
      <img src="{{asset('/images/kqEXCD8r_WZkOA4hDf7E3alJoGXnYvaSZ-CvK8Zm86E.jpg')}}" style="width: 20%; height:fit-content;">
      <img src="{{asset('/images/iKON-aph.jpg')}}" style="width: 20%; height:fit-content;">

    </div>
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