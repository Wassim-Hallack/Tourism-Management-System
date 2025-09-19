<?php

namespace App\Filament\Resources\TourismPlaceResource\Pages;

use App\Filament\Resources\TourismPlaceResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTourismPlace extends EditRecord
{
    protected static string $resource = TourismPlaceResource::class;

    protected function getActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
