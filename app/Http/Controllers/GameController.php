<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\GameRequest;
use App\Http\Requests\GameRequestUpdate;
use App\Http\Controllers\Controller;

use App\Game;
use App\Category;
use App\User;
use Request;

class GameController extends Controller
{
    public function __construct() {
        $this->middleware('auth',['except' => 
            'index'
        ]);
    }

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

    public function create() {
            $category = Category::all();
            $games = Game::all();
            return view('games.create', [
                'categories' => $category,
                'games' => $games
            ]);    
    }

    public function store(GameRequest $request) {
        $game = new Game($request->all());
        \Auth::user()->games()->save($game);
        
        return redirect('games');
    }

    public function show($id) {
        $game = Game::findOrFail($id);
        return view('games.show', ['game'=> $game]);    
    }

    public function edit($id) {
        $category = Category::all();
        $game = Game::findOrFail($id);

        return view('games.edit', compact('game','category'));
    }

    public function update($id, GameRequestUpdate $request) {
        /*
        Original, don't change
        $game = Game::findOrFail($id);
        $game->update($request->all());
        return redirect('games');      
        */

        $game = Game::findOrFail($id);
        $filtered_game = str_replace('thefword', 'f***', $game);
        echo $filtered_game;

    }

    public function destroy($id) {
 // delete
        $game = Game::find($id);
        $game->delete();

        return redirect('games');
    }
}
