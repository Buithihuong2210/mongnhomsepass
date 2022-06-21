<?php

namespace App\Repository;

use Illuminate\Support\Facades\DB;

class AdminRepos
{
    public static function getAllAdmins()
    {
        $sql = 'select a.* ';
        $sql .= 'from admins as a ';
        $sql .= 'order by a.username';

        return DB::select($sql);
    }
    public static function getAdminById($id){
        $sql = 'select a.* ';
        $sql .= 'from admins as a ';
        $sql .= 'where a.id = ? ';

        return DB::select($sql, [$id]);
    }
    public static function update($admins)
    {
        $sql = 'update admins ';
        $sql .= 'set username = ?, fullname = ? , email = ?, phone = ? ';
        $sql .= 'where id = ? ';

        DB::update($sql, [$admins->username, $admins->fullname, $admins->email, $admins->phone, $admins->id]);

    }
    public static function password()
    {
        $sql = 'select a.password as apassword ';
        $sql .= 'from admins as a ';
        $sql .= 'where  ';
    }

}
