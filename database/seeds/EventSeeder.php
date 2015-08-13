<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\EventModel;
use App\Models\AdminModel;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        EventModel::query()->forceDelete();
        $admin = AdminModel::get();
        /*for($i=1;$i<=6;$i++)
        {
            User::create(array(
                'username'  =>  ''.$i,
                'name'      =>  'user'.$i,
                'password'  =>  Hash::make('user'.$i),
                'email'     =>  'user'.$i.'@sembarang.com'
                ));
        }*/

       

         EventModel::create(array(
                'admins_id' => '2',
                'nama'  =>  'Praktikum Kelas A',
                'konten'  =>  'ini konten 1',
                'waktu_mulai'     =>  strtotime('2015-01-01 19:00:00'),
                'waktu_akhir' =>  strtotime('2015-01-01 21:00:00'),
                'kelas' => 'A'
                ));

         EventModel::create(array(
                'admins_id' => '3',
                'nama'  =>  'Praktikum Kelas B',
                'konten'  =>  'ini konten 2',
                'waktu_mulai'     =>  strtotime('2015-01-02 19:00:00'),
                'waktu_akhir' =>  strtotime('2015-01-02 21:00:00'),
                'kelas' => 'B'
                ));

         EventModel::create(array(
                'admins_id' => '4',
                'nama'  =>  'Praktikum Kelas C',
                'konten'  =>  'ini konten 3',
                'waktu_mulai'     =>  strtotime('2015-01-03 19:00:00'),
                'waktu_akhir' =>  strtotime('2015-01-03 21:00:00'),
                'kelas' => 'A'
                ));

         EventModel::create(array(
                'admins_id' => '5',
                'nama'  =>  'Praktikum Kelas D',
                'konten'  =>  'ini konten 4',
                'waktu_mulai'     =>  strtotime('2015-01-04 19:00:00'),
                'waktu_akhir' =>  strtotime('2015-01-04 21:00:00'),
                'kelas' => 'A'
                ));

         EventModel::create(array(
                'admins_id' => '6',
                'nama'  =>  'Praktikum Kelas E',
                'konten'  =>  'ini konten 5',
                'waktu_mulai'     =>  strtotime('2015-01-05 19:00:00'),
                'waktu_akhir' =>  strtotime('2015-01-05 21:00:00'),
                'kelas' => 'A'
                ));

         EventModel::create(array(
                'admins_id' => '7', 
                'nama'  =>  'Praktikum Kelas F',
                'konten'  =>  'ini konten 6',
                'waktu_mulai'     =>  strtotime('2015-01-06 19:00:00'),
                'waktu_akhir' =>  strtotime('2015-01-06 21:00:00'),
                'kelas' => 'A'
                ));
    }
}
