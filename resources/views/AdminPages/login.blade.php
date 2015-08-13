<!DOCTYPE html>
<html>
	<head>
		@include('header')
		<style type="text/css">
			body{
				background-color: #008cba;
				height: 80%;
			}
			div{
				display:block;
				margin:auto;
				position:relative;
			}
			h2,p{
				font-family:Segoe UI;
				color:white;
			}
		</style>
	</head>
	<body>
		<img src="{{URL::to('assets/images/logo.png')}}" style="width:20%;position:relative; margin:auto;display:block;top:5%;">
		<div style="height:300px;width:300px;background-color:#006f94;margin-top:3%;border-radius:25px;padding:20px;">
			<div style="background-color:#343434;height:25%;margin-bottom:5%;border-radius:25px 25px 0px 0px;padding:20px;width:115%;position:relative;right:7.5%;bottom:8%;">
				<img src="{{URL::to('assets/images/login.png')}}" style="width:35px;position:relative; bottom:10px">
				<span><p style="position:relative;bottom:50px;left:10%;font-size:32px">Admin Sign in</p></span>
			</div>
			<form action="" method="POST">
				<div class="row">
				    <div class="large-12 columns">
				      <div class="row collapse prefix-round">
				        <div class="small-4 columns">
				          <p href="#" class="button prefix">Username</p>
				        </div>
				        <div class="small-8 columns">
				          <input type="text" placeholder="Username">
				        </div>
				      </div>
				    </div>
				 </div>
				 <div class="row">
				    <div class="large-12 columns">
				      <div class="row collapse prefix-round">
				        <div class="small-4 columns">
				          <p href="#" class="button prefix">Password</p>
				        </div>
				        <div class="small-8 columns">
				          <input type="password" placeholder="Password">
				        </div>
				      </div>
				    </div>
				 </div>
				 {!! csrf_field() !!}
				 <button href="#" class="button" style="width:60%;position:relative;display:block;margin:auto;border-radius:25px;padding:20px;">Sign in</button>
			</form>
		</div>
		<div style="height:100px;background-color:#343434;position:relative;top:20%;">
			<!-- <img src="{{URL::to('assets/images/alpro.png')}}" style="width:10%;float:right;position:relative;top:15%;right:3%"> -->
		</div>
		@include('footer')
	</body>
</html>