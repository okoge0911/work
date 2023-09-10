<html>
<x-admin_layout>
    <!-- $title のところに入れる -->
    <x-slot name="title">ユーザー詳細</x-slot>
    <!-- $slotに入れる内容は裸で置く -->
    <div class="">
        <p>HOME＞＞ユーザー管理＞＞ユーザー詳細</p>
    </div>

    <div style="display: flex; margin-top:3%">
        <div style="width: 50%;">
            <div style="display: flex;">
                <img class="border rounded-circle" src="{{asset('/images/french-bulldog-3239718_1280.jpg')}}" style="width: 120px;height: 120px; margin-left:1rem;">
                <div style="margin-left: 5%;">
                    <p class="align-self-center">管理番号:12098</p>
                    <p class="align-self-center">アカウント名:ビビディバビディブー</p>
                    <p class="align-self-center">氏名:田代知代実</p>
                    <p class="align-self-center">登録年月日:2023年1月1日〜</p>
                    <p class="align-self-center">生年月日:2023年1月1日〜</p>
                    <p class="align-self-center">住所:東京都調布市</p>
                    <p class="align-self-center">電話番号：09012345678</p>
                    <p class="align-self-center">メールアドレス：abc@test.com</p>
                </div>
            </div>
            <div style="margin-left: 5%;">
                <table>
                    <tr>
                        <th>参加コミュニティ名</th>
                        <th>参加時期</th>
                    </tr>
                    <tr>
                        <td>・世界のコニギの愛をコニたちへ</td>
                        <td>2023/5/5~</td>
                    </tr>
                </table>
            </div>
            <div>
            <button class="btn btn-outline-primary">アカウント削除</button>
            </div>
        </div>
        <div style="width: 50%;">
        <div style="display: flex;">
        <button class="btn btn-outline-primary">通常</button>
        <button class="btn btn-outline-primary">警告</button>
        <button class="btn btn-outline-primary">強制退会</button>
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