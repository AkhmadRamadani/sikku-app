<?php

namespace App\Filament\Resources\TKelasBamasisResource\Pages;

use App\Filament\Resources\TKelasBamasisResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTKelasBamases extends ListRecords
{
    protected static string $resource = TKelasBamasisResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
