<?php

namespace App\Filament\Resources\OfficePageResource\Pages;

use App\Filament\Resources\OfficePageResource;
use App\Models\OfficePage;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOfficePage extends EditRecord
{
    protected static string $resource = OfficePageResource::class;

    public function mount(string|int|null $record = null): void
    {
        $this->record = OfficePage::firstOrFail();
        parent::mount($this->record->getKey());
    }

    protected function getRedirectUrl(): string
    {
        return static::getResource()::getUrl('edit');
    }

    protected function getHeaderActions(): array
    {
        return [
            // Optionally disable delete:
            // Actions\DeleteAction::make(),
        ];
    }
}
