<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'MODERN DIGITAL';
        return view('_particles.landing', compact('title'));
    }

    public function signup(){
        $title = 'SIGN UP';
        return view('_particles.signup')->with('title',$title);
    }

    public function services(){
        $data = array(
            'title'=> 'Products',
            'services' => ['Moblie & Tablets','Tv','Washing Machine']
        );
        return view('pages.services')->with($data);
    }
}

