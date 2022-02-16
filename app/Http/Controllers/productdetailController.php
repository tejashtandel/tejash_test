<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product_detail;
use Illuminate\Support\Facades\DB;
class productdetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brand = DB::select('SELECT * FROM brands');
        $product = DB::select('SELECT * FROM products');
        return view('Admin.pages.product_details.product_details', compact('product', 'brand'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brand = DB::select('SELECT * FROM brands');
        $product = DB::select('SELECT * FROM products');
        return view('Admin.pages.product_details.create_product_details', compact('product', 'brand'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'productid'=>'required',
            'brandid'=>'required',
            'pattern' => 'required',
           'sleeve' => 'required',
           'neck' => 'required',
           'fabric' => 'required',
           'length' => 'required',
           'style' => 'required',
           'occasion' => 'required',
           'package_contain' => 'required',
           'product_description' => 'required',
           'size' => 'required',
           'quantity' => 'required',
           'bottomtype' => 'required'
           ]);
           $pro_detail =new product_detail;
           $pro_detail->pattern=$request->pattern;
           $pro_detail->sleeve=$request->sleeve;
           $pro_detail->neck=$request->neck;
           $pro_detail->fabric=$request->fabric;
           $pro_detail->length=$request->length;
           $pro_detail->style=$request->style;
           $pro_detail->occasion=$request->occassion;
           $pro_detail->package_contain=$request->package_contain;
           $pro_detail->product_description=$request->product_description;
           $pro_detail->size=$request->size;
           $pro_detail->quantity=$request->quantity;
           $pro_detail->bottomtype=$request->bottomtype;
           $pro_detail->save();
           return redirect()->action([productdetailController::class,'index']);
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
    public function myformAjax($id)
    {
        $products = DB::table("products")
                    ->where("product_id",$id)
                    ->lists("name","id");
        return json_encode($products);
    }

}
