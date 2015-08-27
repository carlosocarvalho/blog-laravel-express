<?php

use Illuminate\Database\Seeder;

class TagFakeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Models\Tag::truncate();
        factory( App\Models\Tag::class ,15)->create();
    }
}
