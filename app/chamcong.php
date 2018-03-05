<?php

namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class chamcong extends Model
{
   protected $table = 'chamcong';
    public $timestamps = false;

    function chamcong(){
    	$chamcong = DB::select("SELECT chamcong.MaCC,nhanvien.HoTen, calamviec.VaoCa,calamviec.HetCa,calamviec.TongGio FROM calamviec,chamcong,nhanvien");
    	return $chamcong;
    }
}
 