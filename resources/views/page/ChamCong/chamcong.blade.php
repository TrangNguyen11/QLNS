@extends('layout.index')
@section('content')
<div class="content-wrapper">
<section class="content">
	<div class="container-fluid">		
		<div class="row">
        <div class="col-lg-12 col-xs-12">
		<div class="box box-block bg-white">
			<div>
				<h5 style="color: red; font-size: 25px">Danh sách chấm công</h5>
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
			        <a type="submit" href="themcv" class="btn btn-primary">Thêm</a>		        
			    </form>
			    
				</div>
			</div>
			<table class="table table-stripped table-bordered table-hover">
				<thead>
					<tr align="center">
						<th>Mã Chấm Công</th>
						<th>Tên Nhân Viên</th>
						<th>Vào Ca </th>
						<th>Kết Ca</th>
						<th>Giờ Làm Việc</th>
						<th>Thao tác</th>
					</tr>
				</thead>
				<tbody>
					@foreach($chamcong as $cc)
					<tr>
						<td>{{ $cc->MaCC }}</td> 
						<td>{{ $cc->HoTen }}</td>
						<td>{{ $cc->VaoCa }}</td>
						<td>{{ $cc->HetCa }}</td>
						<td>{{ $cc->TongGio }}</td>
						<td>
							<a href="suacv?macv={{ $cc->MaCC }}" data-toggle="modal" data-whatever="@mdo"><span class="fa fa-pencil"></span></a>&nbsp;
							<a href="xoacv?macv={{ $cc->MaCC }}"><span class="fa fa-trash"></span></a>							
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