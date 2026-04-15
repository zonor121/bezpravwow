<?php

namespace Database\Seeders;

use App\Models\Report;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class ReportSeeder extends Seeder
{

    public function run(): void
    {
        report::Factory()->count(10)->create();
    }
}
