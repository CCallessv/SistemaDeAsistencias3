<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Miembro; // Importar el modelo Miembro
use Illuminate\Support\Str; // Importar la clase Str

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Miembro>
 */
class MiembroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre_apellido' => Str::random( length: 10),
            'direccion' => Str::random( length: 50),
            'telefono' => random_int(70000000, 79999999),
            'fecha_nacimiento' => '2000-05-01',
            'genero' => 'MASCULINO',
            'email' => Str::random( length: 10). '@gmail.com',
            'estado' => '1',
            'sala' => 'Ventas',
            'fotografia' => 'Juan.jpg',
            'fecha_ingreso' => '2023-11-10',

        ];
    }
}
