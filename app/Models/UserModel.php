<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class UserModel extends Model implements AuthenticatableContract
{
	use SoftDeletes;

	protected $table = 'users';
	protected $primaryKey = 'id';
	public $timestamps = true;
	public $incrementing = true;

	protected $fillable = array(
		'nrp',
		'nama',
		'kelas',
		'password',
	);

	protected $SoftDelete = true;
	protected $dates = ['deleted_at'];

	public function questions()
	{
		return $this->belongsToMany('App\Models\QuestionModel','submission', 'users_id', 'questions_id');
	}

	public function getAuthIdentifier()
	{
		return $this->id;
	}

	public function getAuthPassword()
	{
		return $this->password;
	}

	public function getRememberTokenName()
	{
		return 'remember_token';
	}

	public function getRememberToken()
	{
		return $this->{$this->getRememberTokenName()};
	}

	public function setRememberToken($value)
	{
		$this->{$this->getRememberTokenName()} = $value;
	}

}
