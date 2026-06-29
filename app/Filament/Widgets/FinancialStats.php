<?php

namespace App\Filament\Widgets;

use App\Models\Transaction;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class FinancialStats extends BaseWidget
{
    protected function getStats(): array
    {
        $income = Transaction::where('type', 'in')->sum('amount');
        $expense = Transaction::where('type', 'out')->sum('amount');
        $balance = $income - $expense;

        return [
            Stat::make('Total Pemasukan', 'Rp ' . number_format($income, 0, ',', '.'))
                ->description('Dari jasa reparasi & restorasi')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('success'),
                
            Stat::make('Total Pengeluaran', 'Rp ' . number_format($expense, 0, ',', '.'))
                ->description('Bahan baku, gaji, dll')
                ->descriptionIcon('heroicon-m-arrow-trending-down')
                ->color('danger'),
                
            Stat::make('Saldo Tersedia', 'Rp ' . number_format($balance, 0, ',', '.'))
                ->description('Selisih Pemasukan & Pengeluaran')
                ->descriptionIcon('heroicon-m-wallet')
                ->color('primary'),
        ];
    }
}