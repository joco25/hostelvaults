@extends('layouts.app')

@section('content')

<div class="container">
	<h2>Get a Roommate</h2>
	<h4>add your room</h4>	
	<br>
	{!! Form::open(['method'=>'POST', 'action'=>'PropertyController@store', 'files'=>true]) !!}
		
		<div class="form-group">
			{!! Form::label('name', 'Name:') !!}
			{!! Form::text('name', null, ['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
						{!! Form::label('description', 'Tell us about the Property:') !!}
						{!! Form::textarea('description', null, ['class'=>'form-control', 'rows'=>5]) !!}
		</div>
		
		<div class="form-group">
				{!! Form::label('category_id', 'Category:') !!}
				{!! Form::select('category_id', [''=>'choose category'] + $categories, null, ['class'=>'form-control']) !!}
			</div>


		<div class="form-group">
				{!! Form::label('cost', 'Cost:') !!}
				{!! Form::number('cost', null, ['class'=>'form-control']) !!}
			</div>


		<div class="form-group">
				{!! Form::label('location', 'City / Area:') !!}
				{!! Form::text('location', null, ['class'=>'form-control']) !!}
			</div>

			<div class="form-group">
				{!! Form::label('school', 'School:') !!}
				{!! Form::text('school', null, ['class'=>'form-control']) !!}
			</div>

			<div class="form-group">
					{!! Form::label('photo_id', 'Property Display photo:') !!}
					{!! Form::file('photo_id', ['class'=>'form-control']) !!}
			</div>
			<br>
			<h3>Upload Other Photos</h3>
			<div class="form-group">

					{!! Form::label('files', 'Other Photos:') !!}
					{!! Form::file('files[]', ['multiple'=>'true','class'=>'form-control']) !!}
				</div>

			<hr>
			<br>
			<h3>Hostel Features</h3>
			<p>Seperate each feature with a comma</p>
			<div class="form-group">
				{!! Form::label('hffree', 'Free:') !!}
				{!! Form::text('hffree', null, ['class'=>'form-control']) !!}
			</div>

			<div class="form-group">
				{!! Form::label('hfgeneral', 'General:') !!}
				{!! Form::text('hfgeneral', null, ['class'=>'form-control']) !!}
			</div>

			<div class="form-group">
				{!! Form::label('hfservices', 'Services:') !!}
				{!! Form::text('hfservices', null, ['class'=>'form-control']) !!}
			</div>

			<div class="form-group">
				{!! Form::label('hffoodndrink', 'Food and Drink:') !!}
				{!! Form::text('hffoodndrink', null, ['class'=>'form-control']) !!}
			</div>
			<br>
			<hr>
			<br>
			<h3>Hostel Policies</h3>
			Seperate each Policy with a semicolon
			<div class="form-group">
				{!! Form::label('policies', 'Policies:') !!}
				{!! Form::text('policies', null, ['class'=>'form-control']) !!}
			</div>



				
		
			

				
	
		<div class="form-group">
			{!! Form::submit('Add Room', ['class'=>'btn btn-primary']) !!}
		</div>
	
	{!! Form::close() !!}
	
	
	

</div>



@endsection
