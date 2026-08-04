<?php

namespace App\Filament\Resources\Kehadirans;

use App\Filament\Resources\Kehadirans\Pages\ListKehadirans;
use App\Filament\Resources\Kehadirans\Tables\KehadiransTable;
use App\Models\Kehadiran;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class KehadiranResource extends Resource
{
    protected static ?string $model = Kehadiran::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedClipboardDocumentCheck;

    protected static ?string $navigationLabel = 'Buku Tamu';

    protected static ?string $modelLabel = 'Kehadiran';

    // read-only: data hanya masuk lewat halaman publik hasil scan QR
    public static function canCreate(): bool
    {
        return false;
    }

    public static function form(Schema $schema): Schema
    {
        return $schema->components([]);
    }

    public static function table(Table $table): Table
    {
        return KehadiransTable::configure($table);
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
            'index' => ListKehadirans::route('/'),
        ];
    }
}