<?php

namespace App\Filament\Resources\Messages\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;

class MessageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Nama')
                    ->disabled(),

                TextInput::make('email')
                    ->disabled(),

                TextInput::make('phone')
                    ->label('No. Telepon')
                    ->disabled(),

                TextInput::make('subject')
                    ->label('Subjek')
                    ->disabled(),

                Textarea::make('message')
                    ->label('Isi Pesan')
                    ->rows(6)
                    ->disabled()
                    ->columnSpanFull(),

                Toggle::make('is_read')
                    ->label('Sudah Dibaca'),
            ]);
    }
}