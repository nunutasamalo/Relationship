<?php

namespace Database\Factories;

use App\Models\Member;
use Illuminate\Database\Eloquent\Factories\Factory;

class MemberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Member::class;
    public function definition()
    {

        return [
            'firstName' => $this->faker->firstName(),
            'lastName' => $this->faker->lastName(),
            'mobileNo' => $this->faker->phoneNumber(),

        ];
    }
}
