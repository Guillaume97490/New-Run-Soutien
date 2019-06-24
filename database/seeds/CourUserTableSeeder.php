<?php

use Illuminate\Database\Seeder;
// use App\CourUser;
use App\Cour;
use App\User;
use DB;
class CourUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //  DB::table('cour_user')->insert(array(
        //     array('user_id' => '4', 'cour_id' => '1', 'date' => '2019/06/25', 'start_time' => '08:00:00', 'end_time' => '09:00:00'),
        //     array('user_id' => '6', 'cour_id' => '1', 'date' => '2019/06/25', 'start_time' => '08:00:00', 'end_time' => '09:00:00'),


        // ));
        $nb_product = 10;

    $i = 0;

    while ($i < $nb_product) :

        $liste = [
            [
            'user_id' => rand(6,20),
            'cour_id' => rand(1,6),
            'date' => '2019/06/25',
            'start_time' => '08:00:00',
            'end_time' => '09:00:00',

            ]
        ];

        DB::table('cour_user')->insert($liste);

        $i++;

    endwhile;
    }
}
