<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ImagesResource\Pages;
use App\Filament\Resources\ImagesResource\RelationManagers;
use App\Models\ShoesImages;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ImagesResource extends Resource
{
    protected static ?string $model = ShoesImages::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                forms\Components\Select::make( 'shoes_id')
                    ->relationship('shoes', 'name'),
                forms\Components\FileUpload::make('path')
                    ->image()
                    ->imageEditor()
                    ->disk('public')
                    ->directory('Shoes')
                    ->visibility('private')

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('shoes.name')->searchable()->sortable(),
                Tables\Columns\ImageColumn::make('path')
                    ->defaultImageUrl(url('/Placeholder/1.png'))
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
            'index' => Pages\ListImages::route('/'),
            'create' => Pages\CreateImages::route('/create'),
            'edit' => Pages\EditImages::route('/{record}/edit'),
        ];
    }
}
