<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\nhanvien;
use App\luong;
use App\chamcong;
class LuongController extends Controller
{
     public function getDanhSach(){  
        $banluong = new luong();
        $luong = $banluong->xuatluong();
        return view('page.luong',['luong'=>$luong]);
    }

}
