<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class AdminModel extends Model implements AuthenticatableContract
{
	use SoftDeletes;

	protected $table = 'admins';
	protected $primaryKey = 'id';
	public $timestamps = true;
	public $incrementing = true;

	protected $fillable = array(
		'username',
		'password',
		'level',
		'remember_token',
	);

	protected $SoftDelete = true;
	protected $dates = ['deleted_at'];

	public function events()
	{
		return $this->hasMany('App\Models\EventModel');
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
