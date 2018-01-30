<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesContorller extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function about(){
        $data = array(
            'title' => 'Services',
            'services' => ['Web Design', 'Programming', 'SEO']
        );
        return view('pages.about')->with($data);
    }
}
