<?php

namespace App\Filament\Resources\ShoesSizesResource\Pages;

use App\Filament\Resources\ShoesSizesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditShoesSizes extends EditRecord
{
    protected static string $resource = ShoesSizesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
