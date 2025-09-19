<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CarUserResource\Pages;
use App\Filament\Resources\CarUserResource\RelationManagers;
use App\Models\CarUser;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CarUserResource extends Resource
{
    protected static ?string $model = CarUser::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationGroup = 'Car';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        Forms\Components\DateTimePicker::make('rental_start_date')
                            ->required(),
                        Forms\Components\DateTimePicker::make('rental_end_date')
                            ->required(),
                        Forms\Components\TextInput::make('place_to_take')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('price')
                            ->required(),
                        Forms\Components\TextInput::make('place_to_give_back')
                            ->required()
                            ->maxLength(255),
                    ])->columnSpan(8),
                Card::make()
                    ->schema([
                        Forms\Components\Select::make('car_id')
                            ->relationship('car', 'car_name')
                            ->required(),
                        Forms\Components\Select::make('usermobile_id')
                            ->relationship('usermobile', 'name')
                            ->getOptionLabelFromRecordUsing(fn (Model $record) => "{$record->name} {$record->last_name}")
                            ->required(),

                    ])->columnSpan(4)
            ])->columns(12);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('car.id')->searchable(),
                Tables\Columns\TextColumn::make('usermobile_id')->searchable(),
                Tables\Columns\TextColumn::make('rental_start_date')->searchable()
                    ->dateTime(),
                Tables\Columns\TextColumn::make('rental_end_date')->searchable()
                    ->dateTime(),
                Tables\Columns\TextColumn::make('place_to_take')->searchable(),
                Tables\Columns\TextColumn::make('place_to_give_back')->searchable(),

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
            'index' => Pages\ListCarUsers::route('/'),
            'create' => Pages\CreateCarUser::route('/create'),
            'edit' => Pages\EditCarUser::route('/{record}/edit'),
        ];
    }
}
