<!DOCTYPE html>
<html>
	<head>
		<title>First time in flex</title>
		<link href="{{ asset('my_template/css/style.css') }}" rel="stylesheet" type="text/css" >
	</head>
	<body>
		<div class="header">
			<div class="logo">
				<!-- <h3>Freelance Albert</h3> -->
				<img src="{{ URL::asset('my_template/images/header-logo.png') }}" align="middle">
			</div>
			
			<div class="navigation">
				<ul class="nav-bar">
					<li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{ URL::to('/') }}">Home</a></li>
					<li class="{{ Request::is('inquire') ? 'active' : '' }}"><a href="{{ URL::to('inquire') }}">Contact</a></li>
				</ul>
			</div>
		</div>
		@yield('content')
		<div class="footer">
			My Website Template 2018
		</div>
	</body>
</html>