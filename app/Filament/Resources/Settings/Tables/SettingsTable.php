<?php

namespace App\Filament\Resources\Settings\Tables;

use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;

class SettingsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('key')
                    ->label('Key')
                    ->searchable(),

                TextColumn::make('value')
                    ->label('Value')
                    ->limit(50),
            ]);
    }
}