<?php

namespace App\Filament\Resources\Umkms\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;

class UmkmForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama_usaha')
                    ->required()
                    ->maxLength(255),

                TextInput::make('nama_pemilik')
                    ->required()
                    ->maxLength(255),

                TextInput::make('no_hp')
                    ->required()
                    ->tel()
                    ->maxLength(20),

                Textarea::make('alamat')
                    ->required()
                    ->columnSpanFull(),

                TextInput::make('jenis_usaha')
                    ->required()
                    ->maxLength(255),

                Textarea::make('produk_dijual')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}