<?php

use Illuminate\Database\Seeder;
use App\Proveedor;


class ProveedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Proveedor::class,500)->create();
    }
}
