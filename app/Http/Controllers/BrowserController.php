<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class BrowserController extends Controller
{
     public function index()
    {
         $browsers = product::all();

        $dataPoints = [];

        foreach ($browsers as $browser) {
            
            $dataPoints[] = [
                "product_name" => $browser['product_name'],
                "y" => floatval($browser['price'])
            ];
        }
        return view("pie-chart", [
            "data" => json_encode($dataPoints)
        ]);
    }
    public function getdata()
    {
         $browsers =product::all();

        $dataPoints = [];

        foreach ($browsers as $browser) {
            
            $dataPoints[] = [
                "product_name" => $browser['product_name'],
                 "y" => floatval($browser['price'])
            ];
        }
        
        return [
            "data" => json_encode($dataPoints)
        ];
    } 
    public function ajaxchart(){ 

         return view("Admin.pages.index");
    }
}
