<?php

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
use Illuminate\Support\Facades\Input;
use App\Home;
use Illuminate\Support\Facades\Auth;

Route::get('/games', function () {
    return view('pages.games');
});
Route::get('/beranda', function () {
    return view('pages.beranda');
});
Route::get('/about', function () {
    return view('frontend.about');
});
Route::get('/news', function () {
    return view('pages.news');
});
Route::get('/template', function () {
    return view('template');
});
Route::get('/games', function () {
    return view('pages.games');
});


Route::get('admin/login', function () {
    return view('backend/login');
});
Route::resource('cat','CategoriesController');
Route::resource('article', 'ArticleController');

Route::resource('admin/article', 'PostController');
Route::resource('admin/cat', 'CatController');
Route::any('/search',function(){
    $p = Input::get ( 'search' );
  //  $user = Home::paginate(3)->where('judul','LIKE','%'.$q.'%')->orWhere('kategori','LIKE','%'.$q.'%');
    $data = Home::where(function($q) use ($p) {
        $q->where('judul','LIKE','%'.$p.'%')->orWhere('kategori','LIKE','%'.$p.'%');
})->where('deleted','=',0)->paginate(3);

return view('frontend.search',compact('data'))->with('p',$p);
// if(count($user) > 0)
    //     return view('frontend.search')->withDetails($user)->withQuery ( $p );
    // else return view ('frontend.search')->withMessage('No Details found. Try to search again !');
});

Route::resource('/', 'HomeController');
Auth::routes();
Route::resource('admin', 'AdminController');
Route::resource('admin/home', 'HomesController');
Route::get('/home', 'AdminController@index')->name('home');
Route::get('logout',function(){
    Auth::logout();
    return redirect()->back();
});
