<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/simple-sidebar.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap.min.css') }}" rel=stylesheet>
        
        <!-- reference your copy Font Awesome here (from our CDN or by hosting yourself) -->
        <link href="{{ asset('css/fontawesome/css/fontawesome.css') }}" rel="stylesheet">
        <link href="{{ asset('css/fontawesome/css/brands.css') }}" rel="stylesheet">
        <link href="{{ asset('css/fontawesome/css/solid.css') }}" rel="stylesheet">
        
        <title>lista casamento</title>
    </head>
    
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar -->
            <div class="bg-light border-right" id="sidebar-wrapper">
                <div class="sidebar-heading">Casa dos Presentes </div>
                <div class="list-group list-group-flush">
                    <a href="#" class="list-group-item list-group-item-action bg-light">Casamento</a>
                    <a href="#" class="list-group-item list-group-item-action bg-light">Chás</a>
                    <!--<a href="#" class="list-group-item list-group-item-action bg-light">Overview</a>
                    <a href="#" class="list-group-item list-group-item-action bg-light">Events</a>
                    <a href="#" class="list-group-item list-group-item-action bg-light">Profile</a>
                    <a href="#" class="list-group-item list-group-item-action bg-light">Status</a> -->
                   
                </div>
            </div>
            <!-- /#sidebar-wrapper -->
            <!-- Page Content -->
            <div id="page-content-wrapper">
                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                    <button class="btn btn-outline-primary float-right" id="menu-toggle"><span aria-hidden="true"><i class="fas fa-exchange-alt"></i></span></button>
                    @if (Route::has('login'))
                        <div class="top-right">
                            @auth
                                <a href="{{ url('/listas') }}">Home</a>
                            @else
                                <a href="{{ route('login') }}">Login</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif

                   <a href="{{ route('logout') }}" class="nav-link"  onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">Sair</a>

<form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    {{ csrf_field() }}
                                </form> 
                    <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                            teste
                        </div>
                    @endif
                   
                    <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon">S</span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                            <li class="nav-item active"> <a class="nav-link" href="#"> Home </a></li>
                            <li class="nav-item">        <a class="nav-link" href="#"> Link</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="False">
                                    Dropdown
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li>
                        </ul>
                    </div> -->
                </nav>
                <div class="container-fluid">
                    @yield('main')
                   
                </div>
                
            </div>
                <!-- /#page-content-wrapper -->
            </div>
     
        </div>
    
        
         
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/app.js') }}" type="text/js"></script>
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}" type="text/js"></script>
        <!-- Menu Toggle Script -->
        <!-- Menu Toggle Script -->
        <script>
            $("#menu-toggle").click(function(e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
            });
        </script>   
    </body>
</html>