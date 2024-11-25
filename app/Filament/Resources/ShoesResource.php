<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ShoesResource\Pages;
use App\Filament\Resources\ShoesResource\RelationManagers;
use App\Models\Shoes;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ShoesResource extends Resource
{
    protected static ?string $model = Shoes::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                forms\Components\TextInput::make('name')->unique(),
                forms\Components\Select::make('brand')
                    ->relationship('brands', 'brand'),
                forms\Components\TextInput::make('price')
                    ->numeric()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('Brands.brand'),
                Tables\Columns\TextColumn::make('name')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('price')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('name')
            
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('brands.name')
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
            'index' => Pages\ListShoes::route('/'),
            'create' => Pages\CreateShoes::route('/create'),
            'edit' => Pages\EditShoes::route('/{record}/edit'),
        ];
    }
}
