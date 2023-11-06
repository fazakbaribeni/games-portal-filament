<?php

namespace App\Filament\Resources\MemberResource\RelationManagers;

use Doctrine\DBAL\Query;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\DB;

class GamesRelationManager extends RelationManager
{
    protected static string $relationship = 'games';

    protected static ?string $recordTitleAttribute = 'name';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->heading("Member Games")
            ->recordTitleAttribute('name')
            ->columns([
                Tables\Columns\TextColumn::make('name')->label("Game Name")->searchable(),
                Tables\Columns\TextColumn::make('is_winner')
                    ->formatStateUsing(
                    fn (string $state): string => ($state > 0) ? __("Won Game") : __("Lost Game"))
                    ->color(fn (string $state): string => match ($state) {
                        "1" => 'success',
                        "0" => 'danger',
                    })
                    ->label("Won")->sortable(),
                // Get Opponent name
                Tables\Columns\TextColumn::make('member_id')->label("Opponent Name")->formatStateUsing(function ($record) {
                    $opponentName = DB::table('members')
                        ->select('name')
                        ->where('id', DB::raw('(SELECT member_id FROM game_member WHERE game_id = ? AND member_id != ?)'))
                        ->setBindings([$record->id, $record->member_id])
                        ->value('name');
                    return $opponentName;
                }),
                Tables\Columns\TextColumn::make("updated_at")
                    ->formatStateUsing(fn (string $state): string => __( date("d/m/Y h:i", strtotime($state))))
                ->label("Updated At"),

                Tables\Columns\TextColumn::make('score')->label("Scored")->sortable(),
                // Add a column for the opponent's name

            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
//                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
//                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
