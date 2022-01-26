<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRole  = Role::where('name', 'admin')->first();
        $authorRole = Role::where('name', 'author')->first();
        $userRole   = Role::where('name', 'user')->first();

        $admin = User::create([
            'name'      => 'Admin user',
            'email'     => '',
            'username'     => 'admin',
            'password'  => Hash::make('12345678')
        ]);
        $author = User::create([
            'name'      => 'Author user',
            'email'     => 'author@author.com',
            'password'  => Hash::make('12345678')
        ]);
        $user = User::create([
            'name'      => 'Generic user',
            'email'     => 'user@user.com',
            'password'  => Hash::make('12345678')
        ]);

        $admin->roles()->attach($adminRole);
        $author->roles()->attach($authorRole);
        $user->roles()->attach($userRole);
    }
}
