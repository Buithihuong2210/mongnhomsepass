<?php

namespace App\Http\Controllers;

use App\Repository\BrandRepos;
use App\Repository\WatchRepos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class WatchController extends Controller
{
    public function watchs()
    {
//        $watchs = WatchRepos:: getAllWatch();
        $watchs = WatchRepos::getAllWatchsWithBrands();
        return view('watch.watchs.watchs',
            [
                'watchs' => $watchs,
            ]);
    }
    public function show($id)
    {

        $watchs = WatchRepos::getWatchById($id); //this is always an array of objects
        $brands = BrandRepos::getBrandByWatchId($id);
        return view('watch.watchs.show',
            [
                'watchs' => $watchs[0], //get the first element
                'brands' => $brands[0]
            ]
        );
    }

    public function create()
    {
        $brands = BrandRepos::getAllBrand();
        return view(
            'watch.watchs.new',
            ["watchs" => (object)[
                'id' => '',
                'name' => '',
                'visible' => '',
                'price' => '',
                'size' => 0,
                'material'=>'',
                'color'=>'',
                'description'=>'',
                'image'=>'',
                'brandsId'=>''
            ],
                "brands" => $brands
            ]);

    }

    public function store(Request $request)
    {
//        dd($request-> all());
        $this->formValidate($request)->validate(); //shortcut

        if($request->has('file')){
            $image =  $request->file->getClientoriginalName();
            $request->file->move(public_path('assets/img/watches'), $image);
        }
        $request->merge(['image' => $image]);

        $watchs = (object)[
            'name' => $request->input('name'),
            'visible' => $request->input('visible'),
            'price' => $request->input('price'),
            'size' => $request->input('size'),
            'material' => $request->input('material'),
            'color' => $request->input('color'),
            'description' => $request->input('description'),
            "image" => $request->input('image'),
            'brandsId' => $request->input('brands'),

        ];

        $newId = WatchRepos::insert($watchs);

        return redirect()
            ->action('WatchController@watchs')
            ->with('msg', 'New watchs with id: '.$newId.' has been inserted');
    }

    public function edit($id)
    {
        $watchs = WatchRepos::getWatchById($id); //this is always an array
        $brands = BrandRepos::getAllBrand();

        return view(
            'watch.watchs.update',
            ["watchs" => $watchs[0], "brands" => $brands]);

    }

    public function update(Request $request, $id)
    {
        if ($id != $request->input('id')) {
            //id in query string must match id in hidden input
            return redirect()->action('WatchController@watchs');
        }

//        dd($request-> all());

        $this->formValidate($request)->validate(); //shortcut

        if($request->has('file')){
            $image =  $request->file->getClientoriginalName();
            $request->file->move(public_path('assets/img/watches'), $image);
        }
        $request->merge(['image' => $image]);

//        $request->file->store('watchs', 'public');
        $watchs = (object)[
            'id' => $request->input('id'),
            'name' => $request->input('name'),
            'visible' => $request->input('visible'),
            'price' => $request->input('price'),
            'size' => $request->input('size'),
            'material' => $request->input('material'),
            'color' => $request->input('color'),
            'description' => $request->input('description'),
            'image' => $request->input('image'),
            'brandsId' => $request->input('brands'),
        ];
        WatchRepos::update($watchs);

        return redirect()->action('WatchController@watchs')
            ->with('msg', 'Update Successfully');
    }


    public function confirm($id)
    {
        $watchs = WatchRepos::getWatchById($id); //this is always an array
        $brands = BrandRepos::getBrandByWatchId($id);

        return view('watch.watchs.confirm',
            [
                'watchs' => $watchs[0],
                'brands' => $brands[0]
            ]
        );
    }

    public function destroy(Request $request, $id)
    {
        if ($request->input('id') != $id) {
            //id in query string must match id in hidden input
            return redirect()->action('WatchController@watchs');
        }

        WatchRepos::delete($id);


        return redirect()->action('WatchController@watchs')
            ->with('msg', 'Delete Successfully');
    }

    private function formValidate($request)
    {
        return Validator::make(
            $request->all(),
            [
                'name' => ['required','min:8'],
                'size' =>['required','digits:2,8','numeric'],
                'price'=>['required', 'numeric'],
                'material'=>['required'],
                'color' =>['required' ,'min:3',
                ],
//                'image' =>['required'],
                'description'=>['required']
            ],
            [
                'name.required'=>'Please enter Name Watch',

            ]
        );
    }

}
