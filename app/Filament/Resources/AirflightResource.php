<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AirflightResource\Pages;
use App\Filament\Resources\AirflightResource\RelationManagers;
use App\Models\Airflight;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AirflightResource extends Resource
{
    protected static ?string $model = Airflight::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationGroup = 'Airflight';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        Forms\Components\Select::make('airline_id')
                            ->relationship('airline', 'name')
                            ->required(),
                        Forms\Components\Select::make('flightclass_id')
                            ->relationship('flightclass', 'name')
                            ->required(),
                        Forms\Components\DateTimePicker::make('departure_datetime')
                            ->required(),
                        Forms\Components\DateTimePicker::make('arrival_datetime')
                            ->required(),
                        Forms\Components\TextInput::make('price')
                            ->required(),
                        Forms\Components\Toggle::make('active'),
                        Forms\Components\DateTimePicker::make('published_at')
                            ->required(),
                    ])->columnSpan(8),
                Card::make()
                    ->schema([

                        Forms\Components\Select::make('statet_id')
                            ->relationship('state_takeoff', 'name')
                            ->required(),
                        Forms\Components\Select::make('statel_id')
                            ->relationship('state_land', 'name')
                            ->required(),

                    ])->columnSpan(4),
            ])->columns(12);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                Tables\Columns\TextColumn::make('airline.name')->searchable(),
                Tables\Columns\TextColumn::make('flightclass.name')->searchable(),
                Tables\Columns\TextColumn::make('state_land.name')->searchable(),
                Tables\Columns\TextColumn::make('state_takeoff.name')->searchable(),
                Tables\Columns\TextColumn::make('departure_datetime')->searchable()
                    ->dateTime(),
                Tables\Columns\TextColumn::make('arrival_datetime')->searchable()
                    ->dateTime(),
                Tables\Columns\TextColumn::make('price')->searchable(),
                Tables\Columns\IconColumn::make('active')
                    ->boolean(),
                Tables\Columns\TextColumn::make('published_at')
                    ->dateTime(),

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAirflights::route('/'),
            'create' => Pages\CreateAirflight::route('/create'),
            'edit' => Pages\EditAirflight::route('/{record}/edit'),
        ];
    }
}
