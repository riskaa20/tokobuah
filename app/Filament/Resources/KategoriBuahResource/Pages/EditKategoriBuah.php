<?php

namespace App\Filament\Resources\KategoriBuahResource\Pages;

use App\Filament\Resources\KategoriBuahResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKategoriBuah extends EditRecord
{
    protected static string $resource = KategoriBuahResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
