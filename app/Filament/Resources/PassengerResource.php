<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PassengerResource\Pages;
use App\Filament\Resources\PassengerResource\RelationManagers;
use App\Models\Passenger;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PassengerResource extends Resource
{
    protected static ?string $model = Passenger::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationGroup = 'Package';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        Forms\Components\TextInput::make('first_name')
                            ->required()
                            ->maxLength(45),
                        Forms\Components\TextInput::make('middle_name')
                            ->required()
                            ->maxLength(45),
                        Forms\Components\TextInput::make('last_name')
                            ->required()
                            ->maxLength(45),
                        Forms\Components\Radio::make('gender')
                            ->required()
                            ->options([
                                1 => 'male',
                                2 => 'female',
                            ]),
                        Forms\Components\TextInput::make('passport')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\DateTimePicker::make('expiration_date')
                            ->required(),
                    ])->columnSpan(8),
                Card::make()
                    ->schema([
                        Forms\Components\Select::make('usermobile_id')
                            ->relationship('user', 'name')
                            ->getOptionLabelFromRecordUsing(fn (Model $record) => "{$record->name} {$record->last_name}")
                            ->required(),
                        Forms\Components\Select::make('nationality_id')
                            ->relationship('nationality', 'id')
                            ->required(),
                        Forms\Components\Select::make('airflight_id')
                            ->relationship('airflight', 'id')
                            ->required(),

                    ])->columnSpan(4),
            ])->columns(12);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('usermobile_id')->searchable(),

                Tables\Columns\TextColumn::make('airflight.id')->searchable(),
                Tables\Columns\TextColumn::make('first_name')->searchable(),

                Tables\Columns\TextColumn::make('last_name')->searchable(),


                Tables\Columns\TextColumn::make('passport')->searchable(),
                Tables\Columns\TextColumn::make('expiration_date')->searchable()
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
            'index' => Pages\ListPassengers::route('/'),
            'create' => Pages\CreatePassenger::route('/create'),
            'edit' => Pages\EditPassenger::route('/{record}/edit'),
        ];
    }
}
