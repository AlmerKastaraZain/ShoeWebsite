<?php

namespace App\Filament\Resources\ShoeCollectionsResource\Pages;

use App\Filament\Resources\ShoeCollectionsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListShoeCollections extends ListRecords
{
    protected static string $resource = ShoeCollectionsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
