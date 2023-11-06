<?php

namespace App\Filament\Resources\GameResource\Pages;

use App\Filament\Resources\GameResource;
use App\Models\Game;
use App\Models\GameMember;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use App\Events\GameRecordCreated;

class CreateGame extends CreateRecord
{
    protected static string $resource = GameResource::class;

    protected function afterSave()
    {
        parent::afterSave();

        $gameId = $this->getRecord()->id;

        // Fire the event
        event(new GameRecordCreated($gameId));
    }

}
