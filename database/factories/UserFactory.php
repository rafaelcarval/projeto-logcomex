<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $charFieldValue = $this->faker->lexify('?????');
        $textFieldValue = $this->faker->text();
        $integerFieldValue = $this->faker->randomNumber();
        $varcharFieldValue = $this->faker->sentence();

        // Check if the field should be null
        $charField = $this->faker->boolean(10) ? null : $charFieldValue;
        $textField = $this->faker->boolean(10) ? null : $textFieldValue;
        $integerField = $this->faker->boolean(10) ? null : $integerFieldValue;
        $varcharField = $this->faker->boolean(10) ? null : $varcharFieldValue;

        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'address' => $this->faker->address(),
            'votes' => $this->faker->randomNumber(5),
            'char_field' => $charField,
            'varchar_field' => $varcharField,
            'text_field' => $textField,
            'integer_field' => $integerField,
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
