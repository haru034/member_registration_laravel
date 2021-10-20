<?php // ルーティングを行うファイル

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {   // Laravel簡易サーバーを開いた時に最初に表示される画面を表示
        return view('welcome'); // welcome.blade.phpを表示する。
    });

// Auth::routes(); // 左のソースコードをコメントアウトした事によりLaravel UIが無効になった。

// (関数名：'create') 新規会員登録画面またはフォームを表示させる処理。会員登録は新規で行うので、'create'という意味
Route::get('/register', [App\Http\Controllers\UsersController::class, 'create'])->name('users.create');

// (関数名：'store') 会員登録画面で登録ボタンを押した後にpost形式でユーザーの新規登録を行う処理。*store=「保存」の意味
Route::post('/store', [App\Http\Controllers\UsersController::class, 'store'])->name('users.store');

//----------------------------------------------------------------------------------------------------------

// (関数名：'index') 会員一覧画面の表示
Route::get('/list', [App\Http\Controllers\UsersController::class, 'index'])->name('users.index');

// (関数名：'edit') 会員編集画面の表示
Route::get('/edit/{id}', [App\Http\Controllers\UsersController::class, 'edit'])->name('users.edit');

// (関数名：'update') 会員編集画面で編集ボタンを押した後にpost形式でユーザー情報の更新を行う処理。
Route::post('/update/{id}', [App\Http\Controllers\UsersController::class, 'update'])->name('users.update');

// (関数名：'destroy') 会員編集画面で削除ボタンを押した際にユーザー情報の削除を行う処理。
Route::get('/destroy/{id}', [App\Http\Controllers\UsersController::class, 'destroy'])->name('users.destroy');    