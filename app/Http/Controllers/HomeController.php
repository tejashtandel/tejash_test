<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\facades\DB;

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
            return view('Admin.pages.index');
        }
        $banner = DB::table('banners')->get();
        $catagory = DB::table('category')->get();
        $product = DB::table('products')->get();
    
        //$slideimage = DB::table('banners')->get('banner_image', 'description');, compact('slideimage')
    
        return view('User.pages.index',compact('banner','catagory','product'));
   
    
        return view('User.pages.index');
    }
    
}
    
   