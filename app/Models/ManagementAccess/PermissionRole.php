<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PermissionRole extends Model
{
    //use HasFactory;
    use SoftDeletes;

    public $table = 'permission_role';

    protected $dates = [
        'created_at',
        'update_at',
        'deleted_at',
    ];

    protected $fillable = [
        'permission_id',
        'role_id',
        'created_at',
        'update_at',
        'deleted_at',
    ];

    //many to one
    public function role()
    {
        //ket: ('dir', 'fk', 'pk') jika dia kolom bersifat fk
        return $this->belongsTo('App\Models\ManagementAccess\Role', 'role_id', 'id');
    }

    //many to one
    public function permission()
    {
        return $this->belongsTo('App\Models\ManagementAccess\Permission', 'permission_id', 'id');
    }
}
