<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Database\seeders;
use App\Models\User;

class userSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = collect([
            [
                'name' => 'ihya',
                'email' => 'email@example.com',
                'password' => bcrypt('12345')
            ],
        ]);

        $data -> each(function ($data){

            User::create($data);

        });
    }
}
