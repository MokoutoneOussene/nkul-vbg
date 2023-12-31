<?php

namespace App\Http\Controllers;

use App\Mail\SendRefugeMail;
use App\Models\User;
use App\Models\Refuge;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class RefugeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->role_id == 1){
            return view('refuge.index', [
                'refuges' => Refuge::all()
            ]);
        }

        if (Auth::user()->role_id == 2){
            return view('refuge.index', [
                'refuges' => Refuge::all()
            ]);
        }

        if (Auth::user()->role_id == 3){
            return view('refuge.index', [
                'refuges' => Refuge::where('users_id', '=', Auth::user()->id)->get()
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('refuge.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $user = User::find($request->users_id);

        Refuge::create($request->all());
        // Mail::to($user->email)->send(new SendRefugeMail($user->nom, $user->nom));

        return redirect()->route('gestion_refuge.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('refuge.show', [
            'ref' => Refuge::find($id),
        ]);
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
