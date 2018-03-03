<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nhanvien extends Model
{
    protected $table ='nhanvien';
 
	protected $primaryKey = 'MaNhanVien';
	 
	public $timestamps = false;
	 
	public function phongban(){
		return $this->belongsTo('App\phongban','nhanvienmapb','MaPB');
	}
	

}
