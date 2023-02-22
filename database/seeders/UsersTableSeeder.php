<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'id' => '4XCVR1acjUOtXVt5JvsKICshWbJ2',
            'name' => 'gest'
        ];
        User::create($param);
        $param = [
            'id' => 'LkYXY7nBxuZVpOcuAwRa9EFQRX82',
            'name' => 'gest2'
        ];
        User::create($param);
    }
}
