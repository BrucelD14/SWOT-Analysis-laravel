<?php

namespace App\Filament\Resources\WeaknessResource\Pages;

use App\Filament\Resources\WeaknessResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWeaknesses extends ListRecords
{
    protected static string $resource = WeaknessResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
