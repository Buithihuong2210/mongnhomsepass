<?php

namespace App\Http\Controllers;

use App\Repository\AdminRepos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ManualAuthController extends Controller
{
    public function ask(){
        return view('watch.manualAuth.login');
    }

    public function signin(Request $request){

        //TODO: write your code to verify username and password
        /**
         * you have to check if username and password
         * match a record in database
         * then save username in Session and move to next page
         * Otherwise, go back to login form
         */


        $adminInformations = AdminRepos::getAllAdmins();
        $username = $request->input('username');
        $password = $request->input('password');
        $loop = 0;
        foreach($adminInformations as $adminInformation){
            if(($adminInformation->username) == $username && ($adminInformation->password) == sha1($password)) {
                Session::put('username', $request->input('username'));
                return redirect()->route('watchrepos.admins');
            }
            else{
                $loop += 1;
            }
        }
        if($loop != 0){
//            Session::put('message', 'Username hoặc mật khẩu không đúng!');
            return redirect()->route('auth.ask')
                ->with('message', 'Username hoặc mật khẩu không đúng!')
                ;
        }

//        Session::put('username', $request->input('username'));
//        return redirect()->route('watchrepos.admins');
    }

    public function signout(){
        if(Session::has('username')){
            Session::forget('username');
        }
        return redirect()->action('ManualAuthController@ask');
    }
}
