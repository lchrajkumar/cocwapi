<!DOCTYPE html>
<html>
<head>
	@include('includes.head')
</head>
<body id="page-top">
	@include('includes.nav')
	<div id="wrapper">
		@include('includes.side')
		@yield('content')
	</div>
	<footer class="sticky-footer">
		@include('includes.ftr')
	</footer>
		<!-- Scroll to Top Button-->
	  <a class="scroll-to-top rounded" href="#page-top">
	    <i class="fas fa-angle-up"></i>
	  </a>
	  @include('includes.ftrscript')
</body>
</html>