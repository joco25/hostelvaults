@extends('layouts.app')
@section('styles')
<style>
			

.card {
    padding-top: 20px;
    margin: 10px 0 20px 0;
    background-color: rgba(214, 224, 226, 0.2);
    border-top-width: 0;
    border-bottom-width: 2px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

.card .card-heading {
    padding: 0 20px;
    margin: 0;
}

.card .card-heading.simple {
    font-size: 20px;
    font-weight: 300;
    color: #777;
    border-bottom: 1px solid #e5e5e5;
}

.card .card-heading.image img {
    display: inline-block;
    width: 46px;
    height: 46px;
    margin-right: 15px;
    vertical-align: top;
    border: 0;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
}

.card .card-heading.image .card-heading-header {
    display: inline-block;
    vertical-align: top;
}

.card .card-heading.image .card-heading-header h3 {
    margin: 0;
    font-size: 14px;
    line-height: 16px;
    color: #262626;
}

.card .card-heading.image .card-heading-header span {
    font-size: 12px;
    color: #999999;
}

.card .card-body {
    padding: 0 20px;
    margin-top: 20px;
}

.card .card-media {
    padding: 0 20px;
    margin: 0 -14px;
}

.card .card-media img {
    max-width: 100%;
    max-height: 100%;
}

.card .card-actions {
    min-height: 30px;
    padding: 0 20px 20px 20px;
    margin: 20px 0 0 0;
}

.card .card-comments {
    padding: 20px;
    margin: 0;
    background-color: #f8f8f8;
}

.card .card-comments .comments-collapse-toggle {
    padding: 0;
    margin: 0 20px 12px 20px;
}

.card .card-comments .comments-collapse-toggle a,
.card .card-comments .comments-collapse-toggle span {
    padding-right: 5px;
    overflow: hidden;
    font-size: 12px;
    color: #999;
    text-overflow: ellipsis;
    white-space: nowrap;
}

.card-comments .media-heading {
    font-size: 13px;
    font-weight: bold;
}

.card.people {
    position: relative;
    display: inline-block;
    width: 170px;
    height: 300px;
    padding-top: 0;
    margin-left: 20px;
    overflow: hidden;
    vertical-align: top;
}

.card.people:first-child {
    margin-left: 0;
}

.card.people .card-top {
    position: absolute;
    top: 0;
    left: 0;
    display: inline-block;
    width: 170px;
    height: 150px;
    background-color: #ffffff;
}

.card.people .card-top.green {
    background-color: #53a93f;
}

.card.people .card-top.blue {
    background-color: #427fed;
}

.card.people .card-info {
    position: absolute;
    top: 150px;
    display: inline-block;
    width: 100%;
    height: 101px;
    overflow: hidden;
    background: #ffffff;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

.card.people .card-info .title {
    display: block;
    margin: 8px 14px 0 14px;
    overflow: hidden;
    font-size: 16px;
    font-weight: bold;
    line-height: 18px;
    color: #404040;
}

.card.people .card-info .desc {
    display: block;
    margin: 8px 14px 0 14px;
    overflow: hidden;
    font-size: 12px;
    line-height: 16px;
    color: #737373;
    text-overflow: ellipsis;
}

.card.people .card-bottom {
    position: absolute;
    bottom: 0;
    left: 0;
    display: inline-block;
    width: 100%;
    padding: 10px 20px;
    line-height: 29px;
    text-align: center;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

.card.hovercard {
    position: relative;
    padding-top: 0;
    overflow: hidden;
    text-align: center;
    background-color: #f7f7f7;
}

.card.hovercard .cardheader {
    background-color: blue;
    background-size: cover;
    height: 200px;
}

.card.hovercard .avatar {
    position: relative;
    top: -50px;
    margin-bottom: -50px;
}

.card.hovercard .avatar img {
    width: 100px;
    height: 100px;
    max-width: 100px;
    max-height: 100px;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
    border: 5px solid rgba(255,255,255,0.5);
}

.card.hovercard .info {
    padding: 4px 8px 10px;
}

.card.hovercard .info .title {
    margin-bottom: 4px;
    font-size: 24px;
    line-height: 1;
    color: #262626;
    vertical-align: middle;
}

.card.hovercard .info .desc {
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

/*.btn{ border-radius: 50%; width:32px; height:32px; line-height:18px;  }*/

			img{
				min-width: 0px;
				min-height: 0px;
			}

			.list-inline li.active >a {
            background-color: #ccc;
            }

			.vertical-align{
				display: flex;
				align-items: center;
			}





</style>
@stop
@section('content')
<div class="container" >
			<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-6">

            <div class="card hovercard" style=" margin-top: 3em;">
                <div class="cardheader" style="background-color: #3499DB; border-top: 4px solid #0665A2">

                </div>
                <div class="avatar">
                    <img alt="" src="{{ $user->photoname ? asset('images/'.$user->photoname) : asset('img/user.png') }}">
                </div>
                <div class="info">
                    <div class="title">
                        <a target="_blank" href="#">{{$user->name}}</a>
                    </div>
                    <div class="desc">Regular User</div>
                    <div class="desc">{{$user->email}} | {{$user->phone}}</div>
                </div>
                <div class="bottom">
                    <ul class="list-inline">
										  <li class="active"><a href="" class="btn btn-default">Edit Profile</a></li>
										  <li><a href="{{ route('property.index') }}" class="btn btn-default">My Hostels</a></li>
										</ul>
                </div>
            </div>

        </div>

			</div>

          
          {!! Form::model($user, ['method'=>'PATCH', 'action'=>['AgentController@update',$user->id], 'files'=>true])  !!}
          <div class="row">
          	<h4>Change Profile Image</h4>
          	<div class="form-group">
								{!! Form::label('photoname', 'Profile photo:') !!}
								{!! Form::file('photoname', ['class'=>'form-control']) !!}
						</div>
          </div>
          <h4>Basic Info</h4>
          <div class="row">
          	<div class="col-md-4">
	          	<div class="form-group">
	          		{!! Form::label('name', 'Username:') !!}
	          		{!! Form::text('name', null, ['class'=>'form-control']) !!}
	          	</div>
          	</div>
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
	          </div>
					
						 <div class="row">
          	
						<div class="col-md-4">
							<div class="form-group">
	          		{!! Form::label('gender', 'Gender:') !!}
	          		{!! Form::select('gender',[''=>'choose Gender','male'=>'Male','female'=>'Female'], null, ['class'=>'form-control']) !!}
	          	</div>
	          </div>
						<div class="col-md-4">
								<div class="form-group">
	          		{!! Form::label('age', 'Date of Birth:') !!}
								{!! Form::date('dob', null,  ['class'=>'form-control']) !!}
								</div>
							</div>
						</div>
						
{{-- 						<div class="row">
							<div class="col-md-4">
		          	<div class="form-group">
		          		{!! Form::label('pets', 'Do you Keep pets:') !!}
		          		{!! Form::select('pets',[''=>'Select One','yes'=>'Yes','no'=>'No'], null, ['class'=>'form-control']) !!}
		          	</div>
          		</div>
							<div class="col-md-4">
		          	<div class="form-group">
		          		{!! Form::label('cleanliness', 'Cleanliness:') !!}
		          		{!! Form::select('cleanliness',[''=>'Select One','Very Clean'=>'Very Clean','I Try'=>'I Try','little dirt never hurts'=>'little dirt never hurts','Be warned, I am Dirty'=>'Be warned, I am Dirty'], null, ['class'=>'form-control']) !!}
		          	</div>
          		</div>
							<div class="col-md-4">
		          	<div class="form-group">
		          		{!! Form::label('snoring', 'Do you Snore') !!}
		          		{!! Form::select('snoring',[''=>'Select One','yes'=>'Yes','Not So Loud'=>'Not So Loud','no'=>'No'], null, ['class'=>'form-control']) !!}
		          	</div>
          		</div>se
						</div>
						<div class="row">
							<div class="col-md-4">
		          	<div class="form-group">
		          		{!! Form::label('children', 'Kids:') !!}
		          		{!! Form::select('children',[''=>'Select One','yes'=>'Yes','no'=>'No'], null, ['class'=>'form-control']) !!}
		          	</div>
          		</div>
							<div class="col-md-4">
		          	<div class="form-group">
		          		{!! Form::label('party', 'Party Habbits:') !!}
		          		{!! Form::select('party',[''=>'Select One','Very often'=>'Very Often','Once a Week'=>'Once a Week','Not So often'=>'Not So often','Not at all'=>'Not at all'], null, ['class'=>'form-control']) !!}
		          	</div>
          		</div>
							<div class="col-md-4">
		          	<div class="form-group">
		          		{!! Form::label('smoking', 'Smoking') !!}
		          		{!! Form::select('smoking',[''=>'Select One','yes'=>'Yes','no'=>'No'], null, ['class'=>'form-control']) !!}
		          	</div>
          		</div>
						</div>
 --}}
          
          	<div class="form-group">
          		{!! Form::submit('Update Profile', ['class'=>'btn btn-primary']) !!}
          	</div>
          
          {!! Form::close() !!}
          <hr>
          <br>
          
</div>      

@endsection
@section('scripts')
<script>	
	

	</script>
@stop