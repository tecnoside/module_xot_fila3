<?php

declare(strict_types=1);

namespace Modules\Xot\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

use Modules\Xot\Models\CacheLock;

class CacheLockFactory extends Factory {
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<\Illuminate\Database\Eloquent\Model>
     */
    protected $model = CacheLock::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition() {


        return [
            'key' => $this->faker->word,
            'owner' => $this->faker->word,
            'expiration' => $this->faker->randomNumber
        ];
    }
}
