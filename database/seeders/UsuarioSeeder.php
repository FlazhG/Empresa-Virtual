<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $usuario = new User;
      $usuario -> id = 1;
      $usuario -> name = "Angelo";
      $usuario -> email = "Angelo@gmail.com";
      $usuario -> password = bcrypt('angelo123');
      $usuario->save();
    }
}
