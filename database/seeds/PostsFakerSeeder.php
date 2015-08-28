<?php

use Illuminate\Database\Seeder;
use App\Models\Post;
class PostsFakerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

            //Post::truncate();
            factory('App\Models\Post',15)->create();

    }
}
