<?php

namespace App\Filament\Widgets;

use App\Filament\Resources\MemberResource;
use App\Models\Member;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;
use Illuminate\Support\Facades\DB;

class LeaderBoardWidget extends BaseWidget
{

    /** A leader board screen to list the members with the top 10 average scores
     * @param Table $table
     * @return Table
     */
    public function table(Table $table): Table
    {
        return $table
            ->query(function () {
                return Member::select(
                    'members.*',
                    DB::raw('(SELECT MAX(score) FROM game_member WHERE game_member.member_id = members.id) as top_score'))
                    ->whereHas('games', function ($query) {
                        $query->select('member_id')
                            ->groupBy('member_id')
                            ->havingRaw('COUNT(*) >= 10');
                    })
                    ->orderBy('top_score', 'desc')
                    ->limit(10);
            })
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('top_score', 'Top Score'),
                // Add more columns as needed
            ]);
    }
}
