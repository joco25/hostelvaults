@extends('layouts.app')

@section('content')

<div class="container">
	<br>
	<h2>Get Your Hostels Out there!!!</h2>
	<h5>Tired of having vacant Hostels? Increase your reach by putting your hostel among the very best. Accessibility is guaranteed.</h5>	
	<br>
	{!! Form::open(['method'=>'POST', 'action'=>'PropertyController@store', 'files'=>true]) !!}
		
		<div class="form-group">
			{!! Form::label('name', 'Property Name:') !!}
			{!! Form::text('name', null, ['class'=>'form-control','placeholder'=>'Green light..']) !!}
		</div>

		<div class="form-group">
						{!! Form::label('description', 'Tell us about the Property:') !!}
						{!! Form::textarea('description', null, ['class'=>'form-control', 'rows'=>5,'placeholder'=>'Hostel description and direction to property..']) !!}
		</div>
		
		<div class="form-group">
				{!! Form::label('category_id', 'Category:') !!}
				{!! Form::select('category_id', [''=>'choose category'] + $categories, null, ['class'=>'form-control']) !!}
			</div>


		<div class="form-group">
				{!! Form::label('cost', 'Cost:') !!}
				{!! Form::number('cost', null, ['class'=>'form-control','placeholder'=>'200000 (do not add any symbols or comma)..']) !!}
			</div>


		<div class="form-group">
				{!! Form::label('location', 'City / Area:') !!}
				{!! Form::text('location', null, ['class'=>'form-control','placeholder'=>'Okio odo']) !!}
			</div>

			<div class="form-group">
				{!! Form::label('school', 'School:') !!}
				{!! Form::text('school', null, ['class'=>'form-control','placeholder'=>'university of Ilorin']) !!}
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
				{!! Form::text('hffree', null, ['class'=>'form-control','placeholder'=>'wifi,printing...']) !!}
			</div>

			<div class="form-group">
				{!! Form::label('hfgeneral', 'General:') !!}
				{!! Form::text('hfgeneral', null, ['class'=>'form-control','placeholder'=>'water,drying line,security guards...']) !!}
			</div>

			<div class="form-group">
				{!! Form::label('hfservices', 'Services:') !!}
				{!! Form::text('hfservices', null, ['class'=>'form-control','placeholder'=>'light,car park,laudry...']) !!}
			</div>

			<div class="form-group">
				{!! Form::label('hffoodndrink', 'Food and Drink:') !!}
				{!! Form::text('hffoodndrink', null, ['class'=>'form-control','placeholder'=>'restuarant,kiosk...']) !!}
			</div>
			<br>
			<hr>
			<br>
			<h3>Hostel Policies</h3>
			Seperate each Policy with a semicolon
			<div class="form-group">
				{!! Form::label('policies', 'Policies:') !!}
				{!! Form::text('policies', null, ['class'=>'form-control','placeholder'=>'gate is always closed by by 12:30pm; No smoking allowed in Hostel vicinity; No Pets allowed in Hostel']) !!}
			</div>



				
		
			

				
	
		<div class="form-group">
			{!! Form::submit('Add Hostel', ['class'=>'btn btn-primary']) !!}
		</div>
	
	{!! Form::close() !!}
	
	
	

</div>



@endsection
