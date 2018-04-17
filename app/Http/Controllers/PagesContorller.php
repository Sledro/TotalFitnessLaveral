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

}
