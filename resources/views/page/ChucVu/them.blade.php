@extends('layout.index');

@section('content')
<div class="content-wrapper">
<section class="content">
	<div class="container">
		
	<div class="row">
		<div class="col-md-6 ">
			@if(count($errors) > 0)
				<div class="alert alert-danger">
					@foreach($errors->all() as $ero)
						{{$ero}} <br>
					@endforeach
				</div>
			@endif
			@if(session('thongbao'))
				<div class="alert alert-success">
					{{session('thongbao')}}
				</div>
			@endif
				<form action="themcv" method="POST">
					{{ csrf_field() }}
					<legend style="color: red; font-size: 25px">Thêm Chức Vụ </legend>
					
					<div class="form-group">
						<label>Tên Chức Vụ</label>
						<input class="form-control" name="TenCV" placeholder="Tên Chức Vụ" />
					</div>
					<div class="form-group">
						<label>Hệ Số Công Việc</label>
						<input class="form-control" name="HeSoCV" placeholder="Hệ Số Công Việc" />
					</div>		 
					<button type="submit" class="btn btn-primary">Thêm</button>
				</form>			
		</div>
	</div>
	</div>
</section>
</div>
@endsection