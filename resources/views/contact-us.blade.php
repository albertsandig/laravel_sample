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
				   <li><a href="{{ URL::to('/') }}">Home</a></li>
					<li class="active" ><a href="{{ URL::to('inquire') }}">Contact</a></li>
				</ul>
			</div>
		</div>
		<div class="main">
			<div class="content-form">
				<h1>Conctact Form</h1>
				<div class="form">
					<label>Name:</label>
					<input type="text" class="form-input" placeholder="Fullname"> 
					<label>Email:</label>
					<input type="email" class="form-input" placeholder="Valid Email"> 
					<label>Inquiries:</label>
					<textarea class="form-input">Type your inquiries here . . .
					</textarea>
					<input type="submit" class="btn input_submit" resizable="false">
				</div>
			</div>
		</div>
		<div class="footer">
			My Website Template 2018
		</div>
	</body>
</html>