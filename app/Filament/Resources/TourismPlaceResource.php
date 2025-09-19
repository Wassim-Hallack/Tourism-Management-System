<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TourismPlaceResource\Pages;
use App\Filament\Resources\TourismPlaceResource\RelationManagers;
use App\Models\TourismPlace;
use Carbon\Carbon;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TourismPlaceResource extends Resource
{
    protected static ?string $model = TourismPlace::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $navigationGroup = 'Tourism';
    


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->required()
                            ->maxLength(45),
                        Forms\Components\TextInput::make('location')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\TextInput::make('yearly_visitors')
                            ->required(),
                        Forms\Components\RichEditor::make('description')
                            ->required()
                            ->maxLength(65535),
                        Forms\Components\Toggle::make('active'),
                        Forms\Components\DateTimePicker::make('published_at')
                            ->required(),

                    ])->columnSpan(8),
                Card::make()
                    ->schema([
                        Forms\Components\FileUpload::make('thumbnail'),
                        Forms\Components\Select::make('categories_id')
                            ->relationship('categorie', 'categorie')
                            ->required(),


                    ])->columnSpan(4),
            ])->columns(12);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('categorie_id')->searchable(),
                Tables\Columns\TextColumn::make('name')->searchable(),
                Tables\Columns\TextColumn::make('location')->searchable(),
                Tables\Columns\ImageColumn::make('thumbnail')->size(200),
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
            'index' => Pages\ListTourismPlaces::route('/'),
            'create' => Pages\CreateTourismPlace::route('/create'),
            'edit' => Pages\EditTourismPlace::route('/{record}/edit'),
        ];
    }
}
