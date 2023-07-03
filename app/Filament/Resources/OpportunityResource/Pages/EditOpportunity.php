<?php

namespace App\Filament\Resources\OpportunityResource\Pages;

use App\Filament\Resources\OpportunityResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOpportunity extends EditRecord
{
    protected static string $resource = OpportunityResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
