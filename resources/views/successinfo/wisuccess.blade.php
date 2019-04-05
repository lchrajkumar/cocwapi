@extends('layouts.default')
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
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
    <div class="container">
		<div class="row text-center">
	        <div class="col-sm-6 col-sm-offset-3">
		        <br><br> <h2 style="color:#0fad00">Success</h2>
		        <h3>Dear, Admin</h3>
		        <p style="font-size:20px;color:#5C5C5C;">Go back to Dashboard now</p>
		        <a href="{{url('addwinfo')}}" class="btn btn-success">Add Worship Info</a>
		    	<br><br>
	        </div>
		</div>
	</div>
</div>
@stop