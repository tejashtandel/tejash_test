<?php

namespace App\Http\Controllers;

use App\Models\cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\facades\DB;


class cartController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect()->route('cart.show', ['cart' => Auth::user()->id]);
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
        $request->validate([
            'product_id' => 'required',
            'user_id' => 'required',
            'quantity' => 'required',
            'price' => 'required ',
        ]);

        $product_id = $request->product_id;
        $user_id = $request->user_id;
        $quantity = $request->quantity;
        $price = $request->price;

        cart::create(['product_id' => $product_id, 'user_id' => $user_id, 'quantity' => $quantity, 'totalprice' => $price]);
        return redirect()->route('cart.show', ['cart' =>  Auth::user()->id])->with('success', 'product added');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


        $cart = DB::table('carts')
            ->join('products', 'products.id', '=', 'carts.product_id')
            ->join('users', 'users.id', '=', 'carts.user_id')
            ->join('product_details', 'product_details.productid', '=', 'products.id')
            ->select('products.*', 'users.*', 'product_details.*', 'carts.*', 'users.id as uid', 'products.id as pID')
            ->where('carts.flag', '=', 1)
            ->where('users.id', $id)->get();

        return view('User.pages.cart1', compact('cart'));
    }




    // $cart = DB::table('cart_models')
    // ->join('users','users.id','=','cart_models.user_id')
    // ->join('product_models','product_models.id','=','cart_models.product_id')
    // ->join('product_details','product_details.product_id','=','product_models.id')
    // ->select('product_details.*','product_models.*', 'product_models.id as pID','cart_models.*','cart_models.quantity as qnty','cart_models.id as cID','users.*')
    // ->where('cart_models.flag','=',1)
    // ->where('users.id',$id)
    // ->get();


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
    public function destroy(Request $request, $id)
    {
        $cart = cart::find($id);
        $cart->flag = 0;
        $cart->update($request->all());
        return redirect()->route('cart.show', ['cart' => Auth::user()->id])->with('success', 'Remove Item Successfully');
    }
}
