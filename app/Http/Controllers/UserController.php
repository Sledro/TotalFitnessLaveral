<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Newsfeed;
use Auth;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($username)
    {
        $user = User::whereUsername($username)->first();
        $posts =  Newsfeed::orderBy('id', 'desc')->where('userID', '=', $user->id)->take(10)->get();
        if($user->trainerID!=""){
            $trainer = User::find($user->trainerID);
            $PT=$trainer;
        }else{
            $PT="None";
        }
        if($user){
            return view('user.index')->withUser($user)->with('posts', $posts)->with('pt', $PT);;;
        }else{
           return false;
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

/**
 * Follow the user.
 *
 * @param $profileId
 *
 */
public function follow(Request $request)
{

    \DB::table('user_followers')->insert([
        [
            'userID'             => $request->input('userID'),
            'followerID' => $request->input('followerID'),
            'created_at'       => date('Y-m-d H:i:s'),
            'updated_at'       => date('Y-m-d H:i:s')
        ]
    ]);
    
    return redirect()->back()->with('success', 'Successfully followed the user.');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function settings()
    {
        $user = User::find(Auth::user()->id);
        return view('user.settings')->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function updateSettings(Request $request)
    {
        $this->validate($request,[
            'uid' => 'required',
            'name' => 'required',
            'street' => 'required',
            'town' => 'required',
            'county' => 'required',
            'country' => 'required',
            'dob' => 'required',
            'gender' => 'required',
            'profession' => 'required',
        ]);

        User::where('id', $request->input('uid'))->update([
            'name' => $request->input('name'),
            'street' => $request->input('street'),
            'town' => $request->input('town'),
            'county' => $request->input('county'),
            'country' => $request->input('country'),
            'dob' => $request->input('dob'),
            'gender' => $request->input('gender'),
            'profession' => $request->input('profession')
            ]);


        return redirect ('/settings')->with('success', "Profile Settings Updated");
    }

}