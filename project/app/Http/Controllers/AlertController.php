<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Alert;
use App\Mail\SendAlertMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AlertController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('alerts.index', [
            'alerts' => Alert::orderBy('id', 'DESC')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('alerts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $users = User::all();
        // $send = User::find($request->users_id);

        Alert::create($request->all());
        // foreach($users as $user){
        //     Mail::to($user->email)->send(new SendAlertMail($send->nom, $send->prenom));
        // }

        return redirect()->route('gestion_alerts.index');
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
        $alert = Alert::find($id);
        $alert->delete();

        return redirect()->route('gestion_alerts.index');
    }
}
