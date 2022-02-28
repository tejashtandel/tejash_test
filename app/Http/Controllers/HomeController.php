<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\facades\DB;
use App\Models\product;
use carbon\Carbon;

class HomeController extends Controller
{

    public function index()
    {
        
            // $header = DB::table('headers')->get();,'header''footer',
            
            // $footer = DB::table('footers')->get();
        
            $banner = DB::table('banners')->get();
            $catagory = DB::table('category')->get();
            $product = DB::table('products')->get();
        
            //$slideimage = DB::table('banners')->get('banner_image', 'description');, compact('slideimage')
        
            return view('User.pages.index',compact('banner','catagory','product'));
       
        
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
   
    public function redirects()
    {
        if(Auth::user()->role == '1')
        {
            $data=product::select('id','created_at')
            ->get()->groupBy(function($data){
                return Carbon::parse($data->created_at)->format('D');
                
            });
            $months=[];
            $monthcount=[];
            foreach($data as $month=>$values){
                $months[]=$month;
                $monthcount[]=count($values);
            }
           
            return view('Admin.pages.index',compact('data','months','monthcount'));
        }


        $banner = DB::table('banners')->get();
        $catagory = DB::table('category')->get();
     
        $product1 = DB::select('SELECT products.image,products.product_name,products.price,products.id FROM products 
        JOIN subcategories ON products.sub_cat_id=subcategories.id
        JOIN category ON subcategories.catid=category.id
        WHERE category.id="4"');
    
        $product2 = DB::select('SELECT products.image,products.product_name,products.price,products.id FROM products 
    JOIN subcategories ON products.sub_cat_id=subcategories.id
    JOIN category ON subcategories.catid=category.id
    WHERE category.id="12"');
    
        $product3 = DB::select('SELECT products.image,products.product_name,products.price,products.id FROM products 
    JOIN subcategories ON products.sub_cat_id=subcategories.id
    JOIN category ON subcategories.catid=category.id
    WHERE category.id="17"');
        //$slideimage = DB::table('banners')->get('banner_image', 'description');, compact('slideimage')
        $footer = DB::table('footers')->get();
        return view('User.pages.index', compact('banner', 'catagory', 'product1', 'product2', 'product3','footer'));
   
    
    }
    
}
    
   