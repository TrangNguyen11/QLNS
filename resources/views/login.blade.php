<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" href="http://localhost:81/QLNHANSU/dist/vendor/bootstrap/css/bootstrap.min.css">	
	<script rel="stylesheet" href="http://localhost:81/QLNHANSU/dist/vendor/bootstrap/js/bootstrap.min.js">	</script>
	<script type="text/javascript" src="http://localhost:81/QLNHANSU/dist/js/jquery.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-6">
				<form action="{{url('login')}}" method="POST" role="form">
					<legend>Login</legend>
					@if($errors->has('errorlogin'))
						<div class="alert alert-danger">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">
								&times;						
							</button>
							{{$errors->first('errorlogin')}}
							
						</div>
						@endif
					<div class="form-group">
						<label>Email</label>
						<input type="text" class="form-control" name="email" id="email" placeholder="Email" value="{{old('email')}}">
						@if($errors->has('email'))
							<p style="color: red"> {{$errors->first('email')}}</p>
						@endif
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="text" class="form-control" name="password" id="password" placeholder="Password">
						@if($errors->has('password'))
							<p style="color: red">{{$errors->first('password')}}</p>
						@endif
					</div>
					{!! csrf_field()!!}
					<button type="submit" class="btn btn-primary">Đăng nhập</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>