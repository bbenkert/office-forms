<?php

namespace App\Filament\Resources\FormPageResource\Pages;

use App\Filament\Resources\FormPageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFormPage extends EditRecord
{
    protected static string $resource = FormPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
