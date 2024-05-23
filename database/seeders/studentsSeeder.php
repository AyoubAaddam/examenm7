<?php  namespace Database\Seeders;

use DateTime;
use App\Models\Students;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class studentsSeeder extends Seeder {




  public function run(): void
    {
        // User::factory(10)->create();

        Students::factory()->create([
            'id' => 1,
            'name' => 'ayoub',
            'email' => 'ayoub@gmail.com',
            'birthDate' => new DateTime,
            'course_id' =>1
        ]);

        Students::factory()->create([
            'id' => 2,
            'name' => 'jose',
            'email' => 'jose@gmail.com',
            'birthDate' => new DateTime,
            'course_id' =>1
        ]);

        Students::factory()->create([
            'id' => 3,
            'name' => 'jose elias',
            'email' => 'jose_elias@gmail.com',
            'birthDate' => new DateTime,
            'course_id' =>1
        ]);
        Students::factory()->create([
            'id' => 4,
            'name' => 'aranu ',
            'email' => 'arnau@gmail.com',
            'birthDate' => new DateTime,
            'course_id' =>1
        ]);
        Students::factory()->create([
            'id' => 5,
            'name' => 'aranu salmeron',
            'email' => 'salmeron@gmail.com',
            'birthDate' => new DateTime,
            'course_id' =>1
        ]);
        Students::factory()->create([
            'id' => 6,
            'name' => 'toni',
            'email' => 'toni@gmail.com',
            'birthDate' => new DateTime,
            'course_id' =>2
        ]);
        Students::factory()->create([
            'id' => 7,
            'name' => 'toni jimenez',
            'email' => 'tonijimenez@gmail.com',
            'birthDate' => new DateTime,
            'course_id' =>2
        ]);

        Students::factory()->create([
            'id' => 8,
            'name' => 'oscar',
            'email' => 'oscar@gmail.com',
            'birthDate' => new DateTime,
            'course_id' =>2
        ]);

        Students::factory()->create([
            'id' => 9,
            'name' => 'ruben',
            'email' => 'ruben@gmail.com',
            'birthDate' => new DateTime,
            'course_id' =>2
        ]);

        Students::factory()->create([
            'id' => 10,
            'name' => 'dylan',
            'email' => 'dylan@gmail.com',
            'birthDate' => new DateTime,
            'course_id' =>2
        ]);
    }
}




