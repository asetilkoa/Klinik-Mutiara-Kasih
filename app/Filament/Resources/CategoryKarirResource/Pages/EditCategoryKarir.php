<?php

namespace App\Filament\Resources\CategoryKarirResource\Pages;

use App\Filament\Resources\CategoryKarirResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCategoryKarir extends EditRecord
{
    protected static string $resource = CategoryKarirResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
