<?php

namespace App\Filament\Resources\OfficePageResource\Pages;

use App\Filament\Resources\OfficePageResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOfficePages extends ListRecords
{
    protected static string $resource = OfficePageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
