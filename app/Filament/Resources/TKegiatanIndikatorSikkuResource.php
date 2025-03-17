<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TKegiatanIndikatorSikkuResource\Pages;
use App\Filament\Resources\TKegiatanIndikatorSikkuResource\RelationManagers;
use App\Models\TKegiatanIndikatorSikku;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TKegiatanIndikatorSikkuResource extends Resource
{
    protected static ?string $model = TKegiatanIndikatorSikku::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Sikap dan Perilaku';
    protected static ?string $navigationLabel = 'Tugas Kegiatan Indikator Sikap dan Perilaku';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('kegiatan_sikku_id')
                    ->relationship('kegiatan_sikku', 'nama_kegiatan'),
                Forms\Components\Select::make('indikator_sikku_id')
                    ->relationship('indikator_sikku', 'indikator'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('kegiatan_sikku.nama_kegiatan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('indikator_sikku.indikator')
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
            'index' => Pages\ListTKegiatanIndikatorSikkus::route('/'),
            'create' => Pages\CreateTKegiatanIndikatorSikku::route('/create'),
            'edit' => Pages\EditTKegiatanIndikatorSikku::route('/{record}/edit'),
        ];
    }
}
