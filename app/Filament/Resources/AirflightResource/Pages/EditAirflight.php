<?php

namespace App\Filament\Resources\AirflightResource\Pages;

use App\Filament\Resources\AirflightResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAirflight extends EditRecord
{
    protected static string $resource = AirflightResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
