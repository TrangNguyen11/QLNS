<?php

namespace App;
use Illuminate\Support\Facades\DB;

class luong 
{
    public $timestamps = false;
    function xuatluong(){
    	$luong = DB::select("SELECT nhanvien.MaLuong,nhanvien.HoTen,ROUND(luong.LuongCoBan/26 *chamcong.TongNgayCong,-3) as 'TongLuong',chamcong.Thang, chamcong.Nam FROM luong,chamcong,nhanvien WHERE luong.MaCC= chamcong.MaCC AND nhanvien.MaNhanVien = chamcong.MaNhanVien");
    	return $luong;
    }
}
