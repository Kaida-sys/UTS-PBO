<?php

namespace App\Filament\Admin\Resources\NomorSimResource\Pages;

use App\Filament\Admin\Resources\NomorSimResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListNomorSims extends ListRecords
{
    protected static string $resource = NomorSimResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
