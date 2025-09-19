<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HotelUserResource\Pages;
use App\Filament\Resources\HotelUserResource\RelationManagers;
use App\Models\HotelUser;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HotelUserResource extends Resource
{
    protected static ?string $model = HotelUser::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationGroup = 'Hotel';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        Forms\Components\Select::make('hotels_room_type_id')
                            ->relationship('hotels_room_type', 'type')
                            ->required(),
                        Forms\Components\TextInput::make('hotel_reserve_price')
                            ->tel()
                            ->required(),
                        Forms\Components\DateTimePicker::make('hotel_reserve_date')
                            ->required(),
                        Forms\Components\TextInput::make('hotel_reserve_time')
                            ->tel()
                            ->required(),
                        Forms\Components\TextInput::make('hotel_person_num')
                            ->tel()
                            ->required(),
                        Forms\Components\TextInput::make('hotel_room_num')
                            ->tel()
                            ->required(),
                    ])->columnSpan(8),
                Card::make()
                    ->schema([
                        Forms\Components\Select::make('hotel_id')
                            ->relationship('hotel', 'name')
                            ->required(),
                        Forms\Components\Select::make('usermobile_id')
                            ->relationship('usermobile', 'name')
                            ->getOptionLabelFromRecordUsing(fn (Model $record) => "{$record->name} {$record->last_name}")
                            ->required(),

                    ])->columnSpan(4),
            ])->columns(12);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('hotel.name')->searchable(),
                Tables\Columns\TextColumn::make('usermobile_id')->searchable(),
                Tables\Columns\TextColumn::make('hotel_room_type_id')->searchable(),
                Tables\Columns\TextColumn::make('hotel_reserve_price')->searchable(),
                Tables\Columns\TextColumn::make('hotel_reserve_date')->searchable()
                    ->dateTime(),
                Tables\Columns\TextColumn::make('hotel_reserve_time')->searchable(),
                Tables\Columns\TextColumn::make('hotel_person_num')->searchable(),
                Tables\Columns\TextColumn::make('hotel_room_num')->searchable(),
                Tables\Columns\TextColumn::make('created_at')->searchable()
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')->searchable()
                    ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListHotelUsers::route('/'),
            'create' => Pages\CreateHotelUser::route('/create'),
            'edit' => Pages\EditHotelUser::route('/{record}/edit'),
        ];
    }
}
