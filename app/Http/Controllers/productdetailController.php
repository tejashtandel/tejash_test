<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product_detail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class productdetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {

        if(Auth::check()){

            if(Auth::user()-> role == '1' ){  
    
         $proddetails =DB::table('product_details')
        ->join('category','product_details.catid','=','category.id')
        ->join('subcategories','product_details.sub_cat_id','=','subcategories.id')
        ->join('products','product_details.productid','=','products.id')
        ->join('brands','product_details.brandid','=','brands.id')
        ->select('product_details.*','category.category_name','subcategories.subcategoryname','products.product_name')
        ->where('product_details.flag',1)
        ->get();
        return view('Admin.pages.product_details.product_details',compact('proddetails'));
        

  }

  else{
      return "You are Not  A Admin";
  }
}
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::check()){

            if(Auth::user()-> role == '1' ){ 
    
    
    
    
    
        $brand = DB::select('SELECT * FROM brands');
        $proddetails= DB::select('SELECT * FROM products');
        $subc=DB::select('SELECT * FROM category');
        $product= DB::select('SELECT * FROM subcategories');
        return view('Admin.pages.product_details.create_product_details', compact('product', 'brand','subc','proddetails'));
        

  }

  else{
      return "You are Not  A Admin";
  }
}
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
        //     'catid'=>'required',
        //     'sub_cat_id'=>'required',
        //     'productid'=>'required',
        //     'brandid'=>'required',
        //     'pattern' => 'required',
        //    'sleeve' => 'required',
        //    'neck' => 'required',
        //    'fabric' => 'required',
        //    'length' => 'required',
        //    'style' => 'required',
        //    'occasion' => 'required',
        //    'package_contain' => 'required',
        //    'product_description' => 'required',
        //    'size' => 'required',
        //    'quantity' => 'required',
        //    'bottomtype' => 'required',
        //    'mulimages'=>'required'
           ]);
       
        $input=$request->all();
        $mulimages=array();
        if($files=$request->file('mulimages')){
            foreach($files as $file){
                $name= date('YmdHis') .".".$file->getClientOriginalExtension();
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
        if(Auth::check()){

            if(Auth::user()-> role == '1' ){ 
    
    
    
    
    
        $productsdetail=product_detail::find($id);
        return view('Admin.pages.product_details.edit_product_details',compact('productsdetail'));
        

  }

  else{
      return "You are Not  A Admin";
  }
}
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
        
        'pattern' => 'required',
       'sleeve' => 'required',
       'neck' => 'required',
       'fabric' => 'required',
       'length' => 'required',
       'style' => 'required',
       'occasion' => 'required',
       'package_contain' => 'required',
       'product_description' => 'required',
       
       'bottomtype' => 'required',
       'mulimages'=>'required'
        ]);
        
        $productsdetail =product_detail::find($id);
        $mulimages=array();
        if($mulimages=$request->file('mulimages')){
            foreach($mulimages as $mulimages){
            $destinationPath='mulimages/';
            $profileImage=date('ymdHis').".".$mulimages->getClientOriginalExtension();
            $mulimages->move($destinationPath,$profileImage);
            $input['mulimages']="$profileImage";
            }
        }
            $productsdetail->mulimages=$profileImage;
            $productsdetail->pattern = $request->pattern;
            $productsdetail->sleeve = $request->sleeve;
            $productsdetail->neck = $request->neck;
            $productsdetail->fabric = $request->fabric;
            $productsdetail->length = $request->length;
            $productsdetail->style = $request->style;
            $productsdetail->occasion = $request->occasion;
            $productsdetail->package_contain = $request->package_contain;
            $productsdetail->product_description = $request->product_description;
            $productsdetail->bottomtype = $request->bottomtype;
            $productsdetail->save();
            
            return redirect()->route('product_details.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $productsdetail =product_detail::find($id);
        $productsdetail->flag=0;
        $productsdetail->save();
        return redirect()->action([productdetailController::class,'index']);
    }
   
}
