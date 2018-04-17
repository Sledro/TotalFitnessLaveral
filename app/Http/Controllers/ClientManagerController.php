<?php

namespace App\Http\Controllers;

use App\ClientManager;
use App\User;
use Auth;
use Illuminate\Http\Request;

class ClientManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = User::where('trainerID', '=', ''.Auth::user()->id.'')->get();
        return view('clientManager.viewClients')->with('clients', $clients);
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
     * @param  \App\ClientManager  $clientManager
     * @return \Illuminate\Http\Response
     */
    public function show(ClientManager $clientManager)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ClientManager  $clientManager
     * @return \Illuminate\Http\Response
     */
    public function edit(ClientManager $clientManager)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ClientManager  $clientManager
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ClientManager $clientManager)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ClientManager  $clientManager
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClientManager $clientManager)
    {
        //
    }
}
