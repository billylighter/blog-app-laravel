<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         User::factory()->create([
             'name' => 'Volodymyr S',
             'email' => 'vladimir.selevertov@gmail.com',
             'password' => 'qwerty123'
         ]);
         Post::factory(10)->create();
    }
}
