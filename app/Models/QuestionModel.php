<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class QuestionModel extends Model
{
	use SoftDeletes;

	protected $table = 'questions';
	protected $primaryKey = 'id';
	public $timestamps = true;
	public $incrementing = true;

	protected $fillable = array(
		'events_id',
		'konten',
		'jawaban',
		'waktu',
	);

	protected $SoftDelete = true;
	protected $dates = ['deleted_at'];

	public function event()
	{
		return $this->belongsTo('App\Models\EventAdmin');
	}

	public function users()
	{
		return $this->belongsToMany('App\Models\UserModel','submissions', 'questions_id', 'users_id');
	}

	
}
