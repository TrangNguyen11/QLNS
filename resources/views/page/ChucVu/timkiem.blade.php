@extends('layout.index')
@section('content')
<div class="content-wrapper">
<section class="content">
	<div class="container-fluid">		
		<div class="row">
        <div class="col-lg-12 col-xs-12">
		<div class="box box-block bg-white">
			<div>
				<h5 style="color: red; font-size: 25px">Tìm kiếm : {{$tukhoa}}</h5>
				<div class="form-inline">
				<form action="timkiem" method="post" class="form-inline">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
			        <div class="input-group">
			          <input type="text" name="tukhoa" class="form-control" placeholder="Search...">
			          <span class="input-group-btn">
			                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
			                </button>
			          </span>
			        </div>			        
			    </form>
			    <a type="submit" href="themcv" class="btn btn-primary">Thêm</a>
				</div>
			</div>
			<table class="table table-stripped table-bordered table-hover">
				<thead>
					<tr align="center">
						<th>Mã chức vụ</th>
						<th>Tên chức vụ</th>
						<th>Hệ số chức vụ</th>
						<th>Thao tác</th>
					</tr>
				</thead>
				<tbody>
					@foreach($chucvu as $cv)
					<tr>
						<td>{{ $cv->MaCV }}</td>
						<td>{{ $cv->TenCV }}</td>
						<td>{{ $cv->HeSoCV }}</td>
						<td>
							<a href="suacv?macv={{ $cv->MaCV }}" data-toggle="modal" data-whatever="@mdo"><span class="fa fa-pencil"></span></a>&nbsp;
							<a href="xoacv?macv={{ $cv->MaCV }}"><span class="fa fa-trash"></span></a>							
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			<br>			
		</div>
	</div>
</div>
</div>
</section>
</div>
@endsection