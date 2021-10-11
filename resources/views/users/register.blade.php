<!DOCTYPE html> <!--会員登録画面のView-->
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}"> <!--「href=」でregister.cssと連携-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>会員登録画面</title>
</head>
<body>
    <div class="user-register">
        <div class="register-string">
            <h2>会員登録</h2>
        </div>
        <form action="{{ route('users.store') }}" method="post" enctype="multipart/form-data">
        @csrf
            <!--CSRF保護=クロス・サイト・リクエスト・フォージェリ(CSRF)からアプリケーションを簡単に守ることができるもの-->
            <!--POSTリクエストを送る時に「@cdrf」と記述するだけ。記述しないと送信時にエラーが起こる。-->
            <div class="user-register-form">
                <input type="text" name="name" placeholder="名前" style="width:250px; height:30px;"><!--html内にCSSを記述-->
            </div>
            <div class="user-register-form">  
                <input type="tel" name="phone" placeholder="電話番号" style="width:250px; height:30px; margin-top:10px;">
            </div>
            <div class="user-register-form"> 
                <input type="email" name="email" placeholder="メールアドレス" style="width:250px; height:30px; margin-top:10px;">
            </div>
            <div class="user-register-form">
                <input type="submit" value="登録" style="width:200px; height:30px; margin-top:20px;">
            </div>
        </form>
    </div>
</body>
</html>