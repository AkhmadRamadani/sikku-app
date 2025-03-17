<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TKelasBamasisResource\Pages;
use App\Filament\Resources\TKelasBamasisResource\RelationManagers;
use App\Models\TKelasBamasis;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TKelasBamasisResource extends Resource
{
    protected static ?string $model = TKelasBamasis::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Master Data';

    public static function getLabel(): string
    {
        return 'Join Kelas';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('kelas_id')
                    ->relationship('kelas', 'nama_kelas'),
                Forms\Components\Select::make('bamasis_id')
                    ->relationship('bamasis', 'nama_lengkap'),
                Forms\Components\TextInput::make('status')
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('kelas.nama_kelas')
                    ->searchable(),
                Tables\Columns\TextColumn::make('bamasis.nama_lengkap')
                    ->searchable(),
                Tables\Columns\TextColumn::make('status')
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
            'index' => Pages\ListTKelasBamases::route('/'),
            'create' => Pages\CreateTKelasBamasis::route('/create'),
            'edit' => Pages\EditTKelasBamasis::route('/{record}/edit'),
        ];
    }
}
