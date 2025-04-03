<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OfficePageResource\Pages;
use App\Filament\Resources\OfficePageResource\RelationManagers;
use App\Models\OfficePage;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OfficePageResource extends Resource
{
    protected static ?string $model = OfficePage::class;
    protected static ?string $navigationLabel = 'Home Page';
    protected static ?string $modelLabel = 'Home Page';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')->required(),
                Textarea::make('intro'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            Tables\Columns\TextColumn::make('title')->label('Title')->searchable()->sortable(),
            Tables\Columns\TextColumn::make('intro')->label('Intro')->limit(50),
            Tables\Columns\TextColumn::make('updated_at')->label('Last Updated')->dateTime(),
        ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
           'index' => Pages\ListOfficePages::route('/index'), // ✅ needed for internal references
        'edit' => Pages\EditOfficePage::route('/'),        // ✅ this is your real edit screen

        ];
    }
    public static function getNavigationUrl(): string
{
    return static::getUrl('edit');
}
}
