<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no"">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>OkeAja | User Submission</title>
        <link rel="shortcut icon" href="{{url('okeajahome/assets/img/icon.png')}}">
        <!--load bootstrap.css-->
        <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
        <link rel="stylesheet" href="{{url('okeajahome/assets/vendors/Bootstrap_4.1.1/css/bootstrap.css')}}">

         <!--load custom style.css-->
         <link rel="stylesheet" href="{{url('okeajahome/assets/css/style.css')}}">
         <link rel="stylesheet" href="{{url('okeajahome/assets/css/style2.css')}}">
    </head>
    <body>

       <nav class="colorlib-nav"  role="navigation">
            <div class="top-menu">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4">
                            <a class="navbar-brand" href="/home"><img src="{{url('okeajahome/assets/img/logo.png')}}"  width="auto"  alt="logo"></a>
                        </div>
                        <!-- <div class="col-md-4 offset-md-4 text-right menu-1">
                            <ul>
                                
                                <li><a href="login.html">Login</a></li>
                                <li><a href="register.html">Register</a></li>
                            </ul>
                        </div> -->
                    </div>
                </div>
            </div>
        </nav> 

<div id="page">
        <div class="container main">
            <div class="bg-user"></div>
            <div class="row user-box">
                <div class="col-md-6 offset-md-1 col-lg-10 ">
                    <div class="row no-gutters">
                        <div class="col-sm-6 col-md-6 left">
                            <div class="desc" align="center">
                                <br>
                                <p style="font-weight: bold">Mulai berkontribusi menjadi penggiat pariwisata dan beritahu semua orang.  
                                </p><br>
                                <img class="img-fluid" src="{{url('okeajahome/assets/img/logo_white.png')}}" alt="logo">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 right">
                            @yield('content')
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!--load jquery.js-->
        <script src="{{url('okeajahome/assets/js/jquery-3.3.1.js')}}"></script>

        <!--load popper.js-->
        <script src="{{url('okeajahome/assets/js/popper.js')}}"></script>

         <!--load bootstrap.js-->
        <script src="{{url('okeajahome/assets/vendors/Bootstrap_4.1.1/js/bootstrap.js')}}"></script>
        <script src="{{url('okeajahome/assets/js/bootstrap.miin.js')}}"></script>
        <script src="{{url('okeajahome/assets/js/custom.js')}}"></script>
        <script src="{{url('okeajahome/assets/js/main.js')}}"></script>
    </body>
</html>