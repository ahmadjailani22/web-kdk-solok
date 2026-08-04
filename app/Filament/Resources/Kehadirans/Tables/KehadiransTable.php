<?php

namespace App\Filament\Resources\Kehadirans\Tables;

use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\Filter;
use Filament\Forms\Components\DatePicker;
use Filament\Actions\DeleteAction;

class KehadiransTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('umkm.nama_usaha')
                    ->label('Nama Usaha')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('umkm.nama_pemilik')
                    ->label('Pemilik'),

                TextColumn::make('umkm.jenis_usaha')
                    ->label('Jenis Usaha')
                    ->badge(),

                TextColumn::make('waktu')
                    ->label('Jam Kunjungan')
                    ->dateTime('d M Y, H:i')
                    ->sortable(),
            ])
            ->defaultSort('waktu', 'desc')
            ->filters([
                Filter::make('tanggal')
                    ->form([
                        DatePicker::make('dari'),
                        DatePicker::make('sampai'),
                    ])
                    ->query(function ($query, array $data) {
                        return $query
                            ->when($data['dari'], fn ($q) => $q->whereDate('tanggal', '>=', $data['dari']))
                            ->when($data['sampai'], fn ($q) => $q->whereDate('tanggal', '<=', $data['sampai']));
                    }),
            ])
            ->recordActions([
                DeleteAction::make(),
            ]);
    }
}