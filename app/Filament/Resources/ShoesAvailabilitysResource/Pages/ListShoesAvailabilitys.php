<?php

namespace App\Filament\Resources\ShoesAvailabilitysResource\Pages;

use App\Filament\Resources\ShoesAvailabilitysResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListShoesAvailabilitys extends ListRecords
{
    protected static string $resource = ShoesAvailabilitysResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
