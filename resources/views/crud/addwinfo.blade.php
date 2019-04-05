@extends('layouts.default')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
@section('content')
<div class="container-fluid">
	<ol class="breadcrumb">
        <li class="breadcrumb-item">
    	    Pages
        </li>
        <li class="breadcrumb-item">
        	Worship Info
        </li>
        <li class="breadcrumb-item active">
    	    <a href="{{url('addwinfo')}}">Add Worship Info</a>
        </li>
    </ol>
	<div class="card card-login mx-auto mt-5">
		<div class="card-header">Add Worship Time</div>
		<div class="card-body">
			<form method="post" action="{{ URL('/addwinfo') }}">
				<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="winfotime" name="winfotime" class="date form-control" placeholder="Worship Time" required="required" autofocus="autofocus">
						<label for="winfotime">Pick Worship Date</label>
						<script type="text/javascript">
						    $('.date').datepicker({  
						       format: 'yyyy-mm-dd'
						     });  
						</script>  
					</div>
				</div>
				<button type="submit" class="btn btn-block btn-primary">
					Store Data
				</button>
				{{-- <div class="form-group">
					<div class="form-label-group">
						<input type="password" id="inputPassword" class="form-control" placeholder="Password" required="required">
						<label for="inputPassword">Password</label>
					</div>
				</div>
				<div class="form-group">
					<div class="checkbox">
						<label>
							<input type="checkbox" value="remember-me">
							Remember Password
						</label>
					</div>
				</div> --}}
				{{-- <a class="btn btn-primary btn-block" href="index.html">Login</a> --}}
			</form>
			{{-- <div class="text-center">
				<a class="d-block small mt-3" href="register.html">Register an Account</a>
				<a class="d-block small" href="forgot-password.html">Forgot Password?</a>
			</div> --}}
		</div>
	</div>
</div>
@stop