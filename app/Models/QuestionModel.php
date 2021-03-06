<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class QuestionModel extends Model
{
	use SoftDeletes;

	protected $table = 'question';
	protected $primaryKey = 'id';
	public $timestamps = true;
	public $incrementing = true;

	protected $fillable = array(
		'event_id',
		'judul',
		'konten',
		'jawaban'
		'waktu',
	);

	protected $SoftDelete = true;
	protected $dates = ['deleted_at'];

	public function event()
	{
		return $this->belongsTo('App\Models\EventModel');
	}

	public function submission()
	{
		return $this->hasMany('App\Models\SubmissionModel');
	}

	
}
