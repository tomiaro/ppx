<?php

namespace App\Http\Controllers;

use App\Size;
use App\User;

class feedDb extends Controller
{

    public function feedMe()
    {
        Size::insert([["description" => "970x310"],
            ["description" => "320x100"],
            ["description" => "300x600"],
            ["description" => "300x300"],
            ["description" => "160x600"],
        ]);

        User::insert(["name" => "a", "email" => "b", "password" => "c"]);

        echo "Feed OK";
    }
    //
}
