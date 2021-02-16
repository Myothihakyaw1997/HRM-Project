<?php

namespace Database\Factories;

use App\Models\Salary;
use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

class SalaryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Salary::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'employee_id' => Employee::factory(),
            'salary' => $this->faker->randomNumber(),
            'tax' => $this->faker->randomFloat(3,1000,2000),
            'ssb' => $this->faker->randomFloat(3,1000,2000),
            'unpaid_leave' => $this->faker->randomDigit,
            'position' => $this->faker->regexify('[A-Za-z]{10}'),
            'bonus'=> $this->faker->randomFloat(3,1000,2000)
        ];
    }
}
