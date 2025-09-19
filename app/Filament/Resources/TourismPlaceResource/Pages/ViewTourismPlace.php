<?php

namespace App\Filament\Resources\TourismPlaceResource\Pages;

use App\Filament\Resources\TourismPlaceResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewTourismPlace extends ViewRecord
{
    protected static string $resource = TourismPlaceResource::class;

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
