<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no"">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Pariwisata OkeAja</title>
         <link rel="shortcut icon" href="{{url('okeajahome/assets/img/icon.png')}}">        
        <!--load bootstrap.css-->
        <link rel="stylesheet" href="{{url('okeajahome/assets/vendors/Bootstrap_4.1.1/css/bootstrap.css')}}">
        <link rel="shortcut icon" href="{{url('okeajahome/assets/img/icon.png')}}">
        <link rel="stylesheet" href="{{url('okeajahome/assets/css/style.css')}}">

         <!--load custom style.css-->
    </head>
    <body>

        <nav class="navbar fixed-top navbar-expand-md navbar-dark navbar-custom " id="navbarTop">
                <a class="navbar-brand" href="index.html"><img width="150" height="30" class="img-fluid" src="{{url('okeajahome/assets/img/logo.png')}}" alt="logo okeaja"></a>
                 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                    
                <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="login.html">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="register.html">Daftar</a>
                        </li>
                    
                    </ul>
                </div> -->
           
        </nav>

        <div class="container main">
            <div class="bg-login"></div>
            <div class="row login-box">
                <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                    <div class="row no-gutters">
                        <div class="col-sm-6 col-md-6 left">
                            <div class="desc" >
                                <br>
                                <p>Mulai berkontribusi menjadi penggiat pariwisata dan beritahu semua orang.  
                                </p><br>
                                <img class="img-fluid" src="{{url('okeajahome/assets/img/logo.png')}}" alt="logo codefest">
                            </div>
                        </div>

                        
                         <div class="col-sm-6 col-md-6 right">
                            @yield('content')
                            <!--<form>
                                
                                <div class="form-group">
                                    <label for="email">Username</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="username or email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                </div>
                                <button type="submit" class="btn btn-custom">Login</button><br><br>
                                
                            </form> -->
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
        <script src="{{url('okeajahome/assets/js/custom.js')}}"></script>

        
    </body>
</html>