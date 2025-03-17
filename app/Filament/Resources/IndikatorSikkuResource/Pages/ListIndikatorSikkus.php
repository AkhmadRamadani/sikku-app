<?php

namespace App\Filament\Resources\IndikatorSikkuResource\Pages;

use App\Filament\Resources\IndikatorSikkuResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListIndikatorSikkus extends ListRecords
{
    protected static string $resource = IndikatorSikkuResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
