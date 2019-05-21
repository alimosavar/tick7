<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        User::truncate();
        $this->createUser1();
        $this->createUser2();
        $this->createUser3();

    }

    private function createUser1()
    {
        $user=  User::create([
            'name' => 'ali',
            'email' => 'alimosavar67@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
        $role = Role::where('id', 1)->first();
        $user->roles()->attach($role);
    }

    private function createUser2()
    {
        $user=  User::create([
            'name' => 'mehdi',
            'email' => 'mehdi@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
        $role = Role::where('id', 2)->first();
//        dd($role);
        $user->roles()->attach($role);
    }

    private function createUser3()
    {
        $user=  User::create([
            'name' => 'mehran',
            'email' => 'mehran@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
        $role = Role::where('id', 3)->first();
//        dd($role);
        $user->roles()->attach($role);
    }
}
