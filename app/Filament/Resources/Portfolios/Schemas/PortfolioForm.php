<?php

namespace App\Filament\Resources\Portfolios\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Components\Utilities\Set;
use Illuminate\Support\Str;

class PortfolioForm
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

                Textarea::make('description')
                    ->required()
                    ->rows(5)
                    ->columnSpanFull(),

                FileUpload::make('image')
                    ->image()
                    ->directory('portfolios'),

                TextInput::make('client')
                    ->maxLength(255),

                Select::make('category')
                    ->options([
                        'konstruksi' => 'Konstruksi',
                        'renovasi' => 'Renovasi',
                        'desain' => 'Desain',
                    ])
                    ->searchable(),

                TextInput::make('year')
                    ->numeric()
                    ->maxLength(4),

                Toggle::make('is_active')
                    ->default(true),
            ]);
    }
}