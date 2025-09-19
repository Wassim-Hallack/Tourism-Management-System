<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PackageResource\Pages;
use App\Filament\Resources\PackageResource\RelationManagers;
use App\Models\Package;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PackageResource extends Resource
{
    protected static ?string $model = Package::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationGroup = 'Package';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([

                        Forms\Components\DateTimePicker::make('start_date')
                            ->required(),
                        Forms\Components\DateTimePicker::make('end_date')
                            ->required(),
                        Forms\Components\TextInput::make('price')
                            ->required(),
                        Forms\Components\Toggle::make('active'),
                        Forms\Components\DateTimePicker::make('published_at')
                            ->required(),
                    ])->columnSpan(8),
                Card::make()
                    ->schema([
                        Forms\Components\Select::make('hotel_id')
                            ->relationship('hotel', 'name')
                            ->required(),
                        Forms\Components\Select::make('restaurant_id')
                            ->relationship('restaurant', 'name')
                            ->required(),
                        Forms\Components\Select::make('airflight_id')
                            ->relationship('airflight', 'id')
                            ->required(),
                        Forms\Components\Select::make('tourism_id')
                            ->relationship('tourism', 'name')
                            ->required(),
                        Forms\Components\FileUpload::make('thumbnail'),

                    ])->columnSpan(4),
            ])->columns(12);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('thumbnail')->size(200),
                Tables\Columns\TextColumn::make('hotel.name')->searchable(),
                Tables\Columns\TextColumn::make('restaurant.name')->searchable(),
                Tables\Columns\TextColumn::make('airflight.id')->searchable(),
                Tables\Columns\TextColumn::make('tourism.name')->searchable(),
                Tables\Columns\TextColumn::make('created_at')->searchable()
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')->searchable()
                    ->dateTime(),
                Tables\Columns\IconColumn::make('active')
                    ->boolean(),

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
            'index' => Pages\ListPackages::route('/'),
            'create' => Pages\CreatePackage::route('/create'),
            'edit' => Pages\EditPackage::route('/{record}/edit'),
        ];
    }
}
