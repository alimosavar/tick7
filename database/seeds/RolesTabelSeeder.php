<?php

use App\Role;
use Illuminate\Database\Seeder;

class RolesTabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

            Role::truncate();

        $roles = [
            'مدیر' ,
            'نویسنده' ,
            'کاربر عادی'
        ];

        foreach($roles as $role) {
            Role::create([
                'title' => $role ,
            ]);
        }
    }
}
