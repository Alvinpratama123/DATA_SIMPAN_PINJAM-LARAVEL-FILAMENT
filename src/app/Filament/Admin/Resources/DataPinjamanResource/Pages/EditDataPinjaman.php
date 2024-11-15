<?php

namespace App\Filament\Admin\Resources\DataPinjamanResource\Pages;

use App\Filament\Admin\Resources\DataPinjamanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDataPinjaman extends EditRecord
{
    protected static string $resource = DataPinjamanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
