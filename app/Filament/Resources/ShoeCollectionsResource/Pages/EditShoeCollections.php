<?php

namespace App\Filament\Resources\ShoeCollectionsResource\Pages;

use App\Filament\Resources\ShoeCollectionsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditShoeCollections extends EditRecord
{
    protected static string $resource = ShoeCollectionsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
