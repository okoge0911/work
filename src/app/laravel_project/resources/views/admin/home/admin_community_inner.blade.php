<html>
<x-admin_layout>
    <!-- $title のところに入れる -->
    <x-slot name="title">コミュニティ詳細</x-slot>
    <!-- $slotに入れる内容は裸で置く -->
    <div class="">
        <p>HOME＞＞コミュニティ管理＞＞コミュニティ詳細</p>
    </div>

    <div style="display: flex; margin-top:3%">
        <div style="width: 50%;">
            <div style="display: flex;">
                <img src="{{asset('/images/french-bulldog-3239718_1280.jpg')}}" style="width:30%; height:150px;">
                <div style="margin-left: 5%;">
                    <p class="align-self-center">コミュニティ番号:12098</p>
                    <p class="align-self-center">コミュニティ名:ビビディバビディブー</p>
                    <p class="align-self-center">氏名:田代知代実</p>
                    <p class="align-self-center">対象者・物:キムジウォン</p>
                    <p class="align-self-center">作成日:2023年1月1日〜</p>
                    <p class="align-self-center">参加人数:20人</p>
                </div>
            </div>
            <div style="margin-left: 5%;">
                <p>コミュニティのルール</p>
            </div>
            <div>
            <button class="btn btn-outline-primary">コミュニティ削除</button>
            </div>
        </div>
        <div style="width: 50%;">
        <div style="display: flex;">
        <button class="btn btn-outline-primary">通常</button>
        <button class="btn btn-outline-primary">警告</button>
        <button class="btn btn-outline-primary">強制削除</button>
        <button class="btn btn-outline-primary">チャット確認</button>
        </div>
        <div>
            <p>・強制退会をした場合には、3日以内に該当アカウントは強制的に退会となります。</p>
            <p>ステータス変更の履歴も残す。</p>
        </div>
        <div>
            メモメモメモメモメモメモメモ
            <button class="btn btn-outline-primary">更新</button>
        </div>

        </div>
    </div>

</x-admin_layout>

</html>