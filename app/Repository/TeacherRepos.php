<?php

namespace App\Repository;

use Illuminate\Support\Facades\DB;

class TeacherRepos
{
    public static function getAllTeachers()
    {
        $sql = 'select s.* ';
        $sql .= 'from teachers as s ';
        $sql .= 'order by s.name';

        return DB::select($sql);
    }

    public static function getTeacherById($id){
        $sql = 'select s.* ';
        $sql .= 'from teachers as s ';
        $sql .= 'where s.id = ? ';

        return DB::select($sql, [$id]);
    }

    public static function insert($teachers){
        $sql = 'insert into teachers ';
        $sql .= '(name, dob, ssid) ';
        $sql .= 'values (?, ?, ?) ';

        $result =  DB::insert($sql,
            [$teachers->name, $teachers->dob, $teachers->ssid]);
        if($result){
            return DB::getPdo()->lastInsertId();
        } else {
            return -1;
        }

    }

    public static function update($teachers){
        $sql = 'update teachers ';
        $sql .= 'set name = ?, dob = ?, ssid = ? ';
        $sql .= 'where id = ? ';

        DB::update($sql, [$teachers->name, $teachers->dob, $teachers->ssid, $teachers->id]);

    }

    public static function delete($id){
        $sql = 'delete from teachers ';
        $sql .= 'where id = ? ';

        DB::delete($sql, [$id]);
    }
}


