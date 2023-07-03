<?php

namespace App\Filament\Resources\WeaknessResource\Pages;

use App\Filament\Resources\WeaknessResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditWeakness extends EditRecord
{
    protected static string $resource = WeaknessResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
