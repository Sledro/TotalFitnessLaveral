<?php

namespace App\Http\Controllers;
use Auth;
use App\MyExercisePlan;
use Illuminate\Http\Request;

class MyExercisePlanController extends Controller
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
            return view('myExercisePlan.index'); 
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
     * @param  \App\MyExercisePlan  $MyExercisePlan
     * @return \Illuminate\Http\Response
     * @return view('myExercisePlan.index') with exercisePlan
     */
    public function show()
    {
        if(Auth::guest()){
            return redirect ('/');
        }
        else{
            //Returns logged on users exercise plan and included exercises in object
            $exercisePlan = MyExercisePlan::with('exercises.exercise')->where('userID', Auth::user()->id)->get();

            //For debugging - Displays JSON array that is being return from DB call above.
           // echo $exercisePlan;
            //exit;
            return view('exercise.myExercisePlan')->with('exercisePlan', $exercisePlan);;; 
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MyExercisePlan  $MyExercisePlan
     * @return \Illuminate\Http\Response
     */
    public function edit(MyExercisePlan $MyExercisePlan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MyExercisePlan  $MyExercisePlan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MyExercisePlan $MyExercisePlan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MyExercisePlan  $MyExercisePlan
     * @return \Illuminate\Http\Response
     */
    public function destroy(MyExercisePlan $MyExercisePlan)
    {
        //
    }
}
