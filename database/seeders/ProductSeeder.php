<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'product_name' => 'Product A',
                'category' => 'Category 1',
                'price' => 99.99,
                'discount' => 10.00,
            ],
            [
                'product_name' => 'Product B',
                'category' => 'Category 2',
                'price' => 149.99,
                'discount' => null,
            ],
            [
                'product_name' => 'Product C',
                'category' => 'Category 1',
                'price' => 199.99,
                'discount' => 20.00,
            ],
            [
                'product_name' => 'Product D',
                'category' => 'Category 3',
                'price' => 249.99,
                'discount' => null,
            ],
        ]);
    }
}
