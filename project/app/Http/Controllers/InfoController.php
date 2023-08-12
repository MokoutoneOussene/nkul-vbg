<?php

namespace App\Http\Controllers;

use App\Models\Information;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InfoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->role_id == 1){
            return view('enquettes.list', [
                'enquettes' => Information::orderBy('created_at', 'DESC')->paginate(6)
            ]);
        }
        if (Auth::user()->role_id == 2){
            return view('enquettes.list2', [
                'enquettes' => Information::where('users_id', '=', Auth::user()->id)->orderBy('created_at', 'DESC')->paginate(6)
            ]);
        }
    }

        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('enquettes.form');
    }

        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Information::create($request->all());

        return redirect()->route('gestion_enquete.create');
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('enquettes.edit', [
            'finds' => Information::find($id),
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
        return view('back-end.pages.article.edit', [
            'finds' => Information::find($id),
        ]);
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
        $info = Information::find($id);
        $info->update($request->all());

        return redirect()->route('gestion_enquete.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dem = Information::find($id);
        $dem->delete();

        return redirect()->route('gestion_enquete.index');
    }

    public function print($id)
    {
        return view('enquettes.etat', [
            'finds' => Information::find($id),
        ]);
    }

    public function print2($id)
    {
        return view('enquettes.etat2', [
            'finds' => Information::find($id),
        ]);
    }
}
