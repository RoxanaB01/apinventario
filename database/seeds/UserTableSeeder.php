<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role;
use App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

       
        Role::create([
           'name'=>'Admin',
         'slug'=>'admin',
         'special'=>'all-access',
        ]);
      $user=  User::create([
        'name' => 'jonathan',
        'email' => 'jonathanlopez3020@gmail.com',
        'password' => '$2y$10$7wRp8c9UZ49.E4pSbjlWq.c3XS/2xMMoe2wUMcyPapOHRcLSV7P1S', // password
    
         ]);
         $user->roles()->sync(1);
    }
}
