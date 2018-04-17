<?php

namespace App\Http\Controllers;

use App\Mailbox;
use Illuminate\Http\Request;
use Auth;
use App\MailboxMessages;

use Illuminate\Support\Facades\Redirect;
class MailboxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mail = Mailbox::where('receiverID', '=', Auth::user()->id)->orWhere('senderID', '=', Auth::user()->id)->get();
        return view('mailbox.viewAll')->with('mail', $mail);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('mailbox.create')->with('id', $id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeNow(Request $request)
    {
        $header = new Mailbox;
        $header->senderID = Auth::user()->id;
        $header->receiverID = $request->input('receiverID');
        $header->title = $request->input('title');
        $header->save();

        $post = new MailboxMessages;
        $post->mailboxID = $header->id;
        $post->senderID = Auth::user()->id;
        $post->receiverID = $request->input('receiverID');
        $post->message = $request->input('message');
        $post->save();  


        return view('mailbox.create')->with('message','Message Sent !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mailbox  $mailbox
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $message = MailboxMessages::where('mailboxID', '=', $id)->get();
        $mail = Mailbox::find($id);
        return view('mailbox.viewMessage')->with('mail', $mail)->with('message', $message);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mailbox  $mailbox
     * @return \Illuminate\Http\Response
     */
    public function edit(Mailbox $mailbox)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mailbox  $mailbox
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mailbox $mailbox)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mailbox  $mailbox
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mailbox $mailbox)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mailbox  $mailbox
     * @return \Illuminate\Http\Response
     */
    public function reply(Request $request)
    {
        $post = new MailboxMessages;
        $post->mailboxID = $request->input('id');
        $post->senderID = $request->input('senderID');
        $post->receiverID = $request->input('receiverID');
        $post->message = $request->input('reply');
        $post->save();

        return Redirect::back()->with('message','Message Sent !');

    }
}
