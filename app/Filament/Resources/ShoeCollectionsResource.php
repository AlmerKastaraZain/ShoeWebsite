<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ShoeCollectionsResource\Pages;
use App\Filament\Resources\ShoeCollectionsResource\RelationManagers;
use App\Models\ShoeCollections;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ShoeCollectionsResource extends Resource
{
    protected static ?string $model = ShoeCollections::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                forms\Components\Textarea::make(name: 'collection'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('collection')->searchable()->sortable(),
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
            'index' => Pages\ListShoeCollections::route('/'),
            'create' => Pages\CreateShoeCollections::route('/create'),
            'edit' => Pages\EditShoeCollections::route('/{record}/edit'),
        ];
    }
}
