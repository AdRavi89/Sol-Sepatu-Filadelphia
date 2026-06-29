<?php

namespace App\Filament\Resources\Services\Tables;

// Menggunakan namespace bawaan arsitektur Anda yang benar
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class ServicesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable(),
                
                TextColumn::make('category')
                    ->label('Kategori')
                    ->searchable()
                    ->sortable()
                    ->badge()
                    ->color('warning'),
                
                TextColumn::make('icon')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                
                ImageColumn::make('image'),
                
                TextColumn::make('price')
                    ->money('IDR')
                    ->sortable(),
                
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                SelectFilter::make('category')
                    ->label('Filter Kategori')
                    ->options([
                        'Layanan Pengecatan & Restorasi Warna' => 'Layanan Pengecatan & Restorasi Warna',
                        'Layanan Perbaikan Tas' => 'Layanan Perbaikan Tas',
                        'Layanan Perbaikan Koper' => 'Layanan Perbaikan Koper',
                        'Layanan Perbaikan & Perawatan Sepatu' => 'Layanan Perbaikan & Perawatan Sepatu',
                    ]),
            ])
            // Menggunakan fungsi bawaan dari kode asli Anda
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