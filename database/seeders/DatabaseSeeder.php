<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//importo el modelo a utilizar
use App\Models\Curso;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        //ejecuto los factories
        User::factory(10)->create();
        Curso::factory(50)->create();
    }
}
