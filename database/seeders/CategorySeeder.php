<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::factory()->create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
            'color' => 'bg-red-500'
        ]);
    
        Category::factory()->create([
            'name' => 'Keamanan Sistem',
            'slug' => 'keamanan-sistem',
            'color' => 'bg-blue-600'
        ]);


        Category::factory()->create([
            'name' => 'algoritma pemrograman',
            'slug' => 'algoritma pemrograman',
            'color' => 'bg-amber-600'
        ]);
    }
}
