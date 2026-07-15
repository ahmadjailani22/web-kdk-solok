<?php

namespace App\Filament\Resources\Articles\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Components\Utilities\Set;
use Illuminate\Support\Str;

class ArticleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required()
                    ->maxLength(255)
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state))),

                TextInput::make('slug')
                    ->required()
                    ->maxLength(255)
                    ->unique(ignoreRecord: true),

                FileUpload::make('thumbnail')
                    ->image()
                    ->directory('articles'),

                Select::make('category')
                    ->options([
                        'berita-perusahaan' => 'Berita Perusahaan',
                        'tips' => 'Tips',
                        'pengumuman' => 'Pengumuman',
                    ])
                    ->searchable(),

                RichEditor::make('content')
                    ->required()
                    ->columnSpanFull(),

                Toggle::make('is_published')
                    ->label('Publikasikan')
                    ->default(false)
                    ->live(),

                DateTimePicker::make('published_at')
                    ->label('Tanggal Publish')
                    ->default(now())
                    ->visible(fn ($get) => $get('is_published')),
            ]);
    }
}