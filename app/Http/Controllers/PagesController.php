<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'MODERN DIGITAL';
        return view('_particles.landing', compact('title'));
    }

    public function about(){
        $title = 'ABOUT US';
        return view('pages.about')->with('title',$title);
    }

    public function services(){
        $data = array(
            'title'=> 'Products',
            'services' => ['Moblie & Tablets','Tv','Washing Machine']
        );
        return view('pages.services')->with($data);
    }
}

