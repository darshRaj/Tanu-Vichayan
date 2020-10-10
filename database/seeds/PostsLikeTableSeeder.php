<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Status;
use App\Like;

class PostsLikeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
        {
            factory(User::class, 10)->create();
            factory(Status::class, 10)->create();
            factory(Like::class, 30)->create();
        }
}
