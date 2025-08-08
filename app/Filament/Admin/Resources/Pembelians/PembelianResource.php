<?php

namespace App\Filament\Admin\Resources\Pembelians;

use App\Filament\Admin\Resources\Pembelians\Pages\CreatePembelian;
use App\Filament\Admin\Resources\Pembelians\Pages\EditPembelian;
use App\Filament\Admin\Resources\Pembelians\Pages\ListPembelians;
use App\Filament\Admin\Resources\Pembelians\Pages\ViewPembelian;
use App\Filament\Admin\Resources\Pembelians\Schemas\PembelianForm;
use App\Filament\Admin\Resources\Pembelians\Schemas\PembelianInfolist;
use App\Filament\Admin\Resources\Pembelians\Tables\PembeliansTable;
use App\Models\Pembelian;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PembelianResource extends Resource
{
    protected static ?string $model = Pembelian::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return PembelianForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return PembelianInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PembeliansTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListPembelians::route('/'),
            'create' => CreatePembelian::route('/create'),
            'view' => ViewPembelian::route('/{record}'),
            'edit' => EditPembelian::route('/{record}/edit'),
        ];
    }
}
