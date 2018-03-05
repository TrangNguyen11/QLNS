@extends('layout.indexnguoidung');

@section('content')
<div class="content-wrapper">
<section class="content-fluid">
	
		<div class="row">
      <div class="col-xs-12">        	
				<div class="box box-block bg-white">
					<div>
						<h5 style="color: red; font-size: 25px">Danh sách nhân viên</h5>
					</div>
					<div class="table-responsive">
						<table class="table table-stripped table-bordered table-hover">
							<thead>
								<tr align="center">
									<th>Mã NV</th>
									<th>Mã Lương</th>
									<th>Mã PB</th>
									<th>Mã CV</th>
									<th>Họ Tên</th>
									<th>Giới Tính</th>
									<th>Ngày Sinh</th>
									<th>Nơi Sinh</th>
									<th>CMND</th>
									<th>Ngày Cấp</th>
									<th>Nơi Cấp</th>
									<th>Dân Tộc</th>
									<th>Quốc Tịch</th>
									<th>TT Hôn Nhân</th>
									<th>Quê Quán</th>
									<th>Nơi Ở HT</th>
									<th>SDT</th>
									<th>Email</th>
									<th>Ngày TD</th>
									<th>Cơ quan TD</th>
									<th>TDHV</th>
									<th>Kinh Nghiệm</th>
								</tr>
							</thead>
							<tbody>
								@foreach($nhanvien as $nv)
								<tr class="odd gradeX" align="center">
									<td>{{$nv->MaNhanVien}}</td>
									<td>{{$nv->MaLuong}}</td>
									<td>{{$nv->MaPB}}</td>
									<td>{{$nv->MaCV}}</td>						
									<td>{{$nv->HoTen}}</td>
									<td>{{$nv->GioiTinh}}</td>
									<td>{{$nv->NgaySinh}}</td>
									<td>{{$nv->NoiSinh}}</td>
									<td>{{$nv->CMND}}</td>
									<td>{{$nv->NgayCapCmnd}}</td>
									<td>{{$nv->NoiCap}}</td>
									<td>{{$nv->DanToc}}</td>
									<td>{{$nv->QuocTich}}</td>
									<td>{{$nv->TTHonNhan}}</td>
									<td>{{$nv->QueQuan}}</td>
									<td>{{$nv->NoiOHienTai}}</td>
									<td>{{$nv->SDT}}</td>
									<td>{{$nv->Email}}</td>
									<td>{{$nv->NgayTuyenDung}}</td>
									<td>{{$nv->CoQuanTuyenDung}}</td>
									<td>{{$nv->TDHocVan}}</td>
									<td>{{$nv->KinhNghiem}}</td>
									
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>		
				</div>
			</div>
		</div>

</section>
</div>
@endsection