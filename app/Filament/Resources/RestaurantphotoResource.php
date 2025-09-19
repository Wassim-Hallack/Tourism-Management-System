<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RestaurantphotoResource\Pages;
use App\Filament\Resources\RestaurantphotoResource\RelationManagers;
use App\Models\Restaurantphoto;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RestaurantphotoResource extends Resource
{
    protected static ?string $model = Restaurantphoto::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationGroup = 'Restaurant';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('thumbnail'),
                Forms\Components\Select::make('restaurant_id')
                    ->relationship('restaurant', 'name')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('thumbnail')->size(200),
                Tables\Columns\TextColumn::make('restaurant_id')->searchable(),
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
            'index' => Pages\ManageRestaurantphotos::route('/'),
        ];
    }
}
