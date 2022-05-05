<?php

use App\Category;
use App\Post;
use App\Tag;
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
        $categories = Category::all();
        $categoriesId = $categories->pluck("id")->all();

        $tags = Tag::all();
        $tagsId = $tags->pluck("id")->all();

        for($i=0;$i<100;$i++){

            $post= new Post();
            $post->title = $Faker->words(10,true);
            $post->slug =Str::slug($post->title);
            $post->content = $Faker->paragraphs(10,true);
            $post->published_at = $Faker->randomElement([null, $Faker->dateTime()]);
            $post->category_id = $Faker->optional()->randomElement($categoriesId);
            $randomTags = $Faker->randomElements($tagsId,2);
            $post->save();
            $post->tags()->attach($randomTags);
        }
    }
}
