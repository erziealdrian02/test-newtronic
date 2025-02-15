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
<!-- Normal Score Display -->
<div class="container mx-auto px-4 py-8">
    <div class="mt-6 bg-white rounded-lg shadow-md p-6">
        <h3 class="text-lg font-semibold mb-4">Riwayat Pertandingan</h3>
        <div class="overflow-x-auto">
            <table class="min-w-full">
                <thead>
                    <tr class="bg-gray-50">
                        <th class="px-6 py-3 text-left">Pertandingan</th>
                        <th class="px-6 py-3 text-left">Skor Akhir</th>
                        <th class="px-6 py-3 text-left">Status</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach($games as $game)
                        <tr>
                            <td class="px-6 py-4">{{ $game->team_a }} vs {{ $game->team_b }}</td>
                            <td class="px-6 py-4"><span id="score_a_{{ $game->id }}">{{ $game->score_a }}</span> - <span id="score_b_{{ $game->id }}">{{ $game->score_b }}</span></td>
                            <td class="px-6 py-4">
                                <a href="{{ route('show.scorePenonton', $game->id) }}" 
                                    class="bg-green-600 text-white px-4 py-2 rounded text-sm">
                                     Tonton
                                 </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection