<?php
//php artisan make:controller NewsfeedContorller --resource

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Newsfeed;
use App\User;
use Illuminate\Support\Facades\Auth;

class NewsfeedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userID=Auth::user()->id;
        $userID2=Auth::user()->id;
        $posts = Newsfeed::select('*')
		->from('posts')
        ->whereRaw('userid IN ( SELECT userID FROM user_followers WHERE followerID=:userID ) OR userID=:userID2' )
        ->take(10)
        ->setBindings([$userID, $userID2])
		->get();
        return view('newsfeed.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('newsfeed.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'body' => 'required',
            'userid' => 'required'
        ]);
        
        $post = new Newsfeed;
        $post->body = $request->input('body');
        $post->userid = $request->input('userid');
        $post->save();

        return redirect ('/newsfeed')->with('success', "Post Created!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post =  Newsfeed::find($id);
        return view('newsfeed.edit')->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'body' => 'required'
        ]);
        
        $post = Newsfeed::find($id);
        $post->body = $request->input('body');
        $post->save();

        return redirect ('/newsfeed')->with('success', "Post Updated!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Newsfeed::find($id);
        $post->delete;
        return redirect ('/newsfeed')->with('success', "Post Updated!");
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $userID
     * @return \Illuminate\Http\Response
     */
    public function profileFeed($userID)
    {

        $userID=$userID;
        $userID2=$userID;
        $posts = Newsfeed::select('*')
        ->from('posts')
        ->whereRaw('userid IN ( SELECT userID FROM user_followers WHERE followerID=:userID ) OR userid=:userID2' )
        ->take(10)
        ->setBindings([$userID, $userID2])
        ->get();
        return view('newsfeed.index')->with('posts', $posts);
    }

}
