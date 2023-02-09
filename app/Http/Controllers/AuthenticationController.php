<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthenticationController extends Controller
{
    public function login(){
        return view('client.login');
    }
    public function postLogin(Request $request){
        $username = $request ->username;
        $pass=$request ->password;
        $account =Account::where(['username'=>$username])->first();
        if($account!=null && Hash::check($pass, $account->password)) {
            if($account->status===1){
                request()->session()->invalidate();
                request()->session()->push('adminSession',$account);
                return redirect('/admin/product');
            }
            else return back()->with('loginfail','Tài khoản đã bị khóa!');

        }
        else return back()->with('loginfail','Email hoặc mật khẩu không chính xác!');
    }
    public function logout(){
        request()->session()->invalidate();
        return redirect("/login");
    }
}
