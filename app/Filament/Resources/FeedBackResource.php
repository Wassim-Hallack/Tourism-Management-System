<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FeedBackResource\Pages;
use App\Filament\Resources\FeedBackResource\RelationManagers;
use App\Models\Car;
use App\Models\FeedBack;
use Filament\Forms;
use Filament\Tables\Actions\Action;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FeedBackResource extends Resource
{
    protected static ?string $model = FeedBack::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $navigationGroup = 'User';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('usermobile_id')
                    ->relationship('usermobile', 'email')
                    ->required(),
                Forms\Components\TextInput::make('message')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('rating')
                    ->required(),
                Forms\Components\TextInput::make('response')
                    ->maxLength(255),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('usermobile.email')->searchable(),
                Tables\Columns\TextColumn::make('message')->searchable(),
                Tables\Columns\TextColumn::make('rating')->searchable(),
                Tables\Columns\TextColumn::make('response')->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
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
            'index' => Pages\ListFeedBacks::route('/'),
            'create' => Pages\CreateFeedBack::route('/create'),
            'edit' => Pages\EditFeedBack::route('/{record}/edit'),
        ];
    }
}
