<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no"">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Pariwisata OkeAja</title>
         <link rel="shortcut icon" href="{{('okeajahome/assets/img/icon.png')}}">        
        <!--load bootstrap.css-->
        <link rel="stylesheet" href="{{('okeajahome/assets/vendors/Bootstrap_4.1.1/css/bootstrap.css')}}">

         <!--load custom style.css-->
         <link rel="stylesheet" href="{{('okeajahome/assets/css/style.css')}}">
    </head>
    <body>

        <nav class="navbar fixed-top navbar-expand-md navbar-dark navbar-custom " id="navbarTop">
            <a class="navbar-brand" href="index.html"><img width="150" height="30" class="img-fluid" src="{{('okeajahome/assets/img/logo.png')}}" alt="logo codefest"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
           <!--  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="login.html">Login</a>
                    </li>
                    <li class="nav-item active">
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
                            <div class="desc" align="center">
                                <br>
                                <p>Mulai berkontribusi menjadi penggiat pariwisata dan beritahu semua orang.  
                                </p><br>
                                <img class="img-fluid" src="{{url('okeajahome/assets/img/logo.png')}}" alt="logo OkeAja">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 right">
                             <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <h3>Isikan data dirimu</h3>

                                <div class="form-group">

                                        <label for="name" >{{ __('Name') }}</label>

                                     <!-- <div class="col-md-6"> -->

                                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required placeholder="Masukan nama" autofocus>

                                            @if ($errors->has('name'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif

                                   <!--  </div> -->

                                    <!-- <label for="nama">Nama Lengkap</label> 
                                    <input type="text" class="form-control" id="nama" placeholder="masukkan nama lengkap"> -->
                                </div>

                                <!-- <div class="form-group">
                                    <label for="jns_klmn">Jenis Kelamin</label>
                                    <select class="form-control">
                                        <option>Pilih jenis kelamin</option>
                                        <option>Laki-Laki</option>
                                        <option>Perempuan</option>
                                    </select>
                                </div> -->

                                <div class="form-group">

                                    <label for="email" ">{{ __('E-Mail Address') }}</label>

                                    <!-- <div class="col-md-6"> -->
                                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required placeholder="mail@mail.com">

                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    <!-- </div> -->
                                    <!-- <label for="email">Email</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="masukkan email"> -->

                                </div>


                                <!-- <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" id="username" placeholder="masukkan username">
                                </div> -->

                                <div class="form-group">

                                    <label for="password" >{{ __('Password') }}</label>

                                        <!-- <div class="col-md-6"> -->
                                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="6 Karakter atau lebih">

                                            @if ($errors->has('password'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        <!-- </div> -->
                                    <!-- <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="masukkan password"> -->

                                </div>

                                <div class="form-group">
                                    <label for="password-confirm">{{ __('Confirm Password') }}</label>

                                   <!--  <div class="col-md-6"> -->
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="6 Karakter atau lebih">
                                    <!-- </div> -->
                                </div>


                                <div class="form-group offset-md-5">
                                    <!-- <div class="col-md-6 offset-md-4"> -->
                                        <button type="submit" class="btn btn-custom">
                                            {{ __('Daftar') }}
                                        </button>
                                    <!-- </div> -->
                                </div>

                                <!-- <button type="submit" class="btn btn-custom">Daftar</button><br><br> -->

                                <span>Sudah punya akun? <a href="/login">Klik disini!</a></span>
                            </form> 
                        </div>
                    </div>
                </div>
            </div> 
        </div>
        <!--load jquery.js-->
        <script src="{{('okeajahome/assets/js/jquery-3.3.1.js')}}"></script>

        <!--load popper.js-->
        <script src="{{('okeajahome/assets/js/popper.js')}}"></script>

         <!--load bootstrap.js-->
        <script src="{{('okeajahome/assets/vendors/Bootstrap_4.1.1/js/bootstrap.js')}}"></script>
        <script src="{{('okeajahome/assets/js/custom.js')}}"></script>

        
    </body>
</html>