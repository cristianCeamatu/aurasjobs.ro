<?php

namespace App\Http\Controllers;

use Lang;
use App\Contact;
use App\Candidate;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Http\Requests\CandidateRequest;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request->lang ? app()->setLocale($request->lang) : '';
        return view('welcome.index');
    }


    /**
     * Store a newly created candidate in storage.
     *
     * @param  \App\Http\Requests\ContactRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CandidateRequest $request)
    {
        // Adding request to database and sending mails to office
        $candidate = new Candidate;
        $candidate->addCandidate($request);
    }

    /**
     * Store a newly created contactRequest in storage.
     *
     * @param  \App\Http\Requests\ContactRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function contactRequest(ContactRequest $request)
    {
        // Adding request to database and sending mails to guest and office
        Contact::addRequest($request);
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
}
