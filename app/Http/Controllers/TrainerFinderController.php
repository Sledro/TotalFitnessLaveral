<?php

namespace App\Http\Controllers;

use App\TrainerFinder;
use Illuminate\Http\Request;
use App\User;
use Auth;

class TrainerFinderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trainers = User::where('isTrainer', '=', '1')->get();
        return view('trainerFinder.view')->with('trainers', $trainers);
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
     * @param  \App\TrainerFinder  $trainerFinder
     * @return \Illuminate\Http\Response
     */
    public function show(TrainerFinder $trainerFinder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TrainerFinder  $trainerFinder
     * @return \Illuminate\Http\Response
     */
    public function edit(TrainerFinder $trainerFinder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TrainerFinder  $trainerFinder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TrainerFinder $trainerFinder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TrainerFinder  $trainerFinder
     * @return \Illuminate\Http\Response
     */
    public function destroy(TrainerFinder $trainerFinder)
    {
        //
    }

    public function request(Request $request)
    {
        \DB::table('trainer_requests')->insert([
            [
                'clientID' => $request->input('clientID'),
                'trainerID' => $request->input('trainerID'),
                'accepted' => '0'
            ]
        ]);
        
        return redirect()->back()->with('success', 'Successfully requested this trainer to become your Personal Trainer.');
    }
    
}
