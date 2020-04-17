<?php

use Illuminate\Database\Seeder;
use App\Product;

class PizzasSeeder extends Seeder
{
    private $pizzas = [
        [
            'name' => 'Americana Fresh',
            'description' => 'Pepperoni, ham, tomato sauce, mozzarella cheese, green pepper',
            'price' => 349,
            'image' => 'https://img.pizzahut.ru/actions/BO_3e/JPG/pizza_americana_fresh.jpg',
        ],
        [
            'name' => 'Big Chicken',
            'description' => 'Chicken, Burger sauce, mozzarella cheese, onion fries',
            'price' => 399,
            'image' => 'https://img.pizzahut.ru/actions/BO_3e/JPG/pizza_big_chicken.jpg',
        ],
        [
            'name' => 'Rodeo Barbecue',
            'description' => 'Beef, pepperoni, tomato sauce, mozzarella cheese, BBQ sauce',
            'price' => 469,
            'image' => 'https://img.pizzahut.ru/actions/BO_3e/JPG/pizza_rodeo_barbecue.jpg',
        ]
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->pizzas as $pizza) {
            Product::create($pizza);
        }
    }
}
