<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DetailUser extends Model
{
    //use HasFactory;
    use SoftDeletes;

    //deklarasi model ke tabel
    public $table = 'detail_user';

    //fill yang harus diisi format date
    protected $dates = [
        'created_at',
        'update_at',
        'deleted_at',
    ];

    //fill yang boleh diisi
    protected $fillable = [
        'user_id',
        'type_user_id',
        'contact',
        'address',
        'photo',
        'gender',
        'age',
        'created_at',
        'update_at',
        'deleted_at',
    ];

    //one to one
    public function user()
    {
        //belongsTo maksudnya user_id (fk) dimiliki oleh tabel user
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }

    public function type_user()
    {
        return $this->belongsTo('App\Models\MasterData\TypeUser', 'type_user_id', 'id');
    }
}
