<?php

namespace App\Filament\Resources\UnsurSosiometriResource\Pages;

use App\Filament\Resources\UnsurSosiometriResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUnsurSosiometris extends ListRecords
{
    protected static string $resource = UnsurSosiometriResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
