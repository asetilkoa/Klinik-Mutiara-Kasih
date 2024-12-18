<?php

namespace App\Filament\Resources\ArticleKarirResource\Pages;

use App\Filament\Resources\ArticleKarirResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateArticleKarir extends CreateRecord
{
    protected static string $resource = ArticleKarirResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
