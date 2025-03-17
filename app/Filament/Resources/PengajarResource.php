<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PengajarResource\Pages;
use App\Filament\Resources\PengajarResource\RelationManagers;
use App\Models\Pengajar;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PengajarResource extends Resource
{
    protected static ?string $model = Pengajar::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Pengajar';
    protected static ?string $navigationGroup = 'Master Data';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama_lengkap')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('pangkat')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('nrp')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('jabatan')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('nomor_hp')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('foto_profil')
                    ->maxLength(255),
                Forms\Components\Select::make('user_id')
                    ->relationship('user', 'email'),
                Forms\Components\TextInput::make('tipe')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_lengkap')
                    ->searchable(),
                Tables\Columns\TextColumn::make('pangkat')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nrp')
                    ->searchable(),
                Tables\Columns\TextColumn::make('jabatan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nomor_hp')
                    ->searchable(),
                Tables\Columns\TextColumn::make('foto_profil')
                    ->searchable(),
                Tables\Columns\TextColumn::make('user.email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tipe'),
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
            'index' => Pages\ListPengajars::route('/'),
            'create' => Pages\CreatePengajar::route('/create'),
            'edit' => Pages\EditPengajar::route('/{record}/edit'),
        ];
    }
}
