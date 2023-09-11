<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class IdController extends Controller

{
   
    public function id($id){

        $singlemovie=Movie::find($id);


        return view('singlemovie',compact('singlemovie'));
    }
}
