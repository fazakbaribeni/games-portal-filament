<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GameResource\Pages;
use App\Filament\Resources\GameResource\RelationManagers;
use App\Filament\Resources\GameResource\Widgets\GameOverview;
use App\Models\Game;
use App\Models\Member;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;



class GameResource extends Resource
{
    protected static ?string $model = Game::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')->required(),


                Forms\Components\Select::make("winenr_id")
                    ->relationship("winner", "name")
                    ->disabled(),


                // Records for game
                Forms\Components\Section::make()
                    ->schema([
                     Forms\Components\Repeater::make('gameMembers')
                     ->relationship()
                     ->schema([

                         Forms\Components\Select::make('member_id')
                             ->label("Member")
                             ->options(Member::query()->get()->pluck('name', 'id'))
                             ->required()
                             ->afterStateUpdated(function ($state, $set) {
                                 $member = Member::find($state);
                                 if ($member) {
                                     $set("member_id", $member->id);
                                 }
                             }),
                         Forms\Components\TextInput::make('score')
                             ->numeric()
                         ->minValue(1)
                         ->maxValue(100),

                     ])
                      ->defaultItems(2)
                      ->columnSpan('full')

                    ])->columnSpan('full')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->searchable(),
                TextColumn::make('winner.name')->searchable(),
            ])
            ->filters([
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
        ];
    }

    /**
     * @return string[]
     */
    public static function getWidgets(): array
    {

        return [

        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListGames::route('/'),
            'create' => Pages\CreateGame::route('/create'),
            'edit' => Pages\EditGame::route('/{record}/edit'),
        ];
    }



    protected function getHeaderWidgets(): array
    {
        return [
            MemberResource\Widgets\MemberOverview::class,
        ];
    }



}
