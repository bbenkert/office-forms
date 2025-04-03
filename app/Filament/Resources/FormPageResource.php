<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FormPageResource\Pages;
use App\Filament\Resources\FormPageResource\RelationManagers\FormFieldsRelationManager;
use App\Models\FormPage;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FormPageResource extends Resource
{
    protected static ?string $model = FormPage::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('title')->required(),
            TextInput::make('slug')->required()->unique(ignoreRecord: true),
            Textarea::make('description'),
        ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table->columns([
            TextColumn::make('title')->sortable()->searchable(),
            TextColumn::make('slug'),
            TextColumn::make('updated_at')->label('Updated')->dateTime(),
        ]);
    }

    public static function getRelations(): array
    {
        return [
            FormFieldsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListFormPages::route('/'),
            'create' => Pages\CreateFormPage::route('/create'),
            'edit' => Pages\EditFormPage::route('/{record}/edit'),
        ];
    }
}
