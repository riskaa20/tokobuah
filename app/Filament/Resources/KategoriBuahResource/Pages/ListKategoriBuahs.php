<?php

namespace App\Filament\Resources\KategoriBuahResource\Pages;

use App\Filament\Resources\KategoriBuahResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKategoriBuahs extends ListRecords
{
    protected static string $resource = KategoriBuahResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
