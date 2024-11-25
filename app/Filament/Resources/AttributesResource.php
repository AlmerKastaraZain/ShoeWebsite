<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AttributesResource\Pages;
use App\Filament\Resources\AttributesResource\RelationManagers;
use App\Models\Attributes;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AttributesResource extends Resource
{
    protected static ?string $model = Attributes::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                forms\Components\Select::make(name: 'shoes_id')
                    ->relationship("shoes", "name"),
                forms\Components\Toggle::make(name: 'for_male'),
                forms\Components\Toggle::make(name: 'for_female'),
                forms\Components\Toggle::make(name: 'for_kids'),
                
                forms\Components\Select::make(name: 'sports_id')
                    ->relationship("sports", "name"),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('Shoes.name')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('Sports.name')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('for_male')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('for_kids')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('for_female')->searchable()->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAttributes::route('/'),
            'create' => Pages\CreateAttributes::route('/create'),
            'edit' => Pages\EditAttributes::route('/{record}/edit'),
        ];
    }
}
