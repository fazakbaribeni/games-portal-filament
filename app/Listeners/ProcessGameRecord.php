<?php

namespace App\Listeners;

use App\Events\GameRecordCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Models\Game;
use App\Models\GameMember;

class ProcessGameRecord
{

    public function handle(GameRecordCreated $event)
    {
        $gameId = $event->gameId;

        // Update the winner set to null
        GameMember::where('game_id', $gameId)->update(['is_winner' => 0]);

        $highestScoringMember = GameMember::where('game_id', $gameId)
            ->orderBy('score', 'desc')
            ->first();

        // Update the lookup table for the winner
        GameMember::where('game_id', $gameId)
            ->where('member_id', $highestScoringMember->member_id)
            ->update(['is_winner' => 1]);

        // Add the winner's ID to the game for reporting
        $game = Game::find($gameId);
        $game->winner_id = $highestScoringMember->member_id;
        $game->save();
    }
}
