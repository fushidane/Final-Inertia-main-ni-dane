<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categs = [
            [
                'name' => 'Mobile'
            ],
            [
                'name' =>  'Tshirt'
            ],
            [
                'name' => 'Tablet'
            ]
        ];

        foreach ($categs as $categoryName) {
            Category::create( $categoryName);
        }
    }
}
