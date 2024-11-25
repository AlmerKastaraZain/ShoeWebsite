<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ShoesAvailabilitysResource\Pages;
use App\Models\ShoesAvailabilitys;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ShoesAvailabilitysResource extends Resource
{
    protected static ?string $model = ShoesAvailabilitys::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                forms\Components\Select::make( 'shoes_id')
                    ->relationship('shoes', 'name'),
                forms\Components\Select::make( 'shoes_sizes')
                    ->relationship('shoesSizes', 'size'),
                forms\Components\TextInput::make( 'quantity')->numeric()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                Tables\Columns\TextColumn::make('shoes.name'),
                Tables\Columns\TextColumn::make('shoesSizes.size'),
                Tables\Columns\TextColumn::make('quantity')->searchable()->sortable()
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('shoes.name'),
                Tables\Filters\SelectFilter::make('shoes_sizes.sizes')
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
            'index' => Pages\ListShoesAvailabilitys::route('/'),
            'create' => Pages\CreateShoesAvailabilitys::route('/create'),
            'edit' => Pages\EditShoesAvailabilitys::route('/{record}/edit'),
        ];
    }
}
