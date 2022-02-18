<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\category;
class categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $cat = DB::table('category')->select('id','category_name','size','type')->where('flag',1)->get(); 
       
           // $data['students'] = students::orderBy('id','desc')->paginate(5);
        return view('Admin.pages.category.category',compact('cat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.pages.category.create_category');
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
          'category_name' => 'required|alpha',
          'size' => 'required|alpha',
          'type' => 'required|alpha',
           ]);
           $cat =new category;
           $cat->category_name= $request->category_name;
           $cat->size = $request->size;
           $cat->type= $request->type;
           $cat->save();
           return redirect()->action([categoryController::class,'index']);
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
     
         $category=category::find($id);
        return view('Admin.pages.category.edit_category',compact('category'));
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
            'category_name'=>'required',
            'size' => 'required',
            'type' => 'required',
            ]);
            
            $category= category::find($id);
            $category-> category_name= $request->category_name;
            $category->size = $request->size;
            $category->type = $request->type;
            $category->save();
            return redirect()->action([categoryController::class,'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $category= category::find($id);
        $category-> flag= 0;
        $category->save();
        return redirect()->action([categoryController::class,'index']);
            
    }
}
