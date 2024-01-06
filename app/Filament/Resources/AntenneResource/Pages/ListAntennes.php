<?php

namespace App\Filament\Resources\AntenneResource\Pages;

use App\Filament\Resources\AntenneResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAntennes extends ListRecords
{
    protected static string $resource = AntenneResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
