<?php

namespace App\Filament\Resources\HotelsRoomTypeResource\Pages;

use App\Filament\Resources\HotelsRoomTypeResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageHotelsRoomTypes extends ManageRecords
{
    protected static string $resource = HotelsRoomTypeResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
