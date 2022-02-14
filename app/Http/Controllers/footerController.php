<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\footer;
use Illuminate\Support\Facades\DB;

class footerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $footer= DB::table('footers')->select('id','about','address','phone','email')->get(); 
        return view('pages.footer.footers',compact('footer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.footer.create_footer');
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
            'about' => 'required',
           'address' => 'required',
           'phone' => 'required',
           'email' => 'required'
           ]);
           $foot =new footer;
           $foot->about= $request->about;
           $foot->address= $request->address;
           $foot->phone= $request->phone;
           $foot->email= $request->email;
           $foot->save();
           return redirect()->action([footerController::class,'index']);
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
