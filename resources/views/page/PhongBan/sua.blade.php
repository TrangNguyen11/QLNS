@extends('layout.index');

@section('content')
<div class="content-wrapper">
<section class="content">
	<div class="container">
		
	<div class="row">
		<div class="col-md-6 ">
				<form action="suapb" method="POST">
					{{ csrf_field() }}
					<legend>Sửa Phòng Ban </legend>
					<div class="form-group">
						<label>Mã Phòng Ban</label>
						<input class="form-control" value="{{$phongban->MaPB}}" name="MaPB" readonly placeholder="Mã Phòng Ban" />
					</div>
					<div class="form-group">
						<label>Tên Phòng Ban</label>
						<input class="form-control" value="{{$phongban->TenPB}}" name="TenPB" placeholder="Tên Phòng Ban" />
					</div>
					<div class="form-group">
						<label>Số Nhân Viên Phòng Ban</label>
						<input class="form-control" value="{{$phongban->SoNVPB}}" name="SoNVPB" placeholder="Số Nhân Viên Phòng Ban" />
					</div>		 
					<button type="submit" class="btn btn-primary">Sửa</button>
					<button type="reset" class="btn btn-danger">Làm Mới</button>
				</form>			
		</div>
	</div>
	</div>
</section>
</div>
@endsection