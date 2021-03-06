@extends('layouts.app')
@section('styles')
<style>

				.card {
			    margin-top: 20px;
			    padding: 30px;
			    background-color: rgba(214, 224, 226, 0.2);
			    -webkit-border-top-left-radius:5px;
			    -moz-border-top-left-radius:5px;
			    border-top-left-radius:5px;
			    -webkit-border-top-right-radius:5px;
			    -moz-border-top-right-radius:5px;
			    border-top-right-radius:5px;
			    -webkit-box-sizing: border-box;
			    -moz-box-sizing: border-box;
			    box-sizing: border-box;
			}
			.card.hovercard {
			    position: relative;
			    padding-top: 0;
			    overflow: hidden;
			    text-align: center;
			    background-color: #fff;
			    background-color: rgba(255, 255, 255, 1);
			}
			.card.hovercard .card-background {
			    height: 130px;
			}
			.card-background img {
			    -webkit-filter: blur(25px);
			    -moz-filter: blur(25px);
			    -o-filter: blur(25px);
			    -ms-filter: blur(25px);
			    filter: blur(25px);
			    margin-left: -100px;
			    margin-top: -200px;
			    min-width: 130%;
			}
			.card.hovercard .useravatar {
			    position: absolute;
			    top: 15px;
			    left: 0;
			    right: 0;
			}
			.card.hovercard .useravatar img {
			    width: 100px;
			    height: 100px;
			    max-width: 100px;
			    max-height: 100px;
			    -webkit-border-radius: 50%;
			    -moz-border-radius: 50%;
			    border-radius: 50%;
			    border: 5px solid rgba(255, 255, 255, 0.5);
			}
			.card.hovercard .card-info {
			    position: absolute;
			    bottom: 14px;
			    left: 0;
			    right: 0;
			}
			.card.hovercard .card-info .card-title {
			    padding:0 5px;
			    font-size: 20px;
			    line-height: 1;
			    color: #262626;
			    background-color: rgba(255, 255, 255, 0.1);
			    -webkit-border-radius: 4px;
			    -moz-border-radius: 4px;
			    border-radius: 4px;
			}
			.card.hovercard .card-info {
			    overflow: hidden;
			    font-size: 12px;
			    line-height: 20px;
			    color: #737373;
			    text-overflow: ellipsis;
			}
			.card.hovercard .bottom {
			    padding: 0 20px;
			    margin-bottom: 17px;
			}
			.btn-pref .btn {
			    -webkit-border-radius:0 !important;
			}

			img{
				min-width: 0px;
				min-height: 0px;
			}

</style>
@stop
@section('content')
<div class="container" >
	<div class="col-lg-12 col-sm-6" >
    <div class="card hovercard">
        <div class="card-background">
            <img class="card-bkimg" alt="" src="http://lorempixel.com/100/100/people/9/">
            <!-- http://lorempixel.com/850/280/people/9/ -->
        </div>
        <div class="useravatar">
            <img alt="" src="http://lorempixel.com/100/100/people/9/">
        </div>
        <div class="card-info"> <span class="card-title">Pamela Anderson</span>

        </div>
    </div>
    <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
        <div class="btn-group" role="group">
            <button type="button" id="stars" class="btn btn-primary" href="#tab1" data-toggle="tab"><span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                <div class="hidden-xs">Profile</div>
            </button>
        </div>
        <div class="btn-group" role="group">
            <button type="button" id="favorites" class="btn btn-default" href="#tab2" data-toggle="tab"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                <div class="hidden-xs">Properties</div>
            </button>
        </div>
        <div class="btn-group" role="group">
            <button type="button" id="following" class="btn btn-default" href="#tab3" data-toggle="tab"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                <div class="hidden-xs">Following</div>
            </button>
        </div>
    </div>

        <div class="well">
      <div class="tab-content">
        <div class="tab-pane fade in active" id="tab1">
          
          
          <h4>My Info</h4>
          {!! Form::open(['method'=>'POST', 'action'=>'UserController@store']) !!}
          <div class="row">
          	<div class="col-md-4">
	          	<div class="form-group">
	          		{!! Form::label('title', 'Username:') !!}
	          		{!! Form::text('title', null, ['class'=>'form-control']) !!}
	          	</div>
          	</div>
						<div class="col-md-4">
							<div class="form-group">
	          		{!! Form::label('fname', 'First Name:') !!}
	          		{!! Form::text('fname', null, ['class'=>'form-control']) !!}
	          	</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
	          		{!! Form::label('lname', 'Last Name:') !!}
	          		{!! Form::text('lname', null, ['class'=>'form-control']) !!}
	          	</div>
	          </div>
						
						</div>
						 <div class="row">
          	<div class="col-md-4">
	          	<div class="form-group">
	          		{!! Form::label('email', 'Email:') !!}
	          		{!! Form::email('email', null, ['class'=>'form-control']) !!}
	          	</div>
          	</div>
						<div class="col-md-4">
							<div class="form-group">
	          		{!! Form::label('phone', 'Mobile Number:') !!}
	          		{!! Form::number('phone', null, ['class'=>'form-control']) !!}
	          	</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
	          		{!! Form::label('gender', 'Gender:') !!}
	          		{!! Form::select('gender',[''=>'choose Gender','male'=>'Male','female'=>'Female'], null, ['class'=>'form-control']) !!}
	          	</div>
	          </div>
						
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
	          		{!! Form::label('dob', 'Date of Birth:') !!}
								{!! Form::date('dob', null,  ['class'=>'form-control']) !!}
								</div>
							</div>
						</div>

          
          	<div class="form-group">
          		{!! Form::submit('Update Profile', ['class'=>'btn btn-primary']) !!}
          	</div>
          
          {!! Form::close() !!}
          <hr>
          <br>
          
        </div>
        <div class="tab-pane fade in" id="tab2">
          <h3>These are your properties</h3>
          <table class="table">
			<thead>
				<tr>
					<th>Id</th>
					<th>Photo</th>
					<th>Name</th>
					<th>Location</th>
					<th>Type</th>
					<th>Number of Intents</th>
					<th>Created</th>
					<th>Updated</th>
				</tr>
			</thead>
			<tbody>
				@if($properties)
					@foreach($properties as $property)
							<tr>
								<td>{{$property->id}}</td>
								@foreach ($property->photos->slice(0, 1) as $photo)

								<td><img height="40" width="40" style="border-radius: 50%; border:1px solid #ccc;" src="{{$photo ? $photo->path : 'http://placehold.it/400x400'}}" alt=""></td>
								@endforeach
								
								<td><a href="{{route('property.index', $property->id)}}">{{$property->name}}</a></td>
								<td>{{$property->location}}</td>
								<td>{{$property->category ? $property->category->name : 'Not defined'}}</td>
								<td>{{$property->is_active == 1 ? 'Active' : 'Not Active' }}</td>
								<td>{{$property->created_at->diffForHumans()}}</td>
								<td>{{$property->updated_at->diffForHumans()}}</td> 
						</tr>
					@endforeach
				@endif
			</tbody>
					
		</table>
        </div>
        <div class="tab-pane fade in" id="tab3">
          <h3>This is tab 3</h3>
        </div>
      </div>
    </div>
    
    </div>



</div>


@endsection
@section('scripts')
<script>	
	$(document).ready(function() {

$(".btn-pref .btn").click(function () {
    $(".btn-pref .btn").removeClass("btn-primary").addClass("btn-default");
    // $(".tab").addClass("active"); // instead of this do the below 
    $(this).removeClass("btn-default").addClass("btn-primary");   
});

(function activateTabFromHash() { if (location.hash) { var tabLink = document.querySelector('a[href="' + location.hash + '"]'); if (!tabLink) { return false; } tabLink.click(); if (location.hash) {
  setTimeout(function() {
    window.scrollTo(0, 0);
  }, 1);
} } })();

});

	</script>
@stop