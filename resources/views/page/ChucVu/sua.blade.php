@extends('layout.index');

@section('content')
<div class="content-wrapper">
<section class="content">
	<div class="container">
		
	<div class="row">
		<div class="col-md-6 ">
				<form action="suacv" method="POST">
					{{ csrf_field() }}
					<legend>Sửa Chức Vụ </legend>
					<div class="form-group">
						<label>Mã Chức Vụ</label>
						<input class="form-control" value="{{$chucvu->MaCV}}" name="MaCV" readonly placeholder="Mã Chức Vụ" />
					</div>
					<div class="form-group">
						<label>Tên Chức Vụ</label>
						<input class="form-control" value="{{$chucvu->TenCV}}" name="TenCV" placeholder="Tên Chức Vụ" />
					</div>
					<div class="form-group">
						<label>Hệ Số Công Việc</label>
						<input class="form-control" value="{{$chucvu->HeSoCV}}" name="HeSoCV" placeholder="Hệ Số Công Việc" />
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