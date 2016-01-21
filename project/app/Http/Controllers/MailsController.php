<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;

use App\Newsletter;
use App\Http\Requests\MailCreateRequest as request;

class MailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Newsletter $newsletter)
    {
        $mailList = $newsletter->all();

        return view('mail.index', compact('mailList'));
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
    public function store(request $request, Newsletter $newsletter)
    {
        $newsletter->email = $request->input('email');

        $newsletter->save();

        return back()->with('message', 'New receptient added to the mailing list');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(Newsletter $newsletter, request $request, $id)
    {
        $recepient = $newsletter::find($id);

        $recepient->email = $request->input('email');

        $recepient->save;

        return;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Newsletter $newsletter, $id)
    {
        $newsletter->destroy($id);

        return back()->with('message', 'Receptient removed from mailing list');
    }
}
