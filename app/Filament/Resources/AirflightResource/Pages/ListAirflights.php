<?php

namespace App\Filament\Resources\AirflightResource\Pages;

use App\Filament\Resources\AirflightResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAirflights extends ListRecords
{
    protected static string $resource = AirflightResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
