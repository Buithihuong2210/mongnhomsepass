<?php

namespace App\Http\Controllers;

use App\Repository\BrandRepos;
use App\Repository\FunctionRepos;
use App\Repository\WatchRepos;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function details($id)
    {
        $brands = BrandRepos::showAllBrand();
        $watchs = WatchRepos::showWatch();
        $watchs_details = WatchRepos::getWatchById($id);
        return view('client.details',
            [
                'brands' => $brands,
                'watchs' => $watchs,
                'watchs_details' => $watchs_details
            ]);
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
        $brands = BrandRepos::showAllBrand();
        $watchs = WatchRepos::showWatch();
        $watchs_brands = BrandRepos::showBrandById($id);

        return view('client.showBrand',
            [
                'watchs' => $watchs,
                'brands' => $brands,
                'watchs_brands' => $watchs_brands

            ]
        );
    }
    public function search(Request $request)
    {
        $query = $request->input('query');
        $brands = BrandRepos::showAllBrand();
        $watches_search = FunctionRepos::searchForProducts($query);
        return view('client.search',
            [
                'watchs' => $watches_search,
                'brands' => $brands,

            ]);
    }
    public function erorr()
    {
        return view('client.hello');
    }
}

