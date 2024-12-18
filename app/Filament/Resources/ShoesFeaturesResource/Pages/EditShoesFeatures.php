<?php

namespace App\Filament\Resources\ShoesFeaturesResource\Pages;

use App\Filament\Resources\ShoesFeaturesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditShoesFeatures extends EditRecord
{
    protected static string $resource = ShoesFeaturesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
