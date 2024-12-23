<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\Position;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $faker = Factory::create();

        $manager = Position::create(['name' => 'Manager']);
        $staff = Position::create(['name' => 'Staff']);

        foreach (range(1, 10) as $index) {
            Employee::create([
                'name' => $faker->name,
                'age' => $faker->numberBetween(18, 60),
                'position_id' => $faker->randomElement([$manager->id, $staff->id])
            ]);
        }
    }
}
