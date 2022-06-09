<?php

namespace App\Repository;

use Illuminate\Support\Facades\DB;

class StudentRepos
{
    public static function getAllStudents()
    {
        $sql = 'select s.* ';
        $sql .= 'from students as s ';
        $sql .= 'order by s.name';

        return DB::select($sql);
    }

    public static function getStudentById($id){
        $sql = 'select s.* ';
        $sql .= 'from students as s ';
        $sql .= 'where s.id = ? ';

        return DB::select($sql, [$id]);
    }

    public static function insert($students){
        $sql = 'insert into students ';
        $sql .= '(name, email, contact) ';
        $sql .= 'values (?, ?, ?) ';

        $result =  DB::insert($sql,
            [$students->name, $students->email, $students->contact]);
        if($result){
            return DB::getPdo()->lastInsertId();
        } else {
            return -1;
        }

    }

    public static function update($students){
        $sql = 'update students ';
        $sql .= 'set name = ?, email = ?, contact = ? ';
        $sql .= 'where id = ? ';

        DB::update($sql, [$students->name, $students->email, $students->contact, $students->id]);

    }

    public static function delete($id){
        $sql = 'delete from students ';
        $sql .= 'where id = ? ';

        DB::delete($sql, [$id]);
    }
}
