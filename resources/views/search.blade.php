@extends('layouts.app')
@section('styles')
    <style>
         .jumbotron{
            background-image: url(img/hostel.jpg);

/*background: #00d2ff;*/ /* fallback for old browsers */
/*background: -webkit-linear-gradient(to left, #00d2ff , #3a7bd5);  Chrome 10-25, Safari 5.1-6 
background: linear-gradient(to left, #00d2ff , #3a7bd5); *//* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            height:300px;
            margin-bottom: 0px;
        }
         .bottom-align-text {
            margin-top: 120px;
          }
          .searchbox{
            padding-top: 15px;
            background-color: #38454f;
          }

          .span2{
            width: 40%;
            display: inline-block; 
          }

          .jumbotron h1{
            color: #ffffff !important;
          }

          .glyphicon { margin-right:5px; }
.thumbnail
{
    margin-bottom: 20px;
    padding: 0px;
    -webkit-border-radius: 0px;
    -moz-border-radius: 0px;
    border-radius: 0px;
}

.item.list-group-item
{
    float: none;
    width: 100%;
    background-color: #fff;
    margin-bottom: 10px;
}
.item.list-group-item:nth-of-type(odd):hover,.item.list-group-item:hover
{
    background: #428bca;
}

.item.list-group-item .list-group-image
{
    width:30%;
    margin-right: 10px;
}
.item.list-group-item .thumbnail
{
    margin-bottom: 0px;
    width: 30%;
    display: inline-block;
    float:left;
}
.item.list-group-item .caption
{
    float:left;
    width:70%;
    padding: 9px 9px 0px 9px;
}
.item.list-group-item:nth-of-type(odd)
{
    background: #eeeeee;
}

.item.grid-group-item .thumbnail{
    width: 100%;
}

.item.list-group-item:before, .item.list-group-item:after
{
    display: table;
    content: " ";
}

.item.list-group-item img
{
    float: left;
}
.item.list-group-item:after
{
    clear: both;
}
.list-group-item-text
{
    margin: 0 0 11px;
}


img{
    min-height: 0%;
    min-width: 0%;
/*    padding:10px;*/
}

.thumbnail{
    height: 208px;
    width: 100%;
    overflow: hidden;
    background-position: center center;
    background-size: cover;
}

 .input{
                    width:80%;
                    display: inline-block;
                }
.action{
    border-top: 1px dotted #f0f0f0;
    margin: 0 3px;
}

@media only screen and (max-width: 80em){
   .item.grid-group-item .thumbnail, .item.list-group-item .thumbnail, .thumbnail{
        height:168px;
    }
}

@media only screen and (max-width: 40em){
   .item.list-group-item .thumbnail{
        height:86px;
        font-size: 1em;
    }
}
    </style>
@stop
@section('content')
    {{-- Top --}}
    <div class="jumbotron">
            <div class="container">
                <div class="row ">
                    <div class="bottom-align-text">
                      <h1>Hostels in Ilorin</h1>
                      <p style="color:#fff;">we have {{$hostelcount}} hostels</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="searchbox">
            <div class="container">
                <div id="searcharea">
                  {!! Form::open(array('route' => 'search.store', 'id'=>'searchForm', 'class'=>' col-sm-12')) !!}
                    <div class="form-group col-sm-6 col-md-6 searchbar">
                        {!! Form::text('search', null,
                           array('required',
                                'class'=>'form-control input',
                                'placeholder'=>'Search by name, area, school for hostel and room...')) !!}
                        {!! Form::submit('Go',
                                array('class'=>'btn btn-warning')) !!}
                    </div>
                {!! Form::close() !!}
            </div>
            </div>
        </div>
    
    {{-- End Top --}}
    <div class="container">
        <div class="well well-sm">
        <strong>Display</strong>
        <div class="btn-group">
            <a href="#" id="list" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-th-list">
            </span>List</a> <a href="#" id="grid" class="btn btn-default btn-sm"><span
                class="glyphicon glyphicon-th"></span>Grid</a>
        </div>
    </div>
    <div id="properties">
        <hr> <h3>Hostel Search Results</h3> <hr>
        @if($properties->count())

        @foreach($properties as $property)
            <div class="item clear-fix col-xs-12 col-md-6 col-lg-4" style="margin-bottom: 20px;">
            <div style="padding:10px; background-color: #f6f6f6;">
                <div class="thumbnail " style="opacity: 1;" >
                <ul class="bxslider">
                    @foreach ($property->photos->slice(0, 3) as $photo)
                        
                        <li><img width="100%" src="{{$photo->path ? $photo->path : 'http://placehold.it/400x250/000/fff'}}" alt="">
                        </li>
                    @endforeach
                    </ul>
                    </div>
                    <div class="caption">
                    <h6>HOSTEL</h6>
                    <h4 class="group inner list-group-item-heading">
                        <a href="{{ route('hostel.show',$property->id) }}">{{$property->name}}</a></h4>
                    <p class="group inner list-group-item-text">
                        {{$property->location. ', ' . str_limit($property->description,30)}}<br>
                        <a href="{{ route('hostel.show',$property->id) }}">read more...</a>
                    </p>
                    </div>
                    <div class="row action" >
                        
                            <div class="col-xs-12 col-md-6">
                                <span>price from: &#8358;{{$property->cost}}</span>
                            </div><br>
                            <div class="col-xs-12">
                                <a class="btn btn-warning"
                                style="float:right;" href="{{ route('hostel.show',$property->id) }}">Continue</a>
                            </div>
                        
                    </div>

            </div>
        </div>
        @endforeach
        <a href="{{ route('find.hostels', $query) }}">view all hostel results</a>
        @else
            <h4>No Hostels Found for <b>{{$query}}</b></h4>
        @endif
      </div>
      </div>
      <br>
      <div class="container">
      <div id="rooms" class="row clear-fix">
        <hr> <h3>Room Search Results</h3> <hr>
        @if($rooms->count())
            @foreach($rooms as $room)
            <div class="item clear-fix col-xs-12 col-md-6 col-lg-4" style="margin-bottom: 20px;">
            <div style="padding:10px; background-color: #f6f6f6;">
                <div class="thumbnail" style="opacity: 1;" >
                        <ul class="bxslider">
                        @foreach ($room->photos->slice(0, 3) as $photo)
                            
                            <li><img width="100%" src="{{$photo->path ? $photo->path : 'http://placehold.it/400x250/000/fff'}}" alt="">
                            </li>
                        @endforeach
                        </ul>
                    </div>
                    <div class="caption">
                    <h6>ROOM</h6>
                    <h4 class="group inner list-group-item-heading">
                        <a href="{{ route('display.show',$room->id) }}">{{$room->name}}</a></h4>
                    <p class="group inner list-group-item-text">
                        {{$room->location. ', ' . str_limit($room->description,30)}}<br>
                        <a href="{{ route('display.show',$room->id) }}">read more...</a>
                    </p>
                    </div>
                    <div class="row action" >
                        
                            <div class="col-xs-12 col-md-6">
                                <span>price from: &#8358;{{$room->cost}}</span>
                            </div><br>
                            <div class="col-xs-12">
                                <a class="btn red"
                                style="float:right;" href="{{ route('display.show',$room->id) }}">Continue</a>
                            </div>
                        
                    </div>

            </div>
        </div>
        @endforeach            
        <a href="{{ route('find.rooms', $query) }}">view all room results</a>
        @else
            <h4>No Rooms Found for <b>{{$query}}</b></h4>
        @endif
        
            

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
    $('#list').click(function(event){event.preventDefault();$('#properties .item').addClass('list-group-item');});
    $('#grid').click(function(event){event.preventDefault();$('#properties .item').removeClass('list-group-item');$('#properties .item').addClass('grid-group-item');});

    $('#list').click(function(event){event.preventDefault();$('#rooms .item').addClass('list-group-item');});
    $('#grid').click(function(event){event.preventDefault();$('#rooms .item').removeClass('list-group-item');$('#rooms .item').addClass('grid-group-item');});
});
    </script>
@stop