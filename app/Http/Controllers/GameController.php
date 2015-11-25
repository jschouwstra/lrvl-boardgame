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
    public function index() {
        if(\Auth::check()){
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
        else{
            return redirect('auth/login');
        }
    }

    public function create() {
        if(\Auth::check()){
            $category = Category::all();
            $games = Game::all();
            return view('games.create', [
                'categories' => $category,
                'games' => $games
            ]);    
        }
        else{
            return redirect('auth/login');
        }
    }

    public function store(GameRequest $request) {
        $game = new Game($request->all());
        \Auth::user()->games()->save($game);
        
        return redirect('games');
    }

    public function show($id) {
        $game = Game::findOrFail($id);
        return view('games.show', compact('game'));    
    }

    public function edit($id) {
        $category = Category::all();
        $game = Game::findOrFail($id);
        return view('games.edit', compact('game','category'));
        }

public function update($id, GameRequestUpdate $request) {
    $game = Game::findOrFail($id);
    $game->update($request->all());
    return redirect('games');
    // $game = Game::findOrFail($id);
    // $input = $request->all();

    // $game->fill($input)->save();
    // return redirect('games');
}

    public function destroy($id) {
 // delete
        $game = Game::find($id);
        $game->delete();

        // redirect
        return redirect('games');
    }
}
