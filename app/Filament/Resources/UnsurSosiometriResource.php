<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UnsurSosiometriResource\Pages;
use App\Filament\Resources\UnsurSosiometriResource\RelationManagers;
use App\Models\UnsurSosiometri;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UnsurSosiometriResource extends Resource
{
    protected static ?string $model = UnsurSosiometri::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Sosiometri';

    protected static ?string $navigationLabel = 'Unsur Sosiometri';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('unsur_sosiometri')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('kategori_sosiometri_id')
                    ->relationship('kategori_sosiometri', 'nama_kategori_sosiometri'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('unsur_sosiometri')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kategori_sosiometri.nama_kategori_sosiometri')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListUnsurSosiometris::route('/'),
            'create' => Pages\CreateUnsurSosiometri::route('/create'),
            'edit' => Pages\EditUnsurSosiometri::route('/{record}/edit'),
        ];
    }
}
