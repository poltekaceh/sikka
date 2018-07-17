<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Admin | Disnaker</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin Theme #1 for " name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
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
        <link href="{{asset('assets/pages/css/login-3.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="{{asset('assets/images/favicon-3D.png')}}" /> </head>
    <!-- END HEAD -->

    <body class="login">
        <!-- BEGIN LOGIN -->

        <!-- BEGIN LOGO -->
       <br>
        <!-- END LOGO -->
        <div class="content">
            <!-- BEGIN LOGIN FORM -->
            <form class="login-form" action="{{ url('/post-login')}}" method="POST"> <br>

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
                                <div class="input-icon">
                                    <i class="fa fa-user"></i>
                                    <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="username" id="username" required="required" /> 
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label visible-ie8 visible-ie9">Password</label>
                                <div class="input-icon">
                                    <i class="fa fa-lock"></i>
                                    <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password" id="password" required="required" /> </div>
                            </div>
                            <div class="form-actions" class="col-md-12">
                                <label class="rememberme mt-checkbox mt-checkbox-outline">
                                    <input type="checkbox" name="remember" value="0" /> Remember me
                                    <span></span>
                                </label><br><br>
                                <!-- <button type="submit" class="btn green pull-right"> Login </button> -->
                                <button type="button" class="btn yellow uppercase" data-toggle="modal" href="#modalRegister">Register
                                <i class="fa fa-plus icon-white"></i>
                                </button>

                                 <button type="submit" class="btn green uppercase pull-right">Login
                                    <i class="fa fa-arrow-right icon-white"></i>
                                </button>
                            </div>
                        </div>
                    <!--     <div class="form-actions" class="col-md-12">
                            <div class="col-lg-7">
                                <button type="button" class="btn yellow uppercase">Register
                                <i class="fa fa-plus icon-white"></i>
                            </button>
                            </div>
                            <div class="col-lg-3">
                                 <button type="submit" class="btn green uppercase">Login
                                <i class="fa fa-arrow-right icon-white"></i>
                            </button>
                            </div>
                        </div> -->

                    </form> 
                </div>
            </form>
            

            <!-- END LOGIN FORM -->
        </div>
        <div class="footer" style="color: green;">
                <div class="copyright" style="color: gray;"> 2018 © Dinas Tenaga Kerja dan Mobilitas Penduduk Aceh. </div>
            </div>
        <br><br>
        <!-- END LOGIN -->


        <!-- MODAL -->
        <!-- /.modal -->
        <div class="modal fade bs-modal-lg" id="modalRegister" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title"><b>FORM REGISTER</b></h4>
                    </div>
                    <div class="modal-body"> 
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                            <div class="form-body">

                                 <div class="m-heading-1 border-green m-bordered">
                                    <h4 class="content-group" align="center"><b>Silahkan Register<b><br>
                                <small class="display-block">Pastikan anda memasukkan data diri anda dengan benar.</small></h4>
                                </div>



                                <br>

                                <div class="form-group">
                                    <label class="col-md-3 control-label">Username</label>
                                    <div class="col-md-7">
                                        
                                        <input class="form-control" placeholder="Input username" id="reg_username" name="username" type="text">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Password</label>
                                    <div class="col-md-7">
                                        <input class="form-control" name="password" id="reg_password" placeholder="Input password" type="text">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label">Ulangi Password</label>
                                    <div class="col-md-7">
                                        <input class="form-control" name="reg_password_reply" id="reg_password_reply" placeholder="Input ulangi password" type="text">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label">NIK</label>
                                    <div class="col-md-7">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-credit-card"></i>
                                            </span>
                                            <input class="form-control" placeholder="Input NIK" type="text" name="nik" id="nik"> </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label">Nama Lengkap</label>
                                    <div class="col-md-7">
                                        <input class="form-control" name="nama_lengkap" id="nama_lengkap" placeholder="Input nama lengkap" type="text">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label">Tempat Lahir</label>
                                    <div class="col-md-7">
                                        <input class="form-control" name="tempat_lahir" id="tempat_lahir" placeholder="Input tempat lahir" type="text">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label">Tanggal Lahir</label>
                                    <div class="col-md-7">
                                        <input class="form-control" name="tanggal_lahir" id="tgl_lahir" placeholder="Input tanggal lahir" type="date">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label">Jenis Kelamin</label>
                                    <div class="col-md-9">
                                        <div class="mt-radio-inline">
                                            <label class="mt-radio">
                                                <input name="optionsRadios" id="pria" value="1" checked="" type="radio"> Pria
                                                <span></span>
                                            </label>
                                            <label class="mt-radio">
                                                <input name="optionsRadios" id="wanita" value="0" checked="" type="radio"> Wanita
                                                <span></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <script>
                                document.getElementById('tgl_lahir').valueAsDate = new Date();
                                </script>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Alamat</label>
                                    <div class="col-md-7">
                                        <textarea class="form-control" name="alamat" rows="3"></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label">E-Mail</label>
                                    <div class="col-md-7">
                                        <input class="form-control" name="email" id="email" placeholder="Input email" type="email">
                                    </div>
                                </div>

                                 <div class="form-group">
                                    <label class="col-md-3 control-label">No HP</label>
                                    <div class="col-md-7">
                                        <input class="form-control" name="no_hp" id="noHP" placeholder="Input no hp" type="text">
                                    </div>
                                </div>

                            </div>
                        </form>
                                    
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn red btn-outline" data-dismiss="modal">Batal</button>
                        <button type="button" class="btn green">Simpan</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- END MODAL -->


      
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