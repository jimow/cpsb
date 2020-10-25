<!doctype html>
<html class="no-js " lang="en">


<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

<title>:: MCPSB |Job Portal password reset</title>
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
             
                       
           
                <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        
                     
                    <div class="header">

                    <img src="assets/images/images.png" width="600" height="80" alt="cpsb">
                   
                        
                    <!--<h5>Job Portal</h5>-->
                    <button class="btn btn-success">
                                    {{ __(' Mandera County Public Service Board') }}
                                </button><p>
                                @if ($errors->any())
                        <div class="alert alert-warning">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>   
                        @endif       
                    <h5><div class="card-header">{{ __(' Enter Email to get reset link') }}</div></h5>
                    </div> 
                    
                     
                    <div class="body">
                        <div class="input-group mb-3">
                        <input class="form-control" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter Email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <div class="input-group-append">
                                    <span class="input-group-text" >

                                <i class="zmdi zmdi-account-circle"></i>

                                    </span>
                              
                            </div>
                        </div>
                        <div class="input-group mb-3">
                           
                           
                                                 
                       </div>
                        
                        <button type="submit" class="btn btn-success">
                                    {{ __('Reset') }}
                                </button>
                                <a class="btn btn-link" href="{{ url('/') }}">
                                        {{ __('Login ?') }}
                                    </a>
                           
                               
</a>                 
</form>
                    </div>
                
                <div class="copyright text-center">All Rights Reserved
                    &copy;
                    <script>document.write(new Date().getFullYear())</script>,
                  <!--  <span><a href="templatespoint.net">Templates Point</a></span>-->
                </div>
                
            </div>
            <div class="col-lg-8 col-sm-12" float="right">
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