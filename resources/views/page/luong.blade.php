@extends('layout.index')

@section('content')
<div class="content-wrapper">
<section class="content">
	<div class="container-fluid">		
		<div class="row">
        <div class="col-lg-12 col-xs-12">
		<div class="box box-block bg-white">
			<div>
				<h5 style="color: red; font-size: 25px">Lương Nhân Viên
				</h5>
						<form action="#" method="get" class="form-inline">
					        <div class="input-group">
					          <input type="text" name="" class="form-control" placeholder="Search...">
					          <span class="input-group-btn">
					                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
					                </button>
					          </span>
					        </div>					        
					    </form>
					    <input class="btn btn-primary" type="submit" name="xuatfile" value="Xuất File">
				
			</div>
			<table class="table table-stripped table-bordered table-hover">
				<thead>
					<tr align="center">
						<th>Mã Lương</th>
						<th>Tên Nhân Viên</th>
						<th>Tổng Lương</th>
						<th>Tháng</th>
						<th>Năm</th>
						<th>Thao tác</th>
					</tr>
				</thead>
				<tbody>
					@foreach($luong as $l)
					<tr>
						<td>{{ $l->MaLuong }}</td>
						<td>{{ $l->HoTen }}</td>
						<td>{{ $l->TongLuong }}</td>
						<td>{{ $l->Thang }}</td>
						<td>{{ $l->Nam }}</td>
						<td>
							<a href="sual?mal={{ $l->MaLuong }}" data-toggle="modal" data-whatever="@mdo"><span class="fa fa-pencil"></span></a>&nbsp;
							<a href="xoal?mal={{ $l->MaLuong }}"><span class="fa fa-trash"></span></a>							
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