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
        $proddetails =DB::table('product_details')
        ->join('category','product_details.catid','=','category.id')
        ->join('subcategories','product_details.sub_cat_id','=','subcategories.id')
        ->join('products','product_details.productid','=','products.id')
        ->join('brands','product_details.brandid','=','brands.id')
        ->select('product_details.*','category.category_name','subcategories.subcategoryname','products.product_name')
        ->get();
        return view('Admin.pages.product_details.product_details',compact('proddetails'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brand = DB::select('SELECT * FROM brands');
        $proddetails= DB::select('SELECT * FROM products');
        $subc=DB::select('SELECT * FROM category');
        $product= DB::select('SELECT * FROM subcategories');
        return view('Admin.pages.product_details.create_product_details', compact('product', 'brand','subc','proddetails'));
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
            'catid'=>'required',
            'sub_cat_id'=>'required',
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
           'bottomtype' => 'required',
           'mulimages'=>'required'
           ]);
       
        $input=$request->all();
        $mulimages=array();
        if($files=$request->file('mulimages')){
            foreach($files as $file){
                $name= date('YmdHis') .".".$file->getClientOriginalName();
                $file->move('mulimages',$name);
                $mulimages[]=$name;
            }
        }
        /*Insert your data*/
    
        product_detail::insert( [
          
            'catid' =>$input['catid'],
            'sub_cat_id'=>$input['sub_cat_id'],
            'productid'=>$input['productid'],
            'brandid'=>$input['brandid'],
            'pattern'=>$input['pattern'],
            'sleeve'=>$input['sleeve'],
            'neck'=>$input['neck'],
            'fabric'=>$input['fabric'],
            'length'=>$input['length'],
            'style'=>$input['style'],
            'occasion'=>$input['occasion'],
            'package_contain'=>$input['package_contain'],
            'product_description'=>$input['product_description'],
            'size'=>$input['size'],
            'quantity'=>$input['quantity'],
            'bottomtype'=>$input['bottomtype'],
            'mulimages'=>  implode("|",$mulimages),
        ]);

        // return redirect()->route('product.create')->with('success', 'Product Details created Successfully');
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
        $productsdetail=product_detail::find($id);
        return view('Admin.pages.product_details.edit_product_details',compact('productsdetail'));
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
