<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ShoesFeaturesResource\Pages;
use App\Filament\Resources\ShoesFeaturesResource\RelationManagers;
use App\Models\ShoesFeatures;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ShoesFeaturesResource extends Resource
{
    protected static ?string $model = ShoesFeatures::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                forms\Components\Select::make( 'name')
                    ->relationship('shoes', 'name'),
                forms\Components\Select::make( 'features_id')
                    ->relationship('features', 'name')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                    Tables\Columns\TextColumn::make('Features.name'),
                    Tables\Columns\TextColumn::make('shoes.name')->searchable()
                ])
            ->filters([
                Tables\Filters\SelectFilter::make('ShoesFeatures.feature_id'),
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
            'index' => Pages\ListShoesFeatures::route('/'),
            'create' => Pages\CreateShoesFeatures::route('/create'),
            'edit' => Pages\EditShoesFeatures::route('/{record}/edit'),
        ];
    }
}
