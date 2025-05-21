<?php

namespace App\Filament\Admin\Resources\NamaLengkapResource\Pages;

use App\Filament\Admin\Resources\NamaLengkapResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListNamaLengkaps extends ListRecords
{
    protected static string $resource = NamaLengkapResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
