<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Post;
class PagesContorller extends Controller
{
    public function index(){
        if(Auth::guest()){
            return view('pages.index');
        }
        else{
            return redirect ('/newsfeed');
        }
    }

    public function about(){
        $data = array(
            'title' => 'Services',
            'services' => ['Web Design', 'Programming', 'SEO']
        );
        return view('newsfeed.about')->with($data);
    }
}
