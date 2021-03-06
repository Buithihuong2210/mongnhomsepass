<?php

namespace App\Http\Controllers;

use App\Repository\AdminRepos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class WatchControllerWithRepos extends Controller
{
    public function admins()
    {
        $admins = AdminRepos:: getAllAdmins();
        return view('watch.watchWithRepos.admins',
            [
                'admins' => $admins,
            ]);
    }

    public function show($id)
    {

        $admins = AdminRepos::getAdminById($id); //this is always an array of objects
        return view('watch.watchWithRepos.show',
            [
                'admins' => $admins[0] //get the first element
            ]
        );
    }

    public function edit($id)
    {
        $admins = AdminRepos::getAdminById($id); //this is always an array
        return view(
            'watch.watchWithRepos.update',
            ["admins" => $admins[0]]);
    }
    public function update(Request $request, $id)
    {
        if ($id != $request->input('id')) {
            //id in query string must match id in hidden input
            return redirect()->action('WatchControllerWithRepos@admins');
        }

        $this->formValidate($request)->validate();

        $admins = (object)[
            'id' => $request->input('id'),
            'username' => $request->input('username'),
//            'password' => $request::make($request-> newPassword),
        'password'=> $request->input('password'),
            'fullname' => $request->input('fullname'),
            'email' => $request->input('email'),
            'phone' => $request ->input('phone')
        ];
        AdminRepos::update($admins);

        return redirect()->action('WatchControllerWithRepos@admins')
            ->with('msg', 'Update Successfully');
    }
    private function formValidate($request)
    {
        return Validator::make(
            $request->all(),
            [

                'password' =>['required'],
                'fullname' =>['required'],
                'email' =>['required', 'e-mail'],
                'phone'=>['required', 'starts_with:0']
            ]
        );
    }
//---------------------------------------------------------------------------------------------


}
