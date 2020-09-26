<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title> Shopules </title>

    <!-- Favicon-->
    <link rel="apple-touch-icon" sizes="57x57" href="<?=base_url();?>template/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?=base_url();?>template/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?=base_url();?>template/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?=base_url();?>template/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?=base_url();?>template/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?=base_url();?>template/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?=base_url();?>template/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?=base_url();?>template/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?=base_url();?>template/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?=base_url();?>template/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?=base_url();?>template/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?=base_url();?>template/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?=base_url();?>template/favicon/favicon-16x16.png">

    <!-- iconfont CSS -->
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>template/icon/icofont/icofont.min.css">
    <!-- Boxicon CSS -->
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>template/icon/boxicons-master/css/boxicons.min.css">
    
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>template/frontend/css/font.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>template/frontend/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>template/frontend/css/media_query.css">
    
    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>template/frontend/css/bootstrap.min.css">

    <!-- OWL CAROUSEL -->
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>template/frontend/css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>template/frontend/css/owl.theme.default.css">

</head>
<body>

    <!-- Navigation-->
    <div class="container-fluid">

        <div class="row shadow-sm p-3 bg-white rounded d-flex align-items-center">
            <!-- LOGO -->
            <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-4 order-1">
                <span class="d-xl-none d-lg-none d-md-inline d-sm-inline d-inline  p-1 navslidemenu">
                    <i class="icofont-navigation-menu"></i>
                </span>
                <img src="<?=base_url();?>template/logo/logo_big.jpg" class="img-fluid d-xl-inline d-lg-inline d-md-none d-sm-none d-none">

                <img src="<?=base_url();?>template/logo/logo_med.jpg" class="img-fluid d-xl-none d-lg-none d-md-inline d-sm-none d-none" style="width: 100px">

                <img src="<?=base_url();?>template/logo/logo.jpg" class="img-fluid d-xl-none d-lg-none d-md-none d-sm-inline d-inline pl-2" style="width: 30px">
            </div>
            
            <!-- Search Bar -->
            <div class="col-xl-6 col-lg-6 col-md-4 col-sm-2 col-2 order-xl-2 order-lg-2 order-md-3 order-sm-3 order-3">
                <div class="row">
                    <div class="col-lg-8 col-2 ">
                        <div class="has-search d-xl-block d-lg-block d-none ">
                            <div class="input-group">
                                <input class="form-control pl-4 border-right-0 border" type="search" placeholder="Search" id="">
                                <span class="input-group-append searchBtn">
                                    <div class="input-group-text bg-transparent">
                                        <i class="icofont-search"></i>
                                    </div>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-10">
                        <a href="" class="d-xl-block d-lg-block d-md-block d-none  text-decoration-none loginLink float-right"> Login | Sign-up </a>

                        
                    </div>
                </div>
            </div>
            
            <!-- Shopping-cart -->
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-6 order-xl-3 order-lg-3 order-md-4 order-sm-4 order-4 text-right">
                <!-- Search ICON shopping cart -->

                <div class="d-xl-none d-lg-none d-md-none d-sm-inline d-inline searchiconBtn mr-2">
                    <i class="icofont-search"></i>
                </div>

                <a href="" class="text-decoration-none d-xl-inline d-lg-inline d-md-inline d-sm-none d-none shoppingcartLink"> 
                    <i class="icofont-shopping-cart"></i> 
                    <span class="badge badge-pill badge-light badge-notify cartNotistyle cartNoti"> 1 </span>
                    <span> 4,800 Ks </span>
                </a>

                <a href="" class="text-decoration-none d-xl-none d-lg-none d-md-none d-sm-inline-block d-inline-block shoppingcartLink"> 
                    <i class="icofont-shopping-cart"></i>
                    <span class="badge badge-pill badge-light badge-notify cartNotistyle cartNoti"> 1 </span>
                </a>

                <!-- App Download -->

                <img src="<?=base_url();?>template/frontend/image/download.png" class="img-fluid d-xl-inline d-lg-inline d-md-none d-sm-none d-none" style="width: 150px">
            </div>
        </div>
    </div>
    <div id="myPage"></div>
    
    <!-- Sub Nav (MOBILE) -->
    <div class="container subNav d-xl-block d-lg-block d-none my-3">
        <div class="row align-items-center">
            <div class="col-3 align-items-center">
                <p class="d-inline pr-3"> Shop By </p>

                <div class="dropdown d-inline-block">
                    <a class="nav-link text-decoration-none text-dark font-weight-bold d-block" href="javascript:void(0)" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2"> Category </span>
                        <i class="icofont-rounded-down pt-2"></i>

                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li class="dropdown-submenu">
                            <a class="dropdown-item" href="javascript:void(0)">
                                Electronic Devices
                                <i class="icofont-rounded-right float-right"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <h6 class="dropdown-header">
                                    Electronic Devices
                                </h6>
                                <li><a class="dropdown-item" href="#">Submenu</a></li>
                                <li><a class="dropdown-item" href="#">Submenu0</a></li>
                              
                            </ul>
                        </li>
                        <div class="dropdown-divider"></div>

                        <li class="dropdown-submenu">
                            <a class="dropdown-item" href="javascript:void(0)">
                                Woman Fashion
                                <i class="icofont-rounded-right float-right"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <h6 class="dropdown-header">
                                    Woman Fashion
                                </h6>
                                <li><a class="dropdown-item" href="#">Submenu</a></li>
                                <li><a class="dropdown-item" href="#">Submenu0</a></li>
                              
                            </ul>
                        </li>
                        <div class="dropdown-divider"></div>

                        <li class="dropdown-submenu">
                            <a class="dropdown-item" href="javascript:void(0)">
                                Man Fashion
                                <i class="icofont-rounded-right float-right"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <h6 class="dropdown-header">
                                    Man Fashion
                                </h6>
                                <li><a class="dropdown-item" href="#">Submenu</a></li>
                                <li><a class="dropdown-item" href="#">Submenu0</a></li>
                              
                            </ul>
                        </li>
                        <div class="dropdown-divider"></div>

                        <li class="dropdown-submenu">
                            <a class="dropdown-item" href="javascript:void(0)">
                                Beauty
                                <i class="icofont-rounded-right float-right"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <h6 class="dropdown-header">
                                    Beauty
                                </h6>
                                <li><a class="dropdown-item" href="#">Submenu</a></li>
                                <li><a class="dropdown-item" href="#">Submenu0</a></li>
                              
                            </ul>
                        </li>
                        <div class="dropdown-divider"></div>

                        <li class="dropdown-submenu">
                            <a class="dropdown-item" href="javascript:void(0)">
                                Toys
                                <i class="icofont-rounded-right float-right"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <h6 class="dropdown-header">
                                    Toys
                                </h6>
                                <li><a class="dropdown-item" href="#">Submenu</a></li>
                                <li><a class="dropdown-item" href="#">Submenu0</a></li>
                              
                            </ul>
                        </li>
                        <div class="dropdown-divider"></div>

                        <li class="dropdown-submenu">
                            <a class="dropdown-item" href="javascript:void(0)">
                                Pets
                                <i class="icofont-rounded-right float-right"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <h6 class="dropdown-header">
                                    Pets
                                </h6>
                                <li><a class="dropdown-item" href="#">Submenu</a></li>
                                <li><a class="dropdown-item" href="#">Submenu0</a></li>
                              
                            </ul>
                        </li>
                        <div class="dropdown-divider"></div>

                        <li class="dropdown-submenu">
                            <a class="dropdown-item" href="javascript:void(0)">
                                Sports
                                <i class="icofont-rounded-right float-right"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <h6 class="dropdown-header">
                                    Sports
                                </h6>
                                <li><a class="dropdown-item" href="#">Submenu</a></li>
                                <li><a class="dropdown-item" href="#">Submenu0</a></li>
                              
                            </ul>
                        </li>
                        <div class="dropdown-divider"></div>

                        <li class="dropdown-submenu">
                            <a class="dropdown-item" href="javascript:void(0)">
                                Health
                                <i class="icofont-rounded-right float-right"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <h6 class="dropdown-header">
                                    Health
                                </h6>
                                <li><a class="dropdown-item" href="#">Submenu</a></li>
                                <li><a class="dropdown-item" href="#">Submenu0</a></li>
                              
                            </ul>
                        </li>
                        <div class="dropdown-divider"></div>

                        <li class="dropdown-submenu">
                            <a class="dropdown-item" href="javascript:void(0)">
                                Smart Home
                                <i class="icofont-rounded-right float-right"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <h6 class="dropdown-header">
                                    Smart Home
                                </h6>
                                <li><a class="dropdown-item" href="#">Submenu</a></li>
                                <li><a class="dropdown-item" href="#">Submenu0</a></li>
                              
                            </ul>
                        </li>
                        <div class="dropdown-divider"></div>

                        <li class="dropdown-submenu">
                            <a class="dropdown-item" href="javascript:void(0)">
                                Furniture
                                <i class="icofont-rounded-right float-right"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <h6 class="dropdown-header">
                                    Furniture
                                </h6>
                                <li><a class="dropdown-item" href="#">Submenu</a></li>
                                <li><a class="dropdown-item" href="#">Submenu0</a></li>
                              
                            </ul>
                        </li>
                        <div class="dropdown-divider"></div>

                        <li class="dropdown-submenu">
                            <a class="dropdown-item" href="javascript:void(0)">
                                Travel
                                <i class="icofont-rounded-right float-right"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <h6 class="dropdown-header">
                                    Travel
                                </h6>
                                <li><a class="dropdown-item" href="#">Submenu</a></li>
                                <li><a class="dropdown-item" href="#">Submenu0</a></li>
                              
                            </ul>
                        </li>
                        <div class="dropdown-divider"></div>

                        <li class="dropdown-submenu">
                            <a class="dropdown-item" href="javascript:void(0)">
                                Kitchen
                                <i class="icofont-rounded-right float-right"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <h6 class="dropdown-header">
                                    Kitchen
                                </h6>
                                <li><a class="dropdown-item" href="#">Submenu</a></li>
                                <li><a class="dropdown-item" href="#">Submenu0</a></li>
                              
                            </ul>
                        </li>
                        <div class="dropdown-divider"></div>

                        <li class="dropdown-submenu">
                            <a class="dropdown-item" href="javascript:void(0)">
                                Book
                                <i class="icofont-rounded-right float-right"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <h6 class="dropdown-header">
                                    Book
                                </h6>
                                <li><a class="dropdown-item" href="#">Submenu</a></li>
                                <li><a class="dropdown-item" href="#">Submenu0</a></li>
                              
                            </ul>
                        </li>
                        <div class="dropdown-divider"></div>

                        <li class="dropdown-submenu">
                            <a class="dropdown-item" href="javascript:void(0)">
                                Stationery
                                <i class="icofont-rounded-right float-right"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <h6 class="dropdown-header">
                                    Stationery
                                </h6>
                                <li><a class="dropdown-item" href="#">Submenu</a></li>
                                <li><a class="dropdown-item" href="#">Submenu0</a></li>
                              
                            </ul>
                        </li>
                        <div class="dropdown-divider"></div>

                        <li class="dropdown-submenu">
                            <a class="dropdown-item" href="javascript:void(0)">
                                Home Decor
                                <i class="icofont-rounded-right float-right"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <h6 class="dropdown-header">
                                    Home Decor
                                </h6>
                                <li><a class="dropdown-item" href="#">Submenu</a></li>
                                <li><a class="dropdown-item" href="#">Submenu0</a></li>
                              
                            </ul>
                        </li>
                        <div class="dropdown-divider"></div>

                        <li class="dropdown-submenu">
                            <a class="dropdown-item" href="javascript:void(0)">
                                Baby Care
                                <i class="icofont-rounded-right float-right"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <h6 class="dropdown-header">
                                    Baby Care
                                </h6>
                                <li><a class="dropdown-item" href="#">Submenu</a></li>
                                <li><a class="dropdown-item" href="#">Submenu0</a></li>
                              
                            </ul>
                        </li>

                    </ul>
                </div>
            </div>

            <div class="col-3">
                <a href="" class="text-decoration-none text-dark font-weight-bold"> Promotion </a>
            </div>
            <div class="col-3">
                <div class="hov-dropdown d-inline-block">
                    <a class="text-decoration-none text-dark font-weight-bold" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2"> Merchants </span>
                        <i class="icofont-rounded-down pt-2"></i>

                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                        <a class="dropdown-item" href="#">Action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="hov-dropdown d-inline-block">
                    <a class="text-decoration-none text-dark font-weight-bold" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2"> Services </span>
                        <i class="icofont-rounded-down pt-2"></i>

                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                        <a class="dropdown-item" href="#">
                            Help Center
                        </a>
                        <div class="dropdown-divider"></div>
                        
                        <a class="dropdown-item" href="#">
                            Order
                        </a>
                        <div class="dropdown-divider"></div>
                        
                        <a class="dropdown-item" href="#">
                            Shipping & Delivery
                        </a>
                        <div class="dropdown-divider"></div>

                        <a class="dropdown-item" href="#">
                            Payment
                        </a>
                        <div class="dropdown-divider"></div>

                        <a class="dropdown-item" href="#">
                            Returns & Refunds
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Sub Nav (WEB) -->
    <div id="mySidebar" class="sidebar">
        <div class="row">
            <div class="col-10">
                <img src="<?=base_url();?>template/logo/logo_med_trans.png" class="img-fluid" style="width: 100px">
            </div>
            <div class="col-2">
                <a href="javascript:void(0)" class="closebtn text-decoration-none">
                    <i class="icofont-close-line"></i>
                </a>
            </div>
        </div>
        
        <div class="mt-3">
            <p class="text-muted ml-4"> Shop By </p>
            <hr>
            <a data-toggle="collapse" href="#category" role="button" aria-expanded="false" aria-controls="category">
                Category
                <i class="icofont-rounded-down float-right mr-3"></i>

            </a>

            <div class="collapse sidebardropdown_container_category mt-3" id="category">
                <a href="" class="py-2"> Category One </a>
                <a href="" class="py-2"> Category Two </a>
                <a href="" class="py-2"> Category Three </a>
                <a href="" class="py-2"> Category Four </a>
                <a href="" class="py-2"> Category Five </a>
            </div>

            <hr>

            <a href="#"> Poromotion </a>
            <hr>

            <a data-toggle="collapse" href="#brand" role="button" aria-expanded="false" aria-controls="brand">
                Merchants
                <i class="icofont-rounded-down float-right mr-3"></i>

            </a>

            <div class="collapse sidebardropdown_container_category mt-3" id="brand">
                <a href="" class="py-2"> Brand One </a>
                <a href="" class="py-2"> Brand Two </a>
                <a href="" class="py-2"> Brand Three </a>
                <a href="" class="py-2"> Brand Four </a>
                <a href="" class="py-2"> Brand Five </a>
            </div>
            <hr>

            <a data-toggle="collapse" href="#service" role="button" aria-expanded="false" aria-controls="service">
                Service
                <i class="icofont-rounded-down float-right mr-3"></i>
            </a>

            <div class="collapse sidebardropdown_container_category mt-3" id="service">
                <a href="" class="py-2"> Help Center </a>
                <a href="" class="py-2"> Order </a>
                <a href="" class="py-2"> Shipping & Delivery </a>
                <a href="" class="py-2"> Payment </a>
                <a href="" class="py-2"> Returns & Refunds </a>
            </div>
            <hr>

            <a href="#"> Login | Signup</a>
            <hr>

            <a href="#"> Cart [ <span class="cartNoti"> 1 </span> ]  </a>
            <hr>

            <img src="<?=base_url();?>template/frontend/image/download.png" class="img-fluid ml-2 text-center" style="width: 150px">
            <hr>

            <p class="text-white ml-3"> Copyright &copy; <img src="<?=base_url();?>template/logo/logo_wh_transparent.png" style="width: 20px; height: 20px"> 2019  </p>

        </div>
        
    </div>

    
    <!-- Carousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?=base_url();?>template/frontend/image/banner/ac.jpg" class="d-block w-100 bannerImg" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?=base_url();?>template/frontend/image/banner/giordano.jpg" class="d-block w-100 bannerImg" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?=base_url();?>template/frontend/image/banner/garnier.jpg" class="d-block w-100 bannerImg" alt="...">
            </div>
        </div>
    </div>


    <!-- Content -->
    <div class="container mt-5 px-5">
        <!-- Category -->
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 ">
                <div class="card categoryCard border-0 shadow-sm p-3 mb-5 rounded text-center">
                    <img src="<?=base_url();?>template/frontend/image/category/category_one.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text font-weight-bold text-truncate"> Smart Home </p>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 ">
                <div class="card categoryCard border-0 shadow-sm p-3 mb-5 rounded text-center">
                    <img src="<?=base_url();?>template/frontend/image/category/category_two.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text font-weight-bold text-truncate"> Grocery </p>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 ">
                <div class="card categoryCard border-0 shadow-sm p-3 mb-5 rounded text-center">
                    <img src="<?=base_url();?>template/frontend/image/category/category_three.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text font-weight-bold text-truncate"> Cosmetic </p>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 ">
                <div class="card categoryCard border-0 shadow-sm p-3 mb-5 rounded text-center">
                    <img src="<?=base_url();?>template/frontend/image/category/category_four.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text font-weight-bold text-truncate"> Stationery </p>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 ">
                <div class="card categoryCard border-0 shadow-sm p-3 mb-5 rounded text-center">
                    <img src="<?=base_url();?>template/frontend/image/category/category_five.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text font-weight-bold text-truncate"> Electronic Devices </p>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 ">
                <div class="card categoryCard border-0 shadow-sm p-3 mb-5 rounded text-center">
                    <img src="<?=base_url();?>template/frontend/image/category/category_six.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text font-weight-bold text-truncate"> Furniture </p>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 ">
                <div class="card categoryCard border-0 shadow-sm p-3 mb-5 rounded text-center">
                    <img src="<?=base_url();?>template/frontend/image/category/category_seven.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text font-weight-bold text-truncate"> Kitchen Apperience </p>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 ">
                <div class="card categoryCard border-0 shadow-sm p-3 mb-5 rounded text-center">
                    <img src="<?=base_url();?>template/frontend/image/category/category_eight.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text font-weight-bold text-truncate"> Health Care </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="whitespace d-xl-block d-lg-block d-md-none d-sm-none d-none"></div>
        
        <!-- Discount Item -->
        <div class="row mt-5">
            <h1> Discount Item </h1>
        </div>

        <!-- Disocunt Item -->
        <div class="row">
            <div class="col-12">
                <div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
                    <div class="MultiCarousel-inner">
                        <div class="item">
                            <div class="pad15">
                                <img src="<?=base_url();?>template/frontend/image/item/saisai_one.jpg" class="img-fluid">
                                <p class="text-truncate">Multi Item Carousel</p>
                                <p class="item-price">
                                    <strike>250,000 Ks </strike> 
                                    <span class="d-block">230,000 Ks</span>
                                </p>

                                <div class="star-rating">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
                                    </ul>
                                </div>

                                <a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

                            </div>
                        </div>
                        <div class="item">
                            <div class="pad15">
                                <img src="<?=base_url();?>template/frontend/image/item/saisai_two.jpg" class="img-fluid">
                                <p class="text-truncate">Multi Item Carousel</p>
                                <p class="item-price">
                                    <span class="d-block">230,000 Ks </span>
                                </p>

                                <div class="star-rating">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
                                    </ul>
                                </div>

                                <a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

                            </div>
                        </div>
                        <div class="item">
                            <div class="pad15">
                                <img src="<?=base_url();?>template/frontend/image/item/saisai_three.jpg" class="img-fluid">
                                <p class="text-truncate">Multi Item Carousel</p>
                                <p class="item-price">
                                    <strike>250,000 Ks </strike> 
                                    <span class="d-block">230,000 Ks </span>
                                </p>

                                <div class="star-rating">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
                                    </ul>
                                </div>

                                <a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

                            </div>
                        </div>
                        <div class="item">
                            <div class="pad15">
                                <img src="<?=base_url();?>template/frontend/image/item/saisai_four.jpg" class="img-fluid">
                                <p class="text-truncate">Multi Item Carousel</p>
                                <p class="item-price">
                                    <strike>250,000 Ks </strike> 
                                    <span class="d-block">230,000 Ks </span>
                                </p>

                                <div class="star-rating">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
                                    </ul>
                                </div>

                                <a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

                            </div>
                        </div>
                        <div class="item">
                            <div class="pad15">
                                <img src="<?=base_url();?>template/frontend/image/item/giordano_one.jpg" class="img-fluid">
                                <p class="text-truncate">Multi Item Carousel</p>
                                <p class="item-price">
                                    <strike>250,000 Ks </strike> 
                                    <span class="d-block">230,000 Ks </span>
                                </p>

                                <div class="star-rating">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
                                    </ul>
                                </div>

                                <a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

                            </div>
                        </div>
                        <div class="item">
                            <div class="pad15">
                                <img src="<?=base_url();?>template/frontend/image/item/giordano_two.jpg" class="img-fluid">
                                <p class="text-truncate">Multi Item Carousel</p>
                                <p class="item-price">
                                    <span class="d-block">230,000 Ks </span>
                                </p>

                                <div class="star-rating">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
                                    </ul>
                                </div>

                                <a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

                            </div>
                        </div>
                        <div class="item">
                            <div class="pad15">
                                <img src="<?=base_url();?>template/frontend/image/item/giordano_three.jpg" class="img-fluid">
                                <p class="text-truncate">Multi Item Carousel</p>
                                <p class="item-price">
                                    <span class="d-block">230,000 Ks </span>
                                </p>

                                <div class="star-rating">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
                                    </ul>
                                </div>

                                <a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

                            </div>
                        </div>
                        <div class="item">
                            <div class="pad15">
                                <img src="<?=base_url();?>template/frontend/image/item/giordano_four.jpg" class="img-fluid">
                                <p class="text-truncate">Multi Item Carousel</p>
                                <p class="item-price">
                                    <strike>250,000 Ks </strike> 
                                    <span class="d-block">230,000 Ks </span>
                                </p>

                                <div class="star-rating">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
                                    </ul>
                                </div>

                                <a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

                            </div>
                        </div>
                        <div class="item">
                            <div class="pad15">
                                <img src="<?=base_url();?>template/frontend/image/item/apple_four.jpeg" class="img-fluid">
                                <p class="text-truncate">Multi Item Carousel</p>
                                <p class="item-price">
                                    <span class="d-block">230,000 Ks </span>
                                </p>

                                <div class="star-rating">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
                                    </ul>
                                </div>

                                <a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

                            </div>
                        </div>
                        <div class="item">
                            <div class="pad15">
                                <img src="<?=base_url();?>template/frontend/image/item/apple_one.jpg" class="img-fluid">
                                <p class="text-truncate">Multi Item Carousel</p>
                                <p class="item-price">
                                    <strike>250,000 Ks </strike> 
                                    <span class="d-block">230,000 Ks</span>
                                </p>

                                <div class="star-rating">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
                                    </ul>
                                </div>

                                <a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

                            </div>
                        </div>
                        <div class="item">
                            <div class="pad15">
                                <img src="<?=base_url();?>template/frontend/image/item/apple_three.jpg" class="img-fluid">
                                <p class="text-truncate">Multi Item Carousel</p>
                                <p class="item-price">
                                    <span class="d-block">230,000 Ks </span>
                                </p>

                                <div class="star-rating">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
                                    </ul>
                                </div>

                                <a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

                            </div>
                        </div>
                        <div class="item">
                            <div class="pad15">
                                <img src="<?=base_url();?>template/frontend/image/item/apple_two.png" class="img-fluid">
                                <p class="text-truncate">Multi Item Carousel</p>
                                <p class="item-price">
                                    <strike>250,000 Ks </strike> 
                                    <span class="d-block">230,000 Ks </span>
                                </p>

                                <div class="star-rating">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
                                    </ul>
                                </div>

                                <a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

                            </div>
                        </div>
                        
                    </div>
                    <button class="btn btnMain leftLst"><</button>
                    <button class="btn btnMain rightLst">></button>
                </div>
            </div>
        </div>

        <!-- Flash Sale Item -->
        <div class="row mt-5">
            <h1> Flash Sale </h1>
        </div>

        <!-- Flash Sale Item -->
        <div class="row">
            <div class="col-12">
                <div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
                    <div class="MultiCarousel-inner">
                        <div class="item">
                            <div class="pad15">
                                <img src="<?=base_url();?>template/frontend/image/item/saisai_one.jpg" class="img-fluid">
                                <p class="text-truncate">Multi Item Carousel</p>
                                <p class="item-price">
                                    <strike>250,000 Ks </strike> 
                                    <span class="d-block">230,000 Ks</span>
                                </p>

                                <div class="star-rating">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
                                    </ul>
                                </div>

                                <a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

                            </div>
                        </div>
                        <div class="item">
                            <div class="pad15">
                                <img src="<?=base_url();?>template/frontend/image/item/saisai_two.jpg" class="img-fluid">
                                <p class="text-truncate">Multi Item Carousel</p>
                                <p class="item-price">
                                    <span class="d-block">230,000 Ks </span>
                                </p>

                                <div class="star-rating">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
                                    </ul>
                                </div>

                                <a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

                            </div>
                        </div>
                        <div class="item">
                            <div class="pad15">
                                <img src="<?=base_url();?>template/frontend/image/item/saisai_three.jpg" class="img-fluid">
                                <p class="text-truncate">Multi Item Carousel</p>
                                <p class="item-price">
                                    <strike>250,000 Ks </strike> 
                                    <span class="d-block">230,000 Ks </span>
                                </p>

                                <div class="star-rating">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
                                    </ul>
                                </div>

                                <a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

                            </div>
                        </div>
                        <div class="item">
                            <div class="pad15">
                                <img src="<?=base_url();?>template/frontend/image/item/saisai_four.jpg" class="img-fluid">
                                <p class="text-truncate">Multi Item Carousel</p>
                                <p class="item-price">
                                    <strike>250,000 Ks </strike> 
                                    <span class="d-block">230,000 Ks </span>
                                </p>

                                <div class="star-rating">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
                                    </ul>
                                </div>

                                <a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

                            </div>
                        </div>
                        <div class="item">
                            <div class="pad15">
                                <img src="<?=base_url();?>template/frontend/image/item/giordano_one.jpg" class="img-fluid">
                                <p class="text-truncate">Multi Item Carousel</p>
                                <p class="item-price">
                                    <strike>250,000 Ks </strike> 
                                    <span class="d-block">230,000 Ks </span>
                                </p>

                                <div class="star-rating">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
                                    </ul>
                                </div>

                                <a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

                            </div>
                        </div>
                        <div class="item">
                            <div class="pad15">
                                <img src="<?=base_url();?>template/frontend/image/item/giordano_two.jpg" class="img-fluid">
                                <p class="text-truncate">Multi Item Carousel</p>
                                <p class="item-price">
                                    <span class="d-block">230,000 Ks </span>
                                </p>

                                <div class="star-rating">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
                                    </ul>
                                </div>

                                <a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

                            </div>
                        </div>
                        <div class="item">
                            <div class="pad15">
                                <img src="<?=base_url();?>template/frontend/image/item/giordano_three.jpg" class="img-fluid">
                                <p class="text-truncate">Multi Item Carousel</p>
                                <p class="item-price">
                                    <span class="d-block">230,000 Ks </span>
                                </p>

                                <div class="star-rating">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
                                    </ul>
                                </div>

                                <a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

                            </div>
                        </div>
                        <div class="item">
                            <div class="pad15">
                                <img src="<?=base_url();?>template/frontend/image/item/giordano_four.jpg" class="img-fluid">
                                <p class="text-truncate">Multi Item Carousel</p>
                                <p class="item-price">
                                    <strike>250,000 Ks </strike> 
                                    <span class="d-block">230,000 Ks </span>
                                </p>

                                <div class="star-rating">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
                                    </ul>
                                </div>

                                <a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

                            </div>
                        </div>
                        <div class="item">
                            <div class="pad15">
                                <img src="<?=base_url();?>template/frontend/image/item/apple_four.jpeg" class="img-fluid">
                                <p class="text-truncate">Multi Item Carousel</p>
                                <p class="item-price">
                                    <span class="d-block">230,000 Ks </span>
                                </p>

                                <div class="star-rating">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
                                    </ul>
                                </div>

                                <a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

                            </div>
                        </div>
                        <div class="item">
                            <div class="pad15">
                                <img src="<?=base_url();?>template/frontend/image/item/apple_one.jpg" class="img-fluid">
                                <p class="text-truncate">Multi Item Carousel</p>
                                <p class="item-price">
                                    <strike>250,000 Ks </strike> 
                                    <span class="d-block">230,000 Ks</span>
                                </p>

                                <div class="star-rating">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
                                    </ul>
                                </div>

                                <a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

                            </div>
                        </div>
                        <div class="item">
                            <div class="pad15">
                                <img src="<?=base_url();?>template/frontend/image/item/apple_three.jpg" class="img-fluid">
                                <p class="text-truncate">Multi Item Carousel</p>
                                <p class="item-price">
                                    <span class="d-block">230,000 Ks </span>
                                </p>

                                <div class="star-rating">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
                                    </ul>
                                </div>

                                <a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

                            </div>
                        </div>
                        <div class="item">
                            <div class="pad15">
                                <img src="<?=base_url();?>template/frontend/image/item/apple_two.png" class="img-fluid">
                                <p class="text-truncate">Multi Item Carousel</p>
                                <p class="item-price">
                                    <strike>250,000 Ks </strike> 
                                    <span class="d-block">230,000 Ks </span>
                                </p>

                                <div class="star-rating">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
                                    </ul>
                                </div>

                                <a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

                            </div>
                        </div>
                        
                    </div>
                    <button class="btn btnMain leftLst"><</button>
                    <button class="btn btnMain rightLst">></button>
                </div>
            </div>
        </div>

        <!-- Random Catgory ~ Item -->
        <div class="row mt-5">
            <h1> Fresh Picks </h1>
        </div>

        <!-- Random Item -->
        <div class="row">
            <div class="col-12">
                <div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
                    <div class="MultiCarousel-inner">
                        <div class="item">
                            <div class="pad15">
                                <img src="<?=base_url();?>template/frontend/image/item/saisai_one.jpg" class="img-fluid">
                                <p class="text-truncate">Multi Item Carousel</p>
                                <p class="item-price">
                                    <strike>250,000 Ks </strike> 
                                    <span class="d-block">230,000 Ks</span>
                                </p>

                                <div class="star-rating">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
                                    </ul>
                                </div>

                                <a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

                            </div>
                        </div>
                        <div class="item">
                            <div class="pad15">
                                <img src="<?=base_url();?>template/frontend/image/item/saisai_two.jpg" class="img-fluid">
                                <p class="text-truncate">Multi Item Carousel</p>
                                <p class="item-price">
                                    <span class="d-block">230,000 Ks </span>
                                </p>

                                <div class="star-rating">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
                                    </ul>
                                </div>

                                <a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

                            </div>
                        </div>
                        <div class="item">
                            <div class="pad15">
                                <img src="<?=base_url();?>template/frontend/image/item/saisai_three.jpg" class="img-fluid">
                                <p class="text-truncate">Multi Item Carousel</p>
                                <p class="item-price">
                                    <strike>250,000 Ks </strike> 
                                    <span class="d-block">230,000 Ks </span>
                                </p>

                                <div class="star-rating">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
                                    </ul>
                                </div>

                                <a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

                            </div>
                        </div>
                        <div class="item">
                            <div class="pad15">
                                <img src="<?=base_url();?>template/frontend/image/item/saisai_four.jpg" class="img-fluid">
                                <p class="text-truncate">Multi Item Carousel</p>
                                <p class="item-price">
                                    <strike>250,000 Ks </strike> 
                                    <span class="d-block">230,000 Ks </span>
                                </p>

                                <div class="star-rating">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
                                    </ul>
                                </div>

                                <a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

                            </div>
                        </div>
                        <div class="item">
                            <div class="pad15">
                                <img src="<?=base_url();?>template/frontend/image/item/giordano_one.jpg" class="img-fluid">
                                <p class="text-truncate">Multi Item Carousel</p>
                                <p class="item-price">
                                    <strike>250,000 Ks </strike> 
                                    <span class="d-block">230,000 Ks </span>
                                </p>

                                <div class="star-rating">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
                                    </ul>
                                </div>

                                <a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

                            </div>
                        </div>
                        <div class="item">
                            <div class="pad15">
                                <img src="<?=base_url();?>template/frontend/image/item/giordano_two.jpg" class="img-fluid">
                                <p class="text-truncate">Multi Item Carousel</p>
                                <p class="item-price">
                                    <span class="d-block">230,000 Ks </span>
                                </p>

                                <div class="star-rating">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
                                    </ul>
                                </div>

                                <a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

                            </div>
                        </div>
                        <div class="item">
                            <div class="pad15">
                                <img src="<?=base_url();?>template/frontend/image/item/giordano_three.jpg" class="img-fluid">
                                <p class="text-truncate">Multi Item Carousel</p>
                                <p class="item-price">
                                    <span class="d-block">230,000 Ks </span>
                                </p>

                                <div class="star-rating">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
                                    </ul>
                                </div>

                                <a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

                            </div>
                        </div>
                        <div class="item">
                            <div class="pad15">
                                <img src="<?=base_url();?>template/frontend/image/item/giordano_four.jpg" class="img-fluid">
                                <p class="text-truncate">Multi Item Carousel</p>
                                <p class="item-price">
                                    <strike>250,000 Ks </strike> 
                                    <span class="d-block">230,000 Ks </span>
                                </p>

                                <div class="star-rating">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
                                    </ul>
                                </div>

                                <a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

                            </div>
                        </div>
                        <div class="item">
                            <div class="pad15">
                                <img src="<?=base_url();?>template/frontend/image/item/apple_four.jpeg" class="img-fluid">
                                <p class="text-truncate">Multi Item Carousel</p>
                                <p class="item-price">
                                    <span class="d-block">230,000 Ks </span>
                                </p>

                                <div class="star-rating">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
                                    </ul>
                                </div>

                                <a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

                            </div>
                        </div>
                        <div class="item">
                            <div class="pad15">
                                <img src="<?=base_url();?>template/frontend/image/item/apple_one.jpg" class="img-fluid">
                                <p class="text-truncate">Multi Item Carousel</p>
                                <p class="item-price">
                                    <strike>250,000 Ks </strike> 
                                    <span class="d-block">230,000 Ks</span>
                                </p>

                                <div class="star-rating">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
                                    </ul>
                                </div>

                                <a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

                            </div>
                        </div>
                        <div class="item">
                            <div class="pad15">
                                <img src="<?=base_url();?>template/frontend/image/item/apple_three.jpg" class="img-fluid">
                                <p class="text-truncate">Multi Item Carousel</p>
                                <p class="item-price">
                                    <span class="d-block">230,000 Ks </span>
                                </p>

                                <div class="star-rating">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
                                    </ul>
                                </div>

                                <a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

                            </div>
                        </div>
                        <div class="item">
                            <div class="pad15">
                                <img src="<?=base_url();?>template/frontend/image/item/apple_two.png" class="img-fluid">
                                <p class="text-truncate">Multi Item Carousel</p>
                                <p class="item-price">
                                    <strike>250,000 Ks </strike> 
                                    <span class="d-block">230,000 Ks </span>
                                </p>

                                <div class="star-rating">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
                                    </ul>
                                </div>

                                <a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

                            </div>
                        </div>
                        
                    </div>
                    <button class="btn btnMain leftLst"><</button>
                    <button class="btn btnMain rightLst">></button>
                </div>
            </div>
        </div>

        
        <div class="whitespace d-xl-block d-lg-block d-md-none d-sm-none d-none"></div>

        <!-- Brand Store -->
        <div class="row mt-5">
            <h1> Top Brand Stores </h1>
        </div>

        <!-- Brand Store Item -->
       <!--  <section class="customer-logos slider mt-5 row">
            <div class="slide">
                <a href="">
                    <img src="<?=base_url();?>template/frontend/image/brand/loacker_logo.jpg"  class="w-25 h-23">
                </a>
            </div>
            
            <div class="slide">
                <a href="">
                    <img src="<?=base_url();?>template/frontend/image/brand/lockandlock_logo.png" class="w-25 h-23">
                </a>
            </div>
            
            <div class="slide">
                <a href="">
                    <img src="<?=base_url();?>template/frontend/image/brand/apple_logo.png" class="w-25 h-23">
                </a>
            </div>
            
            <div class="slide">
                <a href="">
                    <img src="<?=base_url();?>template/frontend/image/brand/giordano_logo.png" class="w-25 h-23">
                </a>
            </div>
            
            <div class="slide">
                <a href="">
                    <img src="<?=base_url();?>template/frontend/image/brand/saisai_logo.png" class="w-25 h-23">
                </a>
            </div>
            
            <div class="slide">
                <a href="">
                    <img src="<?=base_url();?>template/frontend/image/brand/brands_logo.png" class="w-25 h-23">
                </a>    
            </div>
            
            <div class="slide">
                <a href="">
                    <img src="<?=base_url();?>template/frontend/image/brand/acer_logo.png" class="w-25 h-23">
                </a>
            </div>
            
            <div class="slide">
                <a href="">
                    <img src="<?=base_url();?>template/frontend/image/brand/bella_logo.png" class="w-25 h-23">
                </a>
            </div>
            
            <div class="slide">
                <a href="">
                    <img src="<?=base_url();?>template/frontend/image/brand/ariel_logo.png" class="w-25 h-23">
                </a>
            </div>
        </section> -->

        <div class="whitespace d-xl-block d-lg-block d-md-none d-sm-none d-none"></div>

    </div>


    <!-- Footer -->
    <div class="container-fluid bg-light p-5 align-content-center align-items-center mt-5">
        
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="row">
                    <div class="col-md-4">
                        <i class="icofont-fast-delivery serviceIcon maincolor"></i>
                    </div>
                
                    <div class="col-md-8">
                        <h6>Door to Door Delivery</h6>
                        <p class="text-muted" style="font-size: 12px">On-time Delivery</p>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="row">
                    <div class="col-md-4">
                        <i class="icofont-headphone-alt-2 serviceIcon maincolor"></i>
                    </div>
                
                    <div class="col-md-8">
                        <h6> Customer Service </h6>
                        <p class="text-muted" style="font-size: 12px">  09-779-999-915 ၊ <br> 09-779-999-913 </p>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="row">
                    <div class="col-md-4">
                        <i class='bx bx-undo serviceIcon maincolor'></i>
                    </div>
                
                    <div class="col-md-8">
                        <h6 > 100% satisfaction </h6>
                        <p class="text-muted" style="font-size: 12px"> 3 days return </p>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="row">
                    <div class="col-md-4">
                        <i class="icofont-credit-card serviceIcon maincolor"></i>
                    </div>
                
                    <div class="col-md-8">
                        <h6> Cash on Delivery </h6>
                        <p class="text-muted" style="font-size: 12px"> Door to Door Service </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="whitespace d-xl-block d-lg-block d-md-none d-sm-none d-none"></div>

    <div class="container">
        <div class="row text-center">
            <div class="col-12">
                <h1> News Letter </h1>
                <p>
                    Subscribe to our newsletter and get 10% off your first purchase
                </p>

            </div>
            
            <div class="offset-2 col-8 offset-2 mt-5">
                <form>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control form-control-lg px-5 py-3" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2" style="border-top-left-radius: 15rem; border-bottom-left-radius: 15rem">
                        
                        <div class="input-group-append">
                            <button class="btn btn-secondary subscribeBtn" type="button" id="button-addon2"> Subscribe </button>
                        </div>


                    </div>
                </form>
            </div>

        </div>
    </div>


    <div class="whitespace d-xl-block d-lg-block d-md-none d-sm-none d-none"></div>
    

    <footer class="py-3 mt-5">
        <div class="container">
            <div class="text-center pb-3">
                <a href="#myPage" title="To Top" class="text-white to_top text-decoration-none">
                    <i class="icofont-rounded-up" style="font-size: 20px"></i>
                </a>
            </div>

            <p class="m-0 text-center text-white">Copyright &copy; <img src="<?=base_url();?>template/logo/logo_wh_transparent.png" style="width: 30px; height: 30px"> 2019</p>
        </div>
    </footer>








    <script type="text/javascript" src="<?=base_url();?>template/frontend/js/jquery.min.js"></script>
    <!-- BOOTSTRAP JS -->
    <script type="text/javascript" src="<?=base_url();?>template/frontend/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
    <script type="text/javascript" src="<?=base_url();?>template/frontend/js/custom.js"></script>

    <!-- Owl Carousel -->
    <script type="text/javascript" src="<?=base_url();?>template/frontend/js/owl.carousel.js"></script>

</body>
</html>