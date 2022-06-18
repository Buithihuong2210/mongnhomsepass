<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//
//Route::get('blade', function () {
//    return view('viewEngine');
//});
//
//Route::get(  'oddnumber', 'NumberController@oddNumber');
//
//
//
//Route ::get( 'book', function (){
//  return view('book.index');
//})->name('pie.index' );
//
//Route ::get( 'book/newBook', function (){
//    return view('book.newBook');
//})->name('book.newBook' );
//
//Route ::get( 'book/editBook', function (){
//    return view('book.editBook');
//})->name('book.editBook' );
//
//
//
//    Route::group(['prefix' => 'school'], function () {
//    Route::get("teacher", "SchoolSessionController@teacher")
//        ->name('school.teacher');
//        Route::get("create1", "SchoolSessionController@create1")
//            ->name('school.create1');
//        Route::post("store1", "SchoolSessionController@store1")
//            ->name('school.store1');
////
//    Route::get("student", "SchoolSessionController@student")
//    ->name('school.student');
//        Route::get("create2", "SchoolSessionController@create2")
//            ->name('school.create2');
//        Route::post("store2", "SchoolSessionController@store2")
//            ->name('school.store2');
//
//
////
//    Route::get("classroom", "SchoolSessionController@classroom")
//    ->name('school.classroom');
//
//    Route::get("create", "SchoolSessionController@create")
//        ->name('school.create');
//
//    Route::post("store", "SchoolSessionController@store")
//        ->name('school.store');
//
//
//
//        Route::get('update/{id}', [
//            'uses' => 'SchoolSessionController@edit',
//            'as' => 'school.edit'
//        ]);
//
//        Route::post('update/{id}', [
//            'uses' => 'SchoolSessionController@update',
//            'as' => 'school.update'
//        ]);
//
//        Route::get('delete/{id}', [
//            'uses' => 'SchoolSessionController@confirm',
//            'as' => 'school.confirm'
//        ]);
//        Route::post('delete/{id}', [
//            'uses' => 'SchoolSessionController@destroy',
//            'as' => 'school.destroy'
//        ]);
//
//        Route::get('update1/{id}', 'SchoolSessionController@edit1')
//           -> name('school.edit1');
//        Route::post('update1/{id}', 'SchoolSessionController@update1')
//         -> name('school.update1');
//
//        Route::get('delete1/{id}', 'SchoolSessionController@confirm1')
//            -> name('school.confirm1');
//        Route::post('delete1/{id}', 'SchoolSessionController@destroy1')
//            -> name('school.destroy1');
//
//        Route::get('update2/{id}', 'SchoolSessionController@edit2')
//            -> name('school.edit2');
//        Route::post('update2/{id}', 'SchoolSessionController@update2')
//            -> name('school.update2');
//
//        Route::get('delete2/{id}', 'SchoolSessionController@confirm2')
//            -> name('school.confirm2');
//        Route::post('delete2/{id}', 'SchoolSessionController@destroy2')
//            -> name('school.destroy2');
//});

//Route::group(['prefix' =>'schoolrepos'], function () {
//    Route::get("classrooms", "SchoolControllerWithRepos@classrooms")
//    ->name('schoolrepos.classrooms');
//
////
//    Route::get('show/{id}', "SchoolControllerWithRepos@show")
//        ->name('schoolrepos.show');
////
//
//    Route::get('create', "SchoolControllerWithRepos@create")
//        ->name('schoolrepos.create');
//
//    Route::post("store", "SchoolControllerWithRepos@store")
//        ->name('schoolrepos.store');
////
//
//    Route::get('update/{id}',[
//        'uses' => 'SchoolControllerWithRepos@edit',
//        'as' => 'schoolrepos.edit'
//    ]);
//
//    Route::post('update/{id}',[
//        'uses' => 'SchoolControllerWithRepos@update',
//        'as' => 'schoolrepos.update'
//    ]);
//    //
//    Route::get('delete/{id}', [
//        'uses' => 'SchoolControllerWithRepos@confirm',
//        'as' => 'schoolrepos.confirm'
//    ]);
//
//    Route::post('delete/{id}',[
//        'uses' => 'SchoolControllerWithRepos@destroy',
//        'as' => 'schoolrepos.destroy'
//    ]);
//    ////////////////////////////////////////////////////////////////////////////////////////////////////
////   --------------------------------------------------------
//
//    Route::get("students", "SchoolControllerWithRepos@students")
//        ->name('schoolrepos.students');
//
////
//    Route::get('show1/{id}', "SchoolControllerWithRepos@show1")
//        ->name('schoolrepos.show1');
////
//
//    Route::get('create1', "SchoolControllerWithRepos@create1")
//        ->name('schoolrepos.create1');
//
//    Route::post("store1", "SchoolControllerWithRepos@store1")
//        ->name('schoolrepos.store1');
////
//
//    Route::get('update1/{id}',[
//        'uses' => 'SchoolControllerWithRepos@edit1',
//        'as' => 'schoolrepos.edit1'
//    ]);
//
//    Route::post('update1/{id}',[
//        'uses' => 'SchoolControllerWithRepos@update1',
//        'as' => 'schoolrepos.update1'
//    ]);
//    //
//    Route::get('delete1/{id}', [
//        'uses' => 'SchoolControllerWithRepos@confirm1',
//        'as' => 'schoolrepos.confirm1'
//    ]);
//
//    Route::post('delete1/{id}',[
//        'uses' => 'SchoolControllerWithRepos@destroy1',
//        'as' => 'schoolrepos.destroy1'
//    ]);
//
//    //////////////////////////////////////////////////////////////
//    /// ------------------------------------------------------------
//
//
//    Route::get("teachers", "SchoolControllerWithRepos@teachers")
//        ->name('schoolrepos.teachers');
//
////
//    Route::get('show2/{id}', "SchoolControllerWithRepos@show2")
//        ->name('schoolrepos.show2');
////
//
//    Route::get('create2', "SchoolControllerWithRepos@create2")
//        ->name('schoolrepos.create2');
//
//    Route::post("store2", "SchoolControllerWithRepos@store2")
//        ->name('schoolrepos.store2');
////
//
//    Route::get('update2/{id}',[
//        'uses' => 'SchoolControllerWithRepos@edit2',
//        'as' => 'schoolrepos.edit2'
//    ]);
//
//    Route::post('update2/{id}',[
//        'uses' => 'SchoolControllerWithRepos@update2',
//        'as' => 'schoolrepos.update2'
//    ]);
//    //
//    Route::get('delete2/{id}', [
//        'uses' => 'SchoolControllerWithRepos@confirm2',
//        'as' => 'schoolrepos.confirm2'
//    ]);
//
//    Route::post('delete2/{id}',[
//        'uses' => 'SchoolControllerWithRepos@destroy2',
//        'as' => 'schoolrepos.destroy2'
//    ]);
//});


Route::group(['prefix' =>'watchrepos'], function () {
    Route::get("admins", "WatchControllerWithRepos@admins")
        ->name('watchrepos.admins');

//
    Route::get('show/{id}', "WatchControllerWithRepos@show")
        ->name('watchrepos.show');
//

    Route::get('update/{id}',[
        'uses' => 'WatchControllerWithRepos@edit',
        'as' => 'watchrepos.edit'
    ]);

    Route::post('update/{id}',[
        'uses' => 'WatchControllerWithRepos@update',
        'as' => 'watchrepos.update'
    ]);

    Route::get('update1/{id}',[
        'uses' => 'WatchControllerWithRepos@edit1',
        'as' => 'watchrepos.edit1'
    ]);

    Route::post('update1/{id}',[
        'uses' => 'WatchControllerWithRepos@update1',
        'as' => 'watchrepos.update1'
    ]);

});
//    ---------------------------------------------------------------------------------------

//----------------------------------------------------------------------------------------------

Route::group(['prefix' => 'brands'], function () {
    Route::get("brands", "BrandController@brands")
        ->name('brands.brands');

    Route::get('show/{id}',[
        'uses' => 'BrandController@show',
        'as' => 'brands.show'
    ]);

    Route::get('create',[
        'uses' => 'BrandController@create',
        'as' => 'brands.create'
    ]);

    Route::post('create',[
        'uses' => 'BrandController@store',
        'as' => 'brands.store'
    ]);

    Route::get('update/{id}',[
        'uses' => 'BrandController@edit',
        'as' => 'brands.edit'
    ]);

    Route::post('update/{id}',[
        'uses' => 'BrandController@update',
        'as' => 'brands.update'
    ]);

    Route::get('delete/{id}', [
        'uses' => 'BrandController@confirm',
        'as' => 'brands.confirm'
    ]);

    Route::post('delete/{id}',[
        'uses' => 'BrandController@destroy',
        'as' => 'brands.destroy'
    ]);
});


//--------------------------------------------------------------------------------------------------------------
Route::group(['prefix' =>'watchs'], function () {

    Route::get("watchs", "WatchController@watchs")
        ->name('watchs.watchs');

    Route::get('show/{id}', "WatchController@show")
        ->name('watchs.show');
////
//
    Route::get('create', "WatchController@create")
        ->name('watchs.create');
//
    Route::post("store", "WatchController@store")
        ->name('watchs.store');
////
//
    Route::get('update/{id}',[
        'uses' => 'WatchController@edit',
        'as' => 'watchs.edit'
    ]);
//
    Route::post('update/{id}',[
        'uses' => 'WatchController@update',
        'as' => 'watchs.update'
    ]);
//    //
    Route::get('delete/{id}', [
        'uses' => 'WatchController@confirm',
        'as' => 'watchs.confirm'
    ]);
//
    Route::post('delete/{id}',[
        'uses' => 'WatchController@destroy',
        'as' => 'watchs.destroy'
    ]);
});
//-------------------------------------------------------------------------------------------
Route::group(['prefix' =>'customers'], function () {
    Route::get("customers", "CustomerController@customers")
        ->name('customers.customers');

//
    Route::get('show/{id}', "CustomerController@show")
        ->name('customers.show');
//

    Route::get('create', [
        'uses' => 'CustomerController@create',
        'as' => 'customers.create'
    ]);

    Route::post('create',[
        'uses' => 'CustomerController@store',
        'as' => 'customers.store'
    ]);



    Route::get('update/{id}',[
        'uses' => 'CustomerController@edit',
        'as' => 'customers.edit'
    ]);

    Route::post('update/{id}',[
        'uses' => 'CustomerController@update',
        'as' => 'customers.update'
    ]);

    Route::get('update1/{id}',[
        'uses' => 'CustomerController@edit1',
        'as' => 'customers.edit1'
    ]);

    Route::post('update1/{id}',[
        'uses' => 'CustomerController@update1',
        'as' => 'customers.update1'
    ]);

});

Route::group(['prefix' => 'homepage'], function () {
    Route::get('', [
        'uses' => 'HomepageController@index',
        'as' => 'homepage.index'
    ]);
});



//---------------------------------------------------------------------------------

Route::group(['prefix' => 'client'], function (){
    Route::get('', function () {
        return view('client.index');
    })->name('client.index');


    Route::get('signup', function () {
        return view('client.signup');
    })->name('client.signup');

//    Route::get('reg', function () {
//        return view('client.reg');
//    })->name('client.reg');

    Route::get("details", "ClientController@details")
        ->name('client.details');

    Route::get('brand', function () {
        return view('client.brand');
    })->name('client.brand');

//    Route::get('allpies', function () {
//        return view('pie.allpies');
//    })->name('pie.allpies');
//
//    Route::get('applepie', function () {
//        return view('pie.applepie');
//    })->name('pie.applepie');
});

