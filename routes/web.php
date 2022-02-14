<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use Illuminate\Support\facades\DB;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\bannerController;
use App\Http\Controllers\footerController;
use App\Http\Controllers\headersController;
use App\Http\Controllers\productController;
use App\Http\Controllers\brandController;
use App\Http\Controllers\productdetailController;
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
Route::get('adminhome',function(){


 return view('Admin.pages.index');
});



//index page...by direct

Route::get('userindex', function () {
    // $header = DB::table('headers')->get();,'header''footer',
    
    // $footer = DB::table('footers')->get();

    $banner = DB::table('banners')->get();
    $catagory = DB::table('category')->get();
    $product = DB::table('products')->get();

    //$slideimage = DB::table('banners')->get('banner_image', 'description');, compact('slideimage')

    return view('User.pages.index',compact('banner','catagory','product'));
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


////For admin Routes

Route::get('/', function () {
    return view('welcome');
});
Route::get('main', function () {
    return view('pages/index');
});
// Route::get('category', function () {
//     return view('pages/category');
// });


Route::get('category', [categoryController::class, 'index']); 
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');


Route::get('dashboard', [CustomAuthController::class, 'dashboard']); 

// Route::POST('index','App\Http\Controllers\categoryController@index');
Route::get('demo','App\Http\Controllers\categoryController@create');
Route::POST('store','App\Http\Controllers\categoryController@store');
 Route::put('edit{id}','App\Http\Controllers\categoryController@edit');

//for category
Route::resource('cate', categoryController::class);
Auth::routes();

//for banners
Route::resource('banners', bannerController::class);
 Route::get('banner_create','App\Http\Controllers\bannerController@create');
 Route::post('banner_store','App\Http\Controllers\bannerController@store');


 //for footer
 Route::resource('footers',footerController::class);
 //Route::get('footer_create','App\Http\Controllers\footerController@create');
//Route::post('footer_store','App\Http\Controllers\footerController@store');
Route::resource('header',headersController::class);
Route::get('headers',[headersController::class,'index']); 
Route::get('head_create','App\Http\Controllers\headersController@create');
Route::post('head_store','App\Http\Controllers\headersController@store');
Route::put('head_edit','App\Http\Controllers\headerController@update');

//for products
Route::get('products',[productController::class,'index']); 
Route::get('create_product','App\Http\Controllers\ProductController@create');
Route::post('product_store','App\Http\Controllers\productController@store');
Route::PUT('product_edit/{id}/edit','App\Http\Controllers\productController@edit');
Route::resource('product',productController::class);

//for Brands
Route::get('brand',[brandController::class,'index']); 
Route::get('brand_create','App\Http\Controllers\brandController@create');
Route::post('brand_store','App\Http\Controllers\brandController@store');
Route::resource('brands',brandController::class);


//for Product Details
Route::get('product_detail',[productdetailController::class,'index']); 