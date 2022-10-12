<?php

namespace App\Filament\Resources\AboutResource\Pages;

use App\Filament\Resources\AboutResource;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Pages\Actions;
use Filament\Resources\Form;
use Filament\Resources\Pages\EditRecord;
use Filament\Tables\Columns\ToggleColumn;

class EditAbout extends EditRecord
{
    protected static string $resource = AboutResource::class;

    protected function getActions(): array
    {
        return [

        ];
    }

    public function form(Form $form): Form
    {
        if ($this->record['key'] == 'avatar')
            $final = [
                SpatieMediaLibraryFileUpload::make('avatar')
                    ->label($this->record['key'])
                    ->required(),
                Toggle::make('visibility'),
            ];
        elseif ($this->record['key'] == 'hello')
            $final = [
                Textarea::make('value')
                    ->label($this->record['key'])
                    ->required(),
                Toggle::make('visibility'),
            ];
        else
            $final = [
                Textinput::make('value')
                    ->label($this->record['key'])
                    ->required(),
                Toggle::make('visibility'),
            ];


        return $form->schema(
            $final
        )->columns(1);
    }
}
