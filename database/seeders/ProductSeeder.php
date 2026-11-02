<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            [
                'title' => 'ASUS ROG Strix G16',
                'content' => 'Игровой ноутбук с высокой производительностью',
                'category_id' => 1,
                'status_id' => 1,
                'price' => 149990,
                'old_price' => 169990,
                'hit' => 1,
                'sale' => 1,
            ],
            [
                'title' => 'Samsung Galaxy S24 Ultra',
                'content' => 'Флагманский смартфон с большим экраном',
                'category_id' => 2,
                'status_id' => 1,
                'price' => 109990,
                'old_price' => 119990,
                'hit' => 1,
                'sale' => 1,
            ],
            [
                'title' => 'Xiaomi Pad 6',
                'content' => 'Универсальный планшет для работы и развлечений',
                'category_id' => 3,
                'status_id' => 2,
                'price' => 34990,
                'old_price' => 0,
                'hit' => 0,
                'sale' => 0,
            ],
        ];

        foreach ($products as $product) {
            Product::forceCreate($product);
        }
    }
}