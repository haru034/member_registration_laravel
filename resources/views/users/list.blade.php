<!DOCTYPE html> <!--会員一覧画面のView-->
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="{{ asset('css/list.css') }}"> <!--「href=」でlist.cssと連携-->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>会員一覧画面</title>
    </head>
    <body>
        <div class="user-list">
            <table class="list-table">
                <tr>
                    <th>名前</th>
                    <th>電話番号</th>
                    <th>メールアドレス</th>
                    <th><a href="{{url('/register/')}}">>> 登録</a></th>
                </tr>
            @foreach ($users as $user) <!--foreach文を使用してユーザーの一覧を表示する-->
                <tr>
                    <td>{{$user->name}}</td> <!--名前-->
                    <td>{{$user->phone}}</td> <!--電話番号-->
                    <td>{{$user->email}}</td> <!--メールアドレス-->
                    <td><a href="{{url('/edit')}}/{{$user->id}}">>> 編集</a></td>
                    <!--一覧画面で各ユーザーごとの「>> 編集」リンクを押した時にそのユーザーid専用の会員編集画面に遷移する処理-->
                </tr>
            @endforeach
            </table>
        </div>
    </body>
</html>
