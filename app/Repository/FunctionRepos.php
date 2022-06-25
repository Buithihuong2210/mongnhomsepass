<?php

namespace App\Repository;

use Illuminate\Support\Facades\DB;

class FunctionRepos
{
    public static function searchForProducts($query) {
        $sql = 'select w.* ';
        $sql .= 'from watchs as w ';
        $sql .= 'where  LOCATE(?, name) > 0 ';
        return DB::select($sql, [$query]);
        return DB::select ($sql);
    }
}
