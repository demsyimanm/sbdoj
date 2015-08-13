<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EventModel extends Model
{
	use SoftDeletes;

	protected $table = 'events';
	protected $primaryKey = 'id';
	public $timestamps = true;
	public $incrementing = true;

	protected $fillable = array(
		'admins_id',
		'nama',
		'konten',
		'waktu_mulai',
		'waktu_akhir',
		'kelas',
	);

	protected $SoftDelete = true;
	protected $dates = ['deleted_at'];

	public function admin()
	{
		return $this->belongsTo('App\Models\AdminModel');
	}

	public function questions()
	{
		return $this->hasMany('App\Models\QuestionModel');
	}
	
}
