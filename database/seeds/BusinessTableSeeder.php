<?php

use Illuminate\Database\Seeder;
use App\Business;
class BusinessTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Business::create([
            'name'=>'Libreria y novedades 3 hermanos',
            'description'=>'vente libros',
             'logo'=>'logo_inventario.jpeg',
             'email'=>'lbreria@gmail.com',
             'address'=>'en dauelw',
             'ruc'=>'094029390232',
         ]);
    }
}
