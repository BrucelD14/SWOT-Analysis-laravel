<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WeaknessResource\Pages;
use App\Filament\Resources\WeaknessResource\RelationManagers;
use App\Models\Weakness;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class WeaknessResource extends Resource
{
    protected static ?string $model = Weakness::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('faktor_strategis')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('bobot')
                    ->required(),
                Forms\Components\TextInput::make('rating')
                    ->required(),
                Forms\Components\TextInput::make('score')
                    ->required(),
                Forms\Components\TextInput::make('tingkat_signifikan')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('faktor_strategis'),
                Tables\Columns\TextColumn::make('bobot'),
                Tables\Columns\TextColumn::make('rating'),
                Tables\Columns\TextColumn::make('score'),
                Tables\Columns\TextColumn::make('tingkat_signifikan'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListWeaknesses::route('/'),
            'create' => Pages\CreateWeakness::route('/create'),
            'edit' => Pages\EditWeakness::route('/{record}/edit'),
        ];
    }
}
