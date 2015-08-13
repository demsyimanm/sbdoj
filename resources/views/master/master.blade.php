<!DOCTYPE html>
<html>
	<head>
		@include('header')
	</head>
	<body>
		@include('master.nav')
		<!-- <div class="large-9 columns" style="">
			@yield('body_content')	
		</div>

		<div class="large-3 columns" style="height:100%;border-style: solid;border-width: 0px 0px 0px 2px;border-color:#008cba">
			@yield('side_content')	
		</div> -->
		@yield('body_content')
		@include('footer')
	</body>
</html>