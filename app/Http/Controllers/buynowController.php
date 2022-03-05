<?php

namespace App\Http\Controllers;

use App\Models\product_detail;

use App\Models\carts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\facades\DB;

class buynowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
   


        $id = Auth::user()->id;
        $user = DB::table('users')->select('users.*')->where('users.id','=',$id)->get();
        $footer = DB::table('footers')->get();

        $items = DB::table('checkouts')
        ->join('users', 'users.id', '=', 'checkouts.userid')
        ->join('carts', 'carts.user_id', '=', 'users.id')
        ->join('products', 'products.id', '=', 'carts.product_id')
        ->join('product_details', 'product_details.productid', '=', 'products.id')
        ->select(
            'checkouts.*',
            'checkouts.totalprice as grandtotal',
            'users.*',
            'carts.*',
            'checkouts.id as check_id',
            'products.*',
            'products.product_name as pname',
            'carts.totalprice as pc',
            'carts.quantity as qp',

            // 'product_models.id as productID',
            'product_details.*'
        )
        ->where('checkouts.userid', $id)->get();


        $bill = DB::table('checkouts')
        ->join('users', 'users.id', '=', 'checkouts.userid')
        // ->join('carts', 'carts.user_id', '=', 'users.id')
        // ->join('products', 'products.id', '=', 'carts.product_id')
        // ->join('product_details', 'product_details.productid', '=', 'products.id')
        ->select(
            'checkouts.*',
            'checkouts.totalprice as grandtotal',
            // 'users.*',
            // 'carts.*',
            // 'checkouts.id as check_id',
            // 'products.*',
            // 'products.product_name as pname',
            // 'carts.totalprice as pc',
            // 'carts.quantity as qp',

            // // 'product_models.id as productID',
            // 'product_details.*'
        )
        ->where('checkouts.userid', $id)->get();
    

        


        // $itemnew = DB::table('product_details')
        // ->join('product_details', 'product_details.productid', '=', 'products.id')
        //  ->join('products', 'products.id', '=', 'carts.product_id')
        // ->join('users', 'users.id', '=', 'checkouts.userid')
        // ->join('carts', 'carts.user_id', '=', 'users.id')
       
      
        // ->where('checkouts.userid', $id)
        // ->where('carts.productid' ,'=','product_details.productid')
        // ->decrement('product_details.quantity','carts.quantity')->get();

        
        
        return view('User.pages.billingpage',compact('footer','user','items','bill'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
