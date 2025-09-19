<?php

namespace App\Filament\Resources\RestaurantUserResource\Pages;

use App\Filament\Resources\RestaurantUserResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageRestaurantUsers extends ManageRecords
{
    protected static string $resource = RestaurantUserResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
