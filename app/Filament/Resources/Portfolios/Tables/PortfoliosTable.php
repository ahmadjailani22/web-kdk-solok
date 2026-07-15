<?php

namespace App\Filament\Resources\Portfolios\Tables;

use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Filters\SelectFilter;

class PortfoliosTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')
                    ->label('Gambar'),

                TextColumn::make('title')
                    ->label('Judul')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('client')
                    ->label('Klien')
                    ->searchable(),

                TextColumn::make('category')
                    ->label('Kategori')
                    ->badge(),

                TextColumn::make('year')
                    ->label('Tahun')
                    ->sortable(),

                IconColumn::make('is_active')
                    ->label('Aktif')
                    ->boolean(),

                TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime('d M Y')
                    ->sortable(),
            ])
            ->filters([
                SelectFilter::make('category')
                    ->options([
                        'konstruksi' => 'Konstruksi',
                        'renovasi' => 'Renovasi',
                        'desain' => 'Desain',
                    ]),
            ])
            ->defaultSort('created_at', 'desc');
    }
}