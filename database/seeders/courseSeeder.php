<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class courseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Course::factory()->create([
            'id' => 1,
            'name' => 'PHP entorno web',
            'price' =>15.00
        ]);

        Course::factory()->create([
            'id' => 2,
            'name' => 'PHP',
            'price' =>15.00
        ]);

        Course::factory()->create([
            'id' => 3,
            'name' => 'PHP Laravel',
            'price' =>15.00
        ]);
        Course::factory()->create([
            'id' => 4,
            'name' => 'Js vue',
            'price' =>15.00
        ]);
        Course::factory()->create([
            'id' => 5,
            'name' => 'Js maquetacion ',
            'price' =>15.00
        ]);
    }
}
