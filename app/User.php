<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
	use Notifiable;

	protected $fillable = [
		'name',
		'email',
		'password',
	];

	protected $hidden = [
        'password', 'remember_token',
    ];


	public function roles()
	{
		return $this->belongsToMany(Role::class);
	}
	public function isSuperAdmin()
	{
		// return $this->id == 1;
		return $this->isRole('Admin');
	}

	public function addRole($role)
	{
		if (is_string($role))
		{
			$role = Role::where('name', '=', $role)->firstOrFail();
		}
		if ($this->isRole($role))
		{
			return;
		}
		return $this->roles()->attach($role);
	}

	public function isRole($role)
	{
		if (is_string($role))
		{
			$role = Role::where('name', '=', $role)->firstOrFail();
		}
		return (boolean) $this->roles()->find($role->id);
	}

	public function removeRole($role)
	{
		if (is_string($role))
		{
			$role = Papel::where('name', '=', $role)->firstOrFail();
		}
		return $this->roles()->detach($role);
	}

	public function hasRole($roles)
	{
		$userRoles = $this->roles;
		return $roles->intersect($userRoles)->count();
	}
}
