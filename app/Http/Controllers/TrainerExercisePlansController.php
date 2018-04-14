<?php

namespace App\Http\Controllers;

use Auth;
use App\ExercisePlanManager;
use App\ExercisePlan;
use App\Exercise;
use Illuminate\Http\Request;

class TrainerExercisePlansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plan = ExercisePlan::with('exercises.exercise')->where('trainerID', '=', ''.Auth::user()->id.'')->first();
        return view('trainerExercisePlans.viewPlans')->with('plan', $plan);
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
     * @param  \App\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $plan =  ExercisePlan::with('exercises.exercise')->find($id);
        $exerciseList = Exercise::pluck('name', 'id');

        return view('trainerExercisePlans.editPlan')->with('plan', $plan)->with('exerciseList', $exerciseList);;
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
