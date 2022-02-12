<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use mysql_xdevapi\Exception;

class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     * @throws Exception
     */
    public function definition()
    {
        return [
            'account_id'=>$this->faker->numberBetween(1,3),
            'ebook_id'=>$this->faker->numberBetween(1,30),
            'order_date'=>$this->faker->dateTime()
        ];
    }
}
