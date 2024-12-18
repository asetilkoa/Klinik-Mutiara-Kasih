<?php

namespace App\Filament\Resources\ArticleKarirResource\Pages;

use App\Filament\Resources\ArticleKarirResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListArticleKarirs extends ListRecords
{
    protected static string $resource = ArticleKarirResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
