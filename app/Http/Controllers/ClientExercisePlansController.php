<?php

namespace App\Http\Controllers;
use Auth;
use App\UserExercisePlans;
use Illuminate\Http\Request;

class ClientExercisePlansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::guest()){
            return redirect ('/');
        }
        else{
            return view('UserExercisePlans.index'); 
        }
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
     * @param  \App\UserExercisePlans  $UserExercisePlans
     * @return \Illuminate\Http\Response
     * @return view('UserExercisePlans.index') with exercisePlan
     */
    public function show()
    {
        if(Auth::guest()){
            return redirect ('/');
        }
        else{
            //Returns logged on users exercise plan and included exercises in object
            $exercisePlan = UserExercisePlans::with('exercises.exercise')->where('userID', Auth::user()->id)->get();

            //For debugging - Displays JSON array that is being return from DB call above.
           // echo $exercisePlan;
            //exit;
            return view('exercise.UserExercisePlans')->with('exercisePlan', $exercisePlan);;; 
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserExercisePlans  $UserExercisePlans
     * @return \Illuminate\Http\Response
     */
    public function edit(UserExercisePlans $UserExercisePlans)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserExercisePlans  $UserExercisePlans
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserExercisePlans $UserExercisePlans)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserExercisePlans  $UserExercisePlans
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserExercisePlans $UserExercisePlans)
    {
        //
    }
}
