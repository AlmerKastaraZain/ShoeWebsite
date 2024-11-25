<?php

namespace App\Filament\Resources\ShoesAvailabilitysResource\Pages;

use App\Filament\Resources\ShoesAvailabilitysResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditShoesAvailabilitys extends EditRecord
{
    protected static string $resource = ShoesAvailabilitysResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
