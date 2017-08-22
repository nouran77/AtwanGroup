<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta charset="utf-8"/>
    <title>AtwanGroup | Dashboard</title>

    <meta name="description" content="overview &amp; stats"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}">
    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}"/>

    <!-- text fonts -->
    <link rel="stylesheet" href="{{ asset('css/fonts.googleapis.com.css') }}"/>

    <!-- ace styles -->
    <link rel="stylesheet" href="{{ asset('css/ace.min.css') }}" class="ace-main-stylesheet"
          id="main-ace-style"/>

    <link rel="stylesheet" href="{{ asset('css/ace-skins.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/ace-rtl.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('plugins/slim/slim.min.css') }}">


@yield('styles')

<!-- inline styles related to this page -->

    <!-- ace settings handler -->
    <script src="{{ asset('js/ace-extra.min.js') }}"></script>

</head>

<body class="no-skin rtl">
<div id="navbar" class="navbar navbar-default          ace-save-state">
    <div class="navbar-container ace-save-state" id="navbar-container">
        <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
            <span class="sr-only">Toggle sidebar</span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>
        </button>

        <div class="navbar-header pull-left">
            <a href="index.html" class="navbar-brand">
                <small>
                    AtwanGroup Admin
                </small>
            </a>
        </div>

        <div class="navbar-buttons navbar-header pull-right" role="navigation">
            <ul class="nav ace-nav">
                <li class="light-blue dropdown-modal">
                    <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                        @if(Auth::user()->type == 'admin')

                            <span class="user-info">
									<small>مرحباً,</small>
                                {{ Auth::user()->name }}
								</span>

                            <i class="ace-icon fa fa-caret-down"></i>
                    </a>

                    <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">

                        <li class="divider"></li>

                        <li>
                            <a href="{{ route('logout') }}">
                                <i class="ace-icon fa fa-power-off"></i>
                                Logout
                            </a>
                        </li>
                    </ul>
                    @endif
                </li>
            </ul>
        </div>
    </div><!-- /.navbar-container -->
</div>

<div class="main-container ace-save-state" id="main-container">
    <script type="text/javascript">
        try {
            ace.settings.loadState('main-container')
        } catch (e) {
        }
    </script>

    <div id="sidebar" class="sidebar                  responsive                    ace-save-state">
        <script type="text/javascript">
            try {
                ace.settings.loadState('sidebar')
            } catch (e) {
            }
        </script>

        <ul class="nav nav-list">
            <li class="active">
                <a href="{{ url('admin') }}">
                    <i class="menu-icon fa fa-tachometer"></i>
                    <span class="menu-text"> Dashboard </span>
                </a>

                <b class="arrow"></b>
            </li>

            <li class="nav-item start">
                <a href="{{ url('admin/products') }}" class="nav-link">
                    <i class="menu-icon fa fa-cogs"></i>
                    <span class="menu-text"> المنتجات </span>

                </a>
            </li>

            <li class="nav-item start">
                <a href="{{ url('admin/brands') }}" class="nav-link">
                    <i class="menu-icon fa fa-asterisk"></i>
                    <span class="menu-text"> اضف براند </span>

                </a>
            </li>

            <li class="nav-item start">
                <a href="{{ url('admin/categories') }}" class="nav-link">
                    <i class="menu-icon fa fa-th-large"></i>
                    <span class="menu-text"> الكاتجوريز </span>

                </a>
            </li>
            <li class="">
                <a href="{{ url('admin/subsubCategories') }}" class="nav-link ">
                    <i class="menu-icon fa fa-tags"></i>

                    <span class="menu-text">
								اضف كاتجوري فرع الفرع
                    </span>
                </a>
            </li>

        </ul><!-- /.nav-list -->

        <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
            <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state"
               data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
        </div>
    </div>

    <div class="main-content">
        <div class="main-content-inner">
            <div class="breadcrumbs ace-save-state" id="breadcrumbs">
                <ul class="breadcrumb">
                    <li>
                        <i class="ace-icon fa fa-home home-icon"></i>
                        <a href="#">Home</a>
                    </li>
                    <li class="active">Dashboard</li>
                </ul><!-- /.breadcrumb -->
            </div>

            <div class="page-content">
                <div class="ace-settings-container" id="ace-settings-container">
                    <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
                        <i class="ace-icon fa fa-cog bigger-130"></i>
                    </div>

                    <div class="ace-settings-box clearfix" id="ace-settings-box">
                        <div class="pull-left width-50">
                            <div class="ace-settings-item">
                                <div class="pull-left">
                                    <select id="skin-colorpicker" class="hide">
                                        <option data-skin="no-skin" value="#438EB9">#438EB9</option>
                                        <option data-skin="skin-1" value="#222A2D">#222A2D</option>
                                        <option data-skin="skin-2" value="#C6487E">#C6487E</option>
                                        <option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
                                    </select>
                                </div>
                                <span>&nbsp; Choose Skin</span>
                            </div>

                            <div class="ace-settings-item">
                                <input type="checkbox" class="ace ace-checkbox-2 ace-save-state"
                                       id="ace-settings-navbar" autocomplete="off"/>
                                <label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
                            </div>

                            <div class="ace-settings-item">
                                <input type="checkbox" class="ace ace-checkbox-2 ace-save-state"
                                       id="ace-settings-sidebar" autocomplete="off"/>
                                <label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
                            </div>

                            <div class="ace-settings-item">
                                <input type="checkbox" class="ace ace-checkbox-2 ace-save-state"
                                       id="ace-settings-breadcrumbs" autocomplete="off"/>
                                <label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
                            </div>

                            <div class="ace-settings-item">
                                <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl"
                                       autocomplete="off"/>
                                <label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
                            </div>

                            <div class="ace-settings-item">
                                <input type="checkbox" class="ace ace-checkbox-2 ace-save-state"
                                       id="ace-settings-add-container" autocomplete="off"/>
                                <label class="lbl" for="ace-settings-add-container">
                                    Inside
                                    <b>.container</b>
                                </label>
                            </div>
                        </div><!-- /.pull-left -->

                        <div class="pull-left width-50">
                            <div class="ace-settings-item">
                                <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover"
                                       autocomplete="off"/>
                                <label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
                            </div>

                            <div class="ace-settings-item">
                                <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact"
                                       autocomplete="off"/>
                                <label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
                            </div>

                            <div class="ace-settings-item">
                                <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight"
                                       autocomplete="off"/>
                                <label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
                            </div>
                        </div><!-- /.pull-left -->
                    </div><!-- /.ace-settings-box -->
                </div><!-- /.ace-settings-container -->

                <div class="page-header">
                    <h1>
                        Dashboard
                    </h1>
                </div><!-- /.page-header -->

                @yield('content')

            </div><!-- /.page-content -->
        </div>
    </div><!-- /.main-content -->


    <div class="footer">
        <div class="footer-inner">
            <div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder">AtwanGroup</span>
							Application &copy; 2017-2018
						</span>

                &nbsp; &nbsp;
                <span class="action-buttons">
							<a href="#">
								<i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
							</a>

							<a href="#">
								<i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
							</a>

							<a href="#">
								<i class="ace-icon fa fa-rss-square orange bigger-150"></i>
							</a>
						</span>
            </div>
        </div>
    </div>

    <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
        <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
    </a>
</div><!-- /.main-container -->

<!-- basic scripts -->

<script src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>

<script type="text/javascript">
    if ('ontouchstart' in document.documentElement) document.write("<script src='{{ asset('js/jquery.mobile.custom.min.js') }}'>" + "<" + "/script>");
</script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>

<!-- page specific plugin scripts -->
<script src="{{ asset('js/jquery-ui.custom.min.js') }}"></script>
<script src="{{ asset('js/jquery.ui.touch-punch.min.js') }}"></script>
<script src="{{ asset('js/jquery.easypiechart.min.js') }}"></script>
<script src="{{ asset('js/jquery.sparkline.index.min.js') }}"></script>

<!-- ace scripts -->
<script src="{{ asset('js/ace-elements.min.js') }}"></script>
<script src="{{ asset('js/ace.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/slim/slim.jquery.min.js') }}"></script>
<script src="{{ asset('plugins/slim/slim.kickstart.min.js') }}"></script>
@yield('scripts')

</body>
</html>
