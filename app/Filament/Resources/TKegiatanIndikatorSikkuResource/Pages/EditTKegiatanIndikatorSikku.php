<?php

namespace App\Filament\Resources\TKegiatanIndikatorSikkuResource\Pages;

use App\Filament\Resources\TKegiatanIndikatorSikkuResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTKegiatanIndikatorSikku extends EditRecord
{
    protected static string $resource = TKegiatanIndikatorSikkuResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
