<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DummyAPI extends Controller
{
    //
    function getData(){
        return [
            ['details'=>['name'=>'Chris','email'=>'a@c.com'],
            'address'=>['suburb'=>'Syd','zip'=>'2000']],
            ['details'=>['name'=>'Bee','email'=>'b@c.com'],
            'address'=>['suburb'=>'Para','zip'=>'2222']]
        ];
    }


}
