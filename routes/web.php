<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use Illuminate\Support\facades\DB;

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



// Route::get('index', function () {    
//      return view('pages/index');
//  });

Route::get('about', function () {

    $footer = DB::table('footers')->get();

    return view('User.pages/about', compact('footer'));
});

Route::get('cart', function () {
    return view('User.pages/cart');
});

Route::get('checkout', function () {
    return view('User.pages/checkout');
});

Route::get('contactus', function () {
    $footer = DB::table('footers')->get();
    return view('User.pages/contactus',compact('footer'));
});

Route::get('shop', function () {
    return view('User.pages/shop');
});
Route::get('services', function () {
    return view('User.pages/service');
});
Route::get('termsandcondition', function () {
    return view('User.pages/terms&condition');
});
Route::get('admin', function () {
    return view('User.pages/wishlist');
});
Route::get('productdetails', function () {
   
    $footer = DB::table('footers')->get();
    return view('User.pages/productdetails',compact('footer'));
});

Route::get('topwear',function()
{
    $product = DB::table('products')->get();

    return view('User.pages.topwear',compact('product'));
});




//index page...by direct

Route::get('userindex', function () {
    // $header = DB::table('headers')->get();,'header''footer',
    
    // $footer = DB::table('footers')->get();

    $banner = DB::table('banners')->get();
    $catagory = DB::table('category')->get();
    $product = DB::table('products')->get();

    //$slideimage = DB::table('banners')->get('banner_image', 'description');, compact('slideimage')

    return view('User.pages.index',compact('catagory','banner','product'));
});


Route::get('login', [LoginController::class, 'login'])->name('login');


//for footer 
Route::get('head', function () {
    $header = DB::table('headers')->get();
    


    return view('User.include.header', compact('header'));
});



// Route::get('register',[loginController::class,'create']);
// Route::post('register/store',[loginController::class,'store'])->name('register.store');
// //Route::get('checking',[loginController::class,'checkdetails'])->name('checking.check');
// Route::get('chekl',[loginController::class,'authenticate'])->name('authenticate.chek1');


Auth::routes();

//Route::get('index', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// //Route::get('users', function () {    
//     return view('welcome');
// }); 

//Route::get('index', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

Route::get('redirect', [App\Http\Controllers\HomeController::class, 'redirects'])->name('redirect');
