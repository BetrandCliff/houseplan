<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsAdminOverview extends BaseWidget
{
    protected static ?int $sort=0;
    protected function getStats(): array
    {
        return [
                      
            // Stat::make('Unique views', '192.1k'),
            // Stat::make('Bounce rate', '21%'),
            // Stat::make('Average time on page', '3:12'),


            // 

        Stat::make('Revenue', '192.1k')
            ->description('32k increase')
            ->descriptionIcon('heroicon-m-arrow-trending-up')
            ->color('success'),
        Stat::make('Order ', '21%')
            ->description('7% decrease')
            ->descriptionIcon('heroicon-m-arrow-trending-down')
            ->color('danger'),
        Stat::make('Visits', '3:12')
            ->description('3% increase')
            ->descriptionIcon('heroicon-m-arrow-trending-up')
            ->color('success'),

            // chats

            Stat::make('Customers', '192.1k')
            ->description('32k increase')
            ->descriptionIcon('heroicon-m-arrow-trending-up')
            ->chart([7, 2, 10, 3, 15, 4, 17])
            ->color('success'),
        ];
    }
}
