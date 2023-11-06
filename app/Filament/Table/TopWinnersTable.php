<?php

// app/Filament/Tables/TopWinnersTable.php

use Filament\Tables\Table;
use App\Models\GameMember;

class TopWinnersTable extends Table
{
    public $recordClass = GameMember::class; // Set the Eloquent model class for the records

    public function columns()
    {
        return [
            Column::make('name', 'Member'),
            Column::make('member_id', 'Member ID'),
            Column::make('average_score', 'Average Score'),
        ];
    }
}
