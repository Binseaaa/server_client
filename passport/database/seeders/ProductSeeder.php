<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'Iphone',
                'description' => 'This is an iphone ',
                'price' => 100.00,
            ],
            [
                'name' => 'MSI',
                'description' => 'This is a laptop',
                'price' => 300.00,
            ],
            [
                'name' => 'Samsung',
                'description' => 'This is an phone',
                'price' => 500.00,
            ],
            [
                'name' => 'Colorful',
                'description' => 'This is a laptop',
                'price' => 1000.00,
            ],
        ];

        foreach($products as $product) {
            Product::create($product);
        }
    }
}
