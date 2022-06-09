<?php

namespace App\Repository;

use Illuminate\Support\Facades\DB;

class WatchRepos
{
    public static function getAllWatch()
    {
        $sql = 'select w.* ';
        $sql .= 'from watchs as w ';
        $sql .= 'order by w.name';

        return DB::select($sql);
    }

//    public static function getAllProductsWithCategory() {
//        $sql = 'select p.*, c.name as categoryName ';
//        $sql .= 'from watchs as p ';
//        $sql .= 'join brand as c on p.categoriesId = c.id ';
//        $sql .= 'order by p.name';
//
//        return DB::select ($sql);
//
//    }

    public static function getWatchById($id){
        $sql = 'select w.* ';
        $sql .= 'from watchs as w ';
        $sql .= 'where w.id = ? ';

        return DB::select($sql, [$id]);
    }

    public static function insert($watchs){
        $sql = 'insert into watchs ';
        $sql .= '(name, price, size, material, color, description, image, categoriesId) ';
        $sql .= 'values (?, ?, ?, ?, ?, ?, ?, ?) ';

        $result =  DB::insert($sql,
            [$watchs->name, $watchs->price, $watchs->size, $watchs->material, $watchs->color,$watchs->description, $watchs->image, $watchs->categoriesId]);
        if($result){
            return DB::getPdo()->lastInsertId();
        } else {
            return -1;
        }

    }

    public static function update($watchs){
        $sql = 'update watchs ';
        $sql .= 'set name = ?, price = ?, size = ?, material = ?, color = ?, description = ?, image = ?, categoriesId = ?   ' ;
        $sql .= 'where id = ? ';

        DB::update($sql, [$watchs->name, $watchs->price, $watchs->size, $watchs->material, $watchs->color, $watchs->description, $watchs->image, $watchs->categoriesId]);

    }

    public static function delete($id){
        $sql = 'delete from watchs ';
        $sql .= 'where id = ? ';

        DB::delete($sql, [$id]);
    }
}
