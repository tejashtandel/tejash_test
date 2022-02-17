<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\subcategory;
use Illuminate\Support\Facades\DB;
class subcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $subc = DB::SELECT('SELECT subcategories.subcategoryname, category.id, category.category_name FROM subcategories JOIN category ON subcategories.catid=category.id'); 
        // $subc=DB::find()->with('category')->get();
        return view('Admin.pages.subcategory.subcategory',compact('subc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subc=DB::select('SELECT * FROM category');
        return view('Admin.pages.subcategory.create_subcategory',compact('subc'));
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
            'catid' => 'required',
           'subcategoryname' => 'required'
           ]);
           $subc =new subcategory;
          $subc->catid= $request->catid;
           $subc->subcategoryname= $request->subcategoryname;
           $subc->save();
         return redirect()->action([subcategoryController::class,'index']);
           
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
          $subcategory=subcategory::find($id);
       return view('Admin.pages.subcategory.edit_subcategory',compact('subcategory'));
       
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
            'subcategoryname'=>'required',
           
            ]);
            
            $subcategory= subcategory::find($id);
            $subcategory-> subcategoryname= $request->subcategoryname;
           
           
            
            $subcategory->save();
            return redirect()->action([subcategoryController::class,'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subcategory=subcategory::find($id)->delete();
        return redirect()->action([subcategoryController::class,'index']);
    }
}
