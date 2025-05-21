<?php

namespace App\Filament\Admin\Resources\Category GenerateResource\Pages;

use App\Filament\Admin\Resources\Category GenerateResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCategory Generate extends EditRecord
{
    protected static string $resource = Category GenerateResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
