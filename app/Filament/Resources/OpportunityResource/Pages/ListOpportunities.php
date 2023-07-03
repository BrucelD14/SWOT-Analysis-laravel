<?php

namespace App\Filament\Resources\OpportunityResource\Pages;

use App\Filament\Resources\OpportunityResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOpportunities extends ListRecords
{
    protected static string $resource = OpportunityResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
