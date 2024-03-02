<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Electronics',
            'Clothing & Accessories',
            'Home & Kitchen Appliances',
            'Furniture',
            'Books & Stationery',
            'Beauty & Personal Care',
            'Sports & Outdoor',
            'Toys & Games',
            'Health & Fitness',
            'Automotive',
            'Tools & Hardware',
            'Groceries',
            'Pet Supplies',
            'Baby & Kids',
            'Jewelry & Watches',
            'Office Supplies',
            'Travel & Luggage',
            'Music & Instruments',
            'Arts & Crafts',
            'Gardening Supplies',
            'Party Supplies',
            'Electronics Accessories',
            'Home Decor',
            'Food & Beverages',
            'Photography & Videography',
            'Gaming',
            'Collectibles & Memorabilia',
            'DIY & Home Improvement',
            'Educational Supplies',
            'Industrial & Scientific',
        ];

        foreach ($categories as $category) {
            DB::table('categories')->insert([
                'name' => $category,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
