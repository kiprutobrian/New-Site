<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;

class PagesController extends Controller
{

    public function home()
    {
        return view('pages.home');
    }

    public function contact()
    {
        return view('pages.contact');
    }
    public function aliance()
    {
        return view('pages.aliance');
    }
    public function deinteres()
    {
        return view('pages.deinteres');
    }
    public function deinteres2()
    {
        return view('pages.deinteres2');
    }
    public function deinteres3()
    {
        return view('pages.deinteres3');
    }
    public function deinteres4()
    {
        return view('pages.deinteres4');
    }
    public function deinteres5()
    {
        return view('pages.deinteres5');
    }
    public function empresa()
    {
        return view('pages.empresa');
    }
    public function detalles()
    {
        return view('pages.detalles');
    }
}
