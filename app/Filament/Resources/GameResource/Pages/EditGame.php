<?php

namespace App\Filament\Resources\GameResource\Pages;

use App\Filament\Resources\GameResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use App\Models\GameMember;
use App\Models\Game;

class EditGame extends EditRecord
{
    protected static string $resource = GameResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];


    }

    /**After Save workout the winner of the game
     * @return void
     */
    protected function afterSave()
    {

        $game_id = $this->getRecord()->id;

        // update the winner set to null
        $update = GameMember::where('game_id', $game_id)
            ->update(['is_winner' => 0]);

        $highestScoringMember = GameMember::where('game_id', $game_id)
            ->orderBy('score', 'desc')
            ->first();

        // Update the lookup table for the winner
        $updateWinner =  GameMember::where('game_id', $game_id)
            ->where('member_id', $highestScoringMember->member_id)
            ->update(['is_winner' => 1]);

        //add Winners to the game to workout reporting lateron
        $game = Game::find($game_id);
        $game->winner_id = $highestScoringMember->member_id;
        $game->save();



    }
}
