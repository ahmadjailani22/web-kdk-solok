<?php

namespace App\Filament\Resources\Umkms\Tables;

use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use App\Models\Umkm;

class UmkmsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_usaha')
                    ->label('Nama Usaha')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('nama_pemilik')
                    ->label('Pemilik')
                    ->searchable(),

                TextColumn::make('no_hp')
                    ->label('No. HP'),

                TextColumn::make('jenis_usaha')
                    ->label('Jenis Usaha')
                    ->badge(),

                TextColumn::make('kehadirans_count')
                    ->counts('kehadirans')
                    ->label('Total Kunjungan')
                    ->sortable(),

                TextColumn::make('created_at')
                    ->label('Terdaftar')
                    ->dateTime('d M Y')
                    ->sortable(),
            ])
            ->filters([
                SelectFilter::make('jenis_usaha')
                    ->options(fn () => Umkm::query()->distinct()->pluck('jenis_usaha', 'jenis_usaha')->toArray()),
            ])
            ->defaultSort('created_at', 'desc');
    }
}