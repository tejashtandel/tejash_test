<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\banner;
use Illuminate\Support\Facades\DB;
class bannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bann= DB::table('banners')->select('id','banner_image','description')->get(); 
        return view('pages.banners.banners',compact('bann'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.banners.create_banners');
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
            'banner_image' => 'required',
           'description' => 'required',
            ]);
           
            $input=$request->all();
            if($banner_image=$request->file('banner_image')){
                $destinationPath='upload/';
                $profileImage= date('YmdHis') .".". $banner_image->getClientOriginalExtension();
                $banner_image->move($destinationPath,$profileImage );
                $input['banner_image'] ="$profileImage";
            }
            
          
           banner::create($input);
           return redirect()->action([bannerController::class,'index']);
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
