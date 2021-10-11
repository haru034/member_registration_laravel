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

Route::get('/', function () {  // Laravel簡易サーバーを開いた時に最初に表示される画面を表示。まさに'welcome'。
        return view('welcome');
    });

// Auth::routes(); // 左のソースコードをコメントアウトした事によりLaravel UIがルーティングされなくなった。


// (関数名：'create') 新規会員登録画面またはフォームを表示させる処理。会員登録は新規で行うので、'create'という意味
Route::get('/register', [App\Http\Controllers\UsersController::class, 'create'])->name('users.create');

// (関数名：'store') 会員登録画面で登録ボタンを押した後にpost形式でユーザーの新規登録を行う処理。*store='保存'の意味
Route::post('/store', [App\Http\Controllers\UsersController::class, 'store'])->name('users.store');

//----------------------------------------------------------------------------------------------------------

// 会員一覧画面(関数名：'index') 会員一覧画面を表示させる
Route::get('/list', [App\Http\Controllers\UsersController::class, 'index'])->name('users.index');

// 会員編集画面(関数名：'edit')
Route::get('/edit', [App\Http\Controllers\UsersController::class, 'edit'])->name('users.edit');