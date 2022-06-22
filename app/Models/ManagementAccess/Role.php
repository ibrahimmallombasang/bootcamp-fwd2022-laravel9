<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    //use HasFactory;
    use SoftDeletes;

    public $table = 'role';

    protected $dates = [
        'created_at',
        'update_at',
        'deleted_at',
    ];

    protected $fillable = [
        'title',
        'created_at',
        'update_at',
        'deleted_at',
    ];

    //many to many
    public function user()
    {
        //bisa juga: App/Models/User
        return $this->belongsToMany(User::class);
    }

    //many to many
    public function permission()
    {
        return $this->belongsToMany('App\Models\ManagementAccess\Permission');
    }

    //one to many 
    public function role_user()
    {
        return $this->hasMany('App\Models\ManagementAccess\RoleUser', 'role_id');
    }

    //one to many 
    public function permission_role()
    {
        return $this->hasMany('App\Models\ManagementAccess\PermissionRole', 'role_id');
    }
}
