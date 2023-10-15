<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(CategoriesTableSeeder::class);
        $this->call(PartnersTableSeeder::class);
        $this->call(CoursesTableSeeder::class);
        $this->call(MaterialsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(RatingsTableSeeder::class);
        $this->call(QuizzesTableSeeder::class);
        $this->call(QuizItemsTableSeeder::class);
        $this->call(GoodsTableSeeder::class);
    }
}
