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
				    <li  class="active"><a href="{{ URL::to('/') }}">Home</a></li>
				  <li ><a href="{{ URL::to('inquire') }}">Contact</a></li>
				</ul>
			</div>
		</div>
		<div class="main">
			<div class="content">
				<h1>FLEXBOX TEMPLATE</h1>
				<p>Flexbox is a CSS display type designed to help us craft CSS layouts much easier.</p>
				<a class="btn" href="#">GET STARTED</a>
			</div>
		</div>
		<div class="footer">
			My Website Template 2018
		</div>
	</body>
</html>