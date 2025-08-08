<?php

namespace App\Filament\Admin\Resources\Pembelians\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PembelianForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama_customer')
                    ->required(),
                TextInput::make('nama_barang')
                    ->required(),
                TextInput::make('jumlah_barang')
                    ->required()
                    ->numeric(),
                TextInput::make('harga_barang')
                    ->required()
                    ->numeric(),
                TextInput::make('total')
                    ->required()
                    ->numeric(),
            ]);
    }
}
