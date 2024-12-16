<?php

namespace App\Filament\Resources\MedisResource\Pages;

use Filament\Actions;
use Filament\Notifications\Notification;
use App\Filament\Resources\MedisResource;
use Filament\Resources\Pages\CreateRecord;

class CreateMedis extends CreateRecord
{
    protected static string $resource = MedisResource::class;
    
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Tenaga Medis Created')
            ->body('Tenaga Medis has been created successfully.');
    }
}
