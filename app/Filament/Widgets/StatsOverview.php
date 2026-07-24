<?php

namespace App\Filament\Widgets;

use App\Models\Article;
use App\Models\Message;
use App\Models\Portfolio;
use App\Models\Service;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Layanan Aktif', Service::where('is_active', true)->count())
                ->description('Total layanan yang tampil di website')
                ->descriptionIcon('heroicon-m-briefcase')
                ->color('info'),

            Stat::make('Portofolio', Portfolio::where('is_active', true)->count())
                ->description('Total proyek yang ditampilkan')
                ->descriptionIcon('heroicon-m-photo')
                ->color('success'),

            Stat::make('Artikel Terbit', Article::where('is_published', true)->count())
                ->description('Total artikel yang sudah dipublikasikan')
                ->descriptionIcon('heroicon-m-newspaper')
                ->color('warning'),

            Stat::make('Pesan Belum Dibaca', Message::where('is_read', false)->count())
                ->description('Perlu ditindaklanjuti')
                ->descriptionIcon('heroicon-m-envelope')
                ->color(Message::where('is_read', false)->count() > 0 ? 'danger' : 'success'),
        ];
    }
}