<?php

namespace App\Filament\Resources\CarCompanyResource\Pages;

use App\Filament\Resources\CarCompanyResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCarCompany extends EditRecord
{
    protected static string $resource = CarCompanyResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
