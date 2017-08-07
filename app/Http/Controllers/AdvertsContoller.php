<?php

namespace App\Http\Controllers;

use App\Advert;
use App\Code;
use APP\Image; 
use Illuminate\Http\Request;

class AdvertsContoller extends Controller
{
    public function sendAdvert(Request $request)
    {
        $codeVal = $request->input("code");

        $code = Code::where('value', $codeVal)->first();
        // Algoritmus pro vyhledávání selekci --> náhoda, priorita  
        $advert = Advert::select("id","link")->where("category_id", "=", $code["category_id"])->where("size_id", "=", $code["size_id"])->first();
        
        $image = Advert::find($advert["id"])->image;
        $www    = $request->root();
        $urlImg = $www . $image["link"];
        $urlAd  = $www . "/route/?url=" . $advert["link"] . "&code=" . $code["value"] . "&ad=" . $advert["id"];
        
        $responce = compact("urlImg","urlAd"); 
        return json_encode($responce);

    }


    public function createAdvert(Request $request)
    {
    
      $acceptFormat = ["jpeg","gif","png"];  
      $path; 
      
      
    if ($request->image->isValid())
     {
                
           
         foreach ($acceptFormat as $value) {
           if ($value == $request->image->extension()) {
           
             $path =  $request->image->store('images');  
             break; 
            }
             } 

         echo $path; 
        $advertId = Advert::insertGetId['path' => $path, 'advert_id' => $advertId]);
         Image::insert(['path' => $path, 'advert_id' => $advertId]);
   }
   else
   {
    echo "ERROR"; 
   }

      
    }

}
//SELECT * FROM tbl WHERE id IN (SELECT id FROM (SELECT id FROM tbl ORDER BY -LOG(1-RAND())/weight LIMIT x) t);