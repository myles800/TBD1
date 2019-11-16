<?php

use App\Admin;
use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        User::create(['name'=>"gebruiker",'email'=>"gebruiker@hotmail.com",'password'=>Hash::make("123456")]);
        Admin::create(['name'=>"gebruiker",'email'=>"gebruiker@hotmail.com",'password'=>Hash::make("123456")]);
    }
}
