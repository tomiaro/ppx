<?php

namespace App\Http\Controllers;

use App\Advert;
use App\Code;
use App\Image;
use Illuminate\Http\Request;

class AdvertsContoller extends Controller
{
    public function sendAdvert(Request $request)
    {
        $codeVal = $request->input("code");

        $code = Code::where('value', $codeVal)->first();
        // Algoritmus pro vyhledávání selekci --> náhoda, priorita
        $advert = Advert::select("id", "link")->where("category_id", "=", $code["category_id"])->where("size_id", "=", $code["size_id"])->first();

        $image  = Advert::find($advert["id"])->image;
        $www    = $request->root();
        $urlImg = $www . $image["link"];
        $urlAd  = $www . "/route/?url=" . $advert["link"] . "&code=" . $code["value"] . "&ad=" . $advert["id"];

        $responce = compact("urlImg", "urlAd");
        return json_encode($responce);

    }

    public function createAdvert(Request $request)
    {
        $weight = "0";
        $userId = "1";
        $sizeId;
        $urlAd        = $request->urlAd;
        $price        = $request->price;
        $nameAd       = $request->nameAd;
        $limit        = $request->limit;
        $image        = $request->image;
        $acceptFormat = ["1", "2", "3"]; //http://php.net/manual/en/function.exif-imagetype.php
        $path;
        $acceptSize                  = ["970x310", "320x100", "300x600", "300x300", "160x600"];
        list($width, $height, $type) = getimagesize($image);
        $size                        = $height . "x" . $width;
        $errors;

        $this->validate($request, [
        'urlAd' => 'required|unique:posts|max:255',
        'price' => 'required',
        'nameAd' => 'required',
        'limit' => 'required',
        'image' => 'required',
         ]);




        for ($i = 0; $i < count($acceptSize); $i++) {
            if ($acceptSize[$i] == $size) {
                $sizeId = $i;
                $errors = "0"; //chybí chyby
                break;
            }
        }

        if ($image->isValid()) {

            foreach ($acceptFormat as $value) {
                if ($value == $type) {

                    $path = $request->image->store('ad_images');
                    break;
                }
            }

            $advertId = Advert::insert(["name" => $nameAd, "daily_limit" => $limit, "total_clicks" => "0",
                "success_buys"                     => "0", "link"            => $urlAd, "price"        => $price,
                "weight"                           => $weight, "shows"       => "0", "active"          => "0", "user_id" => $userId, "size_id" => $sizeId]);
            Image::insert(['link' => $path, 'advert_id' => $advertId, "format" => $type]);
        } else {
            echo "ERROR";
        }

    }

}
/*SELECT * FROM tbl WHERE id IN (SELECT id FROM (SELECT id FROM tbl ORDER BY -LOG(1-RAND())/weight LIMIT x) t); */
