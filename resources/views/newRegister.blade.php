<!doctype html>
<html class="no-js " lang="en">


<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

<title>:: MCPSB Job Portal Sign Up</title>
<!-- Favicon-->
<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- Custom Css -->
<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/style.min.css">
</head>

<body class="theme-blush">

<div class="authentication">    
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-12">
               
                <form class="card auth_form" method="POST" action="{{ route('register') }}">
                        @csrf
                    <div class="header">
                    <img src="assets/images/images.png" width="456" height="80" alt="cpsb">
                        <h5>Sign Up</h5>
                        <button class="btn btn-success">
                                    {{ __(' Mandera County Public Service Board') }}
                                </button><p>
                        <span>Register your account here!!</span>
                    </div>
                    @if ($errors->any())
                        <div class="alert alert-warning">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>   
                        @endif        
                    <div class="body">
                        <div class="input-group mb-3">
                      
                         <input type="text" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Username">
                       
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="zmdi zmdi-account-circle"></i></span>
                            </div>
                            
                        </div>
                        <div class="input-group mb-3">
                            
                            <input type="email" id="email" type="email" class="form-control" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter Email">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="zmdi zmdi-email"></i></span>
                            </div>

                           
                        </div>                        
                        <div class="input-group mb-3">
                           
                            <input  id="password" type="password" class="form-control" @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
                           
                            <div class="input-group-append">                                
                                <span class="input-group-text"><i class="zmdi zmdi-lock"></i></span>
                            </div> 
                                                  
                        </div>
                        <div class="input-group mb-3">
                             
                            
                            <input id="password-confirm" type="password" class="form-control"   @error('confirm_password') is-invalid @enderror" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                            <div class="input-group-append">                                
                                <span class="input-group-text"><i class="zmdi zmdi-lock"></i></span>
                            </div> 
                                                     
                        </div>
                  
                        <button type="submit" class="btn btn-success btn-block waves-effect waves-light">
                                    {{ __('Register') }}
                                </button>
                                
                        <div class="signin_with mt-3">
                            <a class="link" href="sign-in.html"></a>
                            <a href="{{ url('/') }}" class="text-sm text-gray-700 underline">Login to your account</a>
                        </div>
                    </div>
                </form>
                <div class="copyright text-center">
                    &copy;
                    <script>document.write(new Date().getFullYear())</script>,
                    <span><a href="templatespoint.net"></a></span>
                </div>
            </div>
            <div class="col-lg-8 col-sm-12">
                <div class="card">
                <img src="assets/images/images.png" width="600" height="80" alt="cpsb">
                <img src="assets/images/mdrlogo.jpg" width="600"  alt="logo"></p>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Jquery Core Js -->
<script src="assets/bundles/libscripts.bundle.js"></script>
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 
</body>


</html>