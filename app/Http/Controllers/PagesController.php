<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to "ngoeitoeapp" home page!';
        //return view('pages.index', compact('title'));  OR below.
        return view('pages.index') -> with('title', $title);

    }

    public function about(){
        return view('pages.about');
    }

    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['Web Application', 'Programming', 'SEO', 'Software']
        );
        return view('pages.services') -> with($data);
    }
}
