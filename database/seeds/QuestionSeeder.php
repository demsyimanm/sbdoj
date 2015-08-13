<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\EventModel;
use App\Models\QuestionModel;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        QuestionModel::query()->forceDelete();
        $event = EventModel::get();
        for($i=1;$i<=6;$i++)
        {
            $day = strtotime('+'.$i.'day');
             QuestionModel::create(array(
                'events_id'  =>  $i,
                'konten'  =>  'ini konten '.$i,
                'jawaban'     =>  'ini jawaban '.$i,
                'waktu' =>  date('Y-m-d',$day)
                ));

        }
         
    }
}
