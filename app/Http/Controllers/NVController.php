<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\nhanvien;
use App\luong;
use App\phongban;
use App\chucvu;
class NVController extends Controller
{
     public function getDanhSach(){
        $nhanvien = nhanvien::all();        
        return view('page.NhanVien.danhsach',['nhanvien'=>$nhanvien]);
    }
     public function getDanhSachND(){
        $nhanvien = nhanvien::all();        
        return view('page.NhanVien.danhsachnguoidung',['nhanvien'=>$nhanvien]);
    }
    public function getThem(){
        $luong = luong::all();
        $phongban = phongban::all();
        $chucvu = chucvu::all();
        return view('page.NhanVien.them',['luong' =>$luong,'phongban' =>$phongban, 'chucvu' => $chucvu]);
    }
    public function postThem(Request $request){
        
        $nhanvien = new nhanvien;

        $nhanvien->MaNhanVien = $request->MaNhanVien;
        $nhanvien->MaLuong = $request->MaLuong;
        $nhanvien->MaPB = $request->MaPB;
        $nhanvien->MaCV = $request->MaCV;
        $nhanvien->HoTen = $request->HoTen;
        $nhanvien->GioiTinh = $request->GioiTinh;
        $nhanvien->NgaySinh = $request->NgaySinh;
        $nhanvien->NoiSinh = $request->NoiSinh;
        $nhanvien->CMND = $request->CMND;
        $nhanvien->NgayCapCmnd = $request->NgayCapCmnd;
        $nhanvien->NoiCap = $request->NoiCap;
        $nhanvien->DanToc = $request->DanToc;
        $nhanvien->QuocTich = $request->QuocTich;
        $nhanvien->TTHonNhan = $request->TTHonNhan;
        $nhanvien->QueQuan = $request->QueQuan;
        $nhanvien->NoiOHienTai = $request->NoiOHienTai;
        $nhanvien->SDT = $request->SDT;
        $nhanvien->Email = $request->Email;
        $nhanvien->NgayTuyenDung = $request->NgayTuyenDung;
        $nhanvien->CoQuanTuyenDung = $request->NgayTuyenDung;
        $nhanvien->TDHocVan = $request->TDHocVan;
        $nhanvien->KinhNghiem = $request->KinhNghiem;
        $nhanvien->save();
        return redirect('nhanvien');
    }
    public function getSua(Request $request){
        $luong = luong::all();
        $phongban = phongban::all();
        $chucvu = chucvu::all();

        $nhanvien = nhanvien::where('MaNhanVien','1')->get();
        
        return view('page.NhanVien.sua',['luong' =>$luong,'phongban' =>$phongban, 'chucvu' => $chucvu,'nhanvien' =>$nhanvien]);
    }
    public function postSua(Request $request){
        
        $nhanvien = nhanvien::where('MaNhanVien',$request->MaNhanVien)->update(['MaLuong'=> $request->MaLuong,'MaPB'=> $request->MaPB,'MaCV'=> $request->MaCV,'HoTen' => $request->HoTen, 'GioiTinh' => $request->GioiTinh,'NgaySinh' => $request->NgaySinh,'NoiSinh' => $request->NoiSinh,'CMND' => $request->CMND,'NgayCapCmnd' => $request->NgayCapCmnd,'NoiCap' => $request->NoiCap,'DanToc' => $request->DanToc,'QuocTich' => $request->QuocTich,'TTHonNhan' => $request->TTHonNhan,'QueQuan' => $request->QueQuan,'NoiOHienTai' => $request->NoiOHienTai,'SDT' => $request->SDT,'Email' => $request->Email, 'NgayTuyenDung' => $request->NgayTuyenDung,'CoQuanTuyenDung' => $request->CoQuanTuyenDung,'TDHocVan' => $request->TDHocVan,'KinhNghiem' => $request->KinhNghiem
            ]);
        
        return redirect('nhanvien');
    }
    public function getXoa(Request $request){
        $nhanvien = nhanvien::where('MaNhanVien',$request->manv)->delete();
        return redirect()->back();
    }
}
