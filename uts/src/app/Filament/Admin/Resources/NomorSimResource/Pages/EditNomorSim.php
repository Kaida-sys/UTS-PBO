<?php

namespace App\Filament\Admin\Resources\NomorSimResource\Pages;

use App\Filament\Admin\Resources\NomorSimResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditNomorSim extends EditRecord
{
    protected static string $resource = NomorSimResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
