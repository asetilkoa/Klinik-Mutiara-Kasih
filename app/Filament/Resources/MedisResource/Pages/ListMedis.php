<?php

namespace App\Filament\Resources\MedisResource\Pages;

use App\Filament\Resources\MedisResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMedis extends ListRecords
{
    protected static string $resource = MedisResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
