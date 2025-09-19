<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HotelphotoResource\Pages;
use App\Filament\Resources\HotelphotoResource\RelationManagers;
use App\Models\Hotelphoto;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HotelphotoResource extends Resource
{
    protected static ?string $model = Hotelphoto::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationGroup = 'Hotel';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('thumbnail'),
                Forms\Components\Select::make('hotel_id')->searchable()
                ->relationship('hotel', 'name')
                ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('thumbnail'),
                Tables\Columns\TextColumn::make('hotel_id'),
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
            'index' => Pages\ManageHotelphotos::route('/'),
        ];
    }    
}
