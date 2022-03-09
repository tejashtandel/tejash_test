<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class bottomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $product2 = DB::select('SELECT products.image,products.product_name,products.price,products.id,subcategories.subcategoryname FROM products 
    JOIN subcategories ON products.sub_cat_id=subcategories.id
    JOIN category ON subcategories.catid=category.id
    WHERE category.id="12"');

        $product3 = DB::select('SELECT products.image,products.product_name,products.price,products.id,subcategories.subcategoryname FROM products 
    JOIN subcategories ON products.sub_cat_id=subcategories.id
    JOIN category ON subcategories.catid=category.id
    WHERE category.id="12" AND subcategories.subcategoryname="plazo"');

        $product4 = DB::select('SELECT products.image,products.product_name,products.price,products.id,subcategories.subcategoryname FROM products 
JOIN subcategories ON products.sub_cat_id=subcategories.id
JOIN category ON subcategories.catid=category.id
WHERE category.id="12" AND 500<products.price && products.price<1000');


        $product5 = DB::select('SELECT products.image,products.product_name,products.price,products.id,subcategories.subcategoryname FROM products 
JOIN subcategories ON products.sub_cat_id=subcategories.id
JOIN category ON subcategories.catid=category.id
WHERE category.id="12" AND products.price>1000');

        $product6 = DB::select('SELECT products.image,products.product_name,products.price,products.id,subcategories.subcategoryname FROM products 
JOIN subcategories ON products.sub_cat_id=subcategories.id
JOIN category ON subcategories.catid=category.id
WHERE category.id="12" AND products.price<500');


        $product7 = DB::select('SELECT products.image,products.product_name,products.price,products.id,subcategories.subcategoryname FROM products 
    JOIN product_details ON product_details.productid=products.id
JOIN subcategories ON products.sub_cat_id=subcategories.id
JOIN category ON subcategories.catid=category.id
WHERE category.id="12" AND product_details.size="Large"');


// dd(count($product6));

        $product8 = DB::select('SELECT products.image,products.product_name,products.price,products.id,subcategories.subcategoryname FROM products 
JOIN product_details ON product_details.productid=products.id
JOIN subcategories ON products.sub_cat_id=subcategories.id
JOIN category ON subcategories.catid=category.id
WHERE category.id="12" AND product_details.size="small"');

        $product9 = DB::select('SELECT products.image,products.product_name,products.price,products.id,subcategories.subcategoryname FROM products 
JOIN product_details ON product_details.productid=products.id
JOIN subcategories ON products.sub_cat_id=subcategories.id
JOIN category ON subcategories.catid=category.id
WHERE category.id="12" AND product_details.size="Medium"');

        $product10 = DB::select('SELECT products.image,products.product_name,products.price,products.id,subcategories.subcategoryname FROM products 
JOIN product_details ON product_details.productid=products.id
JOIN subcategories ON products.sub_cat_id=subcategories.id
JOIN category ON subcategories.catid=category.id
WHERE category.id="12" AND product_details.size="XL"');

        $product11 = DB::select('SELECT products.image,products.product_name,products.price,products.id,subcategories.subcategoryname FROM products 
JOIN product_details ON product_details.productid=products.id
JOIN subcategories ON products.sub_cat_id=subcategories.id
JOIN category ON subcategories.catid=category.id
WHERE category.id="12" AND product_details.size="XXL"');

$product12 = DB::select('SELECT products.image,products.product_name,products.price,products.id,subcategories.subcategoryname FROM products 
JOIN subcategories ON products.sub_cat_id=subcategories.id
JOIN category ON subcategories.catid=category.id
WHERE category.id="12" AND subcategories.subcategoryname="jeans"');

$product13 = DB::select('SELECT products.image,products.product_name,products.price,products.id,subcategories.subcategoryname FROM products 
JOIN subcategories ON products.sub_cat_id=subcategories.id
JOIN category ON subcategories.catid=category.id
WHERE category.id="12" AND subcategories.subcategoryname="lengis"');

        $footer = DB::table('footers')->get();
        return view('User.pages.bottomwear', compact('product3', 'product7', 'product2', 'product4', 'product5', 'product6', 'product8', 'product9', 'product10', 'product11', 'product12', 'product13', 'footer'));
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
