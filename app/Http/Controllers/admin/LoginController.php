<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class LoginController extends Controller
{
    //
    public function get_login()
    {
        Auth::logout();
        return view("admin.login");
    }

    public function post_login(Request $request)
    {
        if($request->isMethod('post')){
            if(Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role'=>'admin', 'is_active'=>'true'])){
                return redirect('/admin/');

            }
            else{
                return redirect('/admin/login')->with('message','Hatalı e-mail veya şifre. Lütfen tekrar deneyiniz.')->with('statu', 'danger');
            }
        }
    }

    public function get_logout()
    {
       Auth::logout();
       return redirect('/admin/login')->with('message', 'Kullanıcı çıkış yaptı')->with('statu', 'success');

    }

    public function get_register()
    {
        return view("admin.register");
    }

    public function post_register(Request $request)
    {

        $email_find = DB::table('users')->where('email', $request->get('email'))->value('email');

        if($email_find == NULL){
            $insert_response =  DB::table('users')->insert(
                [
                    'name'             => $request->get('name'),
                    'lastname'         => $request->get('last_name'),
                    'email'            => $request->get('email'),
                    'email_verified_at' => '2020-06-27 00:00:00',
                    'password'         => Hash::make($request->get('password')),
                    'role'             => '',
                    'is_active'        => 'false'
                ]
            );

            if ($insert_response == 1) {
                return redirect('/admin/register')->with('message', 'Kullanıcı kaydı gerçekleşti ,Onaylandıktan sonra size mail ile geri dönüş yapılacaktır.')->with('statu', 'success');
            } else {
                return redirect('/admin/register')->with('message', 'Kullanıcı kaydı oluşturulamadı,lütfen tekrar deneyiniz.')->with('statu', 'danger');
            }
        }
        else{
            return redirect('/admin/register')->with('message', 'Bu kullanıcı kayıtldır.')->with('statu', 'danger');
        }


    }
}
