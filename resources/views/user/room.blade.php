@extends('layouts.app')
@section('styles')
	<style>
		.roominfo{
			border: 1px solid #ccc;
			padding:10px;
			margin-top: 20px;
		}
	
		.roominfo>ul{
			margin-top: 10px;
		}

		.userinfo{
			border: 1px solid #ccc;
			padding:10px;
			margin-top: 20px;
		}
	
		.userinfo>ul{
			margin-top: 10px;
		}		

		.facilities{
			border: 1px solid #ccc;
			padding:10px;
			margin-top: 20px;
			background-color: #f7f7f7;
		}
	
		.facilities>ul{
			-webkit-column-count: 3;
	    -moz-column-count: 3;
	    column-count: 3;
		}

		.value{
			/*float: right;*/
		}

		.roomcriteria{
			padding:10px;
			margin-top: 20px;
		}
	
		.roomcriteria>ul{
			-webkit-column-count: 3;
	    -moz-column-count: 3;
	    column-count: 3;
		}

		.hide-bullets {
		    list-style:none;
		    margin-left: -40px;
		    margin-top:20px;
		}

		.thumbnail {
		    padding: 0;
		}

		.carousel-inner>.item>img, .carousel-inner>.item>a>img {
		    width: 100%;
		}

		img{
			min-height: 0px;
			min-width: 0px;
		}
	
	</style>
@stop
@section('content')
	<div class="container">
		<div class="col-md-8">
			<h2>{{$room->name}}</h2>
			<p>{{$room->location}}</p>
        <div class="photos">
        	<div id="main_area">
			        <!-- Slider -->
			        <div class="row">
			        <div class="col-md-12">
			        	<ul class="bxslider">
                    @foreach ($room->photos->slice(0, 3) as $photo)
                        
                        <li><img width="100%" src="{{$photo->path ? $photo->path : 'http://placehold.it/400x250/000/fff'}}" alt="">
                        </li>
                    @endforeach
                    </ul>
                </div>
			        </div>

			    </div>
        </div>
        <div class="facilities">
        <h4>Facilities</h4>
        	<ul class="list-unstyled">
        		<li class="on">Smoking: <span class="value"><b>{{$room->hfsmoking}}</b></span></li>
        		<li class="on">Washing machine: <span class="value"><b>{{$room->hfwashingmachine}}</b></span></li>
        		<li class="on">Cable tv: <span class="value"><b>{{$room->hftv}}</b></span></li>
        		<li class="on">Pets allowed: <span class="value"><b>{{$room->hfpets}}</b></span></li>
        		<li class="on">Internet: <span class="value"><b>{{$room->hfinternet}}</b></span></li>
        		<li class="on">Furnished: <span class="value"><b>{{$room->rffurnished}}</b></span></li>
        		<li class="on">Private bath: <span class="value"><b>{{$room->hfprivatebath}}</b></span></li>
        	</ul>
        </div>

        <div class="description">
        	<h4>Description</h4>
        	<p>{{$room->description}}</p>
        </div>
        
        <div class="roomcriteria">
        <hr>
        <h4>Room Criteria</h4>
        	<ul class="list-unstyled">
        		<li>Gender: <span class="value"><b>{{$room->pgender}}</b></span> </li>
        		<li>Smoker: <span class="value"><b>{{$room->psmoking}}</b></span> </li>
        		<li>Cleaniness: <span class="value"><b>{{$room->pcleanliness}}</b></span> </li>
        		<li>Age: <span class="value"><b>{{$room->page}}</b></span> </li>
        		<li>Pets: <span class="value"><b>{{$room->ppets}}</b></span> </li>
        		<li>Snoring: <span class="value"><b>{{$room->psnoring}}</b></span> </li>
        		<li>Children: <span class="value"><b>{{$room->pchildren}}</b></span> </li>
        		<li>Party Habbits: <span class="value"><b>{{$room->pparty}}</b></span> </li>
        	</ul>
        	<br>
        </div>	
		</div>
		<div class="col-md-4">
			<div class="roominfo">
				<h4>All information about Room</h4>
				<ul class="list-group">
				  <li class="list-group-item">Charge <span class="badge"><b>&#8358;{{$room->cost}}</b></span></li>
				  <li class="list-group-item">Type <span class="badge">{{$room->category->name}}</span></li> 
				  <li class="list-group-item">Location <span class="badge">{{$room->location}}</span></li> 
				  <li class="list-group-item">Posted <span class="badge">{{$room->created_at->diffForHumans()}}</span></li> 
				</ul>
			</div>
			<div class="userinfo ">
				<div class="thumbnail">
					<img src="{{$room->user->photoname}}" alt="" >
				</div>
				<div class="userheader text-center">
					{{$room->user->name}} <br>
					{{-- {{$room->user->age()}} --}} 16+ Years Old
				</div>
				<hr>
				<ul class="list-unstyled">
					<li>Smoker: <b>{{$room->user->smoking}}</b></li>
					<li>Party Habbit: <b>{{$room->user->party}}</b></li>
					<li>Snoring: <b>{{$room->user->snoring}}</b></li>
				</ul>
			</div>
		</div>
		
	</div>
	

@stop
@section('scripts')
<!-- bxSlider Javascript file -->
<script src="{{asset('bxslider/jquery.bxslider.min.js')}}"></script>
<!-- bxSlider CSS file -->
<link href="{{asset('bxslider/jquery.bxslider.css')}}" rel="stylesheet" />
    <script>
$(document).ready(function() {
    $('.bxslider').bxSlider();
    
    
});


    </script>

@stop