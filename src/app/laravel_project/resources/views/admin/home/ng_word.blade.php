<html>
<x-admin_layout>
    <!-- $title のところに入れる -->
    <x-slot name="title">NGワード</x-slot>
    <!-- $slotに入れる内容は裸で置く -->
    <div class="">
    <p>HOME＞＞NGワード管理</p>
  </div>
    <div style="margin-top: 35px; margin-bottom: 100px;">
    <button class="btn btn-outline-primary align-self-center">新規追加</button>
        <div class="d-flex justify-content-between border rounded" style="padding:10px;">
            <p class="align-self-center">死</p>
            <button class="btn btn-outline-primary align-self-center">削除</button>
        </div>
        <div class="d-flex justify-content-between border rounded" style="padding:10px;">
            <p class="align-self-center">害</p>
            <button class="btn btn-outline-primary align-self-center">削除</button>
        </div>
        <div class="d-flex justify-content-between border rounded" style="padding:10px;">
            <p class="align-self-center">殺</p>
            <button class="btn btn-outline-primary align-self-center">削除</button>
        </div>
    </div>

</x-admin_layout>

</html>