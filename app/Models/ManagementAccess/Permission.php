<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Permission extends Model
{
    //use HasFactory;
    use SoftDeletes;

    //deklarasi model ke tabel
    public $table = 'permission';

    //fill yang harus diisi format date
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
    public function role()
    {
        //many to many karena pivot seperti role_user
        return $this->belongsToMany('App\Models\ManagementAccess\Role');
    }

    //one to many
    public function permission_role()
    {
        return $this->hasMany('App\Models\ManagementAccess\PermissionRole', 'permission_id');
    }
}
