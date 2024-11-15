<?php

namespace App\Filament\Admin\Resources\DataPinjamanResource\Pages;

use App\Filament\Admin\Resources\DataPinjamanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDataPinjamen extends ListRecords
{
    protected static string $resource = DataPinjamanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
