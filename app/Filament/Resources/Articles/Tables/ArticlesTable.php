<?php

namespace App\Filament\Resources\Articles\Tables;

use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TernaryFilter;

class ArticlesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('thumbnail')
                    ->label('Gambar'),

                TextColumn::make('title')
                    ->label('Judul')
                    ->searchable()
                    ->sortable()
                    ->limit(40),

                TextColumn::make('category')
                    ->label('Kategori')
                    ->badge(),

                IconColumn::make('is_published')
                    ->label('Publish')
                    ->boolean(),

                TextColumn::make('published_at')
                    ->label('Tanggal Publish')
                    ->dateTime('d M Y')
                    ->sortable(),

                TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime('d M Y')
                    ->sortable(),
            ])
            ->filters([
                SelectFilter::make('category')
                    ->options([
                        'berita-perusahaan' => 'Berita Perusahaan',
                        'tips' => 'Tips',
                        'pengumuman' => 'Pengumuman',
                    ]),
                TernaryFilter::make('is_published')
                    ->label('Status Publish'),
            ])
            ->defaultSort('created_at', 'desc');
    }
}