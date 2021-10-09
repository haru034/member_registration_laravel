<?php //Laravel UI使っているのでこのファイルは没

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [ // バリデーションの設定
            'name' => ['required', 'string', 'max:15'], // 名前
            'phone' => ['required','numeric', 'digits_between:11,15'], // 電話番号
            'email' => ['required', 'string', 'email', 'max:254', 'unique:users'], // メールアドレス
            // 'password' => ['required', 'string', 'min:8', 'confirmed'], // パスワード
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([ // DBへの保存の設定
            'name' => $data['name'], // 名前
            'phone' => $data['phone'], // 電話番号
            'email' => $data['email'], // メールアドレス
            // 'password' => Hash::make($data['password']), // パスワード
        ]);
    }
}
