<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Usuario;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Usuario::create([
            'dni' => '12345678',  // Ejemplo de DNI
            'nombre' => 'Gian Quispe',
            'correo' => 'gian.quispe.m@uni.pe',
            'contrasena' => Hash::make('contrasena'),  // Encripta la contraseña
            'rol' => 'admin',  // Puedes cambiar el rol según tu sistema
            'email_verified_at' => now(),
        ]);
    }
}
