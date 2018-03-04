<?php
Route::get('/','HomeController@index');
Route::get('trangchu','HomeController@index');
Route::get('home','HomeController@index');
Route::get('user','HomeController@indexnguoidung');
Route::get('trogiup','HomeController@trogiup');
Route::get('tintuc','HomeController@tintuc');
Route::get('luong','LuongController@getDanhSach');

	Route::get('chucvu', 'ChucVuController@getDanhSach');
	Route::get('themcv', 'ChucVuController@getThem');
	Route::post('themcv', 'ChucVuController@postThem');
	Route::get('suacv','ChucVuController@getSua');
	Route::post('suacv','ChucVuController@postSua');
	Route::get('xoacv','ChucVuController@getXoa');
	Route::post('timkiem', 'ChucVuController@timkiem');

	Route::get('phongban', 'PhongBanController@getDanhSach');
	Route::get('thempb', 'PhongBanController@getThem');
	Route::post('thempb', 'PhongBanController@postThem');
	Route::get('suapb','PhongBanController@getSua');
	Route::post('suapb','PhongBanController@postSua');
	Route::get('xoapb','PhongBanController@getXoa');

	Route::get('nguoidung', 'NVController@getDanhSachND');
	Route::get('nhanvien', 'NVController@getDanhSach');
	Route::get('themnv', 'NVController@getThem');
	Route::post('themnv', 'NVController@postThem');
	Route::get('suanv','NVController@getSua');
	Route::post('suanv','NVController@postSua');
	Route::get('xoanv','NVController@getXoa');

	Route::get('themhsnd', 'HoSoController@getThemND');
	Route::get('hosonguoidung', 'HoSoController@getDanhSachND');
	Route::get('tuyendung', 'HoSoController@getDanhSach');
	Route::get('themhs', 'HoSoController@getThem');
	Route::post('themhs', 'HoSoController@postThem');
	Route::get('suahs','HoSoController@getSua');
	Route::post('suahs','HoSoController@postSua');
	Route::get('xoahs','HoSoController@getXoa');



Auth::routes();