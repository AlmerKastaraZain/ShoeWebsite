<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ShoesSizesResource\Pages;
use App\Filament\Resources\ShoesSizesResource\RelationManagers;
use App\Models\ShoesSizes;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ShoesSizesResource extends Resource
{
    protected static ?string $model = ShoesSizes::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                forms\Components\TextInput::make( 'size'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('size')->searchable()->sortable(),
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
            'index' => Pages\ListShoesSizes::route('/'),
            'create' => Pages\CreateShoesSizes::route('/create'),
            'edit' => Pages\EditShoesSizes::route('/{record}/edit'),
        ];
    }
}
