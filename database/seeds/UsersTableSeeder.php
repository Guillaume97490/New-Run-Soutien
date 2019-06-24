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
        $user=new User;
        $user->roles_id = '1';
        $user->nom = 'DENIS';
        $user->prenom = 'Paule';
        $user->phone = '06 92 14.32.65';
        $user->email = 'dp@gmail.com';
        $user->password = bcrypt('password');
        $user->save();

        $user=new User;
        $user->roles_id = '1';
        $user->nom = 'DENIS';
        $user->prenom = 'Victor';
        $user->phone = '06 92 14.32.66';
        $user->email = 'dv@gmail.com';
        $user->password = bcrypt('password');

        $user->save();

        $user=new User;
        $user->roles_id = '2';
        $user->nom = 'DURAND';
        $user->prenom = 'Joseph';
        $user->phone = '06 92 45.38.36';
        $user->email = 'dj@gmail.com';
        $user->password = bcrypt('password');

        $user->save();

        $user=new User;
        $user->roles_id = '2';
        $user->nom = 'PETER';
        $user->prenom = 'Sophie';
        $user->phone = '06 93 14.35.69';
        $user->email = 'ps@gmail.com';
        $user->password = bcrypt('password');

        $user->save();

        $user=new User;
        $user->roles_id = '2';
        $user->nom = 'BAUDOIN';
        $user->prenom = 'Pierre';
        $user->phone = '06 93 59.32.70';
        $user->email = 'bp@gmail.com';
        $user->password = bcrypt('password');

        $user->save();

        $user=new User;
        $user->roles_id = '3';
        $user->nom = 'SIMON';
        $user->prenom = 'Elodie';
        $user->phone = '06 92 59.61.89';
        $user->email = 'se@gmail.com';
        $user->password = bcrypt('password');

        $user->save();

        $user=new User;
        $user->roles_id = '3';
        $user->nom = 'SMITH';
        $user->prenom = 'David';
        $user->phone = '06 93 12.26.37';
        $user->email = 'sd@gmail.com';
        $user->password = bcrypt('password');

        $user->save();

        $user=new User;
        $user->roles_id = '3';
        $user->nom = 'BLONDIN';
        $user->prenom = 'Arthur';
        $user->phone = '06 92 59.21.93';
        $user->email = 'ba@gmail.com';
        $user->password = bcrypt('password');

        $user->save();

        $user=new User;
        $user->roles_id = '3';
        $user->nom = 'CRUCHAU';
        $user->prenom = 'Daniel';
        $user->phone = '06 92 16.37.46';
        $user->email = 'cd@gmail.com';
        $user->password = bcrypt('password');

        $user->save();

        $user=new User;
        $user->roles_id = '3';
        $user->nom = 'RENAUD';
        $user->prenom = 'Emilie';
        $user->phone = '06 92 22.75.95';
        $user->email = 're@gmail.com';
        $user->password = bcrypt('password');

        $user->save();

        $user=new User;
        $user->roles_id = '3';
        $user->nom = 'PASCAL';
        $user->prenom = 'Loic';
        $user->phone = '06 92 70.22.12';
        $user->email = 'pl@gmail.com';
        $user->password = bcrypt('password');

        $user->save();

        $user=new User;
        $user->roles_id = '3';
        $user->nom = 'LOADEC';
        $user->prenom = 'Tina';
        $user->phone = '06 92 64.72.67';
        $user->email = 'lt@gmail.com';
        $user->password = bcrypt('password');

        $user->save();

        $user=new User;
        $user->roles_id = '3';
        $user->nom = 'FOURMOND';
        $user->prenom = 'Jeanne';
        $user->phone = '06 93 22.98.54';
        $user->email = 'fj@gmail.com';
        $user->password = bcrypt('password');

        $user->save();

        $user=new User;
        $user->roles_id = '3';
        $user->nom = 'SCHULTZ';
        $user->prenom = 'Germain';
        $user->phone = '06 92 44.13.74';
        $user->email = 'sg@gmail.com';
        $user->password = bcrypt('password');

        $user->save();

        $user=new User;
        $user->roles_id = '3';
        $user->nom = 'CHAN';
        $user->prenom = 'Lee';
        $user->phone = '06 92 52.80.33';
        $user->email = 'cl@gmail.com';
        $user->password = bcrypt('password');

        $user->save();

        $user=new User;
        $user->roles_id = '3';
        $user->nom = 'LOPEZ';
        $user->prenom = 'Claire';
        $user->phone = '06 92 75.16.41';
        $user->email = 'lc@gmail.com';
        $user->password = bcrypt('password');

        $user->save();

        $user=new User;
        $user->roles_id = '3';
        $user->nom = 'LUPIN';
        $user->prenom = 'Gustave';
        $user->phone = '06 92 85.25.17';
        $user->email = 'lg@gmail.com';
        $user->password = bcrypt('password');

        $user->save();

        $user=new User;
        $user->roles_id = '3';
        $user->nom = 'MARCELLO';
        $user->prenom = 'Marie';
        $user->phone = '06 92 64.72.67';
        $user->email = 'mm@gmail.com';
        $user->password = bcrypt('password');

        $user->save();

        $user=new User;
        $user->roles_id = '3';
        $user->nom = 'McLIFE';
        $user->prenom = 'John';
        $user->phone = '06 92 88.57.37';
        $user->email = 'mj@gmail.com';
        $user->password = bcrypt('password');

        $user->save();

       $user=new User;
        $user->roles_id = '3';
        $user->nom = 'TRAORE';
        $user->prenom = 'Sylvie';
        $user->phone = '06 92 56.78.11';
        $user->email = 'ts@gmail.com';
        $user->password = bcrypt('password');

        $user->save();
    }
}
