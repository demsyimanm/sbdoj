<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GroupModel extends Model
{
    use SoftDeletes;

	protected $table = 'group';
	protected $primaryKey = 'id';
	public $timestamps = true;
	public $incrementing = true;

	protected $fillable = array(
		'nama',
	);

	protected $SoftDelete = true;
	protected $dates = ['deleted_at'];

	public function user()
	{
		return $this->hasMany('App\Models\UserModel');
	}
}
