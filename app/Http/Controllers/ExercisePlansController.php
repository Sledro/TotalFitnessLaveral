<?php

namespace App\Http\Controllers;

use Auth;
use App\ClientExercisePlans; // This model contains the historic and current training plans assigned to this client.
use App\ExercisePlanManager;
use App\ExercisePlan;
use App\ExercisePlanDetails;
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
        $plans = ExercisePlan::with('exercises.exercise')->where('trainerID', '=', ''.Auth::user()->id.'')->get();
        return view('exercisePlans.viewPlansTrainer')->with('plans', $plans);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $exerciseList = Exercise::pluck('name', 'id');
        return view('exercisePlans.createPlan')->with('exerciseList', $exerciseList);;
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
            'title' => 'required',
            'exerciseList' => 'required'
        ]);
        
        //$array = $request->all();

        $post = new ExercisePlan();
        $post->trainerID = Auth::user()->id;
        $post->name = $request->input('title');
        $post->save();

        for($i=1; $i<=7; $i++){
          if(isset($request->reps[$i][0])){
            for($j=0; $j<=2; $j++){
                if(isset($request->reps[$i][$j])){ 

                    $details = new ExercisePlanDetails();
                    $details->planID = $post->id;

                    if($i==1){ 
                        $details->day = "Monday";
                    } else if ($i==2){
                        $details->day = "Tuesday";
                    } else if ($i==3){
                        $details->day = "Wednesday";
                    } else if ($i==4){
                        $details->day = "Thursday";
                    } else if ($i==5){
                        $details->day = "Friday";
                    } else if ($i==6){
                        $details->day = "Saturday";
                    } else if ($i==7){
                        $details->day = "Sunday";
                    }

                    $details->exerciseID = $request->exerciseList[$i][$j];
                    $details->reps = $request->reps[$i][$j];
                    $details->sets = $request->sets[$i][$j];
                    $details->priority = "1";
                    $details->weight = $request->weight[$i][$j];
                    $details->save();
                    
                }
            }
          }
        }


        return redirect ('/exercise-plan-manager')->with('success', "New Training Plan Created!");
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
            $exercisePlan = ClientExercisePlans::with('plan.exercises.exercise')->where('userID', Auth::user()->id)->where('active', '=', '1')->get();
            return view('exercisePlans.viewPlanClient')->with('exercisePlan', $exercisePlan);;; 
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
