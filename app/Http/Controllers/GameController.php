<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\CreateGameRequest;
use App\Http\Controllers\Controller;

use App\Game;
use App\Category;
use App\User;

use Request;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //for test only
        $currentUser =  \Auth::user();
        //echo $currentUser->name;
        $game = Game::all();
        // $category = Category::all();
        //return view('games.index', compact('games'));
         return view('games.index', [
            'games'            => $game,
            'currentUser'      => $currentUser]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $category = Category::all();
        $games = Game::all();
        return view('games.create', [
            'categories' => $category,
            'games' => $games
            ]);    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateGameRequest $request) {
        $game = new Game($request->all());
        \Auth::user()->games()->save($game);
        
        return redirect('games');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $game = Game::findOrFail($id);
        return view('games.show', compact('game'));    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $game = Game::findOrFail($id);
        return view('games.edit', compact('game'));
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }
}
