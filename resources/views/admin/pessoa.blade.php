<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{url('./admin/assets/images/favicon.png')}}">
    <title>Pig Time - Projeto Integrador | Digital House </title>
    <!-- Bootstrap Core CSS -->
    <link href="{{url('./admin/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="{{url('./admin/assets/plugins/chartist-js/dist/chartist.min.css')}}" rel="stylesheet">
    <link href="{{url('./admin/assets/plugins/chartist-js/dist/chartist-init.css')}}" rel="stylesheet">
    <link href="{{url('./admin/assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css')}}" rel="stylesheet">
    <!--This page css - Morris CSS -->
    <link href="{{url('./admin/assets/plugins/c3-master/c3.min.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{url('./admin/css/style.css')}}" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="{{url('./admin/css/colors/blue.css')}}" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <div>Icons made by <a href="https://www.flaticon.com/authors/smashicons" title="Smashicons">Smashicons</a> from <a href="https://www.flaticon.com/"             title="Flaticon">www.flaticon.com</a></div>
    <div>Icons made by <a href="https://www.flaticon.com/authors/smashicons" title="Smashicons">Smashicons</a> from <a href="https://www.flaticon.com/"             title="Flaticon">www.flaticon.com</a></div>
<![endif]-->
</head>

<body class="fix-header fix-sidebar card-no-border">
    
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>

    <div id="main-wrapper">
        <header class="topbar">
            <nav class="navbar top-navbar navbar-toggleable-sm navbar-light">
                <div class="navbar-header">
                <a class="navbar-brand" href="/">
                    <b>
                        <img src="{{url('./admin/assets/images/logo-pig-icon.png')}}" alt="homepage" class="light-logo" />
                    </b>
                    <span>
                    
                <img src="{{url('./admin/assets/images/logo-pig-time.png')}}" class="light-logo" alt="homepage" /></span> </a>
                </div>
            
                <div class="navbar-collapse">
                    <ul class="navbar-nav mr-auto mt-md-0">
                    
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="{{url('javascript:void(0)')}}"><i class="mdi mdi-menu"></i></a> </li>
                    
                        <li class="nav-item hidden-sm-down search-box"> <a class="nav-link hidden-sm-down text-muted waves-effect waves-dark" href="{{url('javascript:void(0)')}}"><i class="ti-search"></i></a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search & enter"> <a class="srh-btn"><i class="ti-close"></i></a> </form>
                        </li>
                    </ul>
                    <ul class="navbar-nav my-lg-0">
                    
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="/perfil" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{url('./admin/assets/images/users/1.jpg')}}" alt="user" class="profile-pic m-r-10" />Bruno Almeida</a><a class="btn waves-effect waves-light btn-danger hidden-sm-down" href="/logout">Logout</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
    </div>

    <!-- Avaliação e Comentários -->

    <div class="card">
        <div class="card-block little-profile text-center">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs profile-tab" role="tablist">
                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#avaliacao" role="tab">Avaliação</a> </li>
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#comentarios" role="tab">Comentários</a> </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
            
                <!--primeiro tab-->
                <div class="tab-pane active" id="avaliacao" role="tabpanel">
                    <div class="card-block">
                        <div class="sl-item">
                            <div class="sl-right">
                                <div> 
                                    <div class="m-t-20 row">
                                        <div class="col-md-3 col-xs-12">
                                            <div class="col-md-9 col-xs-12">
                                                <img src="{{ url('img/star1.png') }}" style="width:27px;" id="s1">
                                                <img src="{{ url('img/star1.png') }}" style="width:27px;" id="s2">             
                                                <img src="{{ url('img/star1.png') }}" style="width:27px;" id="s3">
                                                <img src="{{ url('img/star1.png') }}" style="width:27px;" id="s4">
                                                <img src="{{ url('img/star.png') }}" style="width:27px;" id="s5">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--second tab-->
                <div class="tab-pane" id="comentarios" role="tabpanel">
                    <div class="card-block">
                        <div class="sl-item">
                            <div class="sl-right">
                                <div> <a href="#" class="link">Maria tem interesse em:</a> <span class="link">Instalar AUSGIAUGS</span>
                                    <div class="m-t-20 row">
                                        <div class="col-md-3 col-xs-12"><img src="{{url('./admin/assets/images/big/img1.jpg')}}" alt="user" class="img-responsive radius"></div>
                                        <div class="col-md-9 col-xs-12">
                                            <p> João, está aguardando sua aprovação para o serviço que você anunciou. Verifique o perfil do João atentamente e decida a aprovaçao o mais breve possível  </p>
                                            <a href="#" class="btn btn-primary" style="margin-right:4px"> Aprovado</a>
                                            <a href="#" class="btn btn-warning" style="margin-right:4px"> Ver anúncio</a>
                                        </div>
                                    </div>
                                
                                </div>
                            </div>
                        </div>   
                    </div>
                </div>
            </div>
        </div>
    </div>


    
                            <!-- Serviços -->
                            <div class="card">
                                <div class="card-block little-profile text-center">

                                    <!-- Nav tabs -->
                                <ul class="nav nav-tabs profile-tab" role="tablist">
                                    <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#aprovacao" role="tab">Preciso de</a> </li>
                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#servicos" role="tab">Trabalhei em</a> </li>
                                    
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                        <div class="tab-pane active" id="aprovacao" role="tabpanel">
                                            <div class="card-block">
                                                <div class="profiletimeline">
                    
                                                    
                                                    <div class="sl-item">
                                                        <div class="sl-left"> <img src="{{url('./admin/assets/images/users/2.jpg')}}" alt="user" class="img-circle"> </div>
                                                        <div class="sl-right">
                                                            
                                                        </div>
                                                    </div>
                                                    
                                                    <hr>
                                                    <div class="sl-item">
                                                            <div class="sl-left"> <img src="{{url('./admin/assets/images/users/2.jpg')}}" alt="user" class="img-circle"> </div>
                                                            <div class="sl-right">
                                                                <div> <a href="#" class="link">Maria tem interesse em:</a> <span class="link">Instalar Quadro</span>
                                                                    <div class="m-t-20 row">
                                                                        <div class="col-md-3 col-xs-12"><img src="{{url('./admin/assets/images/big/img1.jpg')}}" alt="user" class="img-responsive radius"></div>
                                                                        <div class="col-md-9 col-xs-12">
                                                                            <p> João, está aguardando sua aprovação para o serviço que você anunciou. Verifique o perfil do João atentamente e decida a aprovaçao o mais breve possível  </p> <a href="#" class="btn btn-warning" style="margin-right:4px"> Ver perfil</a> <a href="/p/3" class="btn btn-primary" style="margin-right:4px"> Aprovar</a><a href="#" class="btn btn-danger"> Reprovar</a></div>
                                                                    </div>
                                                                
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <hr>
                                                    <div class="sl-item">
                                                        <div class="sl-left"> <img src="{{url('./admin/assets/images/users/2.jpg')}}" alt="user" class="img-circle"> </div>
                                                        <div class="sl-right">
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--second tab-->
                                        <div class="tab-pane" id="servicos" role="tabpanel">
                                            <div class="card-block">
                                            
                                                
                                                        <div class="sl-item">
                                                        
                                                            <div class="sl-right">
                                                                <div> <a href="#" class="link">Maria tem interesse em:</a> <span class="link">Instalar Quadro</span>
                                                                    <div class="m-t-20 row">
                                                                        <div class="col-md-3 col-xs-12"><img src="{{url('./admin/assets/images/big/img1.jpg')}}" alt="user" class="img-responsive radius"></div>
                                                                        <div class="col-md-9 col-xs-12">
                                                                            <p> João, está aguardando sua aprovação para o serviço que você anunciou. Verifique o perfil do João atentamente e decida a aprovaçao o mais breve possível  </p> <a href="#" class="btn btn-primary" style="margin-right:4px"> Aprovado</a> <a href="#" class="btn btn-warning" style="margin-right:4px"> Ver anúncio</a>
                                                                    </div>
                                                                
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="sl-item">
                                                            
                                                                <div class="sl-right">
                                                                    <div> <a href="#" class="link">Maria tem interesse em:</a> <span class="link">Instalar Quadro</span>
                                                                        <div class="m-t-20 row">
                                                                            <div class="col-md-3 col-xs-12"><img src="{{url('./admin/assets/images/big/img1.jpg')}}" alt="user" class="img-responsive radius"></div>
                                                                            <div class="col-md-9 col-xs-12">
                                                                                <p> João, está aguardando sua aprovação para o serviço que você anunciou. Verifique o perfil do João atentamente e decida a aprovaçao o mais breve possível  </p><a href="#" class="btn btn-danger"> Reprovado</a></div>
                                                                        </div>
                                                                    
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <hr>
                                                
                                    
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>

                                </div>
                            </div>
                        </div>
                </div>
                
            
            </div>
                    <footer class="footer text-center" style= "left:0"> © 2019 Pig Time - Projeto Integrador | Digital House </footer>
      
    </div>
  
    <script src="{{url('./admin/assets/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{url('./admin/assets/plugins/bootstrap/js/tether.min.js')}}"></script>
    <script src="{{url('./admin/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{url('./admin/js/jquery.slimscroll.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{url('./admin/js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{url('./admin/js/sidebarmenu.js')}}"></script>
    <!--stickey kit -->
    <script src="{{url('./admin/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{url('./admin/js/custom.min.js')}}"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!-- chartist chart -->
    <script src="{{url('./admin/assets/plugins/chartist-js/dist/chartist.min.js')}}"></script>
    <script src="{{url('./admin/assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js')}}"></script>
    <!--c3 JavaScript -->
    <script src="{{url('./admin/assets/plugins/d3/d3.min.js')}}"></script>
    <script src="{{url('./admin/assets/plugins/c3-master/c3.min.js')}}"></script>
    <!-- Chart JS -->
    <script src="{{url('./admin/js/dashboard1.js')}}"></script>
</body>

</html>
