<?php

namespace App\Filament\Resources\CategoryKarirResource\Pages;

use App\Filament\Resources\CategoryKarirResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCategoryKarir extends CreateRecord
{
    protected static string $resource = CategoryKarirResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
