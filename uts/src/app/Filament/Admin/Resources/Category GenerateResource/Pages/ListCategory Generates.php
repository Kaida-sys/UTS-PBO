<?php

namespace App\Filament\Admin\Resources\Category GenerateResource\Pages;

use App\Filament\Admin\Resources\Category GenerateResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCategory Generates extends ListRecords
{
    protected static string $resource = Category GenerateResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
