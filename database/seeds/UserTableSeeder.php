<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        //App\User::truncate();
        
        $users = [
            [
                'name' => 'sangjun',
                'email' => 'sangjun@gmail.com',
                'password' => bcrypt('qweqwe'),
            ],
            [
                'name' => '사용자1',
                'email' => 'user1@gmail.com',
                'password' => bcrypt('secret'),
            ],
            [
                'name' => '사용자2',
                'email' => 'user2l@gmail.com',
                'password' => bcrypt('secret'),
            ],
        ];
        
        foreach($users as $u) {
            App\User::create($u);
        }
        /*
        App\User::truncate();
        factory('App\User', 10)->create();
        */
    }
}
