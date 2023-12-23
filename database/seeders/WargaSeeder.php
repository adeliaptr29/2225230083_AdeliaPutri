<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class WargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Warga::factory(15)->create();
    }
}
