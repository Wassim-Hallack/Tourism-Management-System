<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AirflightUserResource\Pages;
use App\Filament\Resources\AirflightUserResource\RelationManagers;
use App\Models\AirflightUser;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AirflightUserResource extends Resource
{
    protected static ?string $model = AirflightUser::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationGroup = 'Airflight';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('airflight_id')
                    ->relationship('Airflight', 'id')
                    ->required(),
                Forms\Components\Select::make('usermobile_id')
                    ->relationship('usermobile', 'name')
                    ->getOptionLabelFromRecordUsing(fn (Model $record) => "{$record->name} {$record->last_name}")
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('airflight_id'),
                Tables\Columns\TextColumn::make('usermobile_id'),
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
            'index' => Pages\ManageAirflightUsers::route('/'),
        ];
    }
}
