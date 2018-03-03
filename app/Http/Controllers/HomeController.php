<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('page.TrangChu');
    }

    public function indexnguoidung()
    {
        return view('page.TrangChuNguoiDung');
    }
    public function trogiup()
    {
        return view('page.TroGiup');
    }
    public function tintuc()
    {
        return view('page.TinTuc');
    }
}
