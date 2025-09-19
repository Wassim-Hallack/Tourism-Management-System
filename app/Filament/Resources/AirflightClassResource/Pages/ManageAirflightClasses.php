<?php

namespace App\Filament\Resources\AirflightClassResource\Pages;

use App\Filament\Resources\AirflightClassResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageAirflightClasses extends ManageRecords
{
    protected static string $resource = AirflightClassResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
