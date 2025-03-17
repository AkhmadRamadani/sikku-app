<?php

namespace App\Filament\Resources\TKegiatanIndikatorSikkuResource\Pages;

use App\Filament\Resources\TKegiatanIndikatorSikkuResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTKegiatanIndikatorSikkus extends ListRecords
{
    protected static string $resource = TKegiatanIndikatorSikkuResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
