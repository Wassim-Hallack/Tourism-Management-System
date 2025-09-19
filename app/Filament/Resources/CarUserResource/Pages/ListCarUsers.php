<?php

namespace App\Filament\Resources\CarUserResource\Pages;

use App\Filament\Resources\CarUserResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCarUsers extends ListRecords
{
    protected static string $resource = CarUserResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
