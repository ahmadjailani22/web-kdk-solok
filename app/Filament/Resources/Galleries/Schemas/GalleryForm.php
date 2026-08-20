<?php

namespace App\Filament\Resources\Galleries\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\FileUpload;

class GalleryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label('Nama Kegiatan')
                    ->required()
                    ->maxLength(255),

                DatePicker::make('event_date')
                    ->label('Tanggal Kegiatan'),

                Textarea::make('description')
                    ->label('Deskripsi')
                    ->rows(3)
                    ->columnSpanFull(),

                Toggle::make('is_active')
                    ->label('Tampilkan di Website')
                    ->default(true),

                Repeater::make('photos')
                    ->relationship('photos')
                    ->label('Foto-foto Kegiatan')
                    ->schema([
                        FileUpload::make('image')
                            ->image()
                            ->disk('public')
                            ->directory('gallery')
                            ->imageEditor()
                            ->imageEditorAspectRatios(['4:3', '16:9', '1:1'])
                            ->imageResizeMode('cover')
                            ->imageResizeTargetWidth('1200')
                            ->imageResizeTargetHeight('900')
                            ->required(),

                        TextInput::make('caption')
                            ->label('Keterangan (opsional)')
                            ->maxLength(255),
                    ])
                    ->columns(2)
                    ->reorderable()
                    ->orderColumn('order')
                    ->addActionLabel('Tambah Foto')
                    ->columnSpanFull(),
            ]);
    }
}