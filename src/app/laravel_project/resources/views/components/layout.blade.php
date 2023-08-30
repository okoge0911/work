<!DOCTYPE html>
<html lang="ja">
<!-- Be present above all else. - Naval Ravikant -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>{{ $title }}</title>
    <style>
        .main_img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>

<body>
    <header>
        <div class="top_image">
            <img src="{{asset('/images/iKON_3RD-FULL_concept-photo_1.jpg')}}" class="main_img">
        </div>
        <div class="list-group d-flex flex-row justify-content-center">
            <a href="" class="list-group-item flex-fill text-center">HOME</a>
            <a href="" class="list-group-item flex-fill text-center">コミュニティー検索</a>
            <a href="" class="list-group-item flex-fill text-center">活動記録</a>
            <a href="" class="list-group-item flex-fill text-center">会員情報管理</a>
            <a href="" class="list-group-item flex-fill text-center">お問合せ</a>
            <a href="" class="list-group-item flex-fill text-center">ログアウト</a>
        </div>
    </header>
    <main>
        {{ $slot }}
    </main>
    <footer class="bg-light">
        <div class="kanri_name">
            <p class = "text-center">＠キムジウォンのガラスの靴</p>
            <div class="list-group flex-row justify-content-end">
                <a href="" img src="" class="list-group-sms">Twitter</a>
                <a href="" img src="" class="list-group-sms">Instagram</a>
                <a href="" img src="" class="list-group-sms">Facebook</a>
            </div>
            <div class="unyou d-frex text-center ">
                <a href="">個人情報の取り扱いについて</a>
                <a href="">運用規約</a>
                <a href="">会社概要</a>
            </div>

        </div>
    </footer>
</body>

</html>
</div>