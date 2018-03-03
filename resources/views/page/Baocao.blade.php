@extends('layout.index')
@section('content')
<div class="content-wrapper">
<section class="content">
	<div class="container-fluid">		
		<div class="row">
        <div class="col-lg-12 col-xs-12">
			<div class="box box-block bg-white">
				<div>
				<h5 style="color: red; font-size: 25px">Danh sách phòng ban
				</h5>
						<form action="#" method="get" class="form-inline">
					        <div class="input-group">
					          <input type="text" name="" class="form-control" placeholder="Search...">
					          <span class="input-group-btn">
					                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
					                </button>
					          </span>
					        </div>
					        <a type="submit" href="thempb" class="btn btn-primary">Thêm</a>
					    </form>				
					</div>
			<table class="table table-stripped table-bordered table-hover">
				<thead>
					<tr align="center">
						<th>Mã phòng ban</th>
						<th>Tên phòng ban</th>
						<th>Hệ số phòng ban</th>
						<th>Thao tác</th>
					</tr>
				</thead>
				<tbody>
					@foreach($phongban as $pb)
					<tr>
						<td>{{ $pb->MaPB }}</td>
						<td>{{ $pb->TenPB }}</td>
						<td>{{ $pb->SoNVPB }}</td>
						<td>
							<a href="suapb?mapb={{ $pb->MaPB }}" data-toggle="modal" data-whatever="@mdo"><span class="fa fa-pencil"></span></a>&nbsp;
							<a href="xoapb?mapb={{ $pb->MaPB }}"><span class="fa fa-trash"></span></a>							
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