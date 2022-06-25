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


    public static function getAllWatchsWithBrands() {
        $sql = 'select w.* ';
        $sql .= 'from watchs as w ';
        $sql .= 'join brands as b on w.brandsId = b.id ';
        $sql .= 'where w.brandsId = b.id ';
        $sql .= 'order by w.name';

        return DB::select ($sql);

    }

    public static function getWatchById($id)
    {
        $sql = 'select w.* ';
        $sql .= 'from watchs as w ';
        $sql .= 'where w.id = ? ';

        return DB::select($sql, [$id]);
    }

    public static function getWatchByBrandId($id) {
        $sql = 'select w.* ';
        $sql .= 'from watchs as w ';
        $sql .= 'where w.brandsId = ?';

        return DB::select($sql, [$id]);
    }

    public static function insert($watchs){
        $sql = 'insert into watchs ';
        $sql .= '(name, visible, price, size, material, color, description, image, brandsId) ';
        $sql .= 'values (?, ?, ?, ?, ?, ?, ?, ?, ?) ';

        $result =  DB::insert($sql,
            [$watchs->name,$watchs->visible, $watchs->price, $watchs->size, $watchs->material, $watchs->color,$watchs->description, $watchs->image, $watchs->brandsId]);
        if($result){
            return DB::getPdo()->lastInsertId();
        } else {
            return -1;
        }

    }

    public static function update($watchs){
        $sql = 'update watchs ';
        $sql .= 'set name = ?, visible = ?, price = ?, size = ?, material = ?, color = ?, description = ?, image = ?, brandsId = ?   ' ;
        $sql .= 'where id = ? ';

        DB::update($sql, [$watchs->name, $watchs->visible, $watchs->price, $watchs->size, $watchs->material, $watchs->color, $watchs->description, $watchs->image, $watchs->brandsId, $watchs->id]);

    }

    public static function delete($id){
        $sql = 'delete from watchs ';
        $sql .= 'where id = ? ';

        DB::delete($sql, [$id]);
    }

    public static function showWatch(){
    $sql = 'select w.* ';
    $sql .= 'from watchs as w ';
    $sql .= 'where visible = 0 ';
    $sql .= 'order by w.id ';
    return DB::select($sql);
}

//    public static function searchWatchs(){
//        $sql = 'select w.* ';
//        $sql .= 'from watchs as w ';
//        $sql .= 'where name like % $keywords % ';
//        return DB::select($sql);
//    }
}
