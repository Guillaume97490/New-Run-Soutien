<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
// use Faker\Generator as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('fr_FR');

    // 2 Responssables

    $i = 0;

    while ($i < 2) :

        $user=new User;
        $user->role_id = '1';
        $user->nom = 'DENIS';
        $user->prenom = $i < 1 ? 'Paul' : 'Victor';
        $user->phone = $i < 1 ? '06 92 14.32.66' : '06 92 64.52.36';
        $user->email = $i < 1 ? 'dp@gmail.com' : 'dv@gmail.com';
        $user->password = bcrypt('password');
        $user->save();

    $i++;

    endwhile;



    // 3 Professeurs et 15 Particuliers

    $i = 0;

    while ($i < 18) :

        $lastName = $faker->lastName;
        $firstName = $faker->firstName;
        $email = strtolower(mb_substr($lastName, 0, 1, "UTF-8") . // en minuscule et premiere lettre
                    mb_substr($firstName, 0, 1, "UTF-8") .
                    rand(1,999) . '@gmail.com');

        $user=new User;
        $user->role_id = $i < 3 ? '2' : '3';
        $user->nom = strtoupper($lastName);
        $user->prenom = $firstName;
        $user->phone = '06 92 ' . sprintf("%02d", rand(00,99)) // nombres à 2 chiffres (1 => 01)
                            .'.'. sprintf("%02d", rand(00,99))
                            .'.'. sprintf("%02d", rand(00,99));
        $user->email = $email;
        $user->password = bcrypt('password');
        $user->save();

    $i++;

    endwhile;

    }
}
