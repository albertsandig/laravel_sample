@extends('layouts.app')

@section('content')
	<div class="main">
		<div class="content-form">
			<h1>Conctact Form</h1>
			@if ($errors->any())
				@foreach ($errors->all() as $error)
					<h4 class="error">{{ $error }}</h4>
				@endforeach
			@endif
			
			@if(session('success'))
				<h4 class="success">{{ session('success') }}</h4>
			@endif
			
			{!! Form::open(['action' => 'InquiryController@store','method' => 'POST','class'=>'form']) !!}
				{{Form::label('Name: ')}}
				{{Form::text('name','',['class'=>'form-input','placeholder'=>'Fullname','required'=>''])}}
				{{Form::label('Email: ')}}
				{{Form::email('email','',['class'=>'form-input','placeholder'=>'Valid Email','required'=>''])}}
				{{Form::label('Inquiries: ')}}
				{{Form::textarea('message','',['class'=>'form-input','placeholder'=>'Type your inquiries here . . .','required'=>''])}}
				{{Form::submit('Submit',['class'=>'btn input_submit'])}}
			{!! Form::close() !!}
		</div>
	</div>
@endsection