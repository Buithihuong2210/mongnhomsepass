<?php

namespace App\Http\Controllers;

use App\Repository\WatchRepos;
use Illuminate\Http\Request;

class WatchController extends Controller
{
    public function watchs()
    {
        $watchs = WatchRepos:: getAllWatch();
//        $watchs = Repos::getAllWatchWithBrand();
        return view('watch.watchs.watchs',
            [
                'watchs' => $watchs,
            ]);
    }
    public function show($id)
    {

        $watchs = WatchRepos::getWatchById($id); //this is always an array of objects
//        $categories = WatchRepos::getBrandByWatchId($id);
        return view('watch.watchs.show',
            [
                'watchs' => $watchs[0], //get the first element
//                'brands' => $brands[0]
            ]
        );
    }

    public function create()
    {
        return view(
            'watch.watchs.new',
            ["watchs" => (object)[
                'id' => '',
                'name' => '',
                'price' => '',
                'size' => 0,
                'material'=>'',
                'color'=>'',
                'description'=>'',
                'image'=>'',
                'categoriesId'=>''
            ]]);

    }

    public function store(Request $request)
    {
        //dd($request-> all());
        //$this->formValidate($request)->validate(); //shortcut
        if ($request->hasFile('file'))
        {
            $request->validate([
                'image' => 'mimes:jpg,jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
            ]);
            // Save the file locally in the storage/public/ folder under a new folder named /watchs
        }
        $request->file->store('watchs','public');
        $watchs = (object)[
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'size' => $request->input('size'),
            'material' => $request->input('material'),
            'color' => $request->input('color'),
            'description' => $request->input('description'),
            "image" => $request->file->hashName(),
            'categoriesId' => $request->input('categoriesId'),

        ];

        $newId = WatchRepos::insert($watchs);

        return redirect()
            ->action('WatchController@watchs')
            ->with('msg', 'New watchs with id: '.$newId.' has been inserted');
    }

    public function edit($id)
    {
        $watchs = WatchRepos::getWatchById($id); //this is always an array


        return view(
            'watch.watchs.update',
            ["watchs" => $watchs[0]]);
    }

    public function update(Request $request, $id)
    {
        if ($id != $request->input('id'))
        {
            //id in query string must match id in hidden input
            return redirect()->action('WatchController@watchs');
        }

        if ($request->hasFile('file'))
        {
            $request->validate([
                'image' => 'mimes:jpg,jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
            ]);
            // Save the file locally in the storage/public/ folder under a new folder named /watchs
        }
        $request->file->store('watchs','public');
        $watchs = (object)[
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'size' => $request->input('size'),
            'material' => $request->input('material'),
            'color' => $request->input('color'),
            'description' => $request->input('description'),
            "image" => $request->file->hashName(),
            'categoriesId' => $request->input('brand'),

        ];
        WatchRepos::update($watchs);

        return redirect()->action('WatchController@watchs')
            ->with('msg', 'Update Successfully');;
    }

    public function confirm($id){
        $watchs = WatchRepos::getWatchById($id); //this is always an array

        return view('watch.watchs.confirm',
            [
                'watchs' => $watchs[0]
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
//            [
//                'name' => ['required'],
//                'size' =>['required']
//            ]
        );
    }

}
