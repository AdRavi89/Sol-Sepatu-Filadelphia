<?php

namespace App\Filament\Resources\Orders\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class OrderForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('customer_name')
                    ->label('Nama Pelanggan')
                    ->required()
                    ->maxLength(255),

                // BARU: Input untuk Nomor Telepon
                TextInput::make('phone')
                    ->label('Nomor WhatsApp / Telepon')
                    ->tel() // Memastikan keyboard angka muncul di HP
                    ->required()
                    ->maxLength(20),

                TextInput::make('item_type')
                    ->label('Jenis Barang & Layanan')
                    ->placeholder('Cth: Sepatu Pantofel - Ganti Sol')
                    ->required()
                    ->maxLength(255),

                Select::make('status')
                    ->label('Status Pesanan')
                    ->options([
                        'Antrean' => 'Antrean',
                        'Pengerjaan' => 'Pengerjaan',
                        'Selesai' => 'Selesai',
                        'Diambil' => 'Diambil',
                    ])
                    ->default('Antrean')
                    ->required(),
            ]);
    }
}