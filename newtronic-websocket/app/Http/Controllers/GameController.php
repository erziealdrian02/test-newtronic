<?php

namespace App\Http\Controllers;

use App\Models\Game; // Ensure this model exists in the specified namespace
use Illuminate\Http\Request;
use App\Events\ScoreUpdated;

class GameController extends Controller
{
    // Ambil daftar semua pertandingan
    public function index()
    {
        $games = Game::all();
        return view('games.score-card', compact('games'));
    }

    public function show($id)
    {
        $game = Game::where('id', $id)->first(); // Cari game berdasarkan ID, jika tidak ada akan error 404
        return view('games.score-show', compact('game'));
    }

    public function showPenonton($id)
    {
        $game = Game::where('id', $id)->first(); // Cari game berdasarkan ID, jika tidak ada akan error 404
        return view('games.score-showPenonton', compact('game'));
    }

    public function public()
    {
        $games = Game::all();
        return view('games.score-public', compact('games'));
    }

    public function log()
    {
        $games = Game::all();
        return view('games.score-log', compact('games'));
    }

    // Tambah pertandingan baru
    public function updateScore(Request $request, Game $game)
    {
        $game->update([
            'score_a' => $request->score_a,
            'score_b' => $request->score_b,
        ]);

        broadcast(new ScoreUpdated($game))->toOthers();

        return back();
    }
}

