<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        GroupModel::query()->forceDelete();

        GroupModel::create(array(
                ['nama'  =>  'ADMIN'],
                ['nama'  =>  'ASPRAK'],
                ['nama'  =>  'USER'],
                ));

        /*for($i=1;$i<=6;$i++)
        {
            User::create(array(
                'username'  =>  ''.$i,
                'name'      =>  'user'.$i,
                'password'  =>  Hash::make('user'.$i),
                'email'     =>  'user'.$i.'@sembarang.com'
                ));
        }*/

        UserModel::create(array(
                'nrp'  =>  '5113100091',
                'nama'  =>  'bilfash',
                'kelas'     =>  'X',
                'password' =>  Hash::make('password'),
                'group_id' => '1'
                ));

        UserModel::create(array(
                'nrp'  =>  '5113100015',
                'nama'  =>  'demsy',
                'kelas'     =>  'X',
                'password' =>  Hash::make('password'),
                'group_id' => '1'
                ));

        UserModel::create(array(
                'nrp'  =>  '5199100991',
                'nama'  =>  'asprakA',
                'kelas'     =>  'A',
                'password' =>  Hash::make('password'),
                'group_id' => '2'
                ));

        UserModel::create(array(
                'nrp'  =>  '5199100992',
                'nama'  =>  'asprakB',
                'kelas'     =>  'B',
                'password' =>  Hash::make('password'),
                'group_id' => '2'
                ));

        UserModel::create(array(
                'nrp'  =>  '5199100993',
                'nama'  =>  'asprakC',
                'kelas'     =>  'C',
                'password' =>  Hash::make('password'),
                'group_id' => '2'
                ));

        UserModel::create(array(
                'nrp'  =>  '5199100994',
                'nama'  =>  'asprakD',
                'kelas'     =>  'D',
                'password' =>  Hash::make('password'),
                'group_id' => '2'
                ));

        UserModel::create(array(
                'nrp'  =>  '5199100995',
                'nama'  =>  'asprakE',
                'kelas'     =>  'E',
                'password' =>  Hash::make('password'),
                'group_id' => '2'
                ));

        UserModel::create(array(
                'nrp'  =>  '5114100001',
                'nama'  =>  'user1',
                'kelas'     =>  'A',
                'password' =>  Hash::make('password'),
                'group_id' => '3'
                ));

        UserModel::create(array(
                'nrp'  =>  '5114100002',
                'nama'  =>  'user2',
                'kelas'     =>  'B',
                'password' =>  Hash::make('password'),
                'group_id' => '3'
                ));

        UserModel::create(array(
                'nrp'  =>  '5114100003',
                'nama'  =>  'user3',
                'kelas'     =>  'C',
                'password' =>  Hash::make('password'),
                'group_id' => '3'
                ));
    }
    }
}
