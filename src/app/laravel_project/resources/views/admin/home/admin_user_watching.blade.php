<html>
<x-admin_layout>
    <!-- $title のところに入れる -->
    <x-slot name="title">ユーザー管理画面</x-slot>
    <!-- $slotに入れる内容は裸で置く -->
    <div class="">
    <p>HOME＞＞ユーザー管理</p>
  </div>
    <div class="center-block flex-column border rounded" style="padding: 1%; margin-top:3%;">
        <form>
            <p>フリーワード</p>
            <input type="text" class="form-control" placeholder="キーワードを入力">
            <p>参加コミュニティ</p>
            <input type="text" class="form-control" placeholder="参加コミュニティ">
            <p><label for="select1">ステータス</label></p>
            <select class="form-control" id="select1">
                <option>1:通常会員</option>
                <option>2:イエロー会員</option>
                <option>3:レッド会員（強制退会）</option>
                <option>4:退会済み会員</option>
            </select>
            <p>登録期間</p>
            <input type="date">
            <p>登録番号</p>
            <input type="text" class="form-control" placeholder="登録番号">
            <button type="submit" class="btn btn-primary" style="margin-left: 90%;">検索</button>
        </form>
    </div>
    <div style="margin-top: 35px; margin-bottom: 100px;">
        <div class="d-flex justify-content-between border rounded" style="padding:10px;">
            <img class="border rounded-circle align-self-center" src="{{asset('/images/french-bulldog-3239718_1280.jpg')}}" class="align-self-center" style="width: 85px;height: 85px; margin-left:1rem;">
            <p class="align-self-center">管理番号:12098</p>
            <p class="align-self-center">アカウント名:ビビディバビディブー</p>
            <p class="align-self-center">氏名:田代知代実</p>
            <p class="align-self-center">登録年月日:2023年1月1日〜</p>
            <button class="btn btn-outline-primary align-self-center">詳細</button>
        </div>
        <div class="d-flex justify-content-between border rounded" style="padding:10px;">
            <img class="border rounded-circle align-self-center" src="{{asset('/images/french-bulldog-3239718_1280.jpg')}}" class="align-self-center" style="width: 85px;height: 85px; margin-left:1rem;">
            <p class="align-self-center">管理番号:12098</p>
            <p class="align-self-center">アカウント名:ビビディバビディブー</p>
            <p class="align-self-center">氏名:田代知代実</p>
            <p class="align-self-center">登録年月日:2023年1月1日〜</p>
            <button class="btn btn-outline-primary align-self-center">詳細</button>
        </div>
        <div class="d-flex justify-content-between border rounded" style="padding:10px;">
            <img class="border rounded-circle align-self-center" src="{{asset('/images/french-bulldog-3239718_1280.jpg')}}" class="align-self-center" style="width: 85px;height: 85px; margin-left:1rem;">
            <p class="align-self-center">管理番号:12098</p>
            <p class="align-self-center">アカウント名:ビビディバビディブー</p>
            <p class="align-self-center">氏名:田代知代実</p>
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