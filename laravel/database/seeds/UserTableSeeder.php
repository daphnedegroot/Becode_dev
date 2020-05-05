<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        $adminRole = Role::where('name', 'admin')->first();
        $userRole = Role::where('name', 'user')->first();

        $admin = User::create([
           'firstname' => 'Daphne',
           'lastname' => 'de Groot',
            'email' => 'd.degroot1986@gmail.com',
            'password' => bcrypt('admin123')
        ]);

        $user = User::create([
            'firstname' => 'Jean',
            'lastname' => 'Verhasselt',
            'email' => 'jpfverhasselt@hotmail.com',
            'password' => bcrypt('user1234')
        ]);

        $admin->roles()->attach($adminRole);
        $user->roles()->attach($userRole);

    }
}
