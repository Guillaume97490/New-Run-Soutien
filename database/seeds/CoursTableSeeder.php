<?php

use Illuminate\Database\Seeder;
use App\Cour;
use App\User;

class CoursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cour=new cour;
        $cour->prof_id = '4';
        $cour->titre = 'Francais';
        $cour->description = 'Grammaire';
        $cour->prix = '20';
        $cour->place_totale = '16';
        $cour->save();

        $cour=new cour;
        $cour->prof_id = '4';
        $cour->titre = 'Francais';
        $cour->description = 'Rédaction';
        $cour->prix = '10';
        $cour->place_totale = '16';
        $cour->save();

        $cour=new cour;
        $cour->prof_id = '5';
        $cour->titre = 'Anglais';
        $cour->description = 'Orale';
        $cour->prix = '30';
        $cour->place_totale = '16';
        $cour->save();

        $cour=new cour;
        $cour->prof_id = '5';
        $cour->titre = 'Anglais';
        $cour->description = 'Technique';
        $cour->prix = '30';
        $cour->place_totale = '16';
        $cour->save();

        $cour=new cour;
        $cour->prof_id = '3';
        $cour->titre = 'Mathematique';
        $cour->description = 'Arithmétique';
        $cour->prix = '30';
        $cour->place_totale = '16';
        $cour->save();

        $cour=new cour;
        $cour->prof_id = '3';
        $cour->titre = 'Mathematique';
        $cour->description = 'Géométrie';
        $cour->prix = '30';
        $cour->place_totale = '16';
        $cour->save();
    }
}
