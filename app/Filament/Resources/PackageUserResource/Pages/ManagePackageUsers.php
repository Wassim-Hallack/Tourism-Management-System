<?php

namespace App\Filament\Resources\PackageUserResource\Pages;

use App\Filament\Resources\PackageUserResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManagePackageUsers extends ManageRecords
{
    protected static string $resource = PackageUserResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
