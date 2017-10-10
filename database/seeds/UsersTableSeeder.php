<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::truncate();

        // Password gets hashed in user model.
        App\User::create([
            'name' => 'Goaty Mc Goatface',
            'email' => 'goo@baah.links',
            'password' => 'secret',
        ]);
    }
}
