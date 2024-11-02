<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name'=>'mas Kordinator',
                'email'=>'kordinator@gmail.com',
                'role'=>'kordinator',
                'password'=>bcrypt('123456')
             ],
             [
                'name'=>'mas Operator',
                'email'=>'operator@gmail.com',
                'role'=>'operator',
                'password'=>bcrypt('123456')
             ],

        ];

        foreach($userData as $key => $val){
            User::create($val);

        }

    }
}
