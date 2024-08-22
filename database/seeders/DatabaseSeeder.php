<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        User::create([
            'name' => 'Raihan Nandito',
            'username' => 'raihannandito',
            'email' => 'raihannandito@gmail.com',
            'password' => bcrypt('raihangogo')
        ]);

        Category::create([
            'name' => 'Sumatera',
            'slug' => 'sumatera'
        ]);

        Category::create([
            'name' => 'Jawa',
            'slug' => 'jawa'
        ]);

        Category::create([
            'name' => 'Kalimantan',
            'slug' => 'kalimantan'
        ]);

        Category::create([
            'name' => 'Sulawesi',
            'slug' => 'sulawesi'
        ]);

        Category::create([
            'name' => 'Papua',
            'slug' => 'papua'
        ]);

        Category::create([
            'name' => 'Lainnya',
            'slug' => 'Lainnya'
        ]);
        
    }
}
