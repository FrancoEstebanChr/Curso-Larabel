<?php

use Illuminate\Database\Seeder;
use SebastianBergmann\FileIterator\Factory;
use App\Models\Permiso;

class tablaPermisoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Factory(Permiso::class)->times(50)->create();
    }
}
