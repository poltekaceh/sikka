<!DOCTYPE html>

<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Admin | Disnaker</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin Theme #1 for " name="description" />
        <meta content="" name="author" />

        <!-- BEGIN GLOBAL MANDATORY STYLES -->

        <!-- <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" /> -->
        <link href="{{asset('assets/fonts_googleapis.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/global/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/global/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/global/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="{{asset('assets/global/plugins/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/global/plugins/select2/css/select2-bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="{{asset('assets/global/css/components.min.css')}}" rel="stylesheet" id="style_components" type="text/css" />
        <link href="{{asset('assets/global/css/plugins.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="{{asset('assets/pages/css/login.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->

    <body class="login">
        <!-- BEGIN LOGO -->
       
        <!-- END LOGO -->
        <!-- BEGIN LOGIN -->
        <div class="content">
            <!-- BEGIN LOGIN FORM -->
            <form class="login-form" action="{{URL::route('masuk')}}" method="POST"><br>

                <!-- <h3 class="form-title font-gray" style="text-align: center;">Dinas Tenaga Kerja Dan Mobilitas Penduduk Aceh</h3> -->

                    <h4 class="content-group" style="text-align: center;"><b>DINAS TENAGA KERJA <br> DAN MOBILITAS PENDUDUK ACEH</b></h4>
                    <br>
                    <center><img width="40%" src="{{asset('assets/images/logoDinas.png')}}"></center>

                    <br>
                    <h4 class="content-group" align="center"><b>Silahkan Login<b><br>
                    <small class="display-block">Pastikan memasukkan username dan password anda dengan benar.</small></h4>

                    <br>

                    @if(Session::has('gagal'))

                        {{Session::get('gagal')}}

                        @endif


                        @if(count($errors) > 0)
                            {{ $errors->first('username')}}
                            {{ $errors->first('password')}}

                        @endif

                <div class="alert alert-danger display-hide">
                    <button class="close" data-close="alert"></button>
                    <span> Maaf, username atau password belum diisi. </span>
                </div>

                <div class="portlet-body form">
                    <form role="form">
                    <div class="form-body">
                        
                        <div class="form-group">
                            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
@csrf
                            
                            <label class="control-label visible-ie8 visible-ie9">Username</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-envelope"></i>
                                </span>
                            <input class="form-control" type="text" autocomplete="off" placeholder="Username" name="username" id="username" required="required" /> 
                                                                    
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="control-label visible-ie8 visible-ie9">Password</label>
                            <input class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password" id="password" required="required" /> 
                        </div>

                            <label class="rememberme check mt-checkbox mt-checkbox-outline">
                                <input type="checkbox" name="remember" value="1" />Remember
                                <span></span>
                            </label>
                            
                    <!-- <a href="#" id="forget-password" class="forget-password">Forgot Password?</a> -->
                    </div>
                    </form> 
                </div>

                <div class="form-actions">
                    <button  class="btn green-jungle btn-block btn-md m-icon-big">Sign In
                        <i class="m-icon-big-swapright m-icon-white"></i>
                    </button>
                </div>

                <div class="create-account">
                  <!--   <p>
                        <a href="javascript:;" id="register-btn" class="uppercase">Create an account</a>
                    </p> -->
                </div>

            </form>
            <!-- END LOGIN FORM -->

            <!-- BEGIN FORGOT PASSWORD FORM -->
            <!-- <form class="forget-form" action="index.html" method="post">
                <h3 class="font-green">Forget Password ?</h3>
                <p> Enter your e-mail address below to reset your password. </p>
                <div class="form-group">
                    <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email" /> </div>
                <div class="form-actions">
                    <button type="button" id="back-btn" class="btn green btn-outline">Back</button>
                    <button type="submit" class="btn btn-success uppercase pull-right">Submit</button>
                </div>
            </form> -->
           
        </div>
        <div class="copyright"> 2018 © Dinas Tenaga Kerja dan Mobilitas Penduduk Aceh. </div>
     


        <!-- BEGIN CORE PLUGINS -->
        <script src="{{asset('assets/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/js.cookie.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/jquery.blockui.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="{{asset('assets/global/plugins/jquery-validation/js/jquery.validate.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/jquery-validation/js/additional-methods.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/select2/js/select2.full.min.js')}}" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="{{asset('assets/global/scripts/app.min.js')}}" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="{{asset('assets/pages/scripts/login.min.js')}}" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <!-- END THEME LAYOUT SCRIPTS -->
        <script>
            $(document).ready(function()
            {
                $('#clickmewow').click(function()
                {
                    $('#radio1003').attr('checked', 'checked');
                });
            })
        </script>
    </body>

</html>
