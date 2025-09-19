<?php

namespace App\Filament\Resources\FlightclassResource\Pages;

use App\Filament\Resources\FlightclassResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageFlightclasses extends ManageRecords
{
    protected static string $resource = FlightclassResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
