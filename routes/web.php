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
use App\Http\Controllers\productController;
use App\Http\Controllers\brandController;
use App\Http\Controllers\productdetailController;
use App\Http\Controllers\subcategoryController;
use App\Http\Controllers\headersController;
use App\Http\Controllers\aboutsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\reportController;
use App\Http\Controllers\userdetailController;
use App\Http\Controllers\userinfoController;
use App\Http\Controllers\stockController;
use App\Http\Controllers\cartController;
use App\Http\Controllers\GooglePieController;
use App\Http\Controllers\bottomController;
use App\Http\Controllers\ethicController;
use App\Http\Controllers\productReportController;
use App\Http\Controllers\topController;


use App\Models\product;

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
    return view('User.pages/cart1');
});

Route::get('checkout', function () {
    return view('User.pages/checkout');
});

Route::get('contactus', function () {
    $footer = DB::table('footers')->get();
    return view('User.pages/contactus', compact('footer'));
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
    return view('User.pages/productdetails', compact('footer'));
});

Route::get('topwear', function () {
    $product = DB::table('products')->get();

    return view('User.pages.topwear', compact('product'));
});
Route::get('adminhome', function () {


    return view('Admin.pages.index');
});



//index page...by direct

Route::get('userindex', function () {
    // $header = DB::table('headers')->get();,'header''footer',

    $footer = DB::table('footers')->get();

    $banner = DB::table('banners')->get();
    $catagory = DB::table('category')->get();

    $product1 = DB::select('SELECT products.image,products.product_name,products.price,products.id FROM products 
    JOIN subcategories ON products.sub_cat_id=subcategories.id
    JOIN category ON subcategories.catid=category.id
    WHERE category.id="4"');

    $product2 = DB::select('SELECT products.image,products.product_name,products.price,products.id FROM products 
JOIN subcategories ON products.sub_cat_id=subcategories.id
JOIN category ON subcategories.catid=category.id
WHERE category.id="17"');

    $product3 = DB::select('SELECT products.image,products.product_name,products.price,products.id FROM products 
JOIN subcategories ON products.sub_cat_id=subcategories.id
JOIN category ON subcategories.catid=category.id
WHERE category.id="12"');

    //$slideimage = DB::table('banners')->get('banner_image', 'description');, compact('slideimage')

    return view('User.pages.index', compact('banner', 'catagory', 'product1', 'product2', 'product3', 'footer'));
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


Route::get('prod/{id}', function ($id) {


    $details = DB::table('products')
        ->join('product_details', 'products.id', '=', 'product_details.productid')
        ->join('brands', 'product_details.brandid', '=', 'brands.id')
        ->where('products.id', $id)
        ->get(['products.* as p', 'product_details.*', 'brands.*']);

    // $product1 = DB:table('products')
    //     ->join('category','products.catid','=','category.id')
    //     ->where('')


    $product1 = DB::select('SELECT products.image,products.product_name,products.price,products.id FROM products 
JOIN subcategories ON products.sub_cat_id=subcategories.id
JOIN category ON subcategories.catid=category.id
WHERE category.id="4"');


    $footer = DB::table('footers')->get();
    return view('User.pages.product', compact('details', 'product1', 'footer'));
});
Route::get('prod1/{id}', function ($id) {


    $details = DB::table('products')
        ->join('product_details', 'products.id', '=', 'product_details.productid')
        ->join('brands', 'product_details.brandid', '=', 'brands.id')
        ->where('products.id', $id)
        ->get(['products.*', 'product_details.*', 'brands.*']);

    // $product1 = DB:table('products')
    //     ->join('category','products.catid','=','category.id')
    //     ->where('')


    $footer = DB::table('footers')->get();
    $product1 = DB::select('SELECT products.image,products.product_name,products.price,products.id FROM products 
    JOIN subcategories ON products.sub_cat_id=subcategories.id
    JOIN category ON subcategories.catid=category.id
    WHERE category.id="12"');


    return view('User.pages.product', compact('details', 'product1', 'footer'));
});

Route::get('prod3/{id}', function ($id) {


    $details = DB::table('products')
        ->join('product_details', 'products.id', '=', 'product_details.productid')
        ->join('brands', 'product_details.brandid', '=', 'brands.id')
        ->where('products.id', $id)
        ->get(['products.*', 'product_details.*', 'brands.*']);

    // $product1 = DB:table('products')
    //     ->join('category','products.catid','=','category.id')
    //     ->where('')

    $footer = DB::table('footers')->get();

    $product1 = DB::select('SELECT products.image,products.product_name,products.price,products.id FROM products 
        JOIN subcategories ON products.sub_cat_id=subcategories.id
        JOIN category ON subcategories.catid=category.id
        WHERE category.id="17"');


    return view('User.pages.product', compact('details', 'product1', 'footer'));
});



Route::resource('userdetails', userinfoController::class);


Route::resource('userdetails', userdetailController::class);
Route::resource('userdetails/{userdetail}/$id', userdetailController::class);

Route::resource('cart', cartController::class);
Route::resource('bottom', bottomController::class);
Route::resource('ethic', ethicController::class);
Route::resource('top', topController::class);




Route::get('try', function () {
    $header = DB::table('headers')->get();


    $product2 = DB::select('SELECT products.image,products.product_name,products.price,products.id,subcategories.subcategoryname  FROM products 
        JOIN subcategories ON products.sub_cat_id=subcategories.id
        JOIN category ON subcategories.catid=category.id
        WHERE category.id="17"');

    return view('User.pages.new', compact('header', 'product2'));
});


///------------------------------------------------------------------------------------------------------/////
///------------------------------------------------------------------------------------------------------/////
///------------------------------------------------------------------------------------------------------/////
////For Admin Routes

Route::get('/', function () {
    return view('welcome');
});
Route::get('index', function () {

    if (Auth::check()) {

        if (Auth::user()->role == '1') {
            return view('Admin.pages/index');
        } else {
            return "You are Not  A Admin";
        }
    }
});
// Route::get('category', function () {
//     return view('pages/category');
// });


//Route::get('category', [categoryController::class, 'index']); 
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');


Route::get('dashboard', [CustomAuthController::class, 'dashboard']);
//for category
// Route::POST('index','App\Http\Controllers\categoryController@index');
//Route::get('demo', 'App\Http\Controllers\categoryController@create');
//Route::POST('store', 'App\Http\Controllers\categoryController@store');
Route::resource('category', categoryController::class);

//for sub category
Route::resource('subcategory', subcategoryController::class);
//Route::get('sub_cate_create', 'App\Http\Controllers\subcategoryController@create');
//Route::post('sub_cate_store', 'App\Http\Controllers\subcategoryController@store');

//Authentication
Auth::routes();

//for banners
Route::resource('banners', bannerController::class);
// Route::get('banner_create', 'App\Http\Controllers\bannerController@create');
// Route::post('banner_store', 'App\Http\Controllers\bannerController@store');


//for footer
Route::resource('footers', footerController::class);
//Route::get('footer_create','App\Http\Controllers\footerController@create');
//Route::post('footer_store','App\Http\Controllers\footerController@store');
Route::resource('header', headersController::class);
// Route::get('headers', [headersController::class, 'index']);
// Route::get('head_create', 'App\Http\Controllers\headersController@create');
// Route::post('head_store', 'App\Http\Controllers\headersController@store');
// Route::put('head_edit', 'App\Http\Controllers\headerController@update');

//for products

//Route::get('create_product', 'App\Http\Controllers\ProductController@create');
//Route::post('product_store', 'App\Http\Controllers\productController@store');
Route::resource('products', productController::class);

//for Brands
//Route::get('brand', [brandController::class, 'index']);
//Route::get('brand_create', 'App\Http\Controllers\brandController@create');
//Route::post('brand_store', 'App\Http\Controllers\brandController@store');
Route::resource('brand', brandController::class);


//for Product Details
//Route::get('product_detail', [productdetailController::class, 'index']);
//Route::get('product_detail_create', 'App\Http\Controllers\productdetailController@create');
//Route::post('product_detail_store', 'App\Http\Controllers\productdetailController@store');
Route::resource('product_detail', productdetailController::class);

//For About Us
Route::resource('abouts', aboutsController::class);
//For User Details
Route::resource('userss', userdetailController::class);
//For Stocks
Route::resource('stocks', stockController::class);
//For Reports
Route::resource('report', reportController::class);
Route::resource('proreport',productReportController::class);

//For Charts
Route::resource('charts',GooglePieController::class);
Route::resource('chart',AdminController::class);
