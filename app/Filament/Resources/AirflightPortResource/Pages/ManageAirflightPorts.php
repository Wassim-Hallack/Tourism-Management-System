<?php

namespace App\Filament\Resources\AirflightPortResource\Pages;

use App\Filament\Resources\AirflightPortResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageAirflightPorts extends ManageRecords
{
    protected static string $resource = AirflightPortResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
