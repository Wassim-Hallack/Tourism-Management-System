<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CarResource\Pages;
use App\Filament\Resources\CarResource\RelationManagers;
use App\Models\Car;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Select;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CarResource extends Resource
{
    protected static ?string $model = Car::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationGroup = 'Car';
  

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        Forms\Components\TextInput::make('car_name')
                            ->required()
                            ->maxLength(255),
                        Radio::make('passenger_num')

                            ->options([
                                2 => 2,
                                4 => 4,
                                5 => 5,
                                8 => 8,
                            ])
                            ->required(),
                        Radio::make('door_num')

                            ->options([
                                2 => 2,
                                4 => 4,
                            ])
                            ->required(),
                        Forms\Components\TextInput::make('price_day')
                            ->required(),
                        Radio::make('type')

                            ->options([
                                'Auto' => 'Auto',
                                'Manual' => 'Manual',
                            ])
                            ->required(),
                        Forms\Components\Toggle::make('air_conditioning')
                            ->required(),
                        Forms\Components\Toggle::make('active'),
                        Forms\Components\DateTimePicker::make('published_at')
                            ->required(),
                    ])->columnSpan(8),
                Card::make()
                    ->schema([

                        Forms\Components\FileUpload::make('thumbnail'),
                        Forms\Components\Select::make('company_id')
                            ->relationship('carcompany', 'name')
                            ->required(),
                    ])->columnSpan(4),
            ])->columns(12);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('company_id')->searchable(),
                Tables\Columns\TextColumn::make('car_name')->searchable(),
                Tables\Columns\TextColumn::make('passenger_num')->searchable(),
                Tables\Columns\TextColumn::make('door_num')->searchable(),
                Tables\Columns\TextColumn::make('price_day')->searchable(),
                Tables\Columns\TextColumn::make('type')->searchable(),
                Tables\Columns\IconColumn::make('air_conditioning')->searchable()
                    ->boolean(),
                Tables\Columns\TextColumn::make('thumbnail'),
                Tables\Columns\IconColumn::make('active')->searchable()
                    ->boolean(),
                Tables\Columns\TextColumn::make('published_at')->searchable()
                    ->dateTime(),

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

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCars::route('/'),
            'create' => Pages\CreateCar::route('/create'),
            'edit' => Pages\EditCar::route('/{record}/edit'),
        ];
    }
}
