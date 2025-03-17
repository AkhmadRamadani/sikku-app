<?php

namespace App\Filament\Resources\IndikatorSikkuResource\Pages;

use App\Filament\Resources\IndikatorSikkuResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditIndikatorSikku extends EditRecord
{
    protected static string $resource = IndikatorSikkuResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
