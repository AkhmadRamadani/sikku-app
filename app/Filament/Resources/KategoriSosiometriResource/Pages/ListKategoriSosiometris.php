<?php

namespace App\Filament\Resources\KategoriSosiometriResource\Pages;

use App\Filament\Resources\KategoriSosiometriResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKategoriSosiometris extends ListRecords
{
    protected static string $resource = KategoriSosiometriResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
