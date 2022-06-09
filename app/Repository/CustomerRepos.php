<?php

namespace App\Repository;

use Illuminate\Support\Facades\DB;

class CustomerRepos
{
    public static function getAllCustomer()
    {
        $sql = 'select c.* ';
        $sql .= 'from customers as c ';
        $sql .= 'order by c.fullname';

        return DB::select($sql);
    }
    public static function getCustomerById($id){
        $sql = 'select c.* ';
        $sql .= 'from customers as c ';
        $sql .= 'where c.id = ? ';

        return DB::select($sql, [$id]);
    }
    public static function update($customers)
    {
        $sql = 'update customers ';
        $sql .= 'set fullname = ?, dob = ? , address = ?, phone = ?, email = ?, gender = ? ';
        $sql .= 'where id = ? ';

        DB::update($sql, [$customers->fullname, $customers->dob, $customers->address, $customers->phone, $customers->email, $customers->gender, $customers->id]);
    }
}
