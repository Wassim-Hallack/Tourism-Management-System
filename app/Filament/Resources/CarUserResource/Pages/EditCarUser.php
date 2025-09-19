<?php

namespace App\Filament\Resources\CarUserResource\Pages;

use App\Filament\Resources\CarUserResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCarUser extends EditRecord
{
    protected static string $resource = CarUserResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
