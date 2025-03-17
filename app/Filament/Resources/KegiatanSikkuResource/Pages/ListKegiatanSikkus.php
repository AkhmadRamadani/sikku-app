<?php

namespace App\Filament\Resources\KegiatanSikkuResource\Pages;

use App\Filament\Resources\KegiatanSikkuResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKegiatanSikkus extends ListRecords
{
    protected static string $resource = KegiatanSikkuResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
