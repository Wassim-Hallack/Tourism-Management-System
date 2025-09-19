<?php

namespace App\Filament\Resources\HotelphotoResource\Pages;

use App\Filament\Resources\HotelphotoResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageHotelphotos extends ManageRecords
{
    protected static string $resource = HotelphotoResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
