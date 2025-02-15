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
