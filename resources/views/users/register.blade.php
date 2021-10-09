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
            <h1>会員登録</h1>
        </div>
        <table class="register-table">
        <tr>
            <th>名前</th>
            <th>電話番号</th>
            <th>メールアドレス</th>
        </tr>
        </table>
    </div>
</body>
</html>