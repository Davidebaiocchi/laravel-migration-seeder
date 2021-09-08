<?php

use Illuminate\Database\Seeder;
use App\Package;

class PackagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       for($i=0; $i < 100; $i++) {
           $newPacchetto = new Package();
           $newPacchetto->destination = 'New York';
           $newPacchetto->date = '15/08/2022';
           $newPacchetto->address = 'via Augusto 6';
           $newPacchetto->postal_code = '61124';
           $newPacchetto->number_people = rand(1, 10);
           $newPacchetto->description = 'bla bla bla bla bla bla bla bla';
           $newPacchetto->price = '900';
           $newPacchetto->save();
       }
    }
}
