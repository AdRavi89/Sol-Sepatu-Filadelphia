<?php

namespace App\Filament\Resources\Galleries\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class GalleryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                TextInput::make('category')
                    ->required(),
                FileUpload::make('before_image')
                    ->image()
                    ->disk('public') // KUNCI UTAMA: Memaksa masuk ke folder public
                    ->directory('galleries') // Akan otomatis membuat folder storage/app/public/galleries
                    ->required(),
                FileUpload::make('after_image')
                    ->image()
                    ->disk('public') 
                    ->directory('galleries')
                    ->required(),
            ]);
    }
}
