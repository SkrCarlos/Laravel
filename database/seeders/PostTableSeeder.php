<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::truncate();

        $categories = Category::all();

        foreach ($categories as $key => $c) {
            for ($i=1; $i<=20 ; $i++) { 
                Post::create([
                    'title' => "Post $i $key",
                    'url_clean' => "post-$i-$key",
                    'content' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa blanditiis eveniet provident at temporibus repellat aspernatur debitis maiores accusantium tenetur esse, voluptatibus voluptatum eius aut iste nulla sunt excepturi cum eaque minus explicabo quo molestiae fugit quibusdam. Sapiente, iure et enim odit maiores earum quo pariatur. Totam et atque libero a sit earum enim officiis necessitatibus praesentium quidem soluta, placeat voluptas deleniti consequatur autem doloribus debitis sint architecto eius ea voluptatibus molestiae itaque quibusdam. Maxime nam enim tempore voluptatum id ea distinctio nihil recusandae reiciendis modi illum, repudiandae sed, neque asperiores sint ratione, eveniet rem? Aspernatur ipsa maiores ducimus veniam?",
                    'posted' => "yes",
                    'category_id' => $c->id 
                ]);
            }
        }

    }
}
