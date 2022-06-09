<?php

namespace App\Repository;

use Illuminate\Support\Facades\DB;

class ClassroomRepos
{
    public static function getAllClassrooms()
    {
        $sql = 'select c.* ';
        $sql .= 'from classrooms as c ';
        $sql .= 'order by c.name';

        return DB::select($sql);
    }
    public static function getClassroomById($id){
        $sql = 'select c.* ';
        $sql .= 'from classrooms as c ';
        $sql .= 'where c.id = ? ';

        return DB::select($sql, [$id]);
    }

    public static function insert($classrooms){
        $sql = 'insert into classrooms ';
        $sql .= '(name, startDate, size) ';
        $sql .= 'values (?, ?, ?) ';

        $result =  DB::insert($sql,
            [$classrooms->name, $classrooms->startDate, $classrooms->size]);
        if($result){
            return DB::getPdo()->lastInsertId();
        } else {
            return -1;
        }

    }

    public static function update($classrooms){
        $sql = 'update classrooms ';
        $sql .= 'set name = ?, startDate = ?, size = ? ';
        $sql .= 'where id = ? ';

        DB::update($sql, [$classrooms->name, $classrooms->startDate, $classrooms->size, $classrooms->id]);

    }

    public static function delete($id){
        $sql = 'delete from classrooms ';
        $sql .= 'where id = ? ';

        DB::delete($sql, [$id]);
    }

}
