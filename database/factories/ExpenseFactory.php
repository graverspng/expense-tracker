<?php

namespace Database\Factories;

use App\Models\Expense;
use Illuminate\Database\Eloquent\Factories\Factory;

class ExpenseFactory extends Factory
{
    protected $model = Expense::class;

    public function definition(): array
    {
        return [
            'amount' => $this->faker->randomFloat(2, 1, 1000),
            'description' => $this->faker->sentence(),
            'category_id' => \App\Models\Category::pluck('id')->random(),
            'goal_id' => $this->faker->optional()->randomElement(\App\Models\Goal::pluck('id')->toArray()),
            'spent_at' => $this->faker->dateTimeThisYear(),
        ];
    }
}