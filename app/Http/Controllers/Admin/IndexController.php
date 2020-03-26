<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator;

if (version_compare(PHP_VERSION, '7.2.0', '>=')) {
    // Ignores notices and reports all other kinds... and warnings
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
    // error_reporting(E_ALL ^ E_WARNING); // Maybe this is enough
}


class IndexController extends CommonController
{
    public function index()
    {
        return view('admin.index');
    }

    //修改超級管理員密碼
    public function pass()
    {

        $rules = [
            'passwd' => 'required|between:6,14|confirmed',
        ];

        $msg = [
            'passwd.required' => '新密碼不能空白哦',
            'passwd.between' => '新密碼必須是6~14位',
            'passwd.confirmed' => '新密碼與確認密碼不一致',
        ];

        if ($input = Input::all()) {
            $validator = Validator::make($input, $rules, $msg);
            if ($validator->passes()) {
                $user = User::first();
                $passwd = Crypt::decrypt($user->passwd);
                if ($input['passwd_old'] == $passwd) {
                    $user->passwd = Crypt::encrypt($input['passwd']);
                    $user->update();
                    return back()->with('errors', '密碼修改成功!');
                } else {
                    return back()->with('errors', '原密碼錯誤');
                }
            } else {
                return back()->withErrors($validator);
            }
            
        } else {
            return view('admin.pass');
        }
    }
}
