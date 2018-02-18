@extends('layouts.app')
@section('styles')
	<style>
		html, body{height:100%; margin:0;padding:0}
 
.container-fluid{
  height:100%;
  display:table;
  width: 100%;
  padding: 0;
}
 
.row-fluid {height: 100%; display:table-cell; vertical-align: middle;}
 
.centering {
  float:none;
  margin:0 auto;
}
	</style>
@stop
@section('content')
<div class="container">
<div class="row" style="padding-top:5em; padding-bottom:5em;">
	<div class="col-md-12">
		<div class="col-md-6">
			 <div class="container-fluid" style="background-color: #27ae60; border-radius: 10px; color:#fff; padding: 3em; margin-bottom: 2em;">
    <div class="row-fluid">
        <div class="centering text-center">
            <h3>Hi! Do you have a Room and looking to share?</h3>
            <p class="lead"> connect with a roommate </p>
      			<a class="btn btn-primary" href="{{ route('user.create') }}">come here</a>
        </div>
    </div>
</div>
		</div>
		<div class="col-md-6">
			 <div class="container-fluid" style="background-color: #e74c3c; border-radius: 10px; color:#fff; padding: 3em;">
    <div class="row-fluid">
        <div class="centering text-center">
            <h3>Hello! Are you looking for a Roommate with a room?</h3>
            <p class="lead"> to share a with</p>
      			<a class="btn btn-primary" href="{{ route('display.index') }}">come here</a>
        </div>
    </div>
</div>
		</div>
	</div>
</div>
</div>
@endsection