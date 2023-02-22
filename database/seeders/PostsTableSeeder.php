<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'content' => 'テストの投稿です',
            'user_id' => '4XCVR1acjUOtXVt5JvsKICshWbJ2',
        ];
        Post::create($param);
        $param = [
            'content' => 'テストの投稿です2',
            'user_id' => 'LkYXY7nBxuZVpOcuAwRa9EFQRX82',
        ];
        Post::create($param);
    }
}
