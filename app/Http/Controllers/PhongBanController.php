<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\phongban;

class PhongBanController extends Controller
{
    public function getDanhSach(){
    	$phongban = phongban::all();
    	return view('page.PhongBan.danhsach',['phongban' =>$phongban]);
    }
    public function getThem(){
    	return view('page.PhongBan.them');
    }
    public function postThem(Request $request){
    	$this->validate($request,
    		[
    			'TenPB' => 'required|min:2|max:100',
    			'SoNVPB' => 'required|min:1|max:3'
    		],
    		[
    			'TenPB.required' => 'Bạn chưa nhập tên phòng ban',
    			'TenPB.min' => 'Tên phòng ban phải chứa ít nhất 2 ký tự',
    			'TenPB.max' => 'Tên phòng ban phải chứa tối đa 100 ký tự',
    			'SoNVPB.required' => 'Bạn chưa nhập tên phòng ban',
    			'SoNVPB.min' => 'Tên phòng ban phải chứa ít nhất 1 ký tự',
    			'SoNVPB.max' => 'Tên phòng ban phải chứa tối đa 3 ký tự'
    		]);
    	$phongban = new phongban;

    	$phongban->MaPB = $request->MaPB;
    	$phongban->TenPB = $request->TenPB;
    	$phongban->SoNVPB = $request->SoNVPB;
    	$phongban->save();
    	return redirect('phongban')->with('thongbao','Thêm thành công');
    }
    public function getSua(Request $request){

    	$phongban = phongban::where('MaPB','=', $request->mapb)->get();
    	return view('page.PhongBan.sua',['phongban' =>$phongban[0]]);
    }
    public function postSua(Request $request){
    	$this->validate($request,
    		[
    			'TenPB' => 'required|min:2|max:100',
    			'SoNVPB' => 'required|min:1|max:3'
    		],
    		[
    			'TenPB.required' => 'Bạn chưa nhập tên Chức Vụ',
    			'TenPB.min' => 'Tên chức vụ phải chứa ít nhất 2 ký tự',
    			'TenPB.max' => 'Tên chức vụ phải chứa tối đa 100 ký tự',
    			'SoNVPB.required' => 'Bạn chưa nhập tên Chức Vụ',
    			'SoNVPB.min' => 'Tên chức vụ phải chứa ít nhất 1 ký tự',
    			'SoNVPB.max' => 'Tên chức vụ phải chứa tối đa 3 ký tự'
    		]);

    	 $phongban = phongban::where('MaPB',$request->MaPB)->update(['TenPB' => $request->TenPB, 'SoNVPB' => $request->SoNVPB]);
    	return redirect('phongban')->with('thongbao','Sửa thành công');
    }
    public function getXoa(Request $request){
    	$phongban = phongban::where('MaPB',$request->mapb)->delete();
    	return redirect()->back();
    }

} 
