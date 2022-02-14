<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use Illuminate\Support\Facades\DB;
class productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product= DB::table('products')->select('id','product_name','price','image')->get(); 
        return view('pages.product.product',compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.product.create_product');
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
            'product_name' => 'required',
           'price' => 'required',
           'image'=>'required'
            ]);
           
            $input=$request->all();
            if($image=$request->file('image')){
                $destinationPath='product/';
                $profileImage= date('YmdHis') .".". $image->getClientOriginalExtension();
                $image->move($destinationPath,$profileImage );
                $input['image'] ="$profileImage";
            }
            product::create($input);
           return redirect()->action([productController::class,'index']);
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
        $product= DB::table('products')->where('id', $id)->get();
        return view('pages.product.edit_product',compact('product'));
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
        $request->validate([
            'product_name' => 'required',
            'price' => 'required',
            'image'=>'required'
            ]);
            
            $product= product::find($id);
            $product->product_name= $request->product_name;
            $product->price = $request->price;
            $product->image = $request->image;
            $product->update($request->all());
            return redirect()->route('pages.product.product')->with('status','Product Updated Successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product=product::find($id)->delete();
        return redirect()->action([productController::class,'index']);
    }
}
