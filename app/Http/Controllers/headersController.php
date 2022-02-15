<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\headers;
use Illuminate\Support\Facades\DB;
class headersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $head= DB::table('headers')->select('id','header_name')->get(); 
         return view('Admin.pages.header.headers',compact('head'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.pages.header.create_headers');
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
            'header_name' => 'required',
            ]);
           $head =new headers;
           $head->header_name= $request->header_name;
          
           $head->save();
           return redirect()->action([headersController::class,'index']);
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
        $header=headers::find($id);
        return view('Admin.pages.header.edit_headers',compact('header'));
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
            'header_name'=>'required'
            ]);
            
            $header= headers::find($id);
            $header-> header_name= $request->header_name;
            $header->save();
            return redirect()->action([headersController::class,'index']);
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
