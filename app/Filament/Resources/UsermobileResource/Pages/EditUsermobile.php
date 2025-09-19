<?php

namespace App\Filament\Resources\UsermobileResource\Pages;

use App\Filament\Resources\UsermobileResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUsermobile extends EditRecord
{
    protected static string $resource = UsermobileResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
