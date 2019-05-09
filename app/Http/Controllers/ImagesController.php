<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;

class ImagesController extends Controller
{
    public function servicios()
    {
        $images = Image::all();
        
        return view('pages.servicios',compact('images'));
    }
    public function servicios1()
    {
        $images = Image::all();
        
        return view('pages.servicios1',compact('images'));
    }

}
