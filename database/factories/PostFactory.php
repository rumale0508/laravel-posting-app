<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->realText(30, 5), // ランダムなタイトル
            'content' => $this->faker->realText(200, 5), // ランダムな本文
            'user_id' => User::inRandomOrder()->first()->id ?? 1, // 存在するユーザーIDを取得
        ];
    }
}
