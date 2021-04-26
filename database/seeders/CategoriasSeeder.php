<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categorias;
use Illuminate\Support\Str;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Categorias::factory(4)->create();
        for ($i=1; $i<4; $i++){
            Categorias::create([
                'name' =>'Categoria'.$i
            ]);
        }
    }
}
