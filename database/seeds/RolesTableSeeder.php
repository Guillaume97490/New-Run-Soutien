<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory('App\Role', 3)->create();

        $role=new Role;
        $role->nom = 'Responsable';
        $role->description = 'Administrateur du site';
        $role->save();

        $role=new Role;
        $role->nom = 'Professeur';
        $role->description = 'Animateur (ice) - Formateur (ice)';
        $role->save();

        $role=new Role;
        $role->nom = 'Particulier';
        $role->description = 'Participant (e) au programme de soutien';
        $role->save();
    }
}
