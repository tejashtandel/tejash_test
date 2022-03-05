<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserreportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userss= DB::table('users')
        ->join('checkouts','users.id','=','checkouts.userid')
        ->join('products', 'users.productid', '=', 'products.id')
        ->select('users.firstname','checkouts.id','products.product_name')->get();
        return view('Admin.pages.reports.userreport',compact('userss'));
    }


    // $proddetails = DB::table('product_details')
    // ->join('category', 'product_details.catid', '=', 'category.id')
    // ->join('subcategories', 'product_details.sub_cat_id', '=', 'subcategories.id')
    // ->join('products', 'product_details.productid', '=', 'products.id')
    // ->join('brands', 'product_details.brandid', '=', 'brands.id')
    // ->select('product_details.*', 'category.category_name', 'subcategories.subcategoryname', 'products.product_name')
    // ->where('product_details.id',$id)
    // ->get();
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
