<?php

namespace App\Http\Controllers;

use Auth;
use App\ClientExercisePlans; // This model contains the historic and current training plans assigned to this client.
use App\ExercisePlanManager;
use App\ExercisePlan;
use App\Exercise;
use Illuminate\Http\Request;

class ExercisePlansController extends Controller
{
    /**
     * Display a listing of the resource.
     * Display a list of all of the training plans created by the PT.
     * Only PTs can access this.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plan = ExercisePlan::with('exercises.exercise')->where('trainerID', '=', ''.Auth::user()->id.'')->first();
        return view('exercisePlans.viewPlansTrainer')->with('plan', $plan);
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
     * Display the specified resource to the client. 
     * Shows the client his/her currently assigned fitness plan in a 7 day calender format.
     * Only Clients can access this.
     * @param  \App\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        if(Auth::guest()){
            return redirect ('/');
        }
        else{
            //Returns logged on users exercise plan and included exercises in object
            $exercisePlan = ClientExercisePlans::with('plan.exercises.exercise')->where('userID', Auth::user()->id)->where('active', '=', 1)->get();
            return view('clientExercisePlans.viewPlansClient')->with('exercisePlan', $exercisePlan);;; 
        }
    }

    /**
     * Show the form for editing the specified resource for the PT.
     * Display the form the allow the PT to edit/update a specific training plan.
     * Only PTs can access this.
     * @param  \App\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $plan =  ExercisePlan::with('exercises.exercise')->find($id);
        $exerciseList = Exercise::pluck('name', 'id');
        return view('exercisePlans.editPlan')->with('plan', $plan)->with('exerciseList', $exerciseList);;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cr $cr)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function destroy(cr $cr)
    {
        //
    }
}
