<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HotelsRoomTypeResource\Pages;
use App\Filament\Resources\HotelsRoomTypeResource\RelationManagers;
use App\Models\HotelsRoomType;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HotelsRoomTypeResource extends Resource
{
    protected static ?string $model = HotelsRoomType::class;
    protected static ?string $navigationGroup = 'Hotel';

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('type')
                    ->required()
                    ->maxLength(45),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('type')->searchable(),

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
            'index' => Pages\ManageHotelsRoomTypes::route('/'),
        ];
    }
}
