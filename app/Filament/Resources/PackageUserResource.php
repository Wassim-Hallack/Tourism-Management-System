<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PackageUserResource\Pages;
use App\Filament\Resources\PackageUserResource\RelationManagers;
use App\Models\PackageUser;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PackageUserResource extends Resource
{
    protected static ?string $model = PackageUser::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationGroup = 'Package';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('package_id')
                    ->relationship('package', 'id')
                    ->required(),
                Forms\Components\Select::make('usermobile_id')
                    ->relationship('user', 'name')
                    ->getOptionLabelFromRecordUsing(fn (Model $record) => "{$record->name} {$record->last_name}")
                    ->required(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('package.id')->searchable(),
                Tables\Columns\TextColumn::make('usermobile_id')->searchable(),
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
            'index' => Pages\ManagePackageUsers::route('/'),
        ];
    }
}
