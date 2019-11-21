<?php

use App\Admin;
use App\Game;
use App\Sponser;
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

        Game::create(['name'=>'default', 'photo'=>'EhackB.png','date'=>'2019/03/03','location'=>'beersel']);
        User::create(['name'=>"gebruiker",'game_id'=>1,'email'=>"gebruiker@hotmail.com",'password'=>Hash::make("123456")]);
        Admin::create(['name'=>"gebruiker",'email'=>"gebruiker@hotmail.com",'password'=>Hash::make("123456")]);
        Sponser::create(['name'=>"Accenture",'photo'=>"accenture.png",'tier'=>"tier3"]);
        Sponser::create(['name'=>"Axxes",'photo'=>"axxes.png",'tier'=>"tier2"]);
        Sponser::create(['name'=>"Metketting",'photo'=>"alliantie-metketting transparant.png",'tier'=>"tier3"]);
        Sponser::create(['name'=>"Belnet",'photo'=>"Belnet.jpg",'tier'=>"tier1"]);
        Sponser::create(['name'=>"Biasc",'photo'=>"BIASC.png",'tier'=>"tier2"]);
        Sponser::create(['name'=>"Cisco",'photo'=>"cisco_logo_large.png",'tier'=>"tier1"]);
        Sponser::create(['name'=>"Cisco",'photo'=>"cisco_meraki.jpg",'tier'=>"tier1"]);
        Sponser::create(['name'=>"Delaware",'photo'=>"Delaware.jpg",'tier'=>"tier2"]);
        Sponser::create(['name'=>"ehb",'photo'=>"ehb-logo.jpg",'tier'=>"tier3"]);
        Sponser::create(['name'=>"HOGENT",'photo'=>"HOGENT_Logo_Pos_rgb.jpg",'tier'=>"tier1"]);
        Sponser::create(['name'=>"LENOVO",'photo'=>"lenovo.png",'tier'=>"tier2"]);
    }
}
