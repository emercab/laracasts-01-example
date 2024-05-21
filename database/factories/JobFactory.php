<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition(): array
  {

    // Run the factory en tinker with command: App\Models\Job::factory()->create();

    $salary = rand(15, 60) * 1000;

    return [
      'title' => fake()->jobTitle(),
      'employer_id' => Employer::inRandomOrder()->first()->id,
      'salary' => '$' . number_format($salary, 0, '.', ',') . ' USD',
    ];
  }
}
