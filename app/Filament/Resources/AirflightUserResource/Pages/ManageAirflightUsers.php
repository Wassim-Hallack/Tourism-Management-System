<?php

namespace App\Filament\Resources\AirflightUserResource\Pages;

use App\Filament\Resources\AirflightUserResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageAirflightUsers extends ManageRecords
{
    protected static string $resource = AirflightUserResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
