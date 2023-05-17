<?php

namespace Database\Seeders;

use App\Models\Acero;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AceroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Acero::factory()->times(20)->create();
    }
}
