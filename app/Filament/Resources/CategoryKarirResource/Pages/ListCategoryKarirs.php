<?php

namespace App\Filament\Resources\CategoryKarirResource\Pages;

use App\Filament\Resources\CategoryKarirResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCategoryKarirs extends ListRecords
{
    protected static string $resource = CategoryKarirResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
