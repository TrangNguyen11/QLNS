<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\nhanvien;
use App\calamviec;
use App\chamcong;

class chamcongcontroller extends Controller
{
	public function getDanhSach(){  
        $ban = new chamcong();
        $chamcong = $ban->chamcong();
        return view('page.ChamCong.chamcong',['chamcong'=>$chamcong]);
    }
    public function getThem(){
    	$calam = calamviec::all();
    	return view('page.ChamCong.them', ['calam' =>$calam]);
    }
    public function tongNgay(Request $request){
    	print_r(count($request->ngay));
    }

}  
