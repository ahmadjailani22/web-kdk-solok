<?php

namespace App\Filament\Resources\Messages\Tables;

use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Filters\TernaryFilter;

class MessagesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                IconColumn::make('is_read')
                    ->label('Dibaca')
                    ->boolean(),

                TextColumn::make('name')
                    ->label('Nama')
                    ->searchable(),

                TextColumn::make('email')
                    ->searchable(),

                TextColumn::make('subject')
                    ->label('Subjek')
                    ->limit(30),

                TextColumn::make('created_at')
                    ->label('Dikirim')
                    ->dateTime('d M Y, H:i')
                    ->sortable(),
            ])
            ->filters([
                TernaryFilter::make('is_read')
                    ->label('Status Dibaca'),
            ])
            ->defaultSort('created_at', 'desc');
    }
}