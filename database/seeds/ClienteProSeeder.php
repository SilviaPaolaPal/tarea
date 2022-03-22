<?php

use Illuminate\Database\Seeder;
use App\ClientePro;

class ClienteProSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\ClientePro::class,500)->create();

    }
}

