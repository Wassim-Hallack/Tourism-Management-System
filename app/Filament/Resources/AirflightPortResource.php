<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AirflightPortResource\Pages;
use App\Filament\Resources\AirflightPortResource\RelationManagers;
use App\Models\AirflightPort;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AirflightPortResource extends Resource
{
    protected static ?string $model = AirflightPort::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $navigationGroup = 'Airflight';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('airport_id')
                    ->relationship('Airport', 'IATA_code')
                    ->required(),
                Forms\Components\Select::make('airflight_id')
                    ->relationship('Airflight', 'id')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('Airflight.id'),
                Tables\Columns\TextColumn::make('Airport.IATA_code'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageAirflightPorts::route('/'),
        ];
    }
}
