<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
	protected $fillable = [
    	'name',
    	'description'
    ];

    public function users()
    {
    	return $this->belongsToMany(User::class);
    }

    public function permissions()
    {
    	return $this->belongsToMany(Permission::class);
    }

    public function addPermission($permission)
    {
        if (is_string($permission))
        {
            $permission = Permission::where('nome','=',$permission)->firstOrFail();
        }
        if ($this->isPermission($permission))
        {
            return;
        }
        return $this->permissions()->attach($permission);
    }

    public function isPermission($permission)
    {
        if (is_string($permission))
        {
            $permission = Permission::where('nome', '=', $permission)->firstOrFail();
        }
        return (boolean) $this->permissions()->find($permission->id);
    }

    public function removePermission($permission)
    {
        if (is_string($permission))
        {
            $permission = Permission::where('nome', '=', $permission)->firstOrFail();
        }
        return $this->permissions()->detach($permission);
    }
}
