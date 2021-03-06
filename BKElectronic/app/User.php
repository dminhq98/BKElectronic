<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    protected $table = "users";
    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function hocsinh(){
        return $this->hasOne('App\HocSinh','id_taikhoan','id');
    }
//    public function giaovien(){
//        return $this->belongsTo('App\GiaoVien','id_taikhoan','id');
//    }
//    public function vanthu(){
//        return $this->belongsTo('App\VanThu','id_taikhoan','id');
//    }
}
