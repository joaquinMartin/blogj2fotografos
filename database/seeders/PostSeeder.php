<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Post;
use Illuminate\Database\Seeder;
class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $posts = Post::factory(100)->create();
        
       foreach($posts as $post){
           Image::factory(1)->create([
              'img_id' => $post->id,
              'img_type'=> Post::class
           ]);
           $post->tags()->attach([1, 2]);
               rand(1, 4);
               rand(5, 8);
       }
    }
}
