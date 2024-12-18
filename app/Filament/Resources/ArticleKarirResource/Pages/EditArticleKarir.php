<?php

namespace App\Filament\Resources\ArticleKarirResource\Pages;

use App\Filament\Resources\ArticleKarirResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditArticleKarir extends EditRecord
{
    protected static string $resource = ArticleKarirResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
