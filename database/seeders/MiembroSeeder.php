<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Miembro; // Importar el modelo Miembro
use Illuminate\Support\Str; // Importar la clase Str

class MiembroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

       Miembro::factory()->count(50)->create();

    }
}
