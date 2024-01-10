



<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themesbox.in/admin-templates/orbiter/html/light-vertical/user-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Mar 2022 14:40:14 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Orbiter is a bootstrap minimal & clean admin template">
    <meta name="keywords" content="admin, admin panel, admin template, admin dashboard, responsive, bootstrap 4, ui kits, ecommerce, web app, crm, cms, html, sass support, scss">
    <meta name="author" content="Themesbox">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Orbiter - Bootstrap Minimal & Clean Admin Template</title>
    <!-- Fevicon -->
    <link rel="shortcut icon" href="{{asset('assets')}}/images/favicon.ico">
    <!-- Start css -->
    <link href="{{asset('assets2')}}/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="{{asset('assets2')}}/css/icons.css" rel="stylesheet" type="text/css">
    <link href="{{asset('assets2')}}/css/style.css" rel="stylesheet" type="text/css">
    <!-- End css -->
</head>
<body class="vertical-layout">
<form method="POST" action="{{route('logged')}}">
        @csrf
    <!-- Start Containerbar -->
    <div id="containerbar" class="containerbar authenticate-bg">
        <!-- Start Container -->
        <div class="container">
            <div class="auth-box login-box">
                <!-- Start row -->
                <div class="row no-gutters align-items-center justify-content-center">
                    <!-- Start col -->
                    <div class="col-md-6 col-lg-5">
                        <!-- Start Auth Box -->
                        <div class="auth-box-right">
                            <div class="card">
                                <div class="card-body">
                                   
                                        <div class="form-head">
                                            <a href="index-2.html" class="logo"><img src="{{asset('assets')}}/images/logo.svg" class="img-fluid" alt="logo"></a>
                                        </div>                                        
                                        <h4 class="text-primary my-4">Log in !</h4>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="email" placeholder="Enter Username here" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="password" placeholder="Enter Password here" required>
                                        </div>
                                        <div class="form-row mb-3">
                                            <div class="col-sm-6">
                                                <div class="custom-control custom-checkbox text-left">
                                                  <input type="checkbox" class="custom-control-input" id="rememberme">
                                                  <label class="custom-control-label font-14" for="rememberme">Remember Me</label>
                                                </div>                                
                                            </div>
                                            <div class="col-sm-6">
                                              <div class="forgot-psw"> 
                                                <a id="forgot-psw" href="user-forgotpsw.html" class="font-14">Forgot Password?</a>
                                              </div>
                                            </div>
                                        </div>                          
                                      <button type="submit" class="btn btn-success btn-lg btn-block font-18">Log in</button>
                                    </form>
                                    <div class="login-or">
                                        <h6 class="text-muted">OR</h6>
                                    </div>
                                    <div class="social-login text-center">
                                        <button type="submit" class="btn btn-primary-rgba font-18"><i class="mdi mdi-facebook mr-2"></i>Facebook</button>
                                        <button type="submit" class="btn btn-danger-rgba font-18"><i class="mdi mdi-google mr-2"></i>Google</button>
                                    </div>
                                    <p class="mb-0 mt-3">Don't have a account? <a href="user-register.html">Sign up</a></p>
                                </div>
                            </div>
                        </div>
                        <!-- End Auth Box -->
                    </div>
                    <!-- End col -->
                </div>
                <!-- End row -->
            </div>
        </div>
        <!-- End Container -->
    </div>
    <!-- End Containerbar -->
    <!-- Start js -->        
    <script src="{{asset('assets2')}}/js/jquery.min.js"></script>
    <script src="{{asset('assets2')}}/js/popper.min.js"></script>
    <script src="{{asset('assets2')}}/js/bootstrap.min.js"></script>
    <script src="{{asset('assets2')}}/js/modernizr.min.js"></script>
    <script src="{{asset('assets2')}}/js/detect.js"></script>
    <script src="{{asset('assets2')}}/js/jquery.slimscroll.js"></script>
    <!-- End js -->
</body>

<!-- Mirrored from themesbox.in/admin-templates/orbiter/html/light-vertical/user-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Mar 2022 14:40:14 GMT -->
</html>
