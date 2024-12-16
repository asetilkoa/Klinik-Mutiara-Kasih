<?php

namespace App\Filament\Resources\MedisResource\Pages;

use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\MedisResource;

class EditMedis extends EditRecord
{
    protected static string $resource = MedisResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Tenaga Medis Updated')
            ->body('Tenaga Medis has been Updated successfully.');
    }
}
