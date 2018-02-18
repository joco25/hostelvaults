@extends('layouts.app')
@section('styles')
    <style>
        .jumbotron{
            background-image: url({{asset('img/hostel.jpg')}});

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

          .lowernav{
            padding-top: 10px;
            border-bottom: 2px solid #cdcdcd; 
          }

          .contact{
            padding-bottom: 10px;
            padding-top: 10px;
            margin-top: 0px
          }

          img{
            max-width: 100px;
            max-height: 100px;
          }


                .input{
                    width:80%;
                    display: inline-block;
                }
          
    </style>
@stop
@section('content')
        <div class="jumbotron">
            <div class="container">
                <div class="row ">
                    <div class="bottom-align-text">
                      <h1>{{$hostel->name}}</h1>
                      <p style="color:#fff;">{{$hostel->location}}</p>
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
    
        
        <div class="lowernav">
            <ul class="list-unstyled ">
                <div class="container list-inline">
                    <li class="active"><a href="#overview">Overview</a></li>
                    <li><a href="#facilities">Facilities</a></li>
                    <li><a href="#policies">Policies</a></li>
                    <li><a href="#">Reviews</a></li>
                </div>
            </ul>
        </div>
    <div class="main" style="background-color: #f7f7f7;">
        <div class="container">
            <div class="row" >
            <br>
                <div class="col-md-4">
                    <ul class="list-unstyled">
                        <li><b>Staff:</b> coming soon</li>
                        <li><b>Cleanliness:</b> coming soon</li>
                        <li><b>Location:</b> coming soon</li>
                    </ul>
                    <a href="#">view all reviews</a>
                </div>
                <div class="col-md-8">
                    <h4>Property Description</h4>
                    <a name="overview"></a>
                    <p>Location: {{$hostel->location}}</p>
                    <p>Cost From: &#8358;{{$hostel->cost}}</p>
                    <p>{{$hostel->description}}
                    </p>
                    <br>
                    
                    @foreach ($hostel->photos as $photo)
                        <div class="col-md-2" >
                        <div class="thumbnail img-responsive"><img src="{{$photo ? $photo->path : 'http://placehold.it/400x250/000/fff'}}" height="50" width="50" alt="">
                        </div>
                    </div>
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>
    <div class="contact grey">
        <div class="container text-center">
            <div class="contacta">Name: <b>{{$hostel->user->name }}</b> <br>
            Mobile Number: <b>{{$hostel->user->phone}}</b> <br>
            Email: <b>{{$hostel->user->email}}</b></div>
            <a href="#" class="btn btn-warning contactabtn">show agent contact</a>
        </div>
    </div>
    <div class="container">
        <div class="latestreview" style="padding-top: 20px;">
            <h4>Latest Review</h4>
            <p>Coming soon</p>
            <a href="#">Read all reviews</a>
        </div>
        <hr>
        <div class="facilities">
            <a name="facilities"></a>
            <h4 style="padding-bottom: 7px;">Hostel Facilities</h4>
            <ul class="list-unstyled">
                <li><b class="facilityheading">FREE</b><p>{{$hostel->hffree}}</p></li>
                <li><b class="facilityheading">GENERAL</b><p>{{$hostel->hfgeneral}}</p></li>
                <li><b class="facilityheading">SERVICES</b><p>{{$hostel->hfservices}}</p></li>
                <li><b class="facilityheading">FOOD AND DRINK</b><p>{{$hostel->hffoodndrink}}</p></li>
            </ul>
        </div>
        <hr>
        <div class="policies">
        <a name="policies"></a>
            <ul class="list-unstyled">
                <li><div class="facilityheading"><b>POLICIES</b></div><p>{{$hostel->policies}}</p></li>
            </ul>
        </div>

    </div>
    

@stop
@section('scripts')
    <script>

     $(document).ready(function(){
        $('.contacta').hide();


    
});
     $('.contactabtn').click(function(event){event.preventDefault();
            $('.contactabtn').hide();
            $('.contacta').show();
        });
        
        
    </script>
@stop