<?php

namespace App\Filament\Admin\Resources\AngsuranResource\Pages;

use App\Filament\Admin\Resources\AngsuranResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAngsuran extends EditRecord
{
    protected static string $resource = AngsuranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
