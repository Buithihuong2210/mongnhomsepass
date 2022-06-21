<?php

namespace App\Http\Controllers;

use App\Repository\BrandRepos;
use App\Repository\WatchRepos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BrandController extends Controller
{
    public function brands()
    {
        $brands = BrandRepos::getAllBrand();
        return view('watch.brands.brands',
            [
                'brands' => $brands,
            ]);
    }

    public function show($id)
    {

        $brands = BrandRepos::getBrandById($id); //this is always an array of objects
//        $brands = BrandRepos::getBrandByProductId($id);
        return view('watch.brands.show',
            [
                'brands' => $brands[0] //get the first element
            ]
        );
    }

    public function create()
    {
        return view(
            'watch.brands.new',
            ["brands" => (object)[
                'id' => '',
                'name' => '',
                'image' => '',
                'visible' => ''
            ]]);
    }

    public function store(Request $request)
    {
        $this->formValidate($request)->validate(); //shortcut

        if ($request->has('file')) {
            $image = $request->file->getClientoriginalName();
            $request->file->move(public_path('assets/img/brands'), $image);
        }
        $request->merge(['image' => $image]);

        $brands = (object)[
            'id' => $request->input('id'),
            'name' => $request->input('name'),
            "image" => $request->input('image'),
            'visible' => $request->input('visible')

        ];
        $newId = BrandRepos::insert($brands);

        return redirect()
            ->action('BrandController@brands')
            ->with('msg', 'New brand with id: ' . $newId . ' has been inserted');
    }

    public function edit($id)
    {
        $brands = BrandRepos::getBrandById($id); //this is always an array


        return view(
            'watch.brands.update',
            ["brands" => $brands[0]]);
    }

//    public function update(Request $request, $id)
//    {
//        if ($id != $request->input('id')) {
//            //id in query string must match id in hidden input
//            return redirect()->action('BrandController@brands');
//        }
//        if ($request->hasFile('file')) {
//
//            $request->validate([
//                'image' => 'mimes:jpg,jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
//            ]);
//
//            // Save the file locally in the storage/public/ folder under a new folder named /product
//
//        }
//        $request->file->store('brands', 'public');
//        //     $this->formValidate($request)->validate(); //shortcut
//
//        $brands = (object)[
//            'id' => $request->input('id'),
//            'name' => $request->input('name'),
//            "image" => $request->file->hashName(),
//        ];
//        BrandRepos::update($brands);
//
//        return redirect()->action('BrandController@brands')
//            ->with('msg', 'Update Successfully');;
//    }

    public function update(Request $request, $id)
    {
        if ($id != $request->input('id')) {
            //id in query string must match id in hidden input
            return redirect()->action('BrandController@brands');
        }

//        dd($request-> all());

        $this->formValidate($request)->validate(); //shortcut

        if ($request->has('file')) {
            $image = $request->file->getClientoriginalName();
            $request->file->move(public_path('assets/img/brands'), $image);
        }
        $request->merge(['image' => $image]);

        $brands = (object)[
            'id' => $request->input('id'),
            'name' => $request->input('name'),
            "image" => $request->input('image'),
            'visible' => $request->input('visible')
        ];
        BrandRepos::update($brands);

        return redirect()->action('BrandController@brands')
            ->with('msg', 'Update Successfully');;
    }


    public function confirm($id)
    {
        $brands = BrandRepos::getBrandById($id); //this is always an array

        return view('watch.brands.confirm',
            [
                'brands' => $brands[0]
            ]
        );
    }

    public function destroy(Request $request, $id)
    {
        if ($request->input('id') != $id) {
            //id in query string must match id in hidden input
            return redirect()->action('BrandController@index');
        }


        $watch = WatchRepos::getWatchByBrandId($id);

        if (count($watch) > 0) {
            return redirect()->action('BrandController@brands')
                ->with('message', 'Can not delete!!! Please delete products related to brands !!');
        } else {
            BrandRepos::delete($id);
            return redirect()->action('BrandController@brands')
                ->with('msg', 'Delete Successfully');
        }

    }

    private function formValidate($request)
    {
        return Validator::make(
            $request->all(), [
            ]
        );
    }
}
