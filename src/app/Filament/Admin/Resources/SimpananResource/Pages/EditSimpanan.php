<?php

namespace App\Filament\Admin\Resources\SimpananResource\Pages;

use App\Filament\Admin\Resources\SimpananResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSimpanan extends EditRecord
{
    protected static string $resource = SimpananResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}