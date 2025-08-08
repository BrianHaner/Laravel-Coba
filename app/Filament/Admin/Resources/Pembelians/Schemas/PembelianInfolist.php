<?php

namespace App\Filament\Admin\Resources\Pembelians\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class PembelianInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('nama_customer'),
                TextEntry::make('nama_barang'),
                TextEntry::make('jumlah_barang')
                    ->numeric(),
                TextEntry::make('harga_barang')
                    ->numeric(),
                TextEntry::make('total')
                    ->numeric(),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}
