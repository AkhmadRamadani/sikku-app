<?php

namespace App\Filament\Resources\UnsurSosiometriResource\Pages;

use App\Filament\Resources\UnsurSosiometriResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUnsurSosiometri extends EditRecord
{
    protected static string $resource = UnsurSosiometriResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
