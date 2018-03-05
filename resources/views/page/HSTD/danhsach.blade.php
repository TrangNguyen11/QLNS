@extends('layout.index')

@section('content')
<div class="content-wrapper">
<section class="content">	
		<div class="row">
      <div class="col-xs-12">        	
				<div class="box box-block bg-white">
					<div>
						<h5 style="color: red; font-size: 25px">Hồ Sơ Tuyển Dụng</h5>
						<form action="#" method="get" class="form-inline">
					        <div class="input-group">
					          <input type="text" name="" class="form-control" placeholder="Search...">
					          <span class="input-group-btn">
					                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
					                </button>
					          </span>
					        </div>
					        <a type="submit" href="themhs" class="btn btn-primary">Thêm</a>
					    </form>
						
					</div>
					<div class="table-responsive">
						<table class="table table-stripped table-bordered table-hover">
							<thead>
								<tr align="center">
									<th>Mã HS</th>
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
									<th>Năng Khiếu</th>
									<th>Sức Khỏe</th>
									<th>Ngày TD</th>
									<th>Cơ quan TD</th>
									<th>TDHV</th>
									<th>Kinh Nghiệm</th>
								</tr>
							</thead>
							<tbody>
								@foreach($tuyendung as $hs)
								<tr class="odd gradeX" align="center">
									<td>{{$hs->MaHS}}</td>
									<td>{{$hs->HoTen}}</td>
									<td>{{$hs->GioiTinh}}</td>
									<td>{{$hs->NgaySinh}}</td>
									<td>{{$hs->NoiSinh}}</td>
									<td>{{$hs->CMND}}</td>
									<td>{{$hs->NgayCapCmnd}}</td>
									<td>{{$hs->NoiCap}}</td>
									<td>{{$hs->DanToc}}</td>
									<td>{{$hs->QuocTich}}</td>
									<td>{{$hs->TTHonNhan}}</td>
									<td>{{$hs->QueQuan}}</td>
									<td>{{$hs->NoiOHienTai}}</td>
									<td>{{$hs->SDT}}</td>
									<td>{{$hs->Email}}</td>
									<td>{{$hs->NangKhieu}}</td>
									<td>{{$hs->SucKhoe}}</td>
									<td>{{$hs->NgayTuyenDung}}</td>
									<td>{{$hs->CoQuanTuyenDung}}</td>
									<td>{{$hs->TDHocVan}}</td>
									<td>{{$hs->KinhNghiem}}</td>
									<td>
										<a href="suahs?mahs={{ $hs->MaHS }}" data-toggle="modal" data-whatever="@mdo"><span class="fa fa-pencil"></span></a>&nbsp;
										<a href="xoahs?mahs={{ $hs->MaHS }}"><span class="fa fa-trash"></span></a>						
									</td>
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