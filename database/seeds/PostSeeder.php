<?php

use App\Post;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $Faker)
    {
        for($i=0;$i<100;$i++){

            $post= new Post();
            $post->title = $Faker->words(10,true);
            $post->slug =Str::slug($post->title);
            $post->content = $Faker->paragraphs(10,true);
            $post->published_at = $Faker->randomElement([null, $Faker->dateTime()]);
            $post->save();
        }
    }
}
