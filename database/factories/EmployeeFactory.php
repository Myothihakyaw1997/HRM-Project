<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Employee::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'name' => $this->faker->name,
            'join_date' => $this->faker->date(),
            'position' => $this->faker->regexify('[a-zA-Z]{10}'),
            'gmail' => $this->faker->unique()->safeEmail,
            'address' => $this->faker->address,
            'phone_number' =>$this->faker->phoneNumber
        ];
    }
}
