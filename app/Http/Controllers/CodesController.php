<?php

namespace App\Http\Controllers;

use App\Code;

use Illuminate\Http\Request;
use App\Http\Requests\StoreCode;

class CodesController extends Controller
{
    
	public function show()
	{

		 $userId = "1";
		 $codes = Code::where("user_id", "=", $userId)->get(); 
		 return view('partners.partners_main', compact("codes"));
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

		
		$acceptSize  = ["970x310", "320x100", "300x600", "300x300", "160x600"]; 
		for ($i = 0; $i < count($acceptSize); $i++) {
            if ($acceptSize[$i] == $resolution) {
                $size_id = $i + 1;
                break;
            }
        }  

  
         Code::insert(compact("name", "url","total_clicks","shows","active","value","size_id","user_id", "profit"));  
          return redirect()->back();

	}


}
  