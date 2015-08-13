<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\UserModel;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        UserModel::query()->forceDelete();

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
                'nrp'  =>  '5114100001',
                'nama'  =>  'user1',
                'kelas'     =>  'A',
                'password' =>  Hash::make('user1')
                ));

         UserModel::create(array(
                'nrp'  =>  '5114100015',
                'nama'  =>  'user2',
                'kelas'     =>  'B',
                'password' =>  Hash::make('user2')
                ));

         UserModel::create(array(
                'nrp'  =>  '5114100091',
                'nama'  =>  'user3',
                'kelas'     =>  'C',
                'password' =>  Hash::make('user3')
                ));

         UserModel::create(array(
                'nrp'  =>  '5114100127',
                'nama'  =>  'user4',
                'kelas'     =>  'D',
                'password' =>  Hash::make('user4')
                ));

         UserModel::create(array(
                'nrp'  =>  '5114100066',
                'nama'  =>  'user5',
                'kelas'     =>  'E',
                'password' =>  Hash::make('user5')
                ));

         UserModel::create(array(
                'nrp'  =>  '5114100094',
                'nama'  =>  'user6',
                'kelas'     =>  'F',
                'password' =>  Hash::make('user6')
                ));
    }
}
