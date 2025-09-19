<?php

namespace App\Filament\Resources\HotelUserResource\Pages;

use App\Filament\Resources\HotelUserResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHotelUser extends EditRecord
{
    protected static string $resource = HotelUserResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
