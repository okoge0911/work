<html>
<x-layout>
  <!-- $title のところに入れる -->
  <x-slot name="title">ホーム</x-slot>
  <!-- $slotに入れる内容は裸で置く -->
  <div class="alrt d-flex bd-highlight mt-3">
    <div class="d-flex flex-column w-75 m-3 border rounded">
      <a href=""><span>・通知</span>管理者からメッセージカードが届いいています。</a>
      <a href=""><span>・通知</span>○月○日のスケジュールまであと○日です。</a>
      <a href=""><span>・通知</span>参加コミュニティでスケジュールが追加されました。</a>
    </div>
    <div class="mt-2">
      <a href=""><img class="border rounded-circle" style="width: 85px;height: 85px;margin-left:1.5rem;" src="{{asset('/images/246960.jpg')}}"></a>
      <p class="mt-2">アカウント名：バビバビ</p>
      <p>ユーザー番号：1221</p>
    </div>
  </div>
  <div class="calendar-container text-center">
    <h1>October 2023</h1>
    <table class="calendar border rounded mx-auto justify-content-center">
      <tr>
        <th class="border rounded" style="width: 15%;">SUN</th>
        <th class="border rounded" style="width: 15%;">MON</th>
        <th class="border rounded" style="width: 15%;">TUE</th>
        <th class="border rounded" style="width: 15%;">WED</th>
        <th class="border rounded" style="width: 15%;">THU</th>
        <th class="border rounded" style="width: 15%;">FRI</th>
        <th class="border rounded" style="width: 15%;">SAT</th>
      </tr>
      <tr class="day border rounded">
        <td class="border rounded">1</td>
        <td class="border rounded">2</td>
        <td class="border rounded">3</td>
        <td class="border rounded">4</td>
        <td class="border rounded">5</td>
        <td class="border rounded">6</td>
        <td class="border rounded">7</td>
      </tr>
    </table>
  </div>
  <div>
    <h4>参加中のコミュニティ</h4>
    <div class="d-flex justify-content-around" >
      <a href="">
        <img src="{{asset('/images/3711-1402-98ed6e0732e1e5d0884a96fde52521ce-1800x1204.webp')}}" style="width: 300px;">
        <h5>コミュニティ名：iKONを応援し隊</h5>
        <h6>対象：iKON</h6>
        <h6>参加人数：30人</h6>
      </a>
      <a href="">
        <img src="{{asset('/images/BP9-1280x720.jpg')}}" style="width: 300px;">
        <h5>コミュニティ名：ブルピンになりたい</h5>
        <h6>対象：BLACKPINK</h6>
        <h6>参加人数：50人</h6>
      </a>
      <a href="">
        <img src="{{asset('/images/bigbang.jpg')}}" style="width: 300px;">
        <h5>コミュニティ名：king of k-pop</h5>
        <h6>対象：BIGBANG</h6>
        <h6>参加人数：40人</h6>
      </a>
    </div>
    <div>
      <a href="" class="" style="margin-left: 90%;">See More  >></a>
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