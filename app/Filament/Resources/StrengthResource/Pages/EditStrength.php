<?php

namespace App\Filament\Resources\StrengthResource\Pages;

use App\Filament\Resources\StrengthResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditStrength extends EditRecord
{
    protected static string $resource = StrengthResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
