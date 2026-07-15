<?php

namespace App\Filament\Resources\Services\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Components\Utilities\Set;
use Illuminate\Support\Str;

class ServiceForm
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

                TextInput::make('short_description')
                    ->maxLength(255),

                Textarea::make('description')
                    ->required()
                    ->rows(5)
                    ->columnSpanFull(),

                FileUpload::make('icon')
                    ->image()
                    ->directory('services/icons'),

                FileUpload::make('image')
                    ->image()
                    ->directory('services/images'),

                Toggle::make('is_active')
                    ->default(true),

                TextInput::make('order')
                    ->numeric()
                    ->default(0),
            ]);
    }
}