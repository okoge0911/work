<div>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"> 
    <title>{{ $title }}</title>
</head>
<body>
<header style="background-color:azure;">
    <div class="logo" style="display: flex; justify-content: space-between; width:90%; margin: 0 auto;">
      <a href=""><img src="{{asset('/images/推し事.png')}}" class="main_img" style="width:20%;"></a>
      <a href="/admin/logout" style="padding:4%">ログアウト</a>
    </div>
        <div class="list-group d-flex flex-row justify-content-center">
            <a href="{{route('admin.dashboard')}}" class="list-group-item flex-fill text-center"><i class="bi bi-house"></i> HOME</a>
            <a href="{{route('admin.user_watching')}}" class="list-group-item flex-fill text-center"><i class="bi bi-person-fill-gear"></i> ユーザー情報管理</a>
            <a href="{{route('admin.community_search')}}" class="list-group-item flex-fill text-center"><i class="bi bi-chat-dots"></i>  コミュニティ管理</a>
            <a href="{{route('admin.admin_user_management')}}" class="list-group-item flex-fill text-center"><i class="bi bi-gear"></i> 管理者情報管理</a>
            <a href="{{route('admin.ng_word')}}" class="list-group-item flex-fill text-center"><i class="bi bi-exclamation-triangle-fill"></i> NGワード管理</a>
            <a href="{{route('admin.info')}}" class="list-group-item flex-fill text-center"><i class="bi bi-envelope"></i> お問合せ対応</a>
        </div>
    </header>
    <main>
        {{ $slot }}
    </main>
    <footer style="background-color:azure;">
        <div class="kanri_name">
            <p class = "text-center">＠キムジウォンのガラスの靴</p>
            <div class="unyou d-frex text-center ">
                <a href="">個人情報の取り扱いについて</a>
                <a href="">運用規約</a>
                <a href="">会社概要</a>
            </div>

        </div>
    </footer>
</body>
</div>