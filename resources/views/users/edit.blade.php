<!DOCTYPE html> <!--会員編集画面のView-->
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('css/edit.css') }}"> <!--「href=」でedit.cssと連携-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>会員編集画面</title>
</head>
<body>
    <div class="user-edit">
        <div class="edit-string">
            <h2>会員編集 会員ID: {{ $user->id }}</h2> <!--会員IDを取得して各ユーザーのページを表示-->
        </div>
        <form action="{{ route('users.update', $user->id) }}" method="post" enctype="multipart/form-data">
        @csrf
            <input type="hidden" name="id" value="{{ $user->id }}" /> <!--情報を更新する際に、更新するユーザーIDをサーバーに送る処理-->
            
            <div class="user-edit-form">   <!--value属性で初期値(各ユーザーの情報)を表示-->
                <input type="text" name="name" value="{{ $user->name }}" placeholder="名前" style="width:250px; height:30px;">
            </div>                             
            <div class="user-edit-form">  
                <input type="tel" name="phone" value="{{ $user->phone }}" placeholder="電話番号" style="width:250px; height:30px; margin-top:10px;">
            </div>
            <div class="user-edit-form"> 
                <input type="email" name="email" value="{{ $user->email }}" placeholder="メールアドレス" style="width:250px; height:30px; margin-top:10px;">
            </div>
            <div class="user-edit-form">
                <input type="submit" value="編集" style="width:200px; height:30px; margin-top:20px;">
            </div>
        </form>
        <!--削除ボタンのみ、ルーティング先をdestroyに指定するためにformタグで囲む必要がある。-->
        <form action="{{ route('users.destroy', $user->id) }}" method="get" enctype="multipart/form-data">
            <div class="user-edit-form">
                <input type="submit" value="削除" style="width:200px; height:30px; margin-top:20px;">
            </div>
        </form>
        <div class="error-indication">
            @foreach ($errors->all() as $error) <!--入力ミスまたは重複している部分(今回はemail)があれば、警告文で知らせてくれる設定-->
                <li>{{$error}}</li>
            @endforeach
        </div>
    </div>
</body>
</html>