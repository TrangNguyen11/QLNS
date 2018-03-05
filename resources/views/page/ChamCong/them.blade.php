@extends('layout.index')
@section('content')
<div class="content-wrapper">
<section class="content">
	<div class="container">		
		<div class="col-md-11">
			<div class="row">
				<form class="form-horizontal" action="tongngay" method="post">
					{{ csrf_field() }}
					<legend style="color: red; font-size: 25px; text-align: center;">Thêm Chấm Công </legend>									
					<div class="form-group col-md-4">
						<label class="col-xs-4 control-label">Họ Tên</label>
				        <div class="col-xs-5">
				            <input type="text" class="form-control" name="HoTen" />
				        </div>
					</div>
					<div class="form-group col-md-4">
						<label class="col-xs-4 control-label">Chọn Ca</label>
						<div class="col-xs-5 selectContainer">
				            <select class="form-control" name="MaCa">
				                <option value="">Chọn Ca Làm</option>
				                @foreach($calam as $ca)
											<option value="{{$ca->MaCa}}">{{$ca->TenCa}}</option>
				                @endforeach
				            </select>
				        </div>
					</div>
					<div class="form-group col-md-4">
						<label class="col-xs-4 control-label">Chọn Tháng</label>
						<div class="col-xs-5 selectContainer">
				            <select class="form-control" name="chonThang" id="chonThang" onchange="traBang()">
				                <option value="">Chọn Tháng</option>
				                @for($i = 1; $i <= 12 ; $i++)
											<option value="{{$i}}">{{$i}}</option>
				                @endfor
				            </select>
				        </div>
					</div>
				
				<table class="table table-stripped table-bordered table-hover">
						<thead>
							<tr align="center" id="hienngaychon">
								<?php  $maxDay = date('t', strtotime("2018-3-2") )?>
								@for($i = 1; $i <= $maxDay ; $i++)
								<th> {{ $i }}<input type="checkbox" name="ngay[]"></th>
								
								@endfor
							</tr>

						</thead>
				</table>
				<button type="submit" name="ngaycong">Tổng Ngày</button>
				</form>	
			</div>
	</div>
</div>
</section>
</div>
<script>
	
function traBang(){
	var date = new Date();
	var month = $('select[name=chonThang]').val()
	var lastday= new Date(date.getFullYear(), month, 0).getDate();
	var hien = "";
	for (i = 1; i <= lastday; i++) { 

		hien += "<th>"+i+"<input type='checkbox' name='ngay[]' /></th>"
	}
	$('#hienngaychon').html(

		hien
		);
}

</script>
@endsection