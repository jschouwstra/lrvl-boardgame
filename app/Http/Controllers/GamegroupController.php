<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Gamegroup;

class GamegroupController extends Controller
{
    public function __construct() {
        $this->middleware('auth',['except' => 
            'index'
        ]);
    }
    public function index()
    {
        $currentUser = \Auth::user();
        $gamegroup = Gamegroup::all();
        return view('gamegroups.index',[
            'gamegroups'    => $gamegroup,
            'currentUser'   => $currentUser
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gamegroups.create');        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $gamegroup = new Gamegroup($request->all());
        \Auth::user()->gamegroups()->save($gamegroup);

        return redirect('gamegroups');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gamegroup = Gamegroup::findOrFail($id);
        $currentUser = \Auth::user();
        
        return view('gamegroups.show',[
            'gamegroup'     => $gamegroup,
            'currentUser'   => $currentUser
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
