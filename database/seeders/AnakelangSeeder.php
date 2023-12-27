<?php

namespace Database\Seeders;

use App\Models\Anakelang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnakelangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Anakelang::factory()->count(40)->create();
    }
}
