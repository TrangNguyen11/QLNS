@extends('layout.index')
@section('content')
<div class="content-wrapper">
<section class="content">
	<div class="container">
		<div class="col-md-12 ">
			<div class="row"> 
				<form class="form-horizontal" action="suahs" method="post">
					{{ csrf_field() }}
					<legend style="color: red; font-size: 25px">Sửa Hồ Sơ Tuyển Dụng</legend>	
					<div class="form-group col-md-6">
						<label class="col-xs-4 control-label">Mã Hồ Sơ</label>
						<div class="col-xs-5 selectContainer">
						<input class="form-control" value="{{$tuyendung[0]->MaHS}}" name="MaHS" readonly />
						</div>
					</div>								
					<div class="form-group col-md-6">
						<label class="col-xs-4 control-label">Họ Tên</label>
				        <div class="col-xs-5">
				            <input type="text" class="form-control" name="HoTen" value="{{$tuyendung[0]->HoTen}}" />
				        </div>
					</div>
					
					<div class="form-group col-md-6">
						<label class="col-xs-4 control-label">Ngày Sinh</label>
				        <div class="col-xs-5 ">
				            <input type="date" class="form-control" name="NgaySinh" value="{{$tuyendung[0]->NgaySinh}}" />
				        </div>
					</div>
						<div class="form-group col-md-6">
						<label class="col-xs-4 control-label">Giới Tính</label>
				        <div class="col-xs-5">
								<input name='GioiTinh' checked="{{$tuyendung[0]->GioiTinh}}" type='radio' value='Nam'/>Nam
								<input name='GioiTinh' checked="{{$tuyendung[0]->GioiTinh}}" type='radio' value='Nữ'/>Nữ
				         </div>
					</div>
					<div class="form-group col-md-6">
						<label class="col-xs-4 control-label">Nơi Sinh</label>
				        <div class="col-xs-5">
				            <input type="text" class="form-control" name="NoiSinh"  value="{{$tuyendung[0]->NoiSinh}}" />
				        </div>
					</div>
					<div class="form-group col-md-6">
						<label class="col-xs-4 control-label">CMND</label>
				        <div class="col-xs-5">
				            <input type="text" class="form-control" name="CMND"  value="{{$tuyendung[0]->CMND}}" />
				        </div>
					</div>
					<div class="form-group col-md-6">
						<label class="col-xs-4 control-label">Ngày Cấp</label>
				        <div class="col-xs-5">
				            <input type="date" class="form-control" name="NgayCap"  value="{{$tuyendung[0]->NgayCapCmnd}}" />
				        </div>
					</div>
					<div class="form-group col-md-6">
						<label class="col-xs-4 control-label">Nơi Cấp</label>
				        <div class="col-xs-5">
				            <input type="text" class="form-control" name="NoiCap" value="{{$tuyendung[0]->NoiCap}}" />
				        </div>
					</div>
						
					<div class="form-group col-md-6">
						<label class="col-xs-4 control-label">Dân Tộc</label>
				        <div class="col-xs-5">
				            <input type="text" class="form-control" name="DanToc" value="{{$tuyendung[0]->DanToc}}"/>
				        </div>
					</div>
					<div class="form-group col-md-6">
						<label class="col-xs-4 control-label">Quốc Tịch</label>
				        <div class="col-xs-5">
				            <input type="text" class="form-control" name="QuocTich" value="{{$tuyendung[0]->QuocTich}}" />
				        </div>
					</div>	
					<div class="form-group col-md-6">
						<label class="col-xs-4 control-label">TT Hôn Nhân</label>
				        <div class="col-xs-5">
				            <input type="text" class="form-control" name="TTHonNhan" value="{{$tuyendung[0]->TTHonNhan}}" />
				        </div>
					</div>
					<div class="form-group col-md-6">
						<label class="col-xs-4 control-label">Quê Quán</label>
				        <div class="col-xs-5">
				            <input type="text" class="form-control" name="QueQuan" value="{{$tuyendung[0]->QueQuan}}"/>
				        </div>
					</div>

					<div class="form-group col-md-6">
						<label class="col-xs-4 control-label">Nơi Ở HT</label>
				        <div class="col-xs-5">
				            <input type="text" class="form-control" name="NoiOHienTai" value="{{$tuyendung[0]->NoiOHienTai}}" />
				        </div>
					</div>
					<div class="form-group col-md-6">
						<label class="col-xs-4 control-label">SDT</label>
				        <div class="col-xs-5">
				            <input type="text" class="form-control" name="SDT" value="{{$tuyendung[0]->SDT}}"/>
				        </div>
					</div>
					<div class="form-group col-md-6">
						<label class="col-xs-4 control-label">Email</label>
				        <div class="col-xs-5">
				            <input type="text" class="form-control" name="Email" value="{{$tuyendung[0]->Email}}"/>
				        </div>
					</div>
					<div class="form-group col-md-6">
						<label class="col-xs-4 control-label">Năng Khiếu</label>
				        <div class="col-xs-5">
				            <input type="text" class="form-control" name="NangKhieu" value="{{$tuyendung[0]->NangKhieu}}"/>
				        </div>
					</div>
					<div class="form-group col-md-6">
						<label class="col-xs-4 control-label">Sức Khỏe</label>
				        <div class="col-xs-5">
				            <input type="text" class="form-control" name="SucKhoe" value="{{$tuyendung[0]->SucKhoe}}"/>
				        </div>
					</div>
					<div class="form-group col-md-6">
						<label class="col-xs-4 control-label">Ngày TD</label>
				        <div class="col-xs-5">
				            <input type="date" class="form-control" name="NgayTuyenDung" value="{{$tuyendung[0]->NgayTuyenDung}}"/>
				        </div>
					</div>
					<div class="form-group col-md-6">
						<label class="col-xs-4 control-label">Cơ quan TD</label>
				        <div class="col-xs-5">
				            <input type="text" class="form-control" name="CoQuanTuyenDung" value="{{$tuyendung[0]->CoQuanTuyenDung}}" />
				        </div>
					</div>
					<div class="form-group col-md-6">
						<label class="col-xs-4 control-label">TD Học Vấn</label>
				        <div class="col-xs-5">
				            <input type="text" class="form-control" name="TDHocVan" value="{{$tuyendung[0]->TDHocVan}}"/>
				        </div>
					</div>
					<div class="form-group col-md-6">
						<label class="col-xs-4 control-label">Kinh Nghiệm</label>
				        <div class="col-xs-5">
				            <input type="text" class="form-control" name="KinhNghiem" value="{{$tuyendung[0]->KinhNghiem}}"/>
				        </div>
					</div>		 
					<button type="submit" class="btn btn-primary col-md-1">Lưu</button> &nbsp;
					<button type="submit" class="btn btn-primary col-md-1">Hủy</button>
				</form>		
		</div>
	</div>
	</div>
</section>
</div>
@endsection