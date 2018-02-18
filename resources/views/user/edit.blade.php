@extends('layouts.app')

@section('content')


<div class="container">
	<h2>Edit Room</h2>
	<br>
	{!! Form::model($room, ['method'=>'PATCH','action'=>['RoomController@update',$room->id], 'files'=>true]) !!}
		
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
			<h3><b>Step 2 : </b> what are your room features?</h3>
			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
						{!! Form::label('rffurnished', 'Furnished:') !!}
						{!! Form::select('rffurnished',[''=>'choose option', 'Yes'=>'Yes','No'=>'No'], null, ['class'=>'form-control']) !!}
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						{!! Form::label('hfprivatebath', 'Private Bath:') !!}
						{!! Form::select('hfprivatebath',[''=>'choose option', 'Yes'=>'Yes','No'=>'No'], null, ['class'=>'form-control']) !!}
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						{!! Form::label('hfwashingmachine', 'Washing Machine:') !!}
						{!! Form::select('hfwashingmachine',[''=>'choose option', 'Yes'=>'Yes','No'=>'No'], null, ['class'=>'form-control']) !!}
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
						{!! Form::label('hfinternet', 'Internet:') !!}
						{!! Form::select('hfinternet',[''=>'choose option', 'Yes'=>'Yes','No'=>'No'], null, ['class'=>'form-control']) !!}
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						{!! Form::label('hftv', 'Cable TV:') !!}
						{!! Form::select('hftv',[''=>'choose option', 'Yes'=>'Yes','No'=>'No'], null, ['class'=>'form-control']) !!}
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						{!! Form::label('hfpets', 'Pets:') !!}
						{!! Form::select('hfpets',[''=>'choose option', 'Yes'=>'Yes','No'=>'No'], null, ['class'=>'form-control']) !!}
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
						{!! Form::label('hfsmoking', 'Smoking:') !!}
						{!! Form::select('hfsmoking',[''=>'choose option', 'Yes'=>'Yes','No'=>'No'], null, ['class'=>'form-control']) !!}
					</div>
				</div>
			</div>
			<br>
			<hr>
			<br>
			
			<h3><b>Step 3 : </b> what is Permitted</h3>
			<div class="row">
				<div class="col-md-4">
						<div class="form-group">
							{!! Form::label('ppets', 'Pets:') !!}
							{!! Form::select('ppets',[''=>'choose option', 'Yes'=>'Yes','I Dont Mind'=>'No'], null, ['class'=>'form-control']) !!}
						</div>
				</div>
				<div class="col-md-4">
						<div class="form-group">
							{!! Form::label('pcleanliness', 'Cleanliness:') !!}
							{!! Form::select('pcleanliness',[''=>'choose option', 'Super Clean'=>'Super Clean','Just clean is fine'=>'Just clean is fine','A little dirt wont hurt'=>'A little dirt wont hurt','Doesn\'t matter'=>'Doesn\'t matter'], null, ['class'=>'form-control']) !!}
						</div>
				</div>
				<div class="col-md-4">
						<div class="form-group">
							{!! Form::label('psnoring', 'Snoring:') !!}
							{!! Form::select('psnoring',[''=>'choose option', 'Not Loud'=>'Not Loud','No'=>'No','Doesn\'t matter'=>'Doesn\'t matter'], null, ['class'=>'form-control']) !!}
						</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
						<div class="form-group">
							{!! Form::label('pgender', 'Roommate Gender:') !!}
							{!! Form::select('pgender',[''=>'choose option', 'Male'=>'Male','Female'=>'Female','Doesn\'t matter'=>'Doesn\'t matter'], null, ['class'=>'form-control']) !!}
						</div>
				</div>
				<div class="col-md-4">
						<div class="form-group">
							{!! Form::label('pchildren', 'Children:') !!}
							{!! Form::select('pchildren',[''=>'choose option', 'Yes'=>'Yes','No'=>'No','Doesn\'t matter'=>'Doesn\'t matter'], null, ['class'=>'form-control']) !!}
						</div>
				</div>
				<div class="col-md-4">
						<div class="form-group">
							{!! Form::label('pparty', 'Party habits:') !!}
							{!! Form::select('pparty',[''=>'choose option','Yes'=>'Yes', 'Not often'=>'Not often','No'=>'No','Doesn\'t matter'=>'Doesn\'t matter'], null, ['class'=>'form-control']) !!}
						</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
						<div class="form-group">
							{!! Form::label('page', 'Age:') !!}
							{!! Form::text('page', null, ['class'=>'form-control']) !!}
						</div>
				</div>
				<div class="col-md-4">
						<div class="form-group">
							{!! Form::label('psmoking', 'Smoking:') !!}
							{!! Form::select('psmoking',[''=>'choose option', 'Yes'=>'Yes','No'=>'No','Doesn\'t matter'=>'Doesn\'t matter'], null, ['class'=>'form-control']) !!}
						</div>
				</div>
			</div>
			<br>
			<hr>
			<br>
			<h3>Room Policies</h3>
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
