<?php

namespace App\Filament\Resources\Orders\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class OrdersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('customer_name')
                    ->label('Nama Pelanggan')
                    ->searchable()
                    ->sortable(),

                // BARU: Menampilkan Nomor Telepon di tabel
                TextColumn::make('phone')
                    ->label('No. WA')
                    ->searchable(),

                TextColumn::make('item_type')
                    ->label('Jenis Barang/Layanan')
                    ->searchable(),

                TextColumn::make('status')
                    ->label('Status Pesanan')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'Antrean' => 'danger',
                        'Pengerjaan' => 'warning',
                        'Selesai' => 'success',
                        'Diambil' => 'info',
                        default => 'gray',
                    })
                    ->searchable(),

                TextColumn::make('created_at')
                    ->label('Tanggal Order')
                    ->dateTime('d M Y, H:i')
                    ->sortable(),
            ])
            ->filters([
                SelectFilter::make('status')
                    ->label('Filter Status')
                    ->options([
                        'Antrean' => 'Antrean',
                        'Pengerjaan' => 'Pengerjaan',
                        'Selesai' => 'Selesai',
                        'Diambil' => 'Diambil',
                    ]),
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}