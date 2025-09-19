<?php

namespace App\Filament\Resources\HotelUserResource\Pages;

use App\Filament\Resources\HotelUserResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHotelUsers extends ListRecords
{
    protected static string $resource = HotelUserResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
