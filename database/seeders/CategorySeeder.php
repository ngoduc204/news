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
        $categories = [
            ['name' => 'Tin thể thao'],
            ['name' => 'Tin công nghệ'],
            ['name' => 'Tin giải trí'],
            
        ];

        Category::insert($categories);
    }
}
