@extends('layouts.app')

@section('content')
<style>
    .fullscreen {
        position: fixed;
        top: 0;
        left: 0;
        width: 100vw;
        height: 100vh;
        z-index: 50;
        background: #000;
        display: none;
    }
    .fullscreen.active {
        display: flex;
        align-items: center;
        justify-content: center;
    }
</style>
<div id="scoreBoard" class="bg-black rounded-xl shadow-2xl p-8 mb-8 cursor-pointer hover:bg-gray-900 transition-all">
    <div class="text-center mb-6">
        <span class="inline-block bg-red-600 text-white px-4 py-1 rounded-full text-sm font-bold animate-pulse">LIVE</span>
    </div>
    <div class="flex justify-between items-center">
        <div class="text-center flex-1">
            <img src="/api/placeholder/120/120" alt="Team A" class="mx-auto mb-4 rounded-full">
            <h2 class="text-2xl font-bold text-white mb-2"><strong>{{ $game->team_a }}</strong></h2>
            <div class="text-7xl font-bold text-white"><strong>{{ $game->score_a }}</strong></div>
        </div>
        <div class="text-center px-4">
            <div class="text-3xl font-bold text-gray-400 mb-2">VS</div>
            <div class="text-xl text-red-500 font-mono">45:00</div>
        </div>
        <div class="text-center flex-1">
            <img src="/api/placeholder/120/120" alt="Team B" class="mx-auto mb-4 rounded-full">
            <h2 class="text-2xl font-bold text-white mb-2"><strong>{{ $game->team_b }}</h2>
            <div class="text-7xl font-bold text-white"><strong>{{ $game->score_b }}</strong></div>
        </div>
    </div>
</div>
<div id="fullscreenScore" class="fullscreen">
    <div class="text-center w-full p-8">
        <div class="flex justify-between items-center max-w-6xl mx-auto">
            <div class="text-center flex-1">
                <img src="/api/placeholder/200/200" alt="Team A" class="mx-auto mb-6 rounded-full">
                <h2 class="text-4xl font-bold text-white mb-4"><strong>{{ $game->team_a }}</strong></h2>
                <div class="text-9xl font-bold text-white"><strong>{{ $game->score_a }}</strong></div>
            </div>
            <div class="text-center px-8">
                <div class="text-5xl font-bold text-gray-400 mb-4">VS</div>
                <div class="text-3xl text-red-500 font-mono">45:00</div>
            </div>
            <div class="text-center flex-1">
                <img src="/api/placeholder/200/200" alt="Team B" class="mx-auto mb-6 rounded-full">
                <h2 class="text-4xl font-bold text-white mb-4"><strong>{{ $game->team_b }}</h2>
                <div class="text-9xl font-bold text-white"><strong>{{ $game->score_b }}</strong></div>
            </div>
        </div>
    </div>
</div>

<div class="container mx-auto px-4 py-8">
    <div class="mt-6 bg-white rounded-lg shadow-md p-6">
        <form action="{{ url('/games/'.$game->id.'/score') }}" method="POST">
            @csrf
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Team A Score</label>
                    <input type="number" name="score_a" value="{{ $game->score_a }}" class="w-full p-2 border rounded-md">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Team B Score</label>
                    <input type="number" name="score_b" value="{{ $game->score_b }}" class="w-full p-2 border rounded-md">
                </div>
            </div>
            <button type="submit" class="mt-4 w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700">
                Update Score
            </button>
        </form>
        <!-- Form Edit Skor -->
        <a href="{{ route('public') }}" class="block mt-4 text-blue-600">Kembali ke Daftar Pertandingan</a>
    </div>
</div>

<script src="https://js.pusher.com/7.0/pusher.min.js"></script>
<script>
    Pusher.logToConsole = true;

    var pusher = new Pusher('local', {
        cluster: 'mt1',
        wsHost: '127.0.0.1',
        wsPort: 6001,
        forceTLS: false,
        disableStats: true
    });

    var channel = pusher.subscribe('game.{{ $game->id }}');
    channel.bind('score.updated', function(data) {
        document.getElementById('score_a_{{ $game->id }}').innerText = data.game.score_a;
        document.getElementById('score_b_{{ $game->id }}').innerText = data.game.score_b;
    });
</script>

<script>
    const scoreBoard = document.getElementById('scoreBoard');
    const fullscreenScore = document.getElementById('fullscreenScore');

    scoreBoard.addEventListener('click', () => {
        fullscreenScore.classList.add('active');
    });

    fullscreenScore.addEventListener('click', () => {
        fullscreenScore.classList.remove('active');
    });
</script>
@endsection
