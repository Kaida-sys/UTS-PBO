<?php

namespace App\Filament\Admin\Resources\JenisKelaminResource\Pages;

use App\Filament\Admin\Resources\JenisKelaminResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJenisKelamins extends ListRecords
{
    protected static string $resource = JenisKelaminResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
