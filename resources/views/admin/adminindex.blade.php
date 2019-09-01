@extends('layouts.adminbase')

@section('main')
    <div class="breadcrumbs">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>Dashboard</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li class="active">{{ Auth::user()->name }}</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content mt-3">

                <!-- <div class="col-sm-12">
                    <div class="alert  alert-success alert-dismissible fade show" role="alert">
                        <span class="badge badge-pill badge-success">Success</span> You successfully read this important alert message.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div> -->


                <div class="col-sm-6 col-lg-3">
                    <div class="card text-white bg-flat-color-1">
                        <div class="card-body pb-0">
                            <!-- <div class="dropdown float-right">
                                <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton1" data-toggle="dropdown">
                                    <i class="fa fa-cog"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <div class="dropdown-menu-content">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>
                            </div> -->
                            <h4 class="mb-0">
                                <span class="count"><?php if ($usuarios > 0) {echo $usuarios;} else { echo "0";} ?></span>
                            </h4>
                            <p class="text-light">Usuarios Cadastrados</p>

                            <div class="chart-wrapper px-0" style="height:70px;" height="70">
                                <i class="fa fa-list"></i>
                            </div>

                        </div>

                    </div>
                </div>
                <!--/.col-->

                <div class="col-sm-6 col-lg-3">
                    <div class="card text-white bg-flat-color-2">
                        <div class="card-body pb-0">
                            <!-- <div class="dropdown float-right">
                                <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton1" data-toggle="dropdown">
                                    <i class="fa fa-cog"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <div class="dropdown-menu-content">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>
                            </div> -->
                            <h4 class="mb-0">
                                <span class="count">qnt</span>
                            </h4>
                            <p class="text-light">Listas Cadastradas</p>

                            <div class="chart-wrapper px-0" style="height:70px;" height="70">
                                <!-- <canvas id="widgetChart2"></canvas> -->
                                <i class="fa fa-list"></i>
                            </div>

                        </div>

                    </div>
                </div>
                <!--/.col-->

                <div class="col-sm-6 col-lg-3">
                    <div class="card text-white bg-flat-color-3">
                        <div class="card-body pb-0">
                            <!-- <div class="dropdown float-right">
                                <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton1" data-toggle="dropdown">
                                    <i class="fa fa-cog"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <div class="dropdown-menu-content">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>
                            </div> -->
                            <h4 class="mb-0">
                                <span class="count">qnt</span>
                            </h4>
                            <p class="text-light">Listas Finalizadas</p>

                            <div class="chart-wrapper px-0" style="height:70px;" height="70">
                                <i class="fa fa-list"></i>
                            </div>

                        </div>

                    </div>
                </div>
                <!--/.col-->

                <div class="col-sm-6 col-lg-3">
                    <div class="card text-white bg-flat-color-1">
                        <div class="card-body pb-0">
                            <!-- <div class="dropdown float-right">
                                <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton1" data-toggle="dropdown">
                                    <i class="fa fa-cog"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <div class="dropdown-menu-content">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>
                            </div> -->
                            <h4 class="mb-0">
                                <span class="count">qnt </span>
                            </h4>
                            <p class="text-light">Listas Canceladas</p>

                            <div class="chart-wrapper px-0" style="height:70px;" height="70">
                                <i class="fa fa-list"></i>
                            </div>

                        </div>

                    </div>
                </div>
                <!--/.col-->
                                  
                <div class="col-lg-3 col-md-6">
                    <div class="social-box facebook">
                        <a href="https://www.facebook.com/casadospresentesshop/" target="_blank">
                            <i class="fa fa-facebook"></i>
                            <ul>
                                <li>
                                    <span>Acessar</span>
                                </li>
                                <li>
                                    <!-- <span class="count">450</span> -->
                                    <span>Facebook</span>
                                </li>
                            </ul>
                        </a>
                    </div>
                    <!--/social-box-->
                </div>
                <!--/.col-->


                <div class="col-lg-3 col-md-6">
                    <div class="social-box google-plus">
                        <a href="https://www.instagram.com/casadospresentesshop/?hl=pt-br" target="_blank">
                            <i class="ti ti-instagram"></i>
                            <ul>
                                <li>
                                    <span>Acessar</span>
                                </li>
                                <li>
                                    <!-- <span class="count">250</span> -->
                                    <span>Instagram</span>
                                </li>
                            </ul>
                        </a>
                    </div>
                        <!--/social-box-->
                </div>
                <!--/.col-->


                <div class="col-lg-3 col-md-6">
                    <div class="social-box">
                        <a href="https://www.mercadolivre.com.br/" target="_blank">
                            <i class="ti ti-shopping-cart-full"></i>
                            <ul>
                                <li>
                                    <span>Acessar</span>
                                </li>
                                <li>
                                    <!-- <span class="count">92</span> -->
                                    <span>Mercado livre</span>
                                </li>
                            </ul>
                        </a>
                    </div>
                    <!--/social-box-->
                </div>
                <!--/.col-->
                <div class="col-lg-3 col-md-6">
                    <div class="social-box google-plus">
                        <a href="https://www.youtube.com/channel/UCWeAzCrQ6BYasVDJjvJqGEQ" target="_blank">
                            <i class="ti ti-youtube"></i>
                            <ul>
                                <li>
                                <span>Acessar</span>
                                </li>
                                <li>
                                    <!-- <span class="count">92</span> -->
                                    <span>Youtube</span>
                                </li>
                            </ul>
                        </a>   
                    </div>
                    <!--/social-box-->
                </div>
                <!--/.col-->

                <!-- <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-4">
                                    <h4 class="card-title mb-0">Traffic</h4>
                                    <div class="small text-muted">October 2017</div>
                                </div>
                                
                                <div class="col-sm-8 hidden-sm-down">
                                    <button type="button" class="btn btn-primary float-right bg-flat-color-1"><i class="fa fa-cloud-download"></i></button>
                                    <div class="btn-toolbar float-right" role="toolbar" aria-label="Toolbar with button groups">
                                        <div class="btn-group mr-3" data-toggle="buttons" aria-label="First group">
                                            <label class="btn btn-outline-secondary">
                                                <input type="radio" name="options" id="option1"> Day
                                            </label>
                                            <label class="btn btn-outline-secondary active">
                                                <input type="radio" name="options" id="option2" checked=""> Month
                                            </label>
                                            <label class="btn btn-outline-secondary">
                                                <input type="radio" name="options" id="option3"> Year
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                


                            </div>
                            
                            <div class="chart-wrapper mt-4">
                                <canvas id="trafficChart" style="height:200px;" height="200"></canvas>
                            </div>

                        </div>
                        <div class="card-footer">
                            <ul>
                                <li>
                                    <div class="text-muted">Visits</div>
                                    <strong>29.703 Users (40%)</strong>
                                    <div class="progress progress-xs mt-2" style="height: 5px;">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </li>
                                <li class="hidden-sm-down">
                                    <div class="text-muted">Unique</div>
                                    <strong>24.093 Users (20%)</strong>
                                    <div class="progress progress-xs mt-2" style="height: 5px;">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="text-muted">Pageviews</div>
                                    <strong>78.706 Views (60%)</strong>
                                    <div class="progress progress-xs mt-2" style="height: 5px;">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </li>
                                <li class="hidden-sm-down">
                                    <div class="text-muted">New Users</div>
                                    <strong>22.123 Users (80%)</strong>
                                    <div class="progress progress-xs mt-2" style="height: 5px;">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </li>
                                <li class="hidden-sm-down">
                                    <div class="text-muted">Bounce Rate</div>
                                    <strong>40.15%</strong>
                                    <div class="progress progress-xs mt-2" style="height: 5px;">
                                        <div class="progress-bar" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> -->

                <!-- <div class="col-xl-3 col-lg-6">
                    <section class="card">
                        <div class="twt-feed blue-bg">
                            <div class="corner-ribon black-ribon">
                                <i class="fa fa-twitter"></i>
                            </div>
                            <div class="fa fa-twitter wtt-mark"></div>

                            <div class="media">
                                <a href="#">
                                    <img class="align-self-center rounded-circle mr-3" style="width:85px; height:85px;" alt="" src="images/admin.jpg">
                                </a>
                                <div class="media-body">
                                    <h2 class="text-white display-6">Jim Doe</h2>
                                    <p class="text-light">Project Manager</p>
                                </div>
                            </div>
                        </div>
                        <div class="weather-category twt-category">
                            <ul>
                                <li class="active">
                                    <h5>750</h5>
                                    Tweets
                                </li>
                                <li>
                                    <h5>865</h5>
                                    Following
                                </li>
                                <li>
                                    <h5>3645</h5>
                                    Followers
                                </li>
                            </ul>
                        </div>
                        <div class="twt-write col-sm-12">
                            <textarea placeholder="Write your Tweet and Enter" rows="1" class="form-control t-text-area"></textarea>
                        </div>
                        <footer class="twt-footer">
                            <a href="#"><i class="fa fa-camera"></i></a>
                            <a href="#"><i class="fa fa-map-marker"></i></a>
                            New Castle, UK
                            <span class="pull-right">
                                32
                            </span>
                        </footer>
                    </section>
                </div> -->


                <div class="col-xl-3 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="stat-widget-one">
                                <div class="stat-icon dib"><i class="ti-money text-success border-success"></i></div>
                                <div class="stat-content dib">
                                    <div class="stat-text">Total Vendido</div>
                                    <div class="stat-digit">vlr_total</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-xl-3 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="stat-widget-one">
                                <div class="stat-icon dib"><i class="ti-star text-primary border-primary"></i></div>
                                <div class="stat-content dib">
                                    <div class="stat-text">Produtos Cadastrados - Ativos</div>
                                    <div class="stat-digit"><?php if ($qtde_produtos > 0) {echo ($qtde_produtos);} else { echo "0";}?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- <div class="col-xl-3 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="stat-widget-one">
                                <div class="stat-icon dib"><i class="ti-layout-grid2 text-warning border-warning"></i></div>
                                <div class="stat-content dib">
                                    <div class="stat-text">Active Projects</div>
                                    <div class="stat-digit">770</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->

                <!-- <div class="col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>World</h4>
                        </div>
                        <div class="Vector-map-js">
                            <div id="vmap" class="vmap" style="height: 265px;"></div>
                        </div>
                    </div>
                    
                </div> -->


            </div> <!-- .content -->
@endsection            