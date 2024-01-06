<?php

namespace App\Filament\Resources\AntenneResource\Pages;

use App\Filament\Resources\AntenneResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAntenne extends EditRecord
{
    protected static string $resource = AntenneResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
