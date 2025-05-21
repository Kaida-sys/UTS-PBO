<?php

namespace App\Filament\Admin\Resources\NamaLengkapResource\Pages;

use App\Filament\Admin\Resources\NamaLengkapResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditNamaLengkap extends EditRecord
{
    protected static string $resource = NamaLengkapResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
