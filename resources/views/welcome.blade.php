<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hostelvault</title>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">

        <!-- Custom CSS -->
            <link href="css/modern-business.css" rel="stylesheet">

            <!-- Custom Fonts -->
            <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

            <!-- google fonts -->
            <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto+Slab" rel="stylesheet">

            <style>
            /* CUSTOMIZE THE CAROUSEL
            -------------------------------------------------- */

                .carousel {
                  margin-bottom: 60px;
                }

                .carousel-control {
                  top: 76%;
                }

                .carousel-caption {
                  z-index: 10;
                }

                .carousel .item {
                  height: 500px;
                  background-color:#bbb;
                  overflow:hidden;
                }
                .carousel img {
                  position: absolute;
                  top: 0;
                  left: 0;
                  min-width: 100%;
                  height: 500px;
                }
                #searchForm {
                        position:absolute;
                        top:40%;
                    }

                .input{
                    width:80%;
                    display: inline-block;
                }

                

                    @media(max-width: 768px) {

                      .carousel-inner>.item>img, .carousel-inner>.item>a>img {
                        max-width:inherit;
                      }

                      .carousel-caption p {
                        margin-bottom: 20px;
                        font-size: 21px;
                        line-height: 1.4;
                      }
                    
                    #searcharea{
                        text-align: center;
                        top:40%;
                    }

                    }

                    @media(max-width: 1250px) {
                       #searcharea{
                        text-align: center;
                        top:40%;

                    } 
                    
                    .carousel .item {
                  height: 400px;
                  background-color:#bbb;
                  overflow:hidden;
                }
                    }

                    img{
                        max-width:310px;
                        max-height:180px;
                        overflow: hidden;
                    }

                    .marketing{
                        text-align: center;
                    }
        
        /*Social media*/

/*=========================
  Icons
 ================= */
    .social{
        padding-bottom: 30px;
    }
/* footer social icons */
ul.social-network {
    list-style: none;
    display: inline;
    margin-left:0 !important;
    padding: 0;
}
ul.social-network li {
    display: inline;
    margin: 0 5px;
}


    /* footer social icons */
    .social-network a.icoRss:hover {
        background-color: #F56505;
    }
    .social-network a.icoFacebook:hover {
        background-color:#3B5998;
    }
    .social-network a.icoTwitter:hover {
        background-color:#33ccff;
    }
    .social-network a.icoGoogle:hover {
        background-color:#BD3518;
    }
    .social-network a.icoVimeo:hover {
        background-color:#0590B8;
    }
    .social-network a.icoLinkedin:hover {
        background-color:#007bb7;
    }
.social-network a.icoRss:hover i, .social-network a.icoFacebook:hover i, .social-network a.icoTwitter:hover i,
.social-network a.icoGoogle:hover i, .social-network a.icoVimeo:hover i, .social-network a.icoLinkedin:hover i {
    color:#fff;
}
a.socialIcon:hover, .socialHoverClass {
    color:#44BCDD;
}

.social-circle li a {
    display:inline-block;
    position:relative;
    margin:0 auto 0 auto;
    -moz-border-radius:50%;
    -webkit-border-radius:50%;
    border-radius:50%;
    text-align:center;
    width: 50px;
    height: 50px;
    font-size:20px;
}
.social-circle li i {
    margin:0;
    line-height:50px;
    text-align: center;
}

.social-circle li a:hover i, .triggeredHover {
    -moz-transform: rotate(360deg);
    -webkit-transform: rotate(360deg);
    -ms--transform: rotate(360deg);
    transform: rotate(360deg);
    -webkit-transition: all 0.2s;
    -moz-transition: all 0.2s;
    -o-transition: all 0.2s;
    -ms-transition: all 0.2s;
    transition: all 0.2s;
}
.social-circle i {
    color: #fff;
    -webkit-transition: all 0.8s;
    -moz-transition: all 0.8s;
    -o-transition: all 0.8s;
    -ms-transition: all 0.8s;
    transition: all 0.8s;
}

.social a {
 background-color: #7c8a95;   
}

    /*Amazing places in Ilorin*/
  .places img {
  filter: gray; /* IE6-9 */
  -webkit-filter: grayscale(1); /* Google Chrome, Safari 6+ & Opera 15+ */
    -webkit-box-shadow: 0px 2px 6px 2px rgba(0,0,0,0.75);
    -moz-box-shadow: 0px 2px 6px 2px rgba(0,0,0,0.75);
    box-shadow: 0px 2px 6px 2px rgba(0,0,0,0.75);
    margin-bottom:20px;
}

.places img:hover {
  filter: none; /* IE6-9 */
  -webkit-filter: grayscale(0); /* Google Chrome, Safari 6+ & Opera 15+ */
 
}

    .megadisplay{
         position:relative;
        display: inline-block;
        float: left;
    }
    .megadisplay img{
        max-height: 152px;
        overflow: hidden;
    }
    .megatext {
        left: 0;
        position:absolute;
        text-align:center;
        top: 30px;
        width: 100%
    }


    </style>

        <!-- jQuery -->
    <script src="js/jquery.js"></script>



    </head>
    <body>
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container"><a name="top"></a>
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="img/logo.png" alt="">
                </a>
            

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right top-right"  style="background-color: #3498db;">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu" style="background-color: #3498db;">
                                <li><a href="{{ route('profile.index') }}">My Account</a></li>
                                <li>
                                    <a href="{{ url('/logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
          </div>
        </div>
    </nav>
                
                <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('img/bikes.jpg');"></div>
                <div class="carousel-caption">
                    <h3>Look for Convinience</h3>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('img/room.jpg');"></div>
                <div class="carousel-caption">
                    <h3>Affordability with Luxury</h3>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('img/bed.jpg');"></div>
                <div class="carousel-caption">
                    <h3>The very best At your Finger Tips</h3>
                </div>
            </div>

            {{-- <form class="col-sm-12" role="search" id="searchForm">
                    <div class="form-group col-sm-4 col-sm-offset-4">
                      <div class="input-group input-group-lg center-block">
                        <input type="search" class="  search-input form-control " placeholder="Search Hostels or Rooms" id="searchbox" name="q" autocomplete="off">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
                      </div>
                    </div>
                  </form> --}}
                <div id="searcharea">
                  {!! Form::open(array('route' => 'search.store', 'id'=>'searchForm', 'class'=>' col-sm-12')) !!}
                    <div class="form-group col-sm-4 col-sm-offset-4 col-md-4 col-md-offset-4 searchbar">
                        {!! Form::text('search', null,
                           array('required',
                                'class'=>'form-control input',
                                'placeholder'=>'Search by name, area, school for hostel and room...')) !!}
                        {!! Form::submit('Search',
                                array('class'=>'btn btn-default')) !!}
                    </div>
                {!! Form::close() !!}
            </div>

        </div>
        

                
                

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header text-center">
                    Featured Hostels
                </h3>
            </div>
            @foreach($properties as $property)
            <div class="col-md-4">
                <div class="panel panel-default">
                    
                    <div class="panel-body">
                            @foreach ($property->photos->slice(0, 1) as $photo)

                                <img src="{{$photo ? $photo->path : 'http://placehold.it/400x400'}}" alt="">
                            @endforeach
                                
                        
                    </div>
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i> {{$property->name}}</h4>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
        <!-- /.row -->

        <div class="row sec">
            <div class="col-lg-12 text-center">
                <h3 class="page-header text-center">
                   Looking For a Roommate?
                </h3>
                <p class="text-center">
                    Connect with a roommate today, wether you are looking to share your room with that perfect rommy or you are looking for that perfect room to share. <br> We have all you need.
                    
                </p>
                <a href="{{ route('looking') }}" class="btn btn-primary">Come Here</a>
            </div>
        </div>


        <div class="row sec">
            <h3 class="page-header text-center">
                   Our Hostels
            </h3>
                <div class="row places">
                    @foreach($props as $prop)
                    <div class="col-md-3 col-sm-4 col-xs-6 clear-fix megadisplay">
                    @foreach ($prop->photos->slice(0, 1) as $photo)

                                <img class="img-responsive" src="{{$photo ? $photo->path : 'http://placehold.it/400x400'}}" alt="">
                            @endforeach
                            <div class="megatext">
                                {{$prop->name}}
                            </div>
                    </div>
                    @endforeach
                    <div class="text-center"><a style="display: inline-block; margin: 2px auto;" href="{{ route('hostel.index') }}">Show all hostels</a></div>
                </div>
        </div>
    </div>
    <div class="grey">
        
        <div class="row sec">
        <div class="container">
            <div class="col-lg-12 text-center">
                <h3 class="page-header text-center">
                   Are you a Hostel Agent?
                </h3>
                <p class="text-center">
                    Are you looking to expand your hostel audience reach, tired of having empty rooms, tired of having deliquent clients, or simply looking for more business.
                    <br>We have just the resources to take your hostels to that next level.
                    
                </p>
                <a href="{{ route('agent.create') }}" class="btn btn-lg  btn-warning">Add Your Hostel</a>
            </div>    
          </div>
        </div>
    </div>
    <div class="container sec">
        
        <section class="marketing">
        <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <i class="fa fa-heart fa-4x "></i>
                        <h3>We know Hostels!</h3>
                        <p>We live and breathe hostelling! We know the thousands of hostels like no one else can.</p>
                        
                    </div>
                    <div class="col-md-4">
                        <i class="fa  fa-check-circle-o fa-4x "></i>
                        <h3>We put you first</h3>
                        <p>If you are looking for luxury or conveince or trust, maybe even the variety of choices. This is the place for you. We have all you need and it is all about what you want.</p>
                                        
                    </div>
                    <div class="col-md-4">
                        <i class="fa fa-thumbs-up fa-4x "></i>
                        <h3>We have the widest reach</h3>
                        <p>Are your a Landlord or an Agent give your hostels wider coverage, make your hostels known. We have the widest reach.</p>
                    </div>
                </div>
            </div>
    </section>



    </div>
        

       

        

        <!-- Footer Row -->
    <div class="row grey" style="padding-bottom: 15px; padding-top: 15px;">
        <div class="container">
        <div class="footerlinks" style="margin-bottom: 20px;">
            <div class="col-md-4">
                
                <ul>
                    <li><h4>Quick links</h4></li>
                    <li><a href="{{ route('hostel.index') }}">Hostels</a></li>
                    <li><a href="{{ route('display.index') }}">Rooms</a></li>
                    <li><a href="{{ route('feedback') }}">Feedback</a></li>
                    <li><a href="{{ route('sitemap') }}">Sitemap</a></li>
                </ul>
            </div>
            <!-- /.col-md-4 -->
            <div class="col-md-4">
                
                 <ul>
                    <li><h4>About us</h4></li>
                    <li><a href="{{ route('about') }}">HostelVault</a></li>
                    <li><a href="{{ route('user.create') }}">Room Signup</a></li>
                    <li><a href="{{ route('agent.create') }}">Hostel Signup</a></li>
                    <li><a href="{{ route('policy') }}">Privacy Policy</a></li>
                </ul>
            </div>
            <!-- /.col-md-4 -->
            <div class="col-md-4">
                
                <ul>   
                    <li><h4>Find us on</h4></li>
                    <li>Facebook</li>
                    <li>Twitter</li>
                    <li>Google +</li>
                    <li>LinkedIn</li>
                </ul>
            </div><!-- /.col-md-4 -->
        </div>
            
        <div class="row" style="margin-top: 7em; ">
            <div class="share text-center" >
                
                <h4 style="padding-bottom: 10px; margin-top: 40px; border-bottom: 1px dotted #fff">Share On</h4>
                <span class="social">
                    <ul class="social-network social-circle">
                       
                        <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                    </ul>   
                </span>
            </div>
        </div>


        </div>
           {{-- container --}} 
    </div>
    <!-- /.row -->

             <!-- Footer -->
        <footer>
            

            <div class="row">
                <div class="container">
                    <div class="col-lg-4">
                        <a href="#top">back to the top</a>
                    </div>
                    <div class="col-lg-4 text-center">
                        <p>Copyright &copy; HostelVault 2016</p>
                    </div>
                    <div class="col-lg-4 text-right">
                        Powered by <a href="http://joco25.com">Joco25</a>
                    </div>
                </div>
            </div>
        </footer>

   


    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    
    
    
    <script>
     

    $(document).ready(function(){
    

     // Script to Activate the Carousel 
        $('.carousel').carousel({
            interval: 5000 //changes the speed
        }); 



    });


    </script>
    </body>
</html>
