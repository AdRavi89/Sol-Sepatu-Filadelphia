<?php

namespace App\Filament\Resources\Services\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;

class ServiceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Nama Layanan')
                    ->required(),

                Select::make('category')
                    ->label('Kategori Layanan')
                    ->options([
                        'Layanan Pengecatan & Restorasi Warna' => 'Layanan Pengecatan & Restorasi Warna',
                        'Layanan Perbaikan Tas' => 'Layanan Perbaikan Tas',
                        'Layanan Perbaikan Koper' => 'Layanan Perbaikan Koper',
                        'Layanan Perbaikan & Perawatan Sepatu' => 'Layanan Perbaikan & Perawatan Sepatu',
                    ])
                    ->required()
                    ->searchable(),

                Textarea::make('description')
                    ->label('Deskripsi')
                    ->default(null)
                    ->columnSpanFull(),

                TextInput::make('icon')
                    ->label('Icon FontAwesome (Opsional)')
                    ->default(null),

                FileUpload::make('image')
                    ->label('Gambar/Foto')
                    ->image()
                    ->directory('services'),

                TextInput::make('price')
                    ->label('Harga')
                    ->required()
                    ->numeric()
                    ->default(0)
                    ->prefix('Rp'), // Mengubah prefix $ menjadi Rp
            ]);
    }
}