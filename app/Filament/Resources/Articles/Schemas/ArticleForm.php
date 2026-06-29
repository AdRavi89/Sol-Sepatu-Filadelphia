<?php

namespace App\Filament\Resources\Articles\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ArticleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                TextInput::make('slug')
                    ->required(),
                Textarea::make('content')
                    ->required()
                    ->columnSpanFull(),
                FileUpload::make('featured_image')
                    ->image()
                    ->disk('public')          // <-- Tambahan: Arahkan ke disk public
                    ->directory('articles')   // <-- Tambahan: Buat folder articles
                    ->columnSpanFull(),       // <-- Tambahan: Agar form gambar penuh secara horizontal (opsional)
                DateTimePicker::make('published_at'),
            ]);
    }
}