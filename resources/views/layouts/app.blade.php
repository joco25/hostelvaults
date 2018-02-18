<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hostelvault</title>
        

        <!-- Bootstrap Core CSS -->
        <link href="{{asset('css/app.css')}}" rel="stylesheet">

        <!-- Bootstrap Core CSS -->
        <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">



        <!-- Custom CSS -->
            <link href="{{asset('css/modern-business.css')}}" rel="stylesheet">

            <!-- Custom Fonts -->
            <link href="{{asset('font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

            <!-- google fonts -->
            <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto+Slab" rel="stylesheet">

           @yield('styles')
           <style>
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

 .slide{
    margin-bottom: 0px;
 }
           </style>
           <!-- jQuery -->
    <script src="{{asset('js/jquery.js')}}"></script>
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
                <a class="navbar-brand logo" href="{{ url('/') }}">
                    <img src="{{asset('img/logo.png')}}"  alt="">
                </a>
            

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right list-group top-right"  style="background-color: #3498db;">
                   <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li><a href="{{ route('agent.create') }}" class="btn orange">Add Hostel</a></li>
                        <li style="padding-left: 10px; padding-right: 10px;"><a href="{{ route('user.create') }}" class="btn red" >Rent Your Room</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu" style="background-color: #3498db;">
                                <li><a href="{{ route('profile.index') }}">My Account</a></li>
                                <li >
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


    

        @yield('content')






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

   </div>
    

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>



    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })

    </script>
    <!-- Scripts -->

    {{-- custom scripts --}}
    @yield('scripts')
</body>
</html>
