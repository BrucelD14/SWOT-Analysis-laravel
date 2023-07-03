<?php

namespace App\Filament\Resources\ThreatResource\Pages;

use App\Filament\Resources\ThreatResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditThreat extends EditRecord
{
    protected static string $resource = ThreatResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
