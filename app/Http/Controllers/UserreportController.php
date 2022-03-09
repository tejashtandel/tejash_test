<?php

namespace App\Http\Controllers;
use App\Models\User;
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
        ->join('products', 'users.id', '=', 'products.id')
        ->select('users.firstname','checkouts.id','products.product_name','checkouts.totalprice')
      
        ->get();
      
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
    public function search(Request $request)
    {
        $s = $request->serch1;
       
        $result = DB::table('users')
        ->where('firstname','LIKE','%'.$s.'%')->select()->get()->toArray();
               
        $html = '<div class="container users">
    
    
       
           <table class="table table-bordered" id="example">
           
           <thead>
           <tr>
           <th>First Name</th>
           <th>Order Id</th>
           <th>Product Name</th>
           <th>Total Amount</th>
           </tr>
           </thead>';

        foreach($result as $dta){
            $html .=' 
        <tbody><tr>
        <td>'.$dta->firstname.'</td>
            <td>'.$dta->id.'</td>
          
        </tr> </tbody>';
        }
        $html .='</table></div>';
       


        return response()->json(
            [
                'success' => true,
                'message' => 'Data inserted successfully',
                'html' => $html,
            ]
        ); 
    }
}
