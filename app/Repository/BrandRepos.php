<?php

namespace App\Repository;

use Illuminate\Support\Facades\DB;

class BrandRepos
{
    public static function getAllBrand() {
        $sql = 'select b.* ';
        $sql .= 'from brands as b ';
        $sql .= 'order by b.id';

        return DB::select ($sql);
    }

    public static function getBrandById($id){
        $sql = 'select b.* ';
        $sql .= 'from brands as b ';
        $sql .= 'where b.id = ? ';

        return DB::select($sql, [$id]);
    }

    public static function insert($brands){
        $sql = 'insert into brands ';
        $sql .= '(id, name, image, visible) ';
        $sql .= 'values (?, ?, ?, ?) ';

        $result =  DB::insert($sql, [$brands->id, $brands->name, $brands->image, $brands->visible]);
        if ($result) {
            return DB::getPdo()->lastInsertId();
        } else {
            return -1;
        }
    }

    public static function update($brands)
    {
        $sql = 'update brands ';
        $sql .= 'set name = ?, image = ? ';
        $sql .= 'where id = ? ';

        DB::update($sql, [$brands->name, $brands->image, $brands->id]);

    }

    public static function delete($id)
    {
        $sql = 'delete from brands ';
        $sql .= 'where id = ? ';

        DB::delete($sql, [$id]);
    }

    public static function getBrandByWatchId($id)
    {
        $sql = 'select b.* ';
        $sql .= 'from brands as b ';
        $sql .= 'join watchs as w on b.id = w.brandsId ';
        $sql .= 'where w.id = ?';

        return DB::select($sql, [$id]);
    }
//public static function deleteBrandByIDWatchs($id)
//{
//    $sql = 'select b.name, count(w.brandsId) ';
//    $sql .= 'from brands as b join watchs as w on b.id = w.brandsId group by b.id, b.name ';
//    $sql.= ' having count(w.brandsId) >0 ' ;
//    return DB::select($sql, [$id]);
//}

        public static function showAllBrand(){
            $sql = 'select b.* ';
            $sql .= 'from brands as b ';
            $sql .= 'where visible = 0 ';
            $sql .= 'order by b.id ';
            return DB::select($sql);
        }

        public  static function showBrandById($id){
            $sql = 'select w.* ';
            $sql .= 'from watchs as w ';
            $sql .= 'join brands as b on w.brandsId = b.id ';
            $sql .= 'where w.brandsId = ?';
            return DB::select($sql, [$id]);
        }


}
