<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\AdminModel;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        AdminModel::query()->forceDelete();

        /*for($i=1;$i<=6;$i++)
        {
            User::create(array(
                'username'  =>  ''.$i,
                'name'      =>  'user'.$i,
                'password'  =>  Hash::make('user'.$i),
                'email'     =>  'user'.$i.'@sembarang.com'
                ));
        }*/

        AdminModel::create(array(
                'username'  =>  'superadmin',
                'password'  =>  Hash::make('superadmin'),
                'level'     =>  'super'
                ));

        AdminModel::create(array(
                'username'  =>  'aspraka',
                'password'  =>  Hash::make('aspraka'),
                'level'     =>  'admin'
                ));

        AdminModel::create(array(
                'username'  =>  'asprakb',
                'password'  =>  Hash::make('asprakb'),
                'level'     =>  'admin'
                ));

        AdminModel::create(array(
                'username'  =>  'asprakc',
                'password'  =>  Hash::make('asprakc'),
                'level'     =>  'admin'
                ));

        AdminModel::create(array(
                'username'  =>  'asprakd',
                'password'  =>  Hash::make('asprakd'),
                'level'     =>  'admin'
                ));

        AdminModel::create(array(
                'username'  =>  'asprake',
                'password'  =>  Hash::make('asprake'),
                'level'     =>  'admin'
                ));

        AdminModel::create(array(
                'username'  =>  'asprakf',
                'password'  =>  Hash::make('asprakf'),
                'level'     =>  'admin'
                ));
    }
}
