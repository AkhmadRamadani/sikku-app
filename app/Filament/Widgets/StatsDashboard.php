<?php

namespace App\Filament\Widgets;

use App\Models\Bamasis;
use App\Models\Jurusan;
use App\Models\Pengajar;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsDashboard extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make(
                'Bamasis',
                Bamasis::count(),
            ), 
            Stat::make(
                'Dosen',
                Pengajar::where('tipe', 'dosen')->count(),
            ), 

            Stat::make(
                'Pembina',
                Pengajar::where('tipe', 'pembina')->count(),
            ), 

            Stat::make(
                'Jurusan',
                Jurusan::count(),
            ),



        ];
    }
}
