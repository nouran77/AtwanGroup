<!DOCTYPE HTML>
<html class="no-js">
<head>
    <!-- Basic Page Needs
      ================================================== -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Atwan Group</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <!-- Mobile Specific Metas
      ================================================== -->
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <!-- CSS
      ================================================== -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/bootstrap-theme.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('vendor/prettyphoto/css/prettyPhoto.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('vendor/owl-carousel/css/owl.carousel.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('vendor/owl-carousel/css/owl.theme.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css"><!-- CUSTOM STYLESHEET FOR STYLING -->
    <link href="{{ asset('plugins/skitter/dist/skitter.css') }}" type="text/css" media="all" rel="stylesheet" />
    <script src="{{ asset('plugins/jquery/jquery-2.1.3.min.js') }}"></script>
    <script src="{{ asset('plugins/skitter/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('plugins/skitter/jquery.skitter.js') }}"></script>
    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/extralayers.css') }}" media="screen"/>

    <!-- GOOGLE FONTS FOR SLIDER REVOLUTION -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800' rel='stylesheet' type='text/css'>

    <!-- Color Style -->
    <link href="{{ asset('colors/color1.css') }}" rel="stylesheet" type="text/css">
    <!-- SCRIPTS
      ================================================== -->
    <script src="{{ asset('js/modernizr.js') }}"></script><!-- Modernizr -->
</head>
<body class="home">
<div class="body">
    <!-- Start Site Header -->
    <div class="site-header-wrapper">
        <header class="site-header">
            <div class="container sp-cont">
                <div class="site-logo">
                    <h1><a href="index.html"><img src="{{ asset('images/logo.png') }}" alt="Logo"></a></h1>
                </div>
            </div>
        </header>
        <!-- End Site Header -->
        <div class="navbar">
            <div class="container sp-cont">
                <div class="search-function">
                    <a href="#" class="search-trigger"><i class="fa fa-search"></i></a>
                </div>
                <a href="#" class="visible-sm visible-xs" id="menu-toggle"><i class="fa fa-bars"></i></a>
                <!-- Main Navigation -->
                <nav class="main-navigation dd-menu toggle-menu" role="navigation">
                    <ul class="sf-menu">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        @foreach($categories as $category)
                        <li><a href="{{ url('category',$category->id) }}">{{ $category->name_english }}</a>
                            <ul class="dropdown">
                                @foreach($category->subCategories as $subcategory)
                                <li><a href="{{  url('subcategory',$subcategory->id) }}">{{ $subcategory->name_english }}</a>
                                    <ul class="dropdown">
                                        @foreach($subcategory->subsubCategories as $subsubcategory)
                                        <li><a href="{{  url('sub-subcategory',$subsubcategory->id) }}">{{ $subsubcategory->name_english }}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                @endforeach
                            </ul>
                        </li>
                        @endforeach

                        <li><a href="#">About us</a>
                            <ul class="dropdown">
                                <li><a href="{{ url('about-us') }}">About Company</a></li>
                                <li><a href="{{ url('ceo-message') }}">Ceo Message</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ url('exclusive-agency') }}">Exclusive agency</a></li>
                        <li><a href="#">Services</a>
                            <ul class="dropdown">
                                <li><a href="{{ url('sales-center') }}">{{ trans('service.sales-center') }}</a></li>
                                <li><a href="{{ url('service-center') }}">{{ trans('service.service-center') }}</a></li>
                                <li><a href="{{ url('market-cafe') }}">{{ trans('service.market-cafe') }}</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ url('contact-us') }}">{{ trans('contact.contact') }}</a></li>
                        <li><a href="{{ url('careers') }}">{{ trans('careers.career') }}</a></li>
                    </ul>
                </nav>
                <!-- Search Form -->
                <div class="search-form">
                    <div class="search-form-inner">
                        <form>
                            <h3>Find a Car with our Quick Search</h3>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Postcode</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col-md-6">
                                            <label>Body Type</label>
                                            <select name="Body Type" class="form-control selectpicker">
                                                <option selected>Any</option>
                                                <option>Wagon</option>
                                                <option>Minivan</option>
                                                <option>Coupe</option>
                                                <option>Crossover</option>
                                                <option>Van</option>
                                                <option>SUV</option>
                                                <option>Minicar</option>
                                                <option>Sedan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Make</label>
                                            <select name="Make" class="form-control selectpicker">
                                                <option selected>Any</option>
                                                <option>Jaguar</option>
                                                <option>BMW</option>
                                                <option>Mercedes</option>
                                                <option>Porsche</option>
                                                <option>Nissan</option>
                                                <option>Mazda</option>
                                                <option>Acura</option>
                                                <option>Audi</option>
                                                <option>Bugatti</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Model</label>
                                            <select name="Model" class="form-control selectpicker">
                                                <option selected>Any</option>
                                                <option>GTX</option>
                                                <option>GTR</option>
                                                <option>GTS</option>
                                                <option>RLX</option>
                                                <option>M6</option>
                                                <option>S Class</option>
                                                <option>C Class</option>
                                                <option>B Class</option>
                                                <option>A Class</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Price Min</label>
                                            <select name="Min Price" class="form-control selectpicker">
                                                <option selected>Any</option>
                                                <option>$10000</option>
                                                <option>$20000</option>
                                                <option>$30000</option>
                                                <option>$40000</option>
                                                <option>$50000</option>
                                                <option>$60000</option>
                                                <option>$70000</option>
                                                <option>$80000</option>
                                                <option>$90000</option>
                                                <option>$100000</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Price Max</label>
                                            <select name="Max Price" class="form-control selectpicker">
                                                <option selected>Any</option>
                                                <option>$10000</option>
                                                <option>$20000</option>
                                                <option>$30000</option>
                                                <option>$40000</option>
                                                <option>$50000</option>
                                                <option>$60000</option>
                                                <option>$70000</option>
                                                <option>$80000</option>
                                                <option>$90000</option>
                                                <option>$100000</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" id="inlineCheckbox1" value="option1"> Brand new
                                                only
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" id="inlineCheckbox2" value="option2"> Certified
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Min Year</label>
                                            <select name="Min Year" class="form-control selectpicker">
                                                <option selected>Any</option>
                                                <option>2005</option>
                                                <option>2006</option>
                                                <option>2007</option>
                                                <option>2008</option>
                                                <option>2009</option>
                                                <option>2010</option>
                                                <option>2011</option>
                                                <option>2012</option>
                                                <option>2013</option>
                                                <option>2014</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Max Year</label>
                                            <select name="Max Year" class="form-control selectpicker">
                                                <option selected>Any</option>
                                                <option>2005</option>
                                                <option>2006</option>
                                                <option>2007</option>
                                                <option>2008</option>
                                                <option>2009</option>
                                                <option>2010</option>
                                                <option>2011</option>
                                                <option>2012</option>
                                                <option>2013</option>
                                                <option>2014</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Min Mileage</label>
                                            <select name="Min Mileage" class="form-control selectpicker">
                                                <option selected>Any</option>
                                                <option>10000</option>
                                                <option>20000</option>
                                                <option>30000</option>
                                                <option>40000</option>
                                                <option>50000</option>
                                                <option>60000</option>
                                                <option>70000</option>
                                                <option>80000</option>
                                                <option>90000</option>
                                                <option>100000</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Max Mileage</label>
                                            <select name="Max Mileage" class="form-control selectpicker">
                                                <option selected>Any</option>
                                                <option>10000</option>
                                                <option>20000</option>
                                                <option>30000</option>
                                                <option>40000</option>
                                                <option>50000</option>
                                                <option>60000</option>
                                                <option>70000</option>
                                                <option>80000</option>
                                                <option>90000</option>
                                                <option>100000</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Transmission</label>
                                            <select name="Transmission" class="form-control selectpicker">
                                                <option selected>Any</option>
                                                <option>5 Speed Manual</option>
                                                <option>5 Speed Automatic</option>
                                                <option>6 Speed Manual</option>
                                                <option>6 Speed Automatic</option>
                                                <option>7 Speed Manual</option>
                                                <option>7 Speed Automatic</option>
                                                <option>8 Speed Manual</option>
                                                <option>8 Speed Automatic</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Body Color</label>
                                            <select name="Body Color" class="form-control selectpicker">
                                                <option selected>Any</option>
                                                <option>Red</option>
                                                <option>Black</option>
                                                <option>White</option>
                                                <option>Yellow</option>
                                                <option>Brown</option>
                                                <option>Grey</option>
                                                <option>Silver</option>
                                                <option>Gold</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="submit" class="btn btn-block btn-info btn-lg"
                                                   value="Find my vehicle now">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @yield('content')
    <footer class="site-footer">
        <div class="site-footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 footer_widget widget widget_newsletter">
                        <h4 class="widgettitle">Sign up for our newsletter</h4>
                        <form>
                            <input type="text" class="form-control" placeholder="Name">
                            <input type="email" class="form-control" placeholder="Email">
                            <input type="submit" class="btn btn-primary btn-lg" value="Sign up now">
                        </form>
                    </div>
                    <div class="col-md-2 col-sm-6 footer_widget widget widget_custom_menu widget_links">
                        <h4 class="widgettitle">Blogroll</h4>
                        <ul>
                            <li><a href="blog.html">Car News</a></li>
                            <li><a href="blog-masonry.html">Car Reviews</a></li>
                            <li><a href="about.html">Car Insurance</a></li>
                            <li><a href="about-html">Bodyshop</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2 col-sm-6 footer_widget widget widget_custom_menu widget_links">
                        <h4 class="widgettitle">Help &amp; Support</h4>
                        <ul>
                            <li><a href="results-list.html">Buying a car</a></li>
                            <li><a href="joinus.html">Selling a car</a></li>
                            <li><a href="about.html">Online safety</a></li>
                            <li><a href="contact.html">Contact us</a></li>
                        </ul>
                    </div>
                    <div class="col-md-5 col-sm-6 footer_widget widget text_widget">
                        <h4 class="widgettitle">About AtwanGroup</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus.
                            Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem
                            ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 copyrights-left">
                        <p>&copy; 2017 AtwanGroup. All Rights Reserved</p>
                    </div>
                    <div class="col-md-6 col-sm-6 copyrights-right">
                        <ul class="social-icons social-icons-colored pull-right">
                            <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li class="youtube"><a href="#"><i class="fa fa-youtube"></i></a></li>
                            <li class="vimeo"><a href="#"><i class="fa fa-vimeo-square"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End site footer -->
    <a id="back-to-top"><i class="fa fa-angle-double-up"></i></a>
</div>
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4>Login to your account</h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="text" class="form-control" placeholder="Username">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-key"></i></span>
                        <input type="password" class="form-control" placeholder="Password">
                    </div>
                    <input type="submit" class="btn btn-primary" value="Login">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-block btn-facebook btn-social"><i class="fa fa-facebook"></i> Login
                    with Facebook
                </button>
                <button type="button" class="btn btn-block btn-twitter btn-social"><i class="fa fa-twitter"></i> Login
                    with Twitter
                </button>
            </div>
        </div>
    </div>
</div>
 <!-- Jquery Library Call -->
<script src="{{ asset('vendor/prettyphoto/js/prettyphoto.js') }}"></script>
<script src="{{ asset('js/ui-plugins.js') }}"></script> <!-- UI Plugins -->
<script src="{{ asset('js/helper-plugins.js') }}"></script> <!-- Helper Plugins -->
<script src="{{ asset('vendor/owl-carousel/js/owl.carousel.min.js') }}"></script> <!-- Owl Carousel -->
<script src="{{ asset('vendor/password-checker.js') }}"></script> <!-- Password Checker -->
<script src="{{ asset('js/bootstrap.js') }}"></script> <!-- UI -->
<script src="{{ asset('js/init.js') }}"></script> <!-- All Scripts -->
<script type="text/javascript" src="{{ asset('js/wow.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
<script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>

</body>
</html>

