<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Juan Mendoza',
            'email' => '2019141020@unh.edu.pe',
            'password'=>'123456789'
        ]);
        $this->call([
            PeliculaSeeder::class,
            DirectorSeeder::class,
            ActorSeeder::class,
            PersonajeSeeder::class,
            CineSeeder::class,
            SalaSeeder::class,
            FuncionSeeder::class,
            PromocionSeeder::class,
            OpinionSeeder::class,
        ]);
    }
}
