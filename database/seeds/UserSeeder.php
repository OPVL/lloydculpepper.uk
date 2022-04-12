<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::updateOrCreate(
            ['email' => 'lloydculpepper4@gmail.com'],
            [
                'password' => bcrypt('so-fucking-secure'),
                'email_verified_at' => now(),
                'name' => 'lloyd'
            ]
        );
    }
}
