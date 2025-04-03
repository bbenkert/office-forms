<?php

namespace App\Filament\Resources\FormPageResource\Pages;

use App\Filament\Resources\FormPageResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFormPages extends ListRecords
{
    protected static string $resource = FormPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
