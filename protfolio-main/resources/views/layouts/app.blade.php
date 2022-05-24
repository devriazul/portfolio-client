<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title') | {{config('app.name')}}</title>
    <meta name="description" content="">
    <!-- Cnd Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('admin/img/favicon.ico')}}">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('admin/css/bootstrap.min.css')}}">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('admin/css/font-awesome.min.css')}}">
	<!-- nalika Icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('admin/css/nalika-icon.css')}}">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('admin/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/owl.theme.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/owl.transitions.css')}}">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('admin/css/animate.css')}}">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('admin/css/normalize.css')}}">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('admin/css/meanmenu.min.css')}}">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('admin/css/main.css')}}">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('admin/css/morrisjs/morris.css')}}">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('admin/css/scrollbar/jquery.mCustomScrollbar.min.css')}}">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('admin/css/metisMenu/metisMenu.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/metisMenu/metisMenu-vertical.css')}}">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('admin/css/calendar/fullcalendar.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/calendar/fullcalendar.print.min.css')}}">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('admin/css/style.css')}}">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('admin/css/responsive.css')}}">
    <!-- modernizr JS
		============================================ -->
    <script src="{{asset('admin/js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

  @include('layouts.navber.admin.left-navber')
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                <!-- <a href="index.html"><img class="main-logo" src="{{asset('admin/img/logo/logo.png')}}" alt="" /></a> -->
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.navber.admin.top-navber')
        
        <div class="calender-area mg-tb-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="calender-inner m-5">
                          <!-- Success Session -->
                          <div class="row justify-content-center">
                            <div class="col-md-8">
                            @if(session()->has('success'))
                            <div class="alert alert-info" role="alert">
                            <span class="badge bg-success">Success</span>
                            <!-- <button type="button" class="btn-close" disabled aria-label="Close"></button> -->
                            {{session()->get('success')}}
                            </div>
                            @endif
                            </div>
                          </div>
                          <!-- Error Session -->
                          <div class="row justify-content-center">
                            <div class="col-md-8">
                            @if(session()->has('error'))
                            <div class="alert alert-danger" role="alert">
                            <span class="badge bg-danger">error</span>
                            {{session()->get('error')}}
                            </div>
                            @endif
                            </div>
                          </div>
                         <div class="row justify-content-center">
                           <div class="col-md-8">
                            @if ($errors->any())
                              <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                              </div>
                            @endif
                           </div>
                         </div>
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer section -->
        <!-- <div class="row mt-5">
          <div class="col-md-6 mt-5">
            
          </div>
        </div> -->
        
        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row p-5 ">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <p>Copyright © 2022 All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jquery
		============================================ -->
    <script src="{{asset('admin/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
    <!-- wow JS
		============================================ -->
    <script src="{{asset('admin/js/wow.min.js')}}"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="{{asset('admin/js/jquery-price-slider.js')}}"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="{{asset('admin/js/jquery.meanmenu.js')}}"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="{{asset('admin/js/owl.carousel.min.js')}}"></script>
    <!-- sticky JS
		============================================ -->
    <script src="{{asset('admin/js/jquery.sticky.js')}}"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="{{asset('admin/js/jquery.scrollUp.min.js')}}"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="{{asset('admin/js/scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{asset('admin/js/scrollbar/mCustomScrollbar-active.js')}}"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="{{asset('admin/js/metisMenu/metisMenu.min.js')}}"></script>
    <script src="{{asset('admin/js/metisMenu/metisMenu-active.js')}}"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="{{asset('admin/js/sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('admin/js/sparkline/jquery.charts-sparkline.js')}}"></script>
    <!-- calendar JS
		============================================ -->
    <script src="{{asset('admin/js/calendar/moment.min.js')}}"></script>
    <script src="{{asset('admin/js/calendar/fullcalendar.min.js')}}"></script>
    <script src="{{asset('admin/js/calendar/fullcalendar-active.js')}}"></script>
	<!-- float JS
		============================================ -->
    <script src="{{asset('admin/js/flot/jquery.flot.js')}}"></script>
    <script src="{{asset('admin/js/flot/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('admin/js/flot/curvedLines.js')}}"></script>
    <script src="{{asset('admin/js/flot/flot-active.js')}}"></script>
    <!-- plugins JS
		============================================ -->
    <script src="{{asset('admin/js/plugins.js')}}"></script>
    <!-- main JS
		============================================ -->
    <script src="{{asset('admin/js/main.js')}}"></script>
    <!-- Cnd -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>