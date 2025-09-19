<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AirflightClassResource\Pages;
use App\Filament\Resources\AirflightClassResource\RelationManagers;
use App\Models\AirflightClass;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AirflightClassResource extends Resource
{
    protected static ?string $model = AirflightClass::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $navigationGroup = 'Airflight';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('flightclass_id')
                    ->relationship('flightclass', 'name')
                    ->required(),
                Forms\Components\Select::make('airflight_id')
                    ->relationship('Airflight', 'id')
                    ->required(),
                Forms\Components\TextInput::make('passengers_num')
                    ->required()

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                Tables\Columns\TextColumn::make('flightclass.name')->searchable(),
                Tables\Columns\TextColumn::make('Airflight.id')->searchable(),
                Tables\Columns\TextColumn::make('passengers_num')->searchable(),

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
            'index' => Pages\ManageAirflightClasses::route('/'),
        ];
    }
}
