@extends('layout.index')
@section('content')
<div class="content-wrapper">
<section class="content">
	<div class="container">		
		<div class="col-md-12">
			<div class="row">
				<form class="form-horizontal" action="themnv" method="post">
					{{ csrf_field() }}
					<legend style="color: red; font-size: 25px; text-align: center;">Thêm Nhân Viên </legend>									
					<div class="form-group col-md-6">
						<label class="col-xs-4 control-label">Mã Lương</label>
						<div class="col-xs-5 selectContainer">
				            <select class="form-control" name="MaLuong">
				                <option value="">Chọn mã lương</option>
				                @foreach($luong as $l)
											<option value="{{$l->MaLuong}}">{{$l->MaLuong}}</option>
				                @endforeach
				            </select>
				        </div>
					</div>
					<div class="form-group col-md-6">
						<label class="col-xs-4 control-label">Mã Phòng Ban</label>
						<div class="col-xs-5 selectContainer">
				            <select class="form-control" name="MaPB">
				                <option value="">Chọn Mã Phòng Ban</option>
				                @foreach($phongban as $pb)
											<option value="{{$pb->MaPB}}">{{$pb->MaPB}}</option>
				                @endforeach
				            </select>
				        </div>
					</div>
					<div class="form-group col-md-6">
						<label class="col-xs-4 control-label">Mã Chức Vụ</label>
						<div class="col-xs-5 selectContainer">
				            <select class="form-control" name="MaCV">
				                <option value="">Chọn Mã Chức Vụ</option>
				                @foreach($chucvu as $cv)
											<option value="{{$cv->MaCV}}">{{$cv->MaCV}}</option>
				                @endforeach
				            </select>
				        </div>
					</div>
					<div class="form-group col-md-6">
						<label class="col-xs-4 control-label">Họ Tên</label>
				        <div class="col-xs-5">
				            <input type="text" class="form-control" name="HoTen" />
				        </div>
					</div>
					<div class="form-group col-md-6">
						<label class="col-xs-4 control-label">Giới Tính</label>
				        <div class="col-xs-5">
								<input name='GioiTinh' checked="checked" type='radio' value='Nam'/>Nam<br />
								<input name='GioiTinh' type='radio' value='Nữ'/>Nữ<br />
				         </div>
					</div>					
					<div class="form-group col-md-6">
						<label class="col-xs-4 control-label">Ngày Sinh</label>
				        <div class="col-xs-5">
				            <input type="date" class="form-control" name="NgaySinh" />
				        </div>
					</div>
					<div class="form-group col-md-6">
						<label class="col-xs-4 control-label">Nơi Sinh</label>
				        <div class="col-xs-5">
				            <input type="text" class="form-control" name="NoiSinh" />
				        </div>
					</div>
					<div class="form-group col-md-6">
						<label class="col-xs-4 control-label">CMND</label>
				        <div class="col-xs-5">
				            <input type="text" class="form-control" name="CMND" />
				        </div>
					</div>
					<div class="form-group col-md-6">
						<label class="col-xs-4 control-label">Ngày Cấp</label>
				        <div class="col-xs-5">
				            <input type="date" class="form-control" name="NgayCapCmnd" />
				        </div>
					</div>
					<div class="form-group col-md-6">
						<label class="col-xs-4 control-label">Nơi Cấp</label>
				        <div class="col-xs-5">
				            <input type="text" class="form-control" name="NoiCap" />
				        </div>
					</div>
						
					<div class="form-group col-md-6">
						<label class="col-xs-4 control-label">Dân Tộc</label>
				        <div class="col-xs-5">
				            <input type="text" class="form-control" name="DanToc" />
				        </div>
					</div>
					<div class="form-group col-md-6">
						<label class="col-xs-4 control-label">Quốc Tịch</label>
				        <div class="col-xs-5">
				            <input type="text" class="form-control" name="QuocTich" />
				        </div>
					</div>	
					<div class="form-group col-md-6">
						<label class="col-xs-4 control-label">TT Hôn Nhân</label>
				        <div class="col-xs-5">
				            <input type="text" class="form-control" name="TTHonNhan" />
				        </div>
					</div>
					<div class="form-group col-md-6">
						<label class="col-xs-4 control-label">Quê Quán</label>
				        <div class="col-xs-5">
				            <input type="text" class="form-control" name="QueQuan" />
				        </div>
					</div>

					<div class="form-group col-md-6">
						<label class="col-xs-4 control-label">Nơi Ở HT</label>
				        <div class="col-xs-5">
				            <input type="text" class="form-control" name="NoiOHienTai" />
				        </div>
					</div>
					<div class="form-group col-md-6">
						<label class="col-xs-4 control-label">SDT</label>
				        <div class="col-xs-5">
				            <input type="text" class="form-control" name="SDT" />
				        </div>
					</div>
					<div class="form-group col-md-6">
						<label class="col-xs-4 control-label">Email</label>
				        <div class="col-xs-5">
				            <input type="text" class="form-control" name="Email" />
				        </div>
					</div>
					<div class="form-group col-md-6">
						<label class="col-xs-4 control-label">Ngày TD</label>
				        <div class="col-xs-5">
				            <input type="date" class="form-control" name="NgayTuyenDung" />
				        </div>
					</div>
					<div class="form-group col-md-6">
						<label class="col-xs-4 control-label">Cơ quan TD</label>
				        <div class="col-xs-5">
				            <input type="text" class="form-control" name="CoQuanTuyenDung" />
				        </div>
					</div>
					<div class="form-group col-md-6">
						<label class="col-xs-4 control-label">TD Học Vấn</label>
				        <div class="col-xs-5">
				            <input type="text" class="form-control" name="TDHocVan" />
				        </div>
					</div>
					<div class="form-group col-md-6">
						<label class="col-xs-4 control-label">Kinh Nghiệm</label>
				        <div class="col-xs-5">
				            <input type="text" class="form-control" name="KinhNghiem" />
				        </div>
					</div>		 
					<button type="submit" class="btn btn-primary col-md-1">Thêm</button>
				</form>			
		</div>
	</div>
</div>
</section>
</div>
@endsection