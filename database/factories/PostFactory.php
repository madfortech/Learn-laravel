<?php

namespace Database\Factories;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;


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

    protected $model = Post::class;

    public function definition()
    {
            
         
            Factory::create();
                for ($i = 0; $i < 3; $i++) {
                    DB::table('posts')->insert([
                        'user_id' => \App\Models\User::factory()->constrained('users'),
                        'photo' => $this->faker->imageUrl('storage/public/images/',640, 480, 'animals', true),
                        'name' => $this->faker->sentences(1),
                        'description' => $this->faker->paragraph(5,false),
                    ]);
                }
        
    }
}
