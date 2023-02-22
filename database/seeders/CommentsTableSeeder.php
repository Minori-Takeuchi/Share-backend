<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Comment;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'comment' => 'テストコメント',
            'user_id' => '4XCVR1acjUOtXVt5JvsKICshWbJ2',
            'post_id' => 1
        ];
        Comment::create($param);
        $param = [
            'comment' => 'テストコメント2',
            'user_id' => 'LkYXY7nBxuZVpOcuAwRa9EFQRX82',
            'post_id' => 1
        ];
        Comment::create($param);
    }
}
