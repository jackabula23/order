<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Crypt;

require_once 'resources/org/code/Code.class.php';

class LoginController extends CommonController
{
    public function code()
    {
        $code = new \Code;
        $code->make();
    }

    public function login()
    {

        if ($input = Input::all()) {
            $code = new \Code;
            $_code = $code->get();
            if (strtoupper($input['code']) != $_code) {
                return back()->with('msg', '驗證碼輸入錯誤');
            }
            $user = User::first();
            if ($user->user_name != $input['user_name'] || Crypt::decrypt($user->passwd) != $input['passwd']) {
                return back()->with('msg', '帳號或者密碼輸入錯誤');
            }
            session(['user' => $user]);
            //dd(session('user'));
            return redirect('admin/index');
        } else {
            return view('admin.login');
        }
    }

    public function quit()
    {
        session(['user' => null]);
        return redirect('admin/login');
    }
}
