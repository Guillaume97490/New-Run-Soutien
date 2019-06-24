<?php

use Illuminate\Database\Seeder;
use App\Session;
use App\Cour;
use App\User;
class SessionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $session=new Session;
        $session ->users_id = '4';
        $session ->cour_id = '1';
        $session ->date = '2019/06/25';
        $session ->start_time = '08:00:00';
        $session ->end_time = '09:00:00';
        // $session ->place_restante = '15';
        $session ->save();

        $session=new Session;
        $session ->users_id = '6';
        $session ->cour_id = '1';
        $session ->date = '2019/06/25';
        $session ->start_time = '08:00:00';
        $session ->end_time = '09:00:00';
        // $session ->place_restante = '15';
        $session ->save();

        $session=new Session;
        $session ->users_id = '3';
        $session ->cour_id = '5';
        $session ->date = '2019/06/24';
        $session ->start_time = '08:00:00';
        $session ->end_time = '09:00:00';
        // $session ->place_restante = '15';
        $session ->save();

        $session=new Session;
        $session ->users_id = '7';
        $session ->cour_id = '5';
        $session ->date = '2019/06/24';
        $session ->start_time = '08:00:00';
        $session ->end_time = '09:00:00';
        // $session ->place_restante = '15';
        $session ->save();

        $session=new Session;
        $session ->users_id = '8';
        $session ->cour_id = '5';
        $session ->date = '2019/06/24';
        $session ->start_time = '08:00:00';
        $session ->end_time = '09:00:00';
        // // $session ->place_restante = '14';
        $session ->save();

        $session=new Session;
        $session ->users_id = '5';
        $session ->cour_id = '3';
        $session ->date = '2019/06/27';
        $session ->start_time = '08:00:00';
        $session ->end_time = '09:00:00';
        // $session ->place_restante = '15';
        $session ->save();

        $session=new Session;
        $session ->users_id = '9';
        $session ->cour_id = '3';
        $session ->date = '2019/06/27';
        $session ->start_time = '08:00:00';
        $session ->end_time = '09:00:00';
        // $session ->place_restante = '15';
        $session ->save();

        $session=new Session;
        $session ->users_id = '10';
        $session ->cour_id = '1';
        $session ->date = '2019/06/25';
        $session ->start_time = '08:00:00';
        $session ->end_time = '09:00:00';
        // $session ->place_restante = '14';
        $session ->save();

        $session=new Session;
        $session ->users_id = '11';
        $session ->cour_id = '3';
        $session ->date = '2019/06/27';
        $session ->start_time = '08:00:00';
        $session ->end_time = '09:00:00';
        // $session ->place_restante = '14';
        $session ->save();

        $session=new Session;
        $session ->users_id = '12';
        $session ->cour_id = '5';
        $session ->date = '2019/06/24';
        $session ->start_time = '08:00:00';
        $session ->end_time = '09:00:00';
        // $session ->place_restante = '13';
        $session ->save();

        $session=new Session;
        $session ->users_id = '13';
        $session ->cour_id = '1';
        $session ->date = '2019/06/25';
        $session ->start_time = '08:00:00';
        $session ->end_time = '09:00:00';
        // $session ->place_restante = '13';
        $session ->save();

        $session=new Session;
        $session ->users_id = '5';
        $session ->cour_id = '4';
        $session ->date = '2019/06/24';
        $session ->start_time = '08:00:00';
        $session ->end_time = '09:00:00';
        // $session ->place_restante = '15';
        $session ->save();

        $session=new Session;
        $session ->users_id = '14';
        $session ->cour_id = '4';
        $session ->date = '2019/06/24';
        $session ->start_time = '08:00:00';
        $session ->end_time = '09:00:00';
        // $session ->place_restante = '15';
        $session ->save();

        $session=new Session;
        $session ->users_id = '15';
        $session ->cour_id = '3';
        $session ->date = '2019/06/27';
        $session ->start_time = '08:00:00';
        $session ->end_time = '09:00:00';
        // $session ->place_restante = '13';
        $session ->save();

        $session=new Session;
        $session ->users_id = '16';
        $session ->cour_id = '1';
        $session ->date = '2019/06/25';
        $session ->start_time = '08:00:00';
        $session ->end_time = '09:00:00';
        // $session ->place_restante = '12';
        $session ->save();

        $session=new Session;
        $session ->users_id = '17';
        $session ->cour_id = '4';
        $session ->date = '2019/06/24';
        $session ->start_time = '08:00:00';
        $session ->end_time = '09:00:00';
        // $session ->place_restante = '14';
        $session ->save();

        $session=new Session;
        $session ->users_id = '18';
        $session ->cour_id = '3';
        $session ->date = '2019/06/27';
        $session ->start_time = '08:00:00';
        $session ->end_time = '09:00:00';
        // $session ->place_restante = '12';
        $session ->save();

        $session=new Session;
        $session ->users_id = '3';
        $session ->cour_id = '6';
        $session ->date = '2019/06/27';
        $session ->start_time = '08:00:00';
        $session ->end_time = '09:00:00';
        // $session ->place_restante = '15';
        $session ->save();

        $session=new Session;
        $session ->users_id = '19';
        $session ->cour_id = '6';
        $session ->date = '2019/06/27';
        $session ->start_time = '08:00:00';
        $session ->end_time = '09:00:00';
        // $session ->place_restante = '15';
        $session ->save();

        $session=new Session;
        $session ->users_id = '20';
        $session ->cour_id = '6';
        $session ->date = '2019/06/27';
        $session ->start_time = '08:00:00';
        $session ->end_time = '09:00:00';
        // $session ->place_restante = '14';
        $session ->save();
    }
}
