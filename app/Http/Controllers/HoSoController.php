<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\hosotuyendung;

class HoSoController extends Controller
{
     public function getDanhSach(){
        $tuyendung = hosotuyendung::all();
        
        return view('page.HSTD.danhsach',['tuyendung' =>$tuyendung]);
    }
    public function getDanhSachND(){
        $tuyendung = hosotuyendung::all();
        
        return view('page.HSTD.danhsachnguoidung',['tuyendung' =>$tuyendung]);
    }
    public function getThem(){
        return view('page.HSTD.them');
    }
    public function getThemND(){
        return view('page.HSTD.themnguoidung');
    }
    public function postThem(Request $request){
        
        $tuyendung = new hosotuyendung;

        $tuyendung->MaHS = $request->MaHS;
        $tuyendung->HoTen = $request->HoTen;
        $tuyendung->GioiTinh = $request->GioiTinh;
        $tuyendung->NgaySinh = $request->NgaySinh;
        $tuyendung->NoiSinh = $request->NoiSinh;
        $tuyendung->CMND = $request->CMND;
        $tuyendung->NgayCapCmnd = $request->NgayCap;
        $tuyendung->NoiCap = $request->NoiCap;
        $tuyendung->DanToc = $request->DanToc;
        $tuyendung->QuocTich = $request->QuocTich;
        $tuyendung->TTHonNhan = $request->TTHonNhan;
        $tuyendung->QueQuan = $request->QueQuan;
        $tuyendung->NoiOHienTai = $request->NoiOHienTai;
        $tuyendung->SDT = $request->SDT;
        $tuyendung->Email = $request->Email;
        $tuyendung->NangKhieu = $request->NangKhieu;
        $tuyendung->SucKhoe = $request->SucKhoe;
        $tuyendung->NgayTuyenDung = $request->NgayTuyenDung;
        $tuyendung->CoQuanTuyenDung = $request->CoQuanTuyenDung;
        $tuyendung->TDHocVan = $request->TDHocVan;
        $tuyendung->KinhNghiem = $request->KinhNghiem;
        $tuyendung->save();
        return redirect('tuyendung');
    }
    public function getSua(Request $request){

        $tuyendung = hosotuyendung::where('MaHS','=', $request->mahs)->get();
        return view('page.HSTD.sua',['tuyendung' =>$tuyendung]);
    }
    public function postSua(Request $request){
        $this->validate($request,
            [
                'HoTen' => 'required|min:2|max:100'
            ],
            [
                'TenPB.required' => 'Bạn chưa nhập tên Chức Vụ',
                'TenPB.min' => 'Tên chức vụ phải chứa ít nhất 2 ký tự',
                'TenPB.max' => 'Tên chức vụ phải chứa tối đa 100 ký tự'
              ]);

         $tuyendung = hosotuyendung::where('MaHS',$request->MaHS)->update(['HoTen' => $request->HoTen, 'GioiTinh' => $request->GioiTinh,
            'NgaySinh' => $request->NgaySinh,'NoiSinh' => $request->NoiSinh,'CMND' => $request->CMND,'NgayCapCmnd' => $request->NgayCap,'NoiCap' => $request->NoiCap,'DanToc' => $request->DanToc,'QuocTich' => $request->QuocTich,'TTHonNhan' => $request->TTHonNhan,'QueQuan' => $request->QueQuan,'NoiOHienTai' => $request->NoiOHienTai,'SDT' => $request->SDT,'Email' => $request->Email, 'NangKhieu' => $request->NangKhieu,'SucKhoe' => $request->SucKhoe, 'NgayTuyenDung' => $request->NgayTuyenDung,'CoQuanTuyenDung' => $request->CoQuanTuyenDung,'TDHocVan' => $request->TDHocVan,'KinhNghiem' => $request->KinhNghiem
            ]);
        return redirect('tuyendung');
    }
    public function getXoa(Request $request){
        $tuyendung = hosotuyendung::where('MaHS',$request->mahs)->delete();
        return redirect()->back();
    }
}
