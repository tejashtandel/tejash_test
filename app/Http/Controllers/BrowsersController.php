<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
class BrowsersController extends Controller
{
     public function index()
    {
         $browsers =  DB::table('users')->select('firstname','created_at')->get();


        $dataPoints = [];

        foreach ($browsers as $browser) {
            
            $dataPoints[] = [
                "firstname" => $browser['firstname'],
                "y" => floatval($browser['created_at'])
            ];
        }
        return view("donut-chart", [
            "data" => json_encode($dataPoints)
        ]);
    }
    public function getdata1()
    {
         $browsers = DB::table('users')->select('firstname','created_at')->get();

        $dataPoints = [];

        foreach ($browsers as $browser) {
            
            $dataPoints[] = [
                "firstname" => $browser->firstname,
                 "y" => floatval($browser->created_at)
            ];
        }
        
        return [
            "data" => json_encode($dataPoints)
        ];
    } 
    public function ajaxchart1(){ 

         return view("Admin.pages.index");
    }
}
