<?php // このファイルに、会員登録画面、会員一覧画面、会員編集画面のControllerを集約させる。

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Modelsフォルダ内の、User.phpを使用
use Illuminate\Support\Facades\Hash; // パスワードを乱数にする設定

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() //会員一覧画面
    {
        // ここにデータベース内(usersテーブル)の中身を引っ張ってくるコードを書く。
        $users = \App\Models\User::all(); // $usersという変数を定義し、その中に入れる値を記述。(今回はユーザーの情報を全て取得)
        return view('users.list', ['users' => $users]); // 左の$usersに入っている値を右の'users'に入れる
        // return viewでViewファイルの内容を持ってくる処理ができる。
        // 'usersフォルダの.list.blade.phpファイル'という意味。
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() //会員登録画面
    {
        return view('users.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) // 会員登録画面で登録ボタンを押した後にユーザーの新規登録を行う処理(store=「保存」)
    {
        $request->validate([ // バリデーション = 入力チェック
            'name' => 'required', // required = 入力必須
            'phone' => 'required',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'], 
        ]);
        $user = new User();
        $user->fill($request->all())->save();
        return redirect("list"); // リダイレクトの設定(登録ボタンを押したら会員一覧画面に遷移する処理)
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) // 会員編集画面
    {
        return view();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
