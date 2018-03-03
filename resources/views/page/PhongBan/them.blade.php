@extends('layout.index');

@section('content')
<div class="content-wrapper">
<section class="content">
	<div class="container">
		
	<div class="row">
		<div class="col-md-6 ">
				<form action="thempb" method="POST">
					{{ csrf_field() }}
					<legend style="color: red; font-size: 25px">Thêm Phòng Ban </legend>
					
					<div class="form-group">
						<label>Tên Phòng Ban</label>
						<input class="form-control" name="TenPB" placeholder="Tên Phòng Ban" />
					</div>
					<div class="form-group">
						<label>Số Nhân Viên Phòng Ban</label>
						<input class="form-control" name="SoNVPB" placeholder="Hệ Số Công Việc" />
					</div>		 
					<button type="submit" class="btn btn-primary">Thêm</button>
				</form>			
		</div>
	</div>
	</div>
</section>
</div>
@endsection