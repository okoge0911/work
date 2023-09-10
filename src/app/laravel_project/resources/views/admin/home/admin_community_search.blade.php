<html>
<x-admin_layout>
    <!-- $title のところに入れる -->
    <x-slot name="title">コミュニティ管理</x-slot>
    <!-- $slotに入れる内容は裸で置く -->
    <div class="">
    <p>HOME＞＞コミュニティ管理</p>
  </div>
    <div class="center-block flex-column border rounded" style="padding: 1%; margin-top:3%;">
        <form>
            <p>フリーワード</p>
            <input type="text" class="form-control" placeholder="キーワードを入力">
            <p>対象コミュニティ</p>
            <input type="text" class="form-control" placeholder="対象コミュニティ">
            <p><label for="select1">ステータス</label></p>
            <select class="form-control" id="select1">
                <option>1:通常</option>
                <option>2:イエロー</option>
                <option>3:レッド（強制閉鎖）</option>
                <option>4:削除済み</option>
            </select>
            <p><label for="select2">参加人数</label></p>
            <select class="form-control" id="select2">
                <option>~10人</option>
                <option>11~30人</option>    
                <option>31~50人</option>
                <option>50人~</option>
            </select>
            <p>登録期間</p>
            <input type="date">
            <p>コミュニティ番号</p>
            <input type="text" class="form-control" placeholder="登録番号">
            <button type="submit" class="btn btn-primary" style="margin-left: 90%;">検索</button>
        </form>
    </div>
    <div style="margin-top: 35px; margin-bottom: 100px;">
        <div class="d-flex justify-content-between border rounded" style="padding:10px;">
        <img class="b" src="{{asset('/images/french-bulldog-3239718_1280.jpg')}}" style="width: 15%;">
            <p class="align-self-center">コミュニティ番号:12098</p>
            <p class="align-self-center">アカウント名:バビバビ</p>
            <p class="align-self-center">対象者・物:キムジウォン</p>
            <p class="align-self-center">参加人数:約２０人</p>
            <p class="align-self-center">登録年月日:2023年1月1日〜</p>
            <button class="btn btn-outline-primary align-self-center">詳細</button>
        </div>
        <div class="d-flex justify-content-between border rounded" style="padding:10px;">
            <img class="b" src="{{asset('/images/french-bulldog-3239718_1280.jpg')}}" style="width: 15%;">
            <p class="align-self-center">コミュニティ番号:12098</p>
            <p class="align-self-center">アカウント名:バビバビ</p>
            <p class="align-self-center">対象者・物:キムジウォン</p>
            <p class="align-self-center">参加人数:約２０人</p>
            <p class="align-self-center">登録年月日:2023年1月1日〜</p>
            <button class="btn btn-outline-primary align-self-center">詳細</button>
        </div>
        <div class="d-flex justify-content-between border rounded" style="padding:10px;">
        <img class="b" src="{{asset('/images/french-bulldog-3239718_1280.jpg')}}" style="width: 15%;">
            <p class="align-self-center">コミュニティ番号:12098</p>
            <p class="align-self-center">アカウント名:バビバビ</p>
            <p class="align-self-center">対象者・物:キムジウォン</p>
            <p class="align-self-center">参加人数:約２０人</p>
            <p class="align-self-center">登録年月日:2023年1月1日〜</p>
            <button class="btn btn-outline-primary align-self-center">詳細</button>
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

</x-admin_layout>

</html>