<?php // ターミナルで、php artisan make:migration drop_column_users_column --table=users と打ち込んで、マイグレーションを実行し、
      // DB内のの'users'テーブルにある'password'というカラムを削除するマイグレーションファイルを作成。('drop'=「削除」の意味)
      // これが作成したマイグレーションファイル。

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropColumnUsersColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('password'); // データベースの「password」カラムを削除。この後、マイグレーションを実行した。
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
