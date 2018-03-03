<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\chucvu;

class ChucVuController extends Controller
{
    public function getDanhSach(){
    	$chucvu = chucvu::all();
    	return view('page.ChucVu.danhsach',['chucvu' =>$chucvu]);
    }
    public function getThem(){
    	return view('page.ChucVu.them');
    }
    public function postThem(Request $request){
    	$this->validate($request,
    		[
    			'TenCV' => 'required|min:2|max:100',
    			'HeSoCV' => 'required|min:1|max:3'
    		],
    		[
    			'TenCV.required' => 'Bạn chưa nhập tên Chức Vụ',
    			'TenCV.min' => 'Tên chức vụ phải chứa ít nhất 2 ký tự',
    			'TenCV.max' => 'Tên chức vụ phải chứa tối đa 100 ký tự',
    			'HeSoCV.required' => 'Bạn chưa nhập tên Chức Vụ',
    			'HeSoCV.min' => 'Tên chức vụ phải chứa ít nhất 1 ký tự',
    			'HeSoCV.max' => 'Tên chức vụ phải chứa tối đa 3 ký tự'
    		]);
    	$chucvu = new chucvu;

    	$chucvu->MaCV = $request->MaCV;
    	$chucvu->TenCV = $request->TenCV;
    	$chucvu->HeSoCV = $request->HeSoCV;
    	$chucvu->save();
    	return redirect('chucvu')->with('thongbao','Thêm thành công');
    }
    public function getSua(Request $request){

    	$chucvu = chucvu::where('MaCV','=', $request->macv)->get();
    	return view('page.ChucVu.sua',['chucvu' =>$chucvu[0]]);
    }
    public function postSua(Request $request){
    	$this->validate($request,
    		[
    			'TenCV' => 'required|min:2|max:100',
    			'HeSoCV' => 'required|min:1|max:3'
    		],
    		[
    			'TenCV.required' => 'Bạn chưa nhập tên Chức Vụ',
    			'TenCV.min' => 'Tên chức vụ phải chứa ít nhất 2 ký tự',
    			'TenCV.max' => 'Tên chức vụ chứa tối đa 100 ký tự',
    			'HeSoCV.required' => 'Bạn chưa nhập tên Chức Vụ',
    			'HeSoCV.min' => 'Hệ số chức vụ phải chứa ít nhất 1 ký tự',
    			'HeSoCV.max' => 'Hệ số chức vụ chỉ chứa tối đa 3 ký tự'
    		]);

    	 $chucvu = chucvu::where('MaCV',$request->MaCV)->update(['TenCV' => $request->TenCV, 'HeSoCV' => $request->HeSoCV]);
    	return redirect('chucvu')->with('thongbao','Sửa thành công');
    }
    public function getXoa(Request $request){
    	$chucvu = chucvu::where('MaCV',$request->macv)->delete();
    	return redirect()->back();
    }

    public function timkiem(Request $request){
        $tukhoa = $request->tukhoa;
        $chucvu = chucvu::where('TenCV','like','%'.$tukhoa.'%')->get();
        return view('page.ChucVu.timkiem', ['chucvu'=>$chucvu,'tukhoa'=>$tukhoa]);
    }

} 
