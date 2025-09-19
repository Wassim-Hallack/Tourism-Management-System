<?php

namespace App\Filament\Resources\HotelUserResource\Pages;

use App\Filament\Resources\HotelUserResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateHotelUser extends CreateRecord
{
    protected static string $resource = HotelUserResource::class;
}
