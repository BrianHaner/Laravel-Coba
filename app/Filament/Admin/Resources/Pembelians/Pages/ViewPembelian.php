<?php

namespace App\Filament\Admin\Resources\Pembelians\Pages;

use App\Filament\Admin\Resources\Pembelians\PembelianResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewPembelian extends ViewRecord
{
    protected static string $resource = PembelianResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
