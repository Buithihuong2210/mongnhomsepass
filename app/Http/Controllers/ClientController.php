<?php

namespace App\Http\Controllers;

use App\Repository\BrandRepos;
use App\Repository\WatchRepos;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function details()
    {
        return view('client.details');
    }
    public function index()
    {

        $brands = BrandRepos::showAllBrand();
        $watchs = WatchRepos::showWatch();
        return view('client.index',
            [
                'brands' => $brands,
                'watchs' => $watchs
            ]);
    }

    public function show($id)
    {
////        $brands = BrandRepos::showAllBrand($id);
//        $watchs = WatchRepos::showWatch($id);
//        $brandsbyid = BrandRepos::showBrandById($id);
//
        return view('client.brand.show');
//            ,
//            [
////                'brands' => $brands[0],
//                'watchs' => $watchs[0],
//                'brands' => $brandsbyid[0]
//            ]);
    }
}
