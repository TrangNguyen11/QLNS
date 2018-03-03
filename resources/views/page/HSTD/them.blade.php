@extends('layout.index')
@section('content')
<div class="content-wrapper">
<section class="content">
	<div class="container">		
		<div class="col-md-12 ">
			<div class="row">
				<form class="form-horizontal" action="themhs" method="POST">
					{{ csrf_field() }}
					<legend style="color: red; font-size: 35px; text-align: center;">Hồ Sơ Tuyển Dụng</legend>	
					<div class="form-group col-md-6">
						<label class="col-xs-4 control-label">Họ Tên</label>
				        <div class="col-xs-5">
				            <input type="text" class="form-control" name="HoTen" />
				        </div>
					</div>
					<div class="form-group col-md-6">
						<label class="col-xs-4 control-label">Giới Tính</label>
				        <div class="col-xs-5">
								<input name='GioiTinh' type='radio' checked="checked" value='Nam' />Nam<br />
								<input name='GioiTinh' type='radio' value='Nữ' />Nữ<br />
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
				            <input type="date" class="form-control" name="NgayCap" />
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
						<label class="col-xs-4 control-label">Năng Khiếu</label>
				        <div class="col-xs-5">
				            <input type="text" class="form-control" name="NangKhieu" />
				        </div>
					</div>
					<div class="form-group col-md-6">
						<label class="col-xs-4 control-label">Sức Khỏe</label>
				        <div class="col-xs-5">
				            <input type="text" class="form-control" name="SucKhoe" />
				        </div>
					</div>
					<div class="form-group col-md-6">
						<label class="col-xs-4 control-label">Ngày Tuyển Dụng</label>
				        <div class="col-xs-5">
				            <input type="date" class="form-control" name="NgayTuyenDung" />
				        </div>
					</div>
					<div class="form-group col-md-6">
						<label class="col-xs-4 control-label">Cơ quan Tuyển Dụng</label>
				        <div class="col-xs-5">
				            <input type="text" class="form-control" name="CoQuanTuyenDung" />
				        </div>
					</div>
					<div class="form-group col-md-6">
						<label class="col-xs-4 control-label">Trình Độ Học Vấn</label>
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
					<button type="submit" class="btn btn-primary">Thêm Hồ Sơ</button>
					<button type="submit" class="btn btn-primary">Hủy</button>
				</form>			
		</div>
	</div>
	</div>
</section>
</div>
@endsection