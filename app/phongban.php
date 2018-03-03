<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class phongban extends Model
{
    protected $table = "phongban";
    protected $primaryKey = 'MaPB';
 	public $timestamps = false;
	public function nhanvien(){
		return $this->hasMany('App\nhanvien','nhanvienmapb','MaNhanVien');
	}
}
