<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RestaurantUserResource\Pages;
use App\Filament\Resources\RestaurantUserResource\RelationManagers;
use App\Models\RestaurantUser;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RestaurantUserResource extends Resource
{
    protected static ?string $model = RestaurantUser::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationGroup = 'Restaurant';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([

                        Forms\Components\TextInput::make('restaurant_reserve_price')
                            ->required(),
                        Forms\Components\TextInput::make('restaurant_reserve_tablenum')
                            ->required(),
                        Forms\Components\DateTimePicker::make('restaurant_reserve_date')
                            ->required(),
                        Forms\Components\TextInput::make('restaurant_reserve_time')
                            ->required(),
                        Forms\Components\TextInput::make('restaurant_reserve_personsnum')
                            ->required(),
                    ])->columnSpan(8),
                Card::make()
                    ->schema([
                        Forms\Components\Select::make('restaurant_id')
                            ->relationship('restaurant', 'name')
                            ->required(),
                        Forms\Components\Select::make('usermobile_id')
                            ->relationship('user', 'name')
                            ->getOptionLabelFromRecordUsing(fn (Model $record) => "{$record->name} {$record->last_name}")
                            ->required(),

                    ])->columnSpan(4),
            ])->columns(12);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('restaurant.name')->searchable(),
                Tables\Columns\TextColumn::make('usermobile_id')->searchable(),
                Tables\Columns\TextColumn::make('restaurant_reserve_price')->searchable(),
                Tables\Columns\IconColumn::make('restaurant_reserve_tablenum')->searchable()
                    ->boolean(),
                Tables\Columns\TextColumn::make('restaurant_reserve_date')->searchable()
                    ->dateTime(),
                Tables\Columns\TextColumn::make('restaurant_reserve_time')->searchable(),
                Tables\Columns\TextColumn::make('restaurant_reserve_personsnum')->searchable(),
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
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageRestaurantUsers::route('/'),
        ];
    }
}
