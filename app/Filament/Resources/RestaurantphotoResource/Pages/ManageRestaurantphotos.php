<?php

namespace App\Filament\Resources\RestaurantphotoResource\Pages;

use App\Filament\Resources\RestaurantphotoResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageRestaurantphotos extends ManageRecords
{
    protected static string $resource = RestaurantphotoResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
