<?php

namespace App\Http\Controllers;

use App\Code;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCode;
use App\Http\Requests\ShowByDate;
use Carbon\Carbon; 

class CodesController extends Controller
{
   

	public function show()
	{

		 $userId = "1";
		 $codes = Code::where("user_id", "=", $userId)->get(); 
		 return view('partners.partners_main', compact("codes"));
	}

	public function showByDate(ShowByDate $request)
	{
        $userId = "1";
        $codes = DB::table('codes')->select(DB::raw('count(code_records_shows.id) as shows,count(code_records_shows.id) as clicks, codes.*'))join('code_records_clicks', 'codes.id', '=', 'code_records_clicks.code_id')->join('code_records_shows', 'codes.id', '=', 'code_records_clicks.code_id')->where("user_id", "=", $userId)->whereColumn([
                    ['created_at', '>=', $request->dateFrom],
                    ['created_at', '=<', $request->dateTo]
                ])->whereColumn([
                    ['created_at', '>=', $request->dateFrom],
                    ['created_at', '=<', $request->dateTo]
                ])->get();
  
        $dates = ["dateFrom" =>$request->dateFrom, "dateTo" => $request->dateTo];       
       return view('partners.partners_main', compact("codes","dates"));

	}




	public function store (StoreCode $request)
	{
		
		$size_id;	

		$name = $request->codeName; 
		$total_clicks = 0; 
		$shows = 0;
		$active = 0;
		$value = "generated";
		$resolution = $request->codeResolution;
	    $url = $request->codeUrl; 
		$user_id = 1; 
		$profit = 0;
		$created_at = Carbon::now(); 
		
		$acceptSize  = ["970x310", "320x100", "300x600", "300x300", "160x600"]; 
		for ($i = 0; $i < count($acceptSize); $i++) {
            if ($acceptSize[$i] == $resolution) {
                $size_id = $i + 1;
                break;
            }
        }  

  
         Code::insert(compact("name", "url","total_clicks","shows","active","value","size_id","user_id", "profit","created_at"));  
          return redirect()->back();

	}






}
  