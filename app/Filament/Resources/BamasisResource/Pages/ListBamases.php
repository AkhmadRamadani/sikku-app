<?php

namespace App\Filament\Resources\BamasisResource\Pages;

use App\Filament\Resources\BamasisResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBamases extends ListRecords
{
    protected static string $resource = BamasisResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
